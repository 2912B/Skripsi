document.addEventListener("DOMContentLoaded", function () {
    const score = sessionStorage.getItem("EndScore") || "Score not found"; // Provide a fallback message
    document.getElementById("finalscore").innerText = score;
});
