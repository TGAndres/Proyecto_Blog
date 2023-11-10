<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mi Blog</title>
    <link rel="stylesheet" type = "text/css" href="{{ url('/css/styles.css')}}">
	<link rel="stylesheet" type = "text/css" href="{{ url('/css/media_queries.css')}}">
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

    <main class="blogs-main">
        <section class="blogs-news-container">
            <div class="grid-container blogs-main-new">
                <h3>Recent</h3>
                <div class="blogs-news-img-container">
                    <img src="/img/two.png" alt="" />
                </div>
                <div class="blogs-news-info-container">
                    <h2>Titulo del Blogpost</h2>
                    <p>
                        Texto de intro. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Vitae ut natus voluptatum sint voluptatem, libero porro
                        ratione. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Vitae ut natus voluptatum sint voluptatem, libero porro ratione
                    </p>
                    <a href="blog.html" class="blogs-button">Leer más</a>
                    <p></p>
                    <section class="post-card">
                        <button class="like-button">Like</button>
                        <button class="comment-button">Comentar</button>
                    </section>
                </div>
            </div>
        </section>
        <section class="blogs-post-container">
            <div class="grid-container">
                <h3 class="blogs-post-titulo-post">Último Blogpost</h3>
                @foreach($posts as $post)
                    <article class="post-container">
                        <img src="/img/three.png" alt="" />
                        <h3>Titulo del Blogpost</h3>
                        <p>
                            Texto de intro. Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Vitae ut natus voluptatum sint voluptatem, libero porro
                            ratione. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Vitae ut natus voluptatum sint voluptatem, libero porro ratione
                        </p>
                        <a href="blog.html" class="blogs-button">Leer más</a>
                        <p></p>
                        <section class="post-card">
                            <button class="like-button">Like</button>
                            <button class="comment-button">Comentar</button>
                        </section>
                    </article>
            
                @endforeach
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Mi Blog</p>
    </footer>
</body>

</html>