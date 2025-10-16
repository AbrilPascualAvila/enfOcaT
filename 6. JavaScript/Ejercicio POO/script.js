const quizData = [
  {question:"¿Cuál fue el primer álbum completo de Stray Kids?",options:["IN生","GO生","MIROH","NOEASY"],answer:"MIROH"},
  {question:"¿Qué canción de Stray Kids tiene un MV que combina cocina y ritmo urbano?",options:["God's Menu","Back Door","Mantra","Hellevator"],answer:"God's Menu"},
  {question:"¿Cuál de estos conceptos describe mejor a Stray Kids?",options:["Powerhouse Performance","Cute Concept","Romantic Ballads","Soft Pop"],answer:"Powerhouse Performance"},
  {question:"¿Qué canción de Stray Kids se lanzó con el mensaje de superación personal y juventud?",options:["MIROH","Back Door","Thunderous","Hellevator"],answer:"MIROH"},
  {question:"¿Qué álbum de Stray Kids contiene la canción 'Back Door'?",options:["NOEASY","GO生","Yellow Wood","IN生"],answer:"NOEASY"},
  {question:"¿Qué EP debutó Katseye en 2024?",options:["SIS (Soft Is Strong)","Beautiful Chaos","Clarity","Eclipse"],answer:"SIS (Soft Is Strong)"},
  {question:"¿Cuál fue el primer sencillo de Katseye?",options:["Debut","Touch","Gnarly","Gabriela"],answer:"Debut"},
  {question:"¿Qué canción de Katseye alcanzó Billboard Hot 100?",options:["Debut","Touch","Gnarly","Gabriela"],answer:"Gnarly"},
  {question:"¿Qué concepto representa mejor a Katseye?",options:["Global Girl Crush","Soft Ballad","Retro K-pop","Acoustic Pop"],answer:"Global Girl Crush"},
  {question:"¿Cuál es el fandom oficial de Katseye?",options:["EYEKONS","STAY","MOA","BLINK"],answer:"EYEKONS"},
  {question:"¿Cuál es el fandom oficial de Stray Kids?",options:["STAY","EYEKONS","ONCE","MOA"],answer:"STAY"},
  {question:"¿Qué álbum de Stray Kids incluye la canción 'Thunderous'?",options:["NOEASY","MIROH","IN生","GO生"],answer:"NOEASY"},
  {question:"¿Qué canción de Katseye tiene un concepto de empoderamiento y actitud?",options:["Debut","Gnarly","Touch","Gabriela"],answer:"Touch"},
  {question:"¿Qué álbum de Stray Kids tiene un concepto de viaje y crecimiento juvenil?",options:["Yellow Wood","IN生","GO生","NOEASY"],answer:"Yellow Wood"},
  {question:"¿Cuál es el segundo EP de Katseye después de su debut?",options:["Clarity","SIS (Soft Is Strong)","Eclipse","Beautiful Chaos"],answer:"Beautiful Chaos"},
  {question:"¿Qué canción de Stray Kids tiene una coreografía icónica con espejos?",options:["Back Door","God's Menu","MIROH","Hellevator"],answer:"MIROH"},
  {question:"¿Cuál es la canción más reciente de Katseye en 2025?",options:["Gabriela","Debut","Gnarly","Touch"],answer:"Gabriela"},
  {question:"¿Qué álbum de Stray Kids fue lanzado en colaboración con un concepto de videojuego?",options:["GO生","NOEASY","MIROH","IN生"],answer:"GO生"},
  {question:"¿Qué canción de Katseye tiene un MV con temática de viaje y exploración?",options:["Touch","Gabriela","Gnarly","Debut"],answer:"Gabriela"},
  {question:"¿Qué canción de Stray Kids mezcla sonidos tradicionales coreanos con EDM?",options:["Thunderous","God's Menu","Back Door","Hellevator"],answer:"Thunderous"}
];

let currentQuestion = 0;
let score = 0;

const questionEl = document.getElementById("question");
const optionsEl = document.getElementById("options");
const nextBtn = document.getElementById("nextBtn");
const scoreEl = document.getElementById("score");
const feedbackEl = document.getElementById("feedback"); // nuevo div para mostrar feedback

function loadQuestion() {
    feedbackEl.textContent = ""; // limpiar feedback
    nextBtn.style.display = "none";
    const q = quizData[currentQuestion];
    questionEl.textContent = `${currentQuestion + 1}. ${q.question}`;
    optionsEl.innerHTML = "";
    q.options.forEach(option => {
        const btn = document.createElement("button");
        btn.classList.add("option-btn");
        btn.textContent = option;
        btn.addEventListener("click", () => selectAnswer(btn, option));
        optionsEl.appendChild(btn);
    });
}

function selectAnswer(btn, selected) {
    const correctAnswer = quizData[currentQuestion].answer;
    
    // Deshabilitar todos los botones
    Array.from(optionsEl.children).forEach(b => b.disabled = true);

    // Marcar el botón seleccionado
    if (selected === correctAnswer) {
        btn.classList.add("correct");
        feedbackEl.textContent = "✅ Correcto";
        score++;
    } else {
        btn.classList.add("incorrect");
        feedbackEl.textContent = `❌ Incorrecto (Correcta: ${correctAnswer})`;
        // marcar también el botón correcto
        Array.from(optionsEl.children).forEach(b => {
            if (b.textContent === correctAnswer) {
                b.classList.add("correct");
            }
        });
    }

    nextBtn.style.display = "inline-block";
}

nextBtn.addEventListener("click", () => {
    currentQuestion++;
    if (currentQuestion < quizData.length) {
        loadQuestion();
    } else {
        showScore();
    }
});

function showScore() {
    document.getElementById("quiz").style.display = "none";
    scoreEl.style.display = "block";
    scoreEl.textContent = `¡Tu puntuación es ${score} de ${quizData.length}!`;
}

loadQuestion();
