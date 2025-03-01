<div class="chat-container">
    <!-- Header -->
    <div class="chat-header">
        <img src="/img/userprofile.jpg" alt="Sender" class="chat-header-icon">
    </div>

    <div class="chat-header">
        <div>
            <h2 class="chat-title">IRS</h2>
        </div>
    </div>

    <!-- Message Container -->
    <div id="user-message-container" class="message-container">
        <p class="chat-subtitle">Text Message</p>
        <p class="chat-subtitle" id="current-date"></p>
        <p class="chat-notes">Notes: (You can interact with the text message)</p>
        <!-- Predefined message -->
        <div class="auto-reply-message">
            The refund for your 2023 tax return has been processed. Amount: $1,200.00. Expected deposit: Jan 15, 2025. Track your refund at
            <a href="https://www.irs.gov/refunds" class="text-blue-400 underline" target="_blank" rel="noopener noreferrer">https://www.irs.gov/refunds</a>.<br>No action needed.<br>
        </div>
    </div>

    <!-- Input Form -->
    <form id="message-form" class="message-form" onsubmit="return false;" method="POST">
        @csrf
        <input
            id="message-input"
            type="text"
            class="message-input"
            placeholder="Text Message"
            maxlength="200">
        <button
            type="button"
            class="message-send-btn">
            Send
        </button>
    </form>
</div>
