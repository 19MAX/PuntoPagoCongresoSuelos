<?= $this->extend('layouts/login_layout'); ?>

<?= $this->section('title') ?>
Login
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-body">
    <div class="auth-wrapper auth-v1 px-2">
        <div class="auth-inner py-2">
            <!-- Login v1 -->
            <div class="card mb-0">
                <div class="card-body">
                    <a href="javascript:void(0);" class="brand-logo">
                        <h2 class="brand-text text-primary ml-1">Iniciar sesión</h2>
                    </a>

                    <h4 class="card-title mb-1 text-center"> </h4>

                    <form class="auth-login-form mt-2" action="" method="POST">
                        <div class="form-group">
                            <label for="login-email" class="form-label">Correo electrónico</label>
                            <input type="text" class="form-control" id="login-email" name="login-email"
                                placeholder="john@example.com" aria-describedby="login-email" tabindex="1" autofocus />
                        </div>

                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <label for="login-password">Contraseña</label>
                                <a href="<?= base_url("forgotPassword") ?>">
                                    <small>Olvido su contraseña?</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="login-password"
                                    name="login-password" tabindex="2"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="login-password" />
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <!-- <input class="custom-control-input" type="checkbox" id="remember-me" tabindex="3" />
                                <label class="custom-control-label" for="remember-me"> Remember Me </label> -->
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block" tabindex="4">Iniciar sesión</button>
                    </form>

                    <p class="text-center mt-2">
                        <span>Nuevo en nuestra plataforma?</span>
                        <a href="<?= base_url("register") ?>">
                            <span>Crear una cuenta</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Login v1 -->
        </div>
    </div>

</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script src="<?=base_url()?>app-assets/js/scripts/pages/page-auth-login.js"></script>
<?= $this->endSection() ?>