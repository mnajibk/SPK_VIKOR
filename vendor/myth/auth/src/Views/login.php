<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">

        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5 card ">
                <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">

                            <h3 class="juduladmin mb-4 text-center"> <?= lang('Auth.loginTitle') ?></h3>
                        </div>
                    </div>
                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= route_to('login') ?>" method="POST">
                        <?= csrf_field() ?>
                        <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                        <div class="form-group">
                            <div class="icon d-flex align-items-center justify-content-center"
                                data-validate="Username is required"><span class="fa fa-user"></span></div>
                            <input type="text" name="login"
                                class="form-control rounded-left <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                placeholder="<?= lang('Auth.emailOrUsername') ?>" required>
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                        <label for="password"><?= lang('Auth.password') ?></label>
                        <div class="form-group">
                            <div class="icon d-flex align-items-center justify-content-center"
                                data-validate="Password is required"><span class="fa fa-lock"></span></div>
                            <input type="password" name="password"
                                class="form-control rounded-left <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                placeholder="<?= lang('Auth.password') ?>" required>
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center">
                            <div class="w-100">
                                <?php if ($config->allowRemembering) : ?>
                                <label class="checkbox-wrap checkbox-primary mb-0">
                                    <input type="checkbox" name="remember" class="form-check-input"
                                        <?php if (old('remember')) : ?> checked <?php endif ?>>
                                    <?= lang('Auth.rememberMe') ?>
                                    <span class="checkmark"></span>
                                </label>
                                <?php endif; ?>
                            </div>
                            <div class="w-100 d-flex justify-content-end">
                                <button type="submit"
                                    class="btn btn-primary rounded submit"><?= lang('Auth.loginAction') ?></button>
                            </div>
                        </div>
                    </form>
                    <?php if ($config->allowRegistration) : ?>
                    <p><u><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></u></p>
                    <?php endif; ?>
                    <?php if ($config->activeResetter) : ?>
                    <p><u><a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></u></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>