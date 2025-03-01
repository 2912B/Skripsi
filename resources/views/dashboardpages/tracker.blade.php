<x-navbarsubmit.submitlayout>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="main-title">Submission Tracker</h3>

            <!-- Submission Tracker -->
            <div class="tracker-container">
                <table class="table table-bordered mt-3">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Submission Date</th>
                        <th>Submission Category</th>
                        <th>Submission</th>
                        <th>Status</th>
                        <th>Reviewed Date</th>
                        <th>Feedback</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if ($submissions->count() > 0)
                            @foreach ($submissions as $key => $submission)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $submission->created_at->format('Y-m-d H:i:s') }}</td>
                                    <td>{{ $submission->category }}</td>
                                    <td>{{ $submission->question }}</td>
                                    <td>{{ $submission->is_accepted === 1 ? 'Accepted' : ($submission->is_accepted === 0 ? 'Rejected' : 'Pending') }}</td>
                                    <td>{{ $submission->accepted_date ? $submission->accepted_date : 'Pending' }}</td>
                                    <td>{{ $submission->feedback ? $submission->feedback : 'Pending' }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="10" class="text-center">No submission records available.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-navbarsubmit.submitlayout>
