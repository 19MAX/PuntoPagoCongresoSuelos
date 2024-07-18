<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// ADMIN
$routes->group('admin', static function ($routes) {

    $routes->get('dashboard', 'Admin\DashboardController::index');

    $routes->group('event', static function ($categories) {
        $categories->get('/', 'Admin\EventsController::index');
        $categories->get('get/(:num)', 'Admin\EventsController::get/$1');
        $categories->get('new', 'Admin\EventsController::new_event');
        $categories->post('add', 'Admin\EventsController::add');
        $categories->post('update', 'Admin\EventsController::update');
        $categories->post('delete', 'Admin\EventsController::delete');
        $categories->get('trash', 'Admin\EventsController::trash');
        $categories->get('get/deleted/(:num)', 'Admin\EventsController::get_deleted/$1');
        $categories->post('trash/restore/', 'Admin\EventsController::restore');
    });

    $routes->group('category', static function ($categories) {
        $categories->get('/', 'Admin\CategoriesController::index');
        $categories->get('get/(:num)', 'Admin\CategoriesController::get/$1');
        $categories->get('new', 'Admin\CategoriesController::new_category');
        $categories->post('add', 'Admin\CategoriesController::add');
        $categories->post('update', 'Admin\CategoriesController::update');
        $categories->post('delete', 'Admin\CategoriesController::delete');
        $categories->get('trash', 'Admin\CategoriesController::trash');
        $categories->get('get/deleted/(:num)', 'Admin\CategoriesController::get_deleted/$1');
        $categories->post('trash/restore/', 'Admin\CategoriesController::restore');
    });
});

$routes->group('punto/pago', static function ($routes) {

    $routes->get('/', 'Payments\DashboardController::index');
    $routes->get('inscripciones/', 'Payments\FiltrosController::index');
    $routes->get('inscripciones/(:num)', 'Payments\InscripcionesController::index/$1');
    $routes->get('inscripciones/(:num)/(:alpha)', 'Payments\InscripcionesController::index/$1/$2');
    $routes->get('pdf/(:hash)', 'Payments\InscripcionesController::showPDF/$1');
    $routes->post('pago/', 'Payments\InscripcionesController::pago');
    $routes->post('aprobar_deposito/', 'Payments\DepositosController::aprobar');
    $routes->post('pago_rechazado/', 'Payments\DepositosController::rechazar');
    $routes->post('pago_incompleto/', 'Payments\DepositosController::pagoIncompleto');
    $routes->post('buscar', 'Payments\FiltrosController::buscarPorCedula');
    $routes->get('depositos/', 'Payments\DepositosController::index');
    $routes->get('deposito/(:num)', 'Admin\DepositosController::index/$1');
    $routes->get('getDatosPgDeposito/(:num)', 'Admin\DepositosController::getDatosPagoDeposito/$1');
    $routes->post('actualizarEstado/', 'Admin\DepositosController::actualizarEstado');
    $routes->get('obtener_depositos/(:num)', 'Admin\DepositosController::obtenerDeposito/$1');
    $routes->post('aprobar/', 'Admin\DepositosController::aprobar_deposito');
    $routes->post('incompleto/', 'Admin\DepositosController::pago_incompleto');
    $routes->post('rechazar/', 'Admin\DepositosController::rechazar');
    $routes->get('verificarDepositoRechazado/(:num)', 'Admin\DepositosController::verificarDepositoRechazado/$1');
    $routes->get('verificarDepositoIncompleto/(:num)', 'Admin\DepositosController::verificarDepositoIncompleto/$1');
});

$routes->post('validar_cedula', 'Client\InscripcionController::validarCedula');
$routes->post('obtener_datos_evento', 'Client\InscripcionController::obtenerDatosEvento');
$routes->post('guardar_inscripcion', 'Client\InscripcionController::guardarInscripcion');
$routes->post('registrar_usuario', 'Client\InscripcionController::registrarUsuario');
$routes->post('deposito', 'Client\DepositosController::deposito');
$routes->post('monto_pago', 'Client\DepositosController::fetchMontoDeposito');

$routes->get('/', 'Client\ClientController::index');
$routes->get('login', 'Auth\LoginController::index');
$routes->get('logout', 'Auth\LoginController::logout');
$routes->post('validate_login', 'Auth\LoginController::login');
$routes->get('forgotPassword', 'Auth\LoginController::forgotPassword');
$routes->get('register', 'Auth\LoginController::register');
