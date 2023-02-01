<?php

declare (strict_types=1);
namespace RectorPrefix20220531;

return static function (\Rector\Config\RectorConfig $rectorConfig) : void {
    $rectorConfig->import(__DIR__ . '/../config.php');
    $rectorConfig->ruleWithConfiguration(\Rector\Composer\Rector\ChangePackageVersionComposerRector::class, $composerExtensions);
};