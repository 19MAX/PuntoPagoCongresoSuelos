<?= $this->extend('layouts/admin_layout'); ?>

<?= $this->section('title') ?>
Panel
<?= $this->endSection() ?>


<?= $this->section('css') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Panel</h1>
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><i class="fa fa-angle-right"></i> Panel</li>
        </ol>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a href="<?= base_url('admin/inscritos') ?>" class="info-box btn-outline-info">
                    <span class="info-box-icon bg-primary text-white"><i class="fa fa-italic"
                            aria-hidden="true"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text text-black h1">Total de Inscritos</span>
                        <span class="info-box-number"># <?= number_format($totalRegistrations ?? 0) ?></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="" class="info-box  btn-outline-success">
                    <span class="info-box-icon bg-green"><i class="fa fa-usd" aria-hidden="true"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text text-black h1">Ingresos del Día</span>
                        <span class="info-box-number">$<?= number_format($dailyRevenue ?? 0, 2) ?></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-xs-6">
                <a href="" class="info-box  btn-outline-warning">
                    <span class="info-box-icon bg-yellow"><i class="icon-layers"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text text-black h1">Ingresos Totales</span>
                        <span class="info-box-number">$<?= number_format($totalRevenue ?? 0, 2) ?></span>
                    </div>
                </a>
            </div>
            <!-- <div class="col-lg-12 mb-4">
            <h6 class="m-0 p-0 text-black">Mis estadísticas</h6>
            <hr class="bg-primary">
            </div> -->
            <div class="col-lg-6 col-xs-6">
                <a href="" class="info-box  btn-outline-success">
                    <span class="info-box-icon bg-dark"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text text-black h1">Mi Recaudación Total  por Cobros</span>
                        <span class="info-box-number">$<?= number_format($mis_ingresos_totales ?? 0, 2) ?></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-xs-6">
                <a href="" class="info-box btn-outline-success">
                    <span class="info-box-icon bg-dark"><i class="fa fa-address-book-o" aria-hidden="true"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text text-black h1">Mi Recaudación del Día por Cobros</span>
                        <span class="info-box-number">$<?= number_format($mis_ingresos ?? 0, 2) ?></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="info-box">
                    <h5 class="text-black">Ingresos por Usuario (Rol 2)</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Ingresos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($revenueByUser as $user): ?>
                                <tr>
                                    <td><?= $user['first_name'] ?></td>
                                    <td>$<?= number_format($user['user_revenue'] ?? 0, 2) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="info-box">
                    <h5 class="text-black">Registros por Estado de Pago</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Estado</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($registrationsByStatus as $status): ?>
                                <tr>
                                    <td><?= getPaymentStatusText($status['payment_status']) ?></td>
                                    <td><?= $status['count'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>



<?= $this->section('scripts') ?>
<!-- Morris JavaScript -->
<script src="<?= base_url("dist/plugins/raphael/raphael-min.js") ?>"></script>
<script src="<?= base_url("dist/plugins/morris/morris.js") ?>"></script>
<script src="<?= base_url("dist/plugins/functions/dashboard1.js") ?>"></script>
<?= $this->endSection() ?>