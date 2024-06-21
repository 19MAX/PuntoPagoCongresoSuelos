<?php
if (!function_exists('get_payment_status_class')) {
    function get_payment_status_class($estado_pago) {
        switch (strtolower($estado_pago)) {
            case 'completado':
                return 'label label-success';
            case 'pendiente':
                return 'label label-warning';
            case 'rechazado':
                return 'label label-danger';
            default:
                return 'label label-default';
        }
    }
}
?>