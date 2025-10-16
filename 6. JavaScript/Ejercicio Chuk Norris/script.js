const jokeText = document.getElementById('joke');
const nextBtn = document.getElementById('next');

async function getJoke() {
    try {
    const response = await fetch('https://api.chucknorris.io/jokes/random');
    const data = await response.json();
    jokeText.textContent = data.value;
    } catch (error) {
    jokeText.textContent = 'Error al cargar el chiste 🤕';
    }
}

nextBtn.addEventListener('click', getJoke);
getJoke(); // Cargar uno al inicio