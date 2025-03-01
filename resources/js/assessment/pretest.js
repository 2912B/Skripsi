document.addEventListener("DOMContentLoaded", function () {
    const questionElement = document.getElementById("question");
    const choices = Array.from(document.getElementsByClassName("choice-desc"));
    const choiceContainers = Array.from(
        document.getElementsByClassName("choice-container")
    );
    const progresstext = document.getElementById("progresstext");
    const submitbutton = document.getElementById("submitbutton");
    const nextbutton = document.getElementById("nextbutton");
    const finishform = document.getElementById("finish-form");
    const finishbutton = document.getElementById("finishbutton");
    const finalScoreInput = document.getElementById("finalScore");
    const scoretext = document.getElementById("scoretext");

    let questionCounter = 0;
    let score = 0;
    let currentQuestion = {};
    let hasSubmittedAnswer = false;

    const CORRECT_BONUS = 10;
    const MAX_QUESTIONS = 10;

    function shuffleQuestions(array) {
        let shuffled = array.slice();
        for (let i = shuffled.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
        }
        return shuffled.slice(0, MAX_QUESTIONS);
    }

    const shuffledQuestions = shuffleQuestions(questions);

    function startGame() {
        questionCounter = 0;
        score = 0;
        getNewQuestion();
    }

    function getNewQuestion() {
        if (questionCounter >= MAX_QUESTIONS) {
            finishform.style.display = "block";
            nextbutton.style.display = "none";
            submitbutton.style.display = "none";
            return;
        }

        currentQuestion = shuffledQuestions[questionCounter];
        questionElement.innerText = currentQuestion.question_text;

        const validChoices = currentQuestion.choices || [];
        choiceContainers.forEach((container, index) => {
            if (validChoices[index]) {
                const choiceData = validChoices[index];
                const choiceElement = container.querySelector(".choice-desc");
                choiceElement.innerText = choiceData.choice_text;
                choiceElement.dataset.isCorrect = choiceData.is_correct;
                container.style.display = "flex";
            } else {
                container.style.display = "none";
            }
            container.classList.remove("selected", "correct", "incorrect");
        });

        progresstext.innerText = `Question ${
            questionCounter + 1
        }/${MAX_QUESTIONS}`;
        submitbutton.style.display = "block";
        nextbutton.style.display = "none";
        finishform.style.display = "none";
        submitbutton.disabled = true;
        hasSubmittedAnswer = false;

        questionCounter++;
    }

    function revealCorrectAnswer() {
        choices.forEach((choice) => {
            choice.parentElement.classList.remove("selected");
            if (choice.dataset.isCorrect == "1") {
                choice.parentElement.classList.add("correct");
            }
            choice.disabled = true;
        });

        submitbutton.style.display = "none";
        scoretext.innerText = `Score: ${score}`;

        if (questionCounter < MAX_QUESTIONS) {
            nextbutton.style.display = "block";
        } else {
            finishform.style.display = "block";
        }
    }

    function submitAnswer() {
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
        }

        revealCorrectAnswer();
    }

    function finishGame() {
        finalScoreInput.value = score;
        finishform.submit();
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

    submitbutton.addEventListener("click", () => {
        hasSubmittedAnswer = true;
        submitAnswer();
    });

    nextbutton.addEventListener("click", getNewQuestion);
    finishbutton.addEventListener("click", finishGame);

    startGame();
});
