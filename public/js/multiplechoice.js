document.addEventListener("DOMContentLoaded", function () {
    const questionElement = document.getElementById("question");
    const reasonElement = document.getElementById("reason");
    const choices = Array.from(document.getElementsByClassName("choice-desc"));
    const progresstext = document.getElementById("progresstext");
    const progbarfull = document.getElementById("progbarfull");
    const scoretext = document.getElementById("scoretext");
    const submitbutton = document.getElementById("submitbutton");
    const nextbutton = document.getElementById("nextbutton");
    const finishbutton = document.getElementById("finishbutton");

    const doubleScoreButton = document.getElementById("doubleScore");
    const freezeTimeButton = document.getElementById("freezeTime");
    const fiftyFiftyButton = document.getElementById("fiftyFifty");

    const backgroundMusic = new Audio("/sounds/background.mp3");
    const correctSound = new Audio("/sounds/clap.mp3");
    const incorrectSound = new Audio("/sounds/boo.mp3");
    const timeoutSound = new Audio("/sounds/timeout.mp3");
    let isMuted = false;
    let soundsEnabled = true;

    let questionCounter = 0;
    let score = 0;
    let currentQuestion = {};
    let hasSubmittedAnswer = false;
    let timer;
    let timeLeft = 60;

    let doubleScoreActive = false;
    let freezeTimeActive = false;
    let fiftyFiftyActive = false;
    let fiftyFiftyUsed = false;

    const CORRECT_BONUS = 10;
    const MAX_QUESTIONS = 10;

    const originalQuestions = questions;
    let shuffledQuestions = [];

    function stopAllSounds() {
        backgroundMusic.pause();
        correctSound.pause();
        incorrectSound.pause();
        timeoutSound.pause();
        backgroundMusic.currentTime = 0;
        correctSound.currentTime = 0;
        incorrectSound.currentTime = 0;
        timeoutSound.currentTime = 0;
    }

    function shuffleQuestions(array) {
        let shuffled = array.slice();
        for (let i = shuffled.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
        }
        return shuffled;
    }

    function startGame() {
        shuffledQuestions = shuffleQuestions(originalQuestions);
        questionCounter = 0;
        score = 0;
        doubleScoreActive = false;
        freezeTimeActive = false;
        fiftyFiftyActive = false;
        fiftyFiftyUsed = false;
        doubleScoreButton.disabled = false;
        freezeTimeButton.disabled = false;
        fiftyFiftyButton.disabled = false;
        doubleScoreButton.classList.remove("used");
        freezeTimeButton.classList.remove("used");
        fiftyFiftyButton.classList.remove("used");
        finishbutton.style.display = "none";

        soundsEnabled = true;
        if (soundsEnabled && !isMuted) {
            backgroundMusic.loop = true;
            backgroundMusic.volume = 0.4;
            backgroundMusic.play();
        }
        getNewQuestion();
    }

    function getNewQuestion() {
        if (questionCounter >= MAX_QUESTIONS) {
            finishbutton.style.display = "block";
            nextbutton.style.display = "none";
            submitbutton.style.display = "none";
            return;
        }

        correctSound.pause();
        incorrectSound.pause();
        backgroundMusic.play();
        backgroundMusic.volume = 0.4;

        currentQuestion = shuffledQuestions[questionCounter];
        questionElement.innerText = currentQuestion.question_text;

        choices.forEach((choice, index) => {
            const choiceData = currentQuestion.choices[index];
            choice.innerText = choiceData.choice_text;
            choice.dataset.isCorrect = choiceData.is_correct;
            choice.parentElement.style.display = "";
            choice.parentElement.classList.remove(
                "selected",
                "correct",
                "incorrect"
            );
            choice.disabled = false;
        });

        fiftyFiftyActive = false;
        if (fiftyFiftyUsed) {
            fiftyFiftyButton.disabled = true;
            fiftyFiftyButton.classList.add("used");
        }

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

        if (soundsEnabled && !isMuted) {
            backgroundMusic.play();
        } else {
            stopAllSounds();
        }
    }

    function playSound(sound) {
        if (soundsEnabled && !isMuted) {
            sound.play();
        }
    }

    function startTimer() {
        timer = setInterval(function () {
            if (timeLeft <= 0) {
                clearInterval(timer);
                if (!hasSubmittedAnswer) {
                    backgroundMusic.pause();
                    playSound(timeoutSound);
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
            nextbutton.style.display = "none";
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
            let currentScore = CORRECT_BONUS;

            if (selectedChoice.dataset.isCorrect === "1") {
                selectedChoice.parentElement.classList.add("correct");
                if (doubleScoreActive) {
                    currentScore *= 2;
                    doubleScoreActive = false;
                }
                score += currentScore;
                playSound(correctSound);
                backgroundMusic.volume = 0.2;
            } else {
                selectedChoice.parentElement.classList.add("incorrect");
                playSound(incorrectSound);
                backgroundMusic.volume = 0.2;
            }

            choices.forEach((c) => {
                if (c.dataset.isCorrect === "1") {
                    c.parentElement.classList.add("correct");
                }
            });

            reasonElement.innerText = currentQuestion.reason;
            reasonElement.classList.add("active");
            scoretext.innerText = `Score: ${score}`;
            submitbutton.style.display = "none";

            revealCorrectAnswer();
        }
    }

    choices.forEach((choice) => {
        choice.addEventListener("click", () => {
            if (hasSubmittedAnswer) return;

            choices.forEach((c) =>
                c.parentElement.classList.remove("selected")
            );
            choice.parentElement.classList.add("selected");
            submitbutton.disabled = false;
        });
    });

    function finishGame() {
        stopAllSounds();
        sessionStorage.setItem("EndScore", score);
        window.location.href = resultUrl;
    }

    submitbutton.addEventListener("click", () => {
        hasSubmittedAnswer = true;
        submitAnswer();
    });

    nextbutton.addEventListener("click", getNewQuestion);

    finishbutton.addEventListener("click", finishGame);

    const muteButton = document.getElementById("muteButton");
    muteButton.addEventListener("click", () => {
        isMuted = !isMuted;
        if (isMuted) {
            muteButton.textContent = "Unmute";
            soundsEnabled = false;
            stopAllSounds();
        } else {
            muteButton.textContent = "Mute";
            soundsEnabled = true;
            if (backgroundMusic.paused) {
                backgroundMusic.play();
            }
        }
    });

    doubleScoreButton.addEventListener("click", () => {
        if (!doubleScoreActive) {
            doubleScoreActive = true;
            doubleScoreButton.disabled = true;
            doubleScoreButton.classList.add("used");
        }
    });

    freezeTimeButton.addEventListener("click", () => {
        if (!freezeTimeActive) {
            freezeTimeActive = true;
            freezeTimeButton.disabled = true;
            freezeTimeButton.classList.add("used");
            clearInterval(timer);
        }
    });

    fiftyFiftyButton.addEventListener("click", () => {
        if (!fiftyFiftyActive && !fiftyFiftyUsed) {
            fiftyFiftyActive = true;
            fiftyFiftyUsed = true;
            fiftyFiftyButton.disabled = true;
            fiftyFiftyButton.classList.add("used");
            applyFiftyFifty();
        }
    });

    function applyFiftyFifty() {
        const correctChoice = choices.find(
            (choice) => choice.dataset.isCorrect === "1"
        );
        if (!correctChoice) return;

        const incorrectChoices = choices.filter(
            (choice) =>
                choice.dataset.isCorrect !== "1" &&
                choice.parentElement.style.display !== "none"
        );
        const choicesToRemove = shuffleQuestions(incorrectChoices).slice(0, 2);

        choicesToRemove.forEach((choice) => {
            choice.parentElement.style.display = "none";
        });
    }

    startGame();
});
