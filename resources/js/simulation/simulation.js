document.addEventListener("DOMContentLoaded", function () {
    const choices = Array.from(document.getElementsByClassName("choice-desc"));
    const submitButton = document.getElementById("submitbutton");
    const navButtons = document.getElementById("nav-buttons");
    const explanationCard = document.getElementById("explanation-card");
    const responseText = document.getElementById("response-text");
    const questionContainer = document.getElementById("questioncontainer");
    const choiceWrapper = document.getElementById("choice-wrapper");
    let selectedChoice = null;

    // Highlight the selected choice
    choices.forEach((choice) => {
        choice.addEventListener("click", function () {
            choices.forEach((c) =>
                c.parentElement.classList.remove("selected")
            );
            this.parentElement.classList.add("selected");
            selectedChoice = this.getAttribute("data-response-type");
        });
    });

    // Handle the submit button click
    submitButton.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent form submission

        if (!selectedChoice) {
            alert("Please select an option!");
            return;
        }

        window.scrollTo(0, 0);

        // Fetch responses from embedded JSON
        const responses = JSON.parse(
            document.getElementById("responses-data").textContent
        );

        let selectedResponse = null;

        // Find the selected response from the JSON
        responses.forEach((response) => {
            if (selectedChoice === response.response_type) {
                selectedResponse = response;
            }
        });

        if (selectedResponse) {
            // Update the explanation card content based on the response
            const isCorrect = selectedResponse.is_correct;
            responseText.innerHTML = isCorrect
                ? `🎉 Congratulations! Your choice was correct. Great job identifying this scenario correctly.`
                : `❌ Your choice was incorrect. Please review the explanation below to better understand this scenario.`;

            // Display the explanation card
            explanationCard.style.display = "block";

            // Hide question and choice sections
            questionContainer.style.display = "none";
            choiceWrapper.style.display = "none";

            // Hide the submit button and show navigation buttons
            submitButton.style.display = "none";
            navButtons.style.display = "block";

            // Show the first popup associated with the choice
            showNextPopup(`${selectedChoice}-1`);
        } else {
            alert("Invalid response selected. Please try again.");
        }
    });

    // Function to display the appropriate popup
    window.showNextPopup = function (popupId) {
        // Hide all popups first
        const popups = document.querySelectorAll(".popup");
        popups.forEach((popup) => (popup.style.display = "none"));

        // Display the targeted popup
        const currentPopup = document.getElementById(`popup${popupId}`);
        if (currentPopup) {
            currentPopup.style.display = "block";
        }
    };
});
