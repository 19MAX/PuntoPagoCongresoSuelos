<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error al Aprobar el Pago</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="alert alert-danger text-center">
            <h4>Error</h4>
            <p>No se pudo aprobar el pago. Por favor, inténtelo de nuevo más tarde.</p>
            <a href="<?= base_url('/') ?>" class="btn btn-primary">Volver al Inicio</a>
        </div>
    </div>
</body>

</html>