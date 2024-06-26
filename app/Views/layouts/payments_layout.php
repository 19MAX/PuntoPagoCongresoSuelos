<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $this->renderSection('title'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <!-- v4.0.0-alpha.6 -->
    <link rel="stylesheet" href="<?= base_url("dist/bootstrap/css/bootstrap.min.css") ?>">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url("dist/css/style.css") ?>">
    <link rel="stylesheet" href="<?= base_url("dist/css/font-awesome/css/font-awesome.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("dist/css/et-line-font/et-line-font.css") ?>">
    <link rel="stylesheet" href="<?= base_url("dist/css/themify-icons/themify-icons.css") ?>">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
    <!-- DataTables responsivo -->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.bootstrap5.css">
    <!-- Botones de DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">

    <!-- Notificaciones -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <link rel="stylesheet" href="<?= base_url("assets/css/rounded.css") ?>">
    <?= $this->renderSection('css'); ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999;
            /* Valor muy alto para asegurar que esté por encima de todo */
        }

        .loader {
            width: 50px;
            height: 50px;
            border: 5px solid #3498db;
            border-top: 5px solid transparent;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        .loader-text {
            position: absolute;
            top: 60%;
            font-size: 18px;
            color: #3498db;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div id="preloader">
        <div class="loader"></div>
        <div class="loader-text">Cargando...</div>
    </div>
    <div class="wrapper boxed-wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="index.html" class="logo blue-bg">
                <span class="logo-mini"><img src="<?= base_url("assets/images/payments/logo-p.png") ?>" alt=""></span>
                <span class="logo-lg"><img src="<?= base_url("assets/images/payments/logo.png") ?>" alt=""></span> </a>
            <nav class="navbar blue-bg navbar-static-top">
                <!-- Sidebar toggle button-->
                <ul class="nav navbar-nav pull-left">
                    <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
                </ul>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle"
                                data-toggle="dropdown"><span class="hidden-xs">Alexander
                                    Pierce</span> </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-profile-male"></i> Mi perfil</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="icon-gears"></i>Configuración</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?= base_url("logout") ?>"><i class="fa fa-power-off"></i>Cerrar Sesión</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <div class="sidebar">

                <!-- <div class="user-panel">
                    <h1 class="mb-3">Saldo</h1>
                    <div class="image text-center mb-3">
                        <img src="dist/img/img1.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="info mb-3">
                        <p>Alexander Pierce</p>
                        <a href="#"><i class="fa fa-cog"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                        <a href="#"><i class="fa fa-power-off"></i></a>
                    </div>
                </div> -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">PERSONAL</li>
                    <li class="treeview"> <a href="#"> <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class=""><a href="<?= base_url("punto/pago") ?>">Dashboard</a></li>
                        </ul>
                    </li>
                    <li> <a href="<?= base_url("/punto/pago/inscripciones") ?>"> <i class="fa fa-university"></i>
                            <span>Inscripciones</span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <li> <a href="<?= base_url("/punto/pago/depositos") ?>">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                            <span>Depósitos</span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <?= $this->renderSection('content'); ?>
        <!-- /.content-wrapper -->
        <!-- <footer class="main-footer">
            <div class="pull-right hidden-xs">Version 1.2</div>
            Copyright © 2017 Yourdomian. All rights reserved.
        </footer> -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- v4.0.0-alpha.6 -->

    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- template -->
    <script src="<?= base_url("dist/js/niche.js") ?>"></script>
    <script src="<?= base_url("dist/bootstrap/js/bootstrap.min.js") ?>"></script>


    <!-- DataTables JS-->
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>


    <!-- DataTables Bootstrap -->
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>

    <!-- DataTables responsive -->
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.bootstrap5.js"></script>
    <!-- Botones de DataTables JS-->
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>

    <!-- Exportar a PDF, Excel y CSV -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!-- <script src="<?= base_url('assets/js/flashMessages.js') ?>"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var base_url = "<?= base_url() ?>"
        var current_url = "<?= uri_string() ?>";
    </script>

    <script>
        function showAlert(type, message, uniqueCode = null) {
            if (type === 'success') {
                let html = `<div>${message}</div>`;
                if (uniqueCode) {
                    html += `<div class="mt-3"><a class="btn btn-outline-danger" href="${base_url}punto/pago/pdf/${uniqueCode}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Ver PDF</a></div>`;
                }
                Swal.fire({
                    title: "<strong>¡Éxito!</strong>",
                    icon: "success",
                    html: html,
                    showCloseButton: true,
                    showCancelButton: false,
                    focusConfirm: false,
                    confirmButtonText: `<i class="fa fa-thumbs-up"></i> ¡Genial!`,
                    confirmButtonAriaLabel: "Thumbs up, great!",
                });
            } else {
                Swal.fire({
                    icon: type,
                    title: message,
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                });
            }
        }

        // Verificar si hay mensajes de éxito, advertencia o error
        <?php if (session()->has('flashMessages')): ?>
            <?php foreach (session('flashMessages') as $message): ?>
                <?php
                $type = $message[1];
                $msg = $message[0];
                $uniqueCode = isset($message[2]) ? $message[2] : null;
                ?>
                showAlert('<?= $type ?>', '<?= $msg ?>', '<?= $uniqueCode ?>');
            <?php endforeach; ?>
        <?php endif; ?>
    </script>
    <script>
        // Asegurarse de que el preloader se muestre inmediatamente
        document.getElementById('preloader').style.display = 'flex';

        // Función para ocultar el preloader
        function hidePreloader() {
            document.getElementById('preloader').style.display = 'none';
        }

        // Esperar a que la página se cargue completamente
        window.addEventListener('load', hidePreloader);

        // Fallback por si el evento 'load' no se dispara correctamente
        setTimeout(hidePreloader, 5000); // 5 segundos como máximo
    </script>

    <?= $this->renderSection('scripts'); ?>
</body>

</html>