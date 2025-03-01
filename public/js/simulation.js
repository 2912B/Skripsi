document.addEventListener("DOMContentLoaded", function () {
    const choices = Array.from(document.getElementsByClassName("choice-desc"));
    const submitButton = document.getElementById("submitbutton");
    const choiceInput = document.getElementById("choice");
    let selectedChoice = null;

    // Highlight the selected choice
    choices.forEach((choice) => {
        choice.addEventListener("click", function () {
            choices.forEach((c) =>
                c.parentElement.classList.remove("selected")
            );
            this.parentElement.classList.add("selected");
            selectedChoice = this.getAttribute("data-response-type"); // "legitimate" or "phishing"
        });
    });

    submitButton.addEventListener("click", function () {
        if (!selectedChoice) {
            alert("Please select an option!");
            return;
        }

        choiceInput.value = selectedChoice; // Set the selected response type in the hidden input
        document.getElementById("simulation-form").submit(); // Submit the form
    });
});
