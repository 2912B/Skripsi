<x-navbarsubmit.submitlayout>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="main-title">Submit Questions</h2>

            <div class="form-container">
                <p>Welcome, and thank you for contributing to our security awareness platform! Here, you can submit questions to help others strengthen their cybersecurity knowledge. Please make sure each question is relevant, clear, and educational to enhance our community's learning experience.</p>
                <ul>
                    <p class="format-text"><strong>Format:</strong></p>
                    <li><strong>Game:</strong> Choose the game format (Example: Trivia/True or False/Best Scenario)</li>
                    <li><strong>Category:</strong> Choose the category based on the game selected.</li>
                    <li><strong>Question:</strong> Enter the question here including the answer choices.</li>
                    <li><strong>Answer:</strong> Enter the correct answer.</li>
                    <li><strong>Explanation:</strong> Provide a brief explanation for the correct answer.</li>
                </ul>
                <p>After submission, our review team will verify your question to ensure it aligns with our content standards. You’ll receive updates on your submission status, and approved questions will be featured in our training games!</p>
            </div>

            <div class="form-container">
                <form action="{{ route('submissions.store') }}" method="POST">
                    @csrf

                    <label for="game" class="label">Game:</label>
                    <select id="game" name="game" class="select-field" required>
                        <option value="">--Please choose a game format--</option>
                        <option value="trivia">Trivia</option>
                        <option value="true_false">True or False</option>
                        <option value="best_scenario">Best Scenario</option>
                    </select>
                    @error('game') <div class="alert alert-danger">{{ $message }}</div> @enderror<br>

                    <label for="category" class="label">Category:</label>
                    <select id="category" name="category" class="select-field" required>
                        <option value="">--Please choose a category--</option>
                    </select>
                    @error('category') <div class="alert alert-danger">{{ $message }}</div> @enderror<br>

                    <label for="question" class="label">Question:</label>
                    <textarea name="question" id="question" rows="2" class="input-field" placeholder="Enter your question here..." required>{{ old('question') }}</textarea>
                    @error('question') <div class="alert alert-danger">{{ $message }}</div> @enderror<br>

                    <label for="answer" class="label">Answer:</label>
                    <textarea name="answer" id="answer" rows="2" class="input-field" placeholder="Enter the choices here..." required>{{ old('answer') }}</textarea>
                    @error('answer') <div class="alert alert-danger">{{ $message }}</div> @enderror<br>

                    <label for="explanation" class="label">Explanation:</label>
                    <textarea name="explanation" id="explanation" rows="2" class="input-field" placeholder="Enter the explanation here...">{{ old('explanation') }}</textarea>
                    @error('explanation') <div class="alert alert-danger">{{ $message }}</div> @enderror<br>

                    <button type="submit" class="submit-button">Submit</button>
                </form>
            </div>
        </div>
    </div>

    @if (session('success'))
        <script>
            window.successMessage = `{{ session('success') }}`;
            window.successTitle = 'Success';
        </script>
    @endif
</x-navbarsubmit.submitlayout>

