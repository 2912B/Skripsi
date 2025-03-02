document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("message-input");
    const messageContainer = document.getElementById("user-message-container");
    const sendButton = document.querySelector(".message-send-btn");
    const dateElement = document.getElementById("current-date");
    dateElement.textContent = getCurrentDateAndTime();

    const autoReplies = [
        `Your shipment is delayed due to incomplete payment details. Verify your payment here: <a href="https://fedex-shipment-confirm.com" class="text-blue-400 underline" target="_blank">https://fedex-shipment-confirm.com</a>.`,
        `We could not deliver your package because the address information is incorrect. Update your details here: <a href="https://fedex-shipment-confirm.com" class="text-blue-400 underline" target="_blank">https://fedex-shipment-confirm.com</a>.`,
        `Your parcel is currently held due to pending customs clearance. Pay the required fees here: <a href="https://fedex-shipment-confirm.com" class="text-blue-400 underline" target="_blank">https://fedex-shipment-confirm.com</a>.`,
        `Your FedEx tracking link has expired. Reactivate it now to avoid further delays: <a href="https://fedex-shipment-confirm.com" class="text-blue-400 underline" target="_blank">https://fedex-shipment-confirm.com</a>.`,
        `Urgent: Your delivery requires confirmation. Confirm now to ensure your package is delivered: <a href="https://fedex-shipment-confirm.com" class="text-blue-400 underline" target="_blank">https://fedex-shipment-confirm.com</a>.`,
        `Your package is at risk of being returned. Update your delivery preferences here to avoid this: <a href="https://fedex-shipment-confirm.com" class="text-blue-400 underline" target="_blank">https://fedex-shipment-confirm.com</a>.`,
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
