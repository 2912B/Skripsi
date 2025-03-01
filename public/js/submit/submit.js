document.addEventListener("DOMContentLoaded", function () {
    const gameSelect = document.getElementById("game-select");
    gameSelect.addEventListener("change", updateCategories);

    function updateCategories() {
        const categories = {
            trivia: ["Cyber Threat", "Security Best Practices", "Data Privacy"],
            true_false: ["Password Security", "Social Engineering", "Phishing"],
            best_scenario: [
                "Incident Response",
                "Device Security",
                "Workplace Security",
            ],
        };

        const categorySelect = document.getElementById("category-select");
        const selectedGame = gameSelect.value;

        // Clear existing options
        categorySelect.innerHTML =
            '<option value="">--Please choose a category--</option>';

        // Populate new options if the game has categories
        if (categories[selectedGame]) {
            categories[selectedGame].forEach((category) => {
                const option = document.createElement("option");
                option.value = category.toLowerCase();
                option.textContent = category;
                categorySelect.appendChild(option);
            });
        }
    }
});
