<x-navbar.navbarlayout>
    @if (session('error'))
        <script>
            window.errorMessage = `{{ session('error') }}`;
            window.errorTitle = 'Error';
        </script>
    @endif

    @if ($errors->any())
        <script>
            window.errorMessages = `{!! implode('<br>', $errors->all()) !!}`;
            window.errorTitle = 'Failed';
        </script>
    @endif

    @if (session('success'))
        <script>
            window.successMessage = `{{ session('success') }}`;
            window.successTitle = 'Success';
        </script>
    @endif

    <div class="profile-main">
        <div class="profile-container">
            <h2>User Profile</h2>
            <div class="profile-field">
                <label for="username">Username:</label>
                <input type="text" id="username" value="{{ $user->username }}" readonly>
            </div>
            <div class="profile-field">
                <label for="email">Email:</label>
                <input type="email" id="email" value="{{ $user->email }}" readonly>
            </div>
            <div class="profile-field">
                <label for="created_at">Account Created:</label>
                <input type="text" id="created_at" value="{{ $user->created_at }}" readonly>
            </div>
            <div class="profile-actions">
                <button id="changeUsernameButton" class="action-button">Change Username</button>
                <button id="changePasswordButton" class="action-button">Change Password</button>
            </div>

            <div id="changeUsernameModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Change Username</h2>
                    <form id="changeUsernameForm" action="{{ route('profile.updateUsername') }}" method="POST">
                        @csrf
                        <div class="profile-field">
                            <label for="newUsername">New Username:</label>
                            <input type="text" id="newUsername" name="newUsername" required>
                        </div>
                        <div class="profile-actions">
                            <button type="submit" class="save-button">Save Username</button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="changePasswordModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Change Password</h2>
                    <form id="changePasswordForm" action="{{ route('profile.updatePassword') }}" method="POST">
                        @csrf
                        <div class="profile-field">
                            <label for="oldPassword">Old Password:</label>
                            <input type="password" id="oldPassword" name="oldPassword" required>
                        </div>
                        <div class="profile-field">
                            <label for="newPassword">New Password:</label>
                            <input type="password" id="newPassword" name="newPassword" required>
                        </div>
                        <div class="profile-field">
                            <label for="confirmPassword">Confirm New Password:</label>
                            <input type="password" id="confirmPassword" name="newPassword_confirmation" required>
                        </div>
                        <div class="profile-actions">
                            <button type="submit" class="save-button">Save Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-navbar.navbarlayout>
