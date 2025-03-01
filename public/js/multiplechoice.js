document.addEventListener("DOMContentLoaded", function () {
    // Elements from the DOM identified by ID
    const questionElement = document.getElementById("question");
    const reasonElement = document.getElementById("reason");
    const choices = Array.from(document.getElementsByClassName("choice-desc"));
    const progresstext = document.getElementById("progresstext");
    const progbarfull = document.getElementById("progbarfull");
    const scoretext = document.getElementById("scoretext");
    const submitbutton = document.getElementById("submitbutton");
    const nextbutton = document.getElementById("nextbutton");
    const finishbutton = document.getElementById("finishbutton");

    // Game variables initialization
    let questionCounter = 0;
    let score = 0;
    let currentQuestion = {};
    let hasSubmittedAnswer = false;
    let timer;
    let timeLeft = 60;

    const CORRECT_BONUS = 10;
    const MAX_QUESTIONS = 10;

    // Store original questions and a variable to hold shuffled questions
    const originalQuestions = questions; // This variable now holds the original set of questions
    let shuffledQuestions = []; // This will hold the shuffled set of questions

    function shuffleQuestions(array) {
        let shuffled = array.slice(); // Make a copy of the array to shuffle
        for (let i = shuffled.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]]; // Swap elements
        }
        return shuffled;
    }

    // Starts the game, setting initial values and loading the first question
    function startGame() {
        shuffledQuestions = shuffleQuestions(originalQuestions); // Shuffle the original questions
        questionCounter = 0;
        score = 0;
        getNewQuestion();
    }

    function getNewQuestion() {
        if (questionCounter >= MAX_QUESTIONS) {
            finishbutton.style.display = "block";
            nextbutton.style.display = "none";
            submitbutton.style.display = "none";
            return;
        }

        currentQuestion = shuffledQuestions[questionCounter];
        questionElement.innerText = currentQuestion.question_text;

        choices.forEach((choice, index) => {
            const choiceData = currentQuestion.choices[index];
            choice.innerText = choiceData.choice_text;
            choice.dataset.isCorrect = choiceData.is_correct;
            choice.parentElement.classList.remove(
                "selected",
                "correct",
                "incorrect"
            );
            choice.disabled = false;
        });

        timeLeft = 60;
        progresstext.innerText = `Question ${
            questionCounter + 1
        }/${MAX_QUESTIONS}`;
        progbarfull.style.width = "100%";
        reasonElement.innerText = "";
        reasonElement.classList.remove("active");
        submitbutton.style.display = "block";
        nextbutton.style.display = "none";
        finishbutton.style.display = "none";
        submitbutton.disabled = true;
        hasSubmittedAnswer = false;

        clearInterval(timer);
        startTimer();

        questionCounter++;
    }

    function startTimer() {
        timer = setInterval(function () {
            if (timeLeft <= 0) {
                clearInterval(timer);
                if (!hasSubmittedAnswer) {
                    revealCorrectAnswer();
                }
            } else {
                timeLeft--;
                progbarfull.style.width = `${(timeLeft / 60) * 100}%`;

                if (timeLeft <= 10) {
                    progbarfull.style.backgroundColor = "#ff6f61";
                } else {
                    progbarfull.style.backgroundColor = "#10d38b";
                }
            }
        }, 1000);
    }

    function revealCorrectAnswer() {
        choices.forEach((choice) => {
            choice.parentElement.classList.remove("selected");
            if (choice.dataset.isCorrect == "1") {
                choice.parentElement.classList.add("correct");
            }
            choice.disabled = true;
        });

        reasonElement.innerText = currentQuestion.reason;
        reasonElement.classList.add("active");
        scoretext.innerText = `Score: ${score}`;
        submitbutton.style.display = "none";

        if (questionCounter < MAX_QUESTIONS) {
            nextbutton.style.display = "block";
        } else {
            finishbutton.style.display = "block";
        }
    }

    function submitAnswer() {
        clearInterval(timer);
        choices.forEach((choice) => (choice.disabled = true));

        const selectedChoice = choices.find((c) =>
            c.parentElement.classList.contains("selected")
        );
        if (selectedChoice) {
            hasSubmittedAnswer = true;

            if (selectedChoice.dataset.isCorrect === "1") {
                selectedChoice.parentElement.classList.add("correct");
                score += CORRECT_BONUS;
            } else {
                selectedChoice.parentElement.classList.add("incorrect");
            }

            choices.forEach((c) => {
                if (c.dataset.isCorrect === "1") {
                    c.parentElement.classList.add("correct");
                }
            });
        }

        reasonElement.innerText = currentQuestion.reason;
        reasonElement.classList.add("active");
        scoretext.innerText = `Score: ${score}`;
        submitbutton.style.display = "none";

        if (questionCounter < MAX_QUESTIONS) {
            nextbutton.style.display = "block";
        } else {
            finishbutton.style.display = "block";
        }
    }

    // Event listeners for choice selection and button clicks
    choices.forEach((choice) => {
        choice.addEventListener("click", () => {
            if (hasSubmittedAnswer) return; // Prevent interaction after an answer is submitted

            choices.forEach((c) =>
                c.parentElement.classList.remove("selected")
            );
            choice.parentElement.classList.add("selected");
            submitbutton.disabled = false; // Enable the submit button once a choice is made
        });
    });

    function finishGame() {
        sessionStorage.setItem("EndScore", score);
        window.location.href = resultUrl;
    }

    submitbutton.addEventListener("click", () => {
        hasSubmittedAnswer = true;
        submitAnswer();
    });

    nextbutton.addEventListener("click", getNewQuestion);

    finishbutton.addEventListener("click", finishGame);
    startGame(); // Initialize the game
});
