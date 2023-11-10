// Supongamos que tienes un array de publicaciones en formato JSON
const publicaciones = [
    {
        titulo: "Mi primer viaje",
        contenido: "¡Acabo de regresar de mi primer viaje! Fue increíble...",
    },
    {
        titulo: "Explorando una nueva ciudad",
        contenido: "Hoy exploré una ciudad desconocida y descubrí...",
    },
    // Agrega más publicaciones aquí
];

const main = document.querySelector(".home-main");

publicaciones.forEach((publicacion, index) => {
    const postCard = document.createElement("section");
    postCard.classList.add("post-card");

    const title = document.createElement("h2");
    title.textContent = publicacion.titulo;

    const content = document.createElement("p");
    content.textContent = publicacion.contenido;

    const likeButton = document.createElement("button");
    likeButton.textContent = "Like";
    likeButton.addEventListener("click", () => {
        // Lógica para manejar "Me gusta"
    });

    const commentButton = document.createElement("button");
    commentButton.textContent = "Comentar";
    commentButton.addEventListener("click", () => {
        // Lógica para comentarios
    });

    postCard.appendChild(title);
    postCard.appendChild(content);
    postCard.appendChild(likeButton);
    postCard.appendChild(commentButton);

    main.appendChild(postCard);
});