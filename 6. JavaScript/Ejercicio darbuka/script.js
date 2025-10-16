// Mapea cada tecla con un sonido
const sounds = {
    w: new Audio('./sounds/Darbuka_06_76_SP.mp3'),
    a: new Audio('./sounds/Darbuka_18_76_SP.mp3'),
    s: new Audio('./sounds/Darbuka_42_76_SP.mp3'),
    d: new Audio('./sounds/Darbuka_66_76_SP.mp3'),
    e: new Audio('./sounds/Darbuka_105_76_SP.mp3'),
};

// Función para reproducir sonido
function playSound(key) {
    const sound = sounds[key];
    if (sound) {
    sound.currentTime = 0;
    sound.play();
    const btn = document.getElementById(key);
    btn.style.backgroundColor = 'gold';
    setTimeout(() => btn.style.backgroundColor = 'rgba(0,0,0,0.6)', 150);
    }
}

// Clic en botones
document.querySelectorAll('.btn').forEach(button => {
    button.addEventListener('click', () => playSound(button.id));
});

// Teclas del teclado
document.addEventListener('keydown', e => {
    playSound(e.key.toLowerCase());
});