<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nuevo Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type = "text/css" href="{{ url('/css/styles.css')}}">
	<link rel="stylesheet" type = "text/css" href="{{ url('/css/media_queries.css')}}">
    <style>
        body {
        background-color: #f8f9fa;
        }
        .post-container {
        max-width: 800px;
        margin: 50px auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
    </head>
    <body>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li><a href="{{ route('categorias') }}">Categorias</a></li>
                <li><a href="{{ route('verPublis') }}">Posts</a></li>
                <li><a href="{{ route('postear') }}">Make Post</a></li>
            </ul>
        </nav>
    </header>

    <div class="container post-container">
        <h1>Nuevo Post</h1>

        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>

        <div class="form-group">
            <label for="titulo">Categoria:</label>
            <input type="text" class="form-control" id="categoria" name="categoria" required>
        </div>

        <div class="form-group">
            <label for="contenido">Contenido:</label>
            <textarea class="form-control" id="contenido" name="contenido" rows="6" required></textarea>
        </div>

        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Publicar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <footer>
        <p>&copy; 2023 Mi Blog</p>
    </footer>
    
    </body>
</html>
