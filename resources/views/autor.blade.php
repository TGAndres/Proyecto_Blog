<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Perfil del Autor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type = "text/css" href="{{ url('/css/styles.css')}}">
	<link rel="stylesheet" type = "text/css" href="{{ url('/css/media_queries.css')}}">
    <style>
        body {
        background-color: #f8f9fa;
        }
        .profile-container {
        max-width: 600px;
        margin: 50px auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-image {
        max-width: 100%;
        height: auto;
        border-radius: 50%;
        }
    </style>
    </head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li><a href="{{ route('categorias') }}">Categorias</a></li>
                <li><a href="{{ route('postear') }}">Make Post</a></li>
            </ul>
        </nav>
    </header>
    <div class="container profile-container">
        <div class="text-center">
        <img src="ruta/a/tu/foto.jpg" alt="Foto de perfil" class="profile-image">
        <h1>Nombre del Autor</h1>
        <p class="lead">Descripción corta del autor</p>
        </div>

        <hr>

        <div>
        <h2>Sobre Mí</h2>
        <p>Texto descriptivo sobre el autor y su experiencia en el campo.</p>
        </div>

        <hr>

        <div>
        <h2>Redes Sociales</h2>
        <p>
            <a href="https://twitter.com/tuusuario" target="_blank">Twitter</a> |
            <a href="https://linkedin.com/in/tuperfil" target="_blank">LinkedIn</a> |
            <a href="https://github.com/tuusuario" target="_blank">GitHub</a>
        </p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <footer>
        <p>&copy; 2023 Mi Blog</p>
    </footer>
    </body>
    </html>
