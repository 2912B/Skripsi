document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("message-input");
    const messageContainer = document.getElementById("user-message-container");
    const sendButton = document.querySelector(".message-send-btn");
    const dateElement = document.getElementById("current-date");
    dateElement.textContent = getCurrentDateAndTime();

    const autoReplies = [
        `There was a login to your account ending in 3852 from a new device on Jan 8, 2025, at 3:42 PM. If this was you, no action is needed. If not, visit <a href="https://www.bankofamerica.com/securityalerts" class="text-blue-400 underline" target="_blank">https://www.bankofamerica.com/securityalerts</a> or call 1-800-432-1000.`,
        `Your account ending in 3852 was accessed from a new device on Jan 8, 2025, at 3:42 PM. If this activity looks unfamiliar, please verify it at <a href="https://www.bankofamerica.com/securityalerts" class="text-blue-400 underline" target="_blank">https://www.bankofamerica.com/securityalerts</a> or contact 1-800-432-1000.`,
        `A login to your account ending in 3852 was made on Jan 8, 2025, at 3:42 PM from a new device. If you recognize this activity, no action is needed. If not, visit <a href="https://www.bankofamerica.com/securityalerts" class="text-blue-400 underline" target="_blank">https://www.bankofamerica.com/securityalerts</a> or call 1-800-432-1000.`,
        `We noticed a login to your account ending in 3852 on Jan 8, 2025, at 3:42 PM from a device that isn’t recognized. If this was you, ignore this message. If not, secure your account at <a href="https://www.bankofamerica.com/securityalerts" class="text-blue-400 underline" target="_blank">https://www.bankofamerica.com/securityalerts</a> or call 1-800-432-1000.`,
        `Your account ending in 3852 was accessed on Jan 8, 2025, at 3:42 PM from a new device. If you’re unsure about this activity, verify your account at <a href="https://www.bankofamerica.com/securityalerts" class="text-blue-400 underline" target="_blank">https://www.bankofamerica.com/securityalerts</a> or contact 1-800-432-1000.`,
        `A login to your account ending in 3852 was detected from a different device on Jan 8, 2025, at 3:42 PM. If this was not you, secure your account at <a href="https://www.bankofamerica.com/securityalerts" class="text-blue-400 underline" target="_blank">https://www.bankofamerica.com/securityalerts</a> or call 1-800-432-1000.`,
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
