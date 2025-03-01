document.addEventListener("DOMContentLoaded", function () {
    const gameSelect = document.getElementById("game");
    const categorySelect = document.getElementById("category");

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

        const selectedGame = gameSelect.value;

        categorySelect.innerHTML =
            '<option value="">--Please choose a category--</option>';

        if (categories[selectedGame]) {
            categories[selectedGame].forEach((category) => {
                const option = document.createElement("option");
                option.value = category.toLowerCase();
                option.text = category;
                categorySelect.appendChild(option);
            });
        }
    }
});
