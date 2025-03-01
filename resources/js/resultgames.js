document.addEventListener("DOMContentLoaded", function () {
    const score = sessionStorage.getItem("EndScore") || "Score not found"; // Provide a fallback message
    const descElement = document.getElementById("desc-score");
    const scoreElement = document.getElementById("finalscore");

    if (score === null) {
        scoreElement.innerText = "Score not found";
        descElement.innerText = "";
        return;
    }

    const numericScore = parseInt(score, 10);

    if (isNaN(numericScore)) {
        scoreElement.innerText = "Invalid Score";
        descElement.innerText = "";
        return;
    }

    scoreElement.innerText = numericScore;

    let description = "";
    let color = "";

    if (numericScore >= 90) {
        description = "Excellent! You're a quiz master!";
        color = "green";
    } else if (numericScore >= 70) {
        description = "Good job! You're doing well.";
        color = "blue";
    } else if (numericScore >= 50) {
        description = "Not bad! Keep practicing.";
        color = "orange";
    } else if (numericScore >= 30) {
        description = "You can do better! More practice needed.";
        color = "red";
    } else {
        description = "Better luck next time! Don't give up.";
        color = "gray";
    }

    descElement.innerText = description;
    scoreElement.style.color = color;
});
