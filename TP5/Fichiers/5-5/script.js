const jokeButton = document.getElementById("getJoke");
const jokeText = document.getElementById("joke");

jokeButton.addEventListener("click", () => {
    fetch("https://official-joke-api.appspot.com/random_joke")
        .then(response => response.json())
        .then(data => {
            jokeText.textContent = `${data.setup} - ${data.punchline}`;
        })
        .catch(error => {
            jokeText.textContent = "Erreur lors du chargement de la blague.";
        });
});