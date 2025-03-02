<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Submissions for {{ $user->username }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Particle JS --}}
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <link rel="stylesheet" href="{{ asset('build/assets/app-7ywPSvxu.css') }}">
    <script src="{{ asset('build/assets/app-CWUoBES6.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/submission.css') }}">

    <script src="{{ asset('js/admin/submission.js') }}" defer></script>
    <script src="{{ asset('js/error.js') }}" defer></script>
</head>
<body>
    @if (session('success'))
        <script>
            window.errorMessage = `{{ session('success') }}`;
            window.errorTitle = 'Success';
        </script>
    @endif

    @if (session('error'))
        <script>
            window.errorMessage = `{{ session('error') }}`;
            window.errorTitle = 'Error';
        </script>
    @endif

    <div class="dashboard-container">
        <aside class="sidebar">
            <ul class="nav">
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('alogout') }}">Logout</a></li>
            </ul>
        </aside>

        <main class="content">
            <h1>Submissions for {{ $user->username }}</h1>
            <div class="submissions-grid">
                @if (count($submissions) > 0)
                    @foreach ($submissions as $submission)
                        <div class="submission-card">
                            <div class="submission-details">
                                <p><strong>Game:</strong> {{ $submission->game }}</p>
                                <p><strong>Category:</strong> {{ $submission->category }}</p>
                                <p><strong>Question:</strong> {{ $submission->question }}</p>
                                <p><strong>Answer:</strong> {{ $submission->answer }}</p>
                                <p><strong>Explanation:</strong> {{ $submission->explanation }}</p>
                                <p><strong>Submitted At:</strong> {{ $submission->submitted_at }}</p>
                                <p><strong>Status:</strong> {{ $submission->is_accepted === 1 ? 'Accepted' : ($submission->is_accepted === 0 ? 'Rejected' : 'Pending') }}</p>
                                <p><strong>Reviewed At:</strong> {{ $submission->accepted_date ? $submission->accepted_date : 'N/A' }}</p>
                                <p><strong>Feedback:</strong> {{ $submission->feedback ? $submission->feedback : 'N/A' }}</p>
                            </div>

                            <div class="submission-actions">
                                @php
                                    $disableFeedbackButton = $submission->is_accepted !== null || $submission->accepted_date !== null || $submission->feedback !== null;
                                @endphp

                                <button type="button" class="feedback-button @if($disableFeedbackButton) hidden @endif" data-submission-id="{{ $submission->id }}">
                                    Submit Feedback
                                </button>
                                @if($disableFeedbackButton)
                                    <span class="feedback-disabled">Feedback Submitted</span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No submissions found for this user.</p>
                @endif
            </div>

            <div id="feedback-modal" class="modal">
                <div class="modal-content">
                    <span class="close-button" id="close-modal-button">&times;</span>
                    <h2>Feedback</h2>
                    <form id="feedback-form" method="POST" action="">  </form>
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <textarea name="feedback" id="feedback-text" rows="4" placeholder="Enter your feedback here..."></textarea>
                        <input type="hidden" id="submission-id-input" name="submission_id">
                        <div class="modal-buttons">
                            <button type="submit" class="accept-button">Accept</button>
                            <button type="submit" class="reject-button">Reject</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
