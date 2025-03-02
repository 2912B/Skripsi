document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("message-input");
    const messageContainer = document.getElementById("user-message-container");
    const sendButton = document.querySelector(".message-send-btn");
    const dateElement = document.getElementById("current-date");
    dateElement.textContent = getCurrentDateAndTime();

    const autoReplies = [
        `Your account has been suspended due to billing failure. Please verify your payment details to restore access: <a href="https://netflix-billing-check.com" class="text-blue-400 underline" target="_blank">https://netflix-billing-check.com</a>.`,
        `We encountered an issue with your billing information. Please update your details to continue using our services: <a href="https://netflix-billing-check.com" class="text-blue-400 underline" target="_blank">https://netflix-billing-check.com</a>.`,
        `Your subscription has been paused due to a failed payment. Reactivate your account here: <a href="https://netflix-billing-check.com" class="text-blue-400 underline" target="_blank">https://netflix-billing-check.com</a>.`,
        `Unable to process your recent payment. Please verify your payment method to avoid service interruption: <a href="https://netflix-billing-check.com" class="text-blue-400 underline" target="_blank">https://netflix-billing-check.com</a>.`,
        `Action required: Update your payment information to avoid cancellation of your subscription: <a href="https://netflix-billing-check.com" class="text-blue-400 underline" target="_blank">https://netflix-billing-check.com</a>.`,
        `Your payment was declined. Verify your billing details to prevent account suspension: <a href="https://netflix-billing-check.com" class="text-blue-400 underline" target="_blank">https://netflix-billing-check.com</a>.`,
    ];

    function escapeHTML(input) {
        const div = document.createElement("div");
        div.innerText = input;
        return div.innerHTML;
    }

    function addMessageBubble(text, isUserMessage = true) {
        const messageBubble = document.createElement("div");
        messageBubble.classList.add(
            isUserMessage ? "user-message" : "auto-reply-message"
        );
        messageBubble.innerHTML = isUserMessage ? escapeHTML(text) : text;
        messageContainer.appendChild(messageBubble);
        messageContainer.scrollTop = messageContainer.scrollHeight;
    }

    function handleSendMessage() {
        const message = input.value.trim();
        if (message !== "") {
            addMessageBubble(message);

            input.value = "";

            setTimeout(() => {
                const randomReply =
                    autoReplies[Math.floor(Math.random() * autoReplies.length)];
                addMessageBubble(randomReply, false);
            }, 1000);
        }
    }

    sendButton.addEventListener("click", handleSendMessage);

    input.addEventListener("keydown", function (e) {
        if (e.key === "Enter") {
            e.preventDefault();
            handleSendMessage();
        }
    });
});

function getCurrentDateAndTime() {
    const today = new Date();

    const options = { weekday: "long", month: "long", day: "numeric" };
    const dateString = today.toLocaleDateString("en-US", options);

    let hours = today.getHours();
    const minutes = today.getMinutes().toString().padStart(2, "0");
    const ampm = hours >= 12 ? "PM" : "AM";
    hours = hours % 12 || 12;

    const timeString = `${hours}:${minutes} ${ampm}`;

    return `${dateString}, ${timeString}`;
}
