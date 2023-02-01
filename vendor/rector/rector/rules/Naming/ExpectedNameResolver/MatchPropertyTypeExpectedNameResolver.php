<?php

declare (strict_types=1);
namespace Rector\Naming\ExpectedNameResolver;

use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\Property;
use PHPStan\Reflection\ClassReflection;
use Rector\BetterPhpDocParser\PhpDocInfo\PhpDocInfoFactory;
use Rector\Core\NodeManipulator\PropertyManipulator;
use Rector\Core\PhpParser\Node\BetterNodeFinder;
use Rector\Core\Reflection\ReflectionResolver;
use Rector\Naming\Naming\PropertyNaming;
use Rector\Naming\ValueObject\ExpectedName;
use Rector\NodeNameResolver\NodeNameResolver;
final class MatchPropertyTypeExpectedNameResolver
{
    /**
     * @readonly
     * @var \Rector\Naming\Naming\PropertyNaming
     */
    private $propertyNaming;
    /**
     * @readonly
     * @var \Rector\BetterPhpDocParser\PhpDocInfo\PhpDocInfoFactory
     */
    private $phpDocInfoFactory;
    /**
     * @readonly
     * @var \Rector\NodeNameResolver\NodeNameResolver
     */
    private $nodeNameResolver;
    /**
     * @readonly
     * @var \Rector\Core\PhpParser\Node\BetterNodeFinder
     */
    private $betterNodeFinder;
    /**
     * @readonly
     * @var \Rector\Core\NodeManipulator\PropertyManipulator
     */
    private $propertyManipulator;
    /**
     * @readonly
     * @var \Rector\Core\Reflection\ReflectionResolver
     */
    private $reflectionResolver;
    public function __construct(\Rector\Naming\Naming\PropertyNaming $propertyNaming, \Rector\BetterPhpDocParser\PhpDocInfo\PhpDocInfoFactory $phpDocInfoFactory, \Rector\NodeNameResolver\NodeNameResolver $nodeNameResolver, \Rector\Core\PhpParser\Node\BetterNodeFinder $betterNodeFinder, \Rector\Core\NodeManipulator\PropertyManipulator $propertyManipulator, \Rector\Core\Reflection\ReflectionResolver $reflectionResolver)
    {
        $this->propertyNaming = $propertyNaming;
        $this->phpDocInfoFactory = $phpDocInfoFactory;
        $this->nodeNameResolver = $nodeNameResolver;
        $this->betterNodeFinder = $betterNodeFinder;
        $this->propertyManipulator = $propertyManipulator;
        $this->reflectionResolver = $reflectionResolver;
    }
    public function resolve(\PhpParser\Node\Stmt\Property $property) : ?string
    {
        $class = $this->betterNodeFinder->findParentType($property, \PhpParser\Node\Stmt\Class_::class);
        if (!$class instanceof \PhpParser\Node\Stmt\Class_) {
            return null;
        }
        $classReflection = $this->reflectionResolver->resolveClassReflection($property);
        if (!$classReflection instanceof \PHPStan\Reflection\ClassReflection) {
            return null;
        }
        $propertyName = $this->nodeNameResolver->getName($property);
        if ($this->propertyManipulator->isUsedByTrait($classReflection, $propertyName)) {
            return null;
        }
        $phpDocInfo = $this->phpDocInfoFactory->createFromNodeOrEmpty($property);
        $expectedName = $this->propertyNaming->getExpectedNameFromType($phpDocInfo->getVarType());
        if (!$expectedName instanceof \Rector\Naming\ValueObject\ExpectedName) {
            return null;
        }
        // skip if already has suffix
        $currentName = $this->nodeNameResolver->getName($property);
        if ($this->nodeNameResolver->endsWith($currentName, $expectedName->getName())) {
            return null;
        }
        return $expectedName->getName();
    }
}
