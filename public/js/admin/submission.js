document.addEventListener("DOMContentLoaded", () => {
    const feedbackButtons = document.querySelectorAll(".feedback-button");
    const feedbackModal = document.getElementById("feedback-modal");
    const closeModalButton = document.getElementById("close-modal-button");
    const feedbackForm = document.getElementById("feedback-form");
    const feedbackTextarea = document.getElementById("feedback-text");
    const submissionIdInput = document.getElementById("submission-id-input");
    const acceptButton = document.querySelector(".accept-button");
    const rejectButton = document.querySelector(".reject-button");

    feedbackButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const submissionId = button.dataset.submissionId;
            submissionIdInput.value = submissionId;
            feedbackForm.action = `/admin/submissions/${submissionId}`;
            feedbackModal.style.display = "block";
            feedbackTextarea.value = "";

            const card = document.querySelector(
                `.submission-card[data-submission-id="${submissionId}"]`
            );
            const status = card
                .querySelector(".submission-status")
                .textContent.replace("Status: ", "");
            const feedbackText = card
                .querySelector(".submission-feedback")
                .textContent.replace("Feedback: ", "");

            if (
                status === "Accepted" ||
                status === "Rejected" ||
                feedbackText !== "N/A"
            ) {
                button.style.display = "none";
            }
        });
    });

    closeModalButton.addEventListener("click", () => {
        feedbackModal.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target == feedbackModal) {
            feedbackModal.style.display = "none";
        }
    });

    acceptButton.addEventListener("click", (event) => {
        event.preventDefault();
        handleFeedbackSubmission(1);
    });

    rejectButton.addEventListener("click", (event) => {
        event.preventDefault();
        handleFeedbackSubmission(0);
    });

    function updateSubmissionCard(submissionId, isAccepted, feedback) {
        const card = document.querySelector(
            `.submission-card[data-submission-id="${submissionId}"]`
        );
        if (card) {
            const statusElement = card.querySelector(".submission-status");
            const reviewedAtElement = card.querySelector(
                ".submission-reviewed-at"
            );
            const feedbackElement = card.querySelector(".submission-feedback");
            const feedbackButton = card.querySelector(".feedback-button");

            statusElement.textContent = `Status: ${
                isAccepted === 1
                    ? "Accepted"
                    : isAccepted === 0
                    ? "Rejected"
                    : "Pending"
            }`;
            reviewedAtElement.textContent = `Reviewed At: ${new Date().toLocaleString()}`;
            feedbackElement.textContent = `Feedback: ${feedback}`;

            if (isAccepted !== null || feedback) {
                feedbackButton.style.display = "none";
            }
        }
    }

    function handleFeedbackSubmission(isAccepted) {
        if (validateFeedback()) {
            const form = document.getElementById("feedback-form");
            form.method = "PUT";

            const feedback = document.getElementById("feedback-text").value;

            const data = {
                feedback: feedback,
                is_accepted: isAccepted,
            };

            fetch(form.action, {
                method: "PUT",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                },
                body: JSON.stringify(data),
            })
                .then((response) => {
                    if (!response.ok) {
                        return response.text().then((text) => {
                            throw new Error(text || response.statusText);
                        });
                    }
                    return response.json();
                })
                .then((data) => {
                    feedbackModal.style.display = "none";
                    Swal.fire(
                        "Success",
                        data.message || "Feedback updated successfully!",
                        "success"
                    ).then(() => {
                        updateSubmissionCard(
                            data.submission_id,
                            isAccepted,
                            data.feedback
                        );
                        window.location.href = window.location.href;
                    });
                })
                .catch((error) => {
                    console.error("Fetch Error:", error);
                    Swal.fire(
                        "Error",
                        error.message || "An error occurred.",
                        "error"
                    );
                });
        }
    }

    function validateFeedback() {
        const feedbackTextarea = document.getElementById("feedback-text");
        const feedback = feedbackTextarea.value;

        if (feedback.trim() === "") {
            Swal.fire("Error", "Feedback cannot be empty.", "error");
            return false;
        }
        return true;
    }
});
