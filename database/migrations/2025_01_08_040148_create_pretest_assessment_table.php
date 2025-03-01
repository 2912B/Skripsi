<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pretest_questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_text'); // Consolidated question text
            $table->string('type'); // Type of the question: trivia, true_or_false, best_scenario
            $table->unsignedBigInteger('original_question_id'); // ID of the original question
            $table->text('reason')->nullable(); // Explanation for the question
            $table->timestamps();
        });

        Schema::create('pretest_choices', function (Blueprint $table) {
            $table->id();
            $table->string('choice_text'); // Text of the choice
            $table->boolean('is_correct'); // Whether this choice is correct
            $table->foreignId('assessment_question_id')->constrained('pretest_questions')->onDelete('cascade'); // Link to the pretest question
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pretest_choices');
        Schema::dropIfExists('pretest_questions');
    }
};
