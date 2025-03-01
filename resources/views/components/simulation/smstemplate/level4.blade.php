<div class="chat-container">
    <!-- Header -->
    <div class="chat-header">
        <img src="/img/userprofile.jpg" alt="Sender" class="chat-header-icon">
    </div>

    <div class="chat-header">
        <div>
            <h2 class="chat-title">Bank of America</h2>
        </div>
    </div>

    <!-- Message Container -->
    <div id="user-message-container" class="message-container">
        <p class="chat-subtitle">Text Message</p>
        <p class="chat-subtitle" id="current-date"></p>
        <p class="chat-notes">Notes: (You can interact with the text message)</p>
        <!-- Predefined message -->
        <div class="auto-reply-message">
            We detected a login to your account ending in 3852 from an unrecognized device on Jan 8, 2025, at 3:42 PM. If this wasn’t you, secure your account now at
            <a href="https://www.bankofamerica.com/securityalerts" class="text-blue-400 underline" target="_blank" rel="noopener noreferrer">https://www.bankofamerica.com/securityalerts</a> or call 1-800-432-1000.<br>
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
