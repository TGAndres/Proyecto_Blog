<!DOCTYPE html>
<html>
<head>
    <title>Carousel/Slideshow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type = "text/css" href="{{ url('/css/styles.css')}}">
	<link rel="stylesheet" type = "text/css" href="{{ url('/css/media_queries.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
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
    <br>
    <div id="theCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicadores -->
    <ol class="carousel-indicators">
        <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#theCarousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img src="/img/three.png" alt="Ilustracion">
        <div class="carousel-caption d-none d-md-block">
            <h3>Destinos Turísticos</h3>
            <p>Tips</p>
        </div>
        </div>

        <div class="item">
        <img src="/img/seven.png" alt="diseno">
        <div class="carousel-caption d-none d-md-block">
            <h3>Comida</h3>
            <p>Mejores restaurantes</p>
        </div>
        </div>
    </div>

    <a class="left carousel-control" href="#theCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">anterior</span>
    </a>
    <a class="right carousel-control" href="#theCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">siguiente</span>
    </a>
    </div>
</div>

</body>
</html>
