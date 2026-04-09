<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje enviado</title>

    <!-- Bootstrap asset -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    
</head>
<body>

    <div class="container mt-5">
        <div class="card shadow p-4 mx-auto text-center" style="max-width: 700px;">
            <h1 class="mb-4">Mensaje enviado con éxito</h1>

            <p class="lead">
                Gracias <strong>{{ $nombre }}</strong>, recibimos tu mensaje y te responderemos al correo
                <strong>{{ $email }}</strong>.
            </p>
            <p>
                <strong>Tu mensaje fue:</strong><br>
                "{{ $mensaje }}"
            </p>

        </div>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>