document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("message-input");
    const messageContainer = document.getElementById("user-message-container");
    const sendButton = document.querySelector(".message-send-btn");
    const dateElement = document.getElementById("current-date");
    dateElement.textContent = getCurrentDateAndTime();

    const autoReplies = [
        `Amazon: Congratulations! You've won a $500 gift card! Claim your prize now at <a href="https://amazon-rewards-win.com" class="text-blue-400 underline" target="_blank">https://amazon-rewards-win.com</a>.`,
        `You've been selected to receive a $500 Amazon gift card! Redeem your reward here: <a href="https://amazon-rewards-win.com" class="text-blue-400 underline" target="_blank">https://amazon-rewards-win.com</a>.`,
        `Congratulations! You are eligible to win a $500 Amazon gift card. Claim it now at: <a href="https://amazon-rewards-win.com" class="text-blue-400 underline" target="_blank">https://amazon-rewards-win.com</a>.`,
        `Exciting news! A $500 Amazon gift card is waiting for you. Claim your prize here: <a href="https://amazon-rewards-win.com" class="text-blue-400 underline" target="_blank">https://amazon-rewards-win.com</a>.`,
        `You’ve won an exclusive $500 Amazon gift card! Don’t miss out—claim your reward today at: <a href="https://amazon-rewards-win.com" class="text-blue-400 underline" target="_blank">https://amazon-rewards-win.com</a>.`,
        `Limited offer! A $500 Amazon gift card is reserved for you. Claim it now at: <a href="https://amazon-rewards-win.com" class="text-blue-400 underline" target="_blank">https://amazon-rewards-win.com</a>.`,
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
