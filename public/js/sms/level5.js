document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("message-input");
    const messageContainer = document.getElementById("user-message-container");
    const sendButton = document.querySelector(".message-send-btn");
    const dateElement = document.getElementById("current-date");
    dateElement.textContent = getCurrentDateAndTime();

    const autoReplies = [
        `Your 2023 tax return refund of $1,200.00 has been processed. Expected deposit date: Jan 15, 2025. Track the status of your refund at <a href="https://www.irs.gov/refunds" class="text-blue-400 underline" target="_blank">https://www.irs.gov/refunds</a>.`,
        `The refund for your 2023 tax return, totaling $1,200.00, has been processed. You can expect the deposit on Jan 15, 2025. For more information, visit <a href="https://www.irs.gov/refunds" class="text-blue-400 underline" target="_blank">https://www.irs.gov/refunds</a>.`,
        `Your refund of $1,200.00 for your 2023 tax return has been processed and is scheduled for deposit on Jan 15, 2025. Track your refund at <a href="https://www.irs.gov/refunds" class="text-blue-400 underline" target="_blank">https://www.irs.gov/refunds</a>.`,
        `We’ve processed your 2023 tax refund of $1,200.00. The deposit is expected on Jan 15, 2025. To check your refund status, visit <a href="https://www.irs.gov/refunds" class="text-blue-400 underline" target="_blank">https://www.irs.gov/refunds</a>.`,
        `Your tax refund of $1,200.00 for 2023 has been processed. It is expected to be deposited by Jan 15, 2025. Track your refund at <a href="https://www.irs.gov/refunds" class="text-blue-400 underline" target="_blank">https://www.irs.gov/refunds</a>.`,
        `The refund for your 2023 tax return, amounting to $1,200.00, has been processed. Deposit is expected by Jan 15, 2025. Check the status at <a href="https://www.irs.gov/refunds" class="text-blue-400 underline" target="_blank">https://www.irs.gov/refunds</a>.`,
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
