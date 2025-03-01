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
        Schema::create('bestscenario_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the category
            $table->timestamps();
        });

        Schema::create('bestscenario_questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_text'); // Text of the question
            $table->text('reason')->nullable(); // Explanation for the answer
            $table->foreignId('category_id')->constrained('bestscenario_categories')->onDelete('cascade'); // Link to category
            $table->timestamps();
        });

        Schema::create('bestscenario_choices', function (Blueprint $table) {
            $table->id();
            $table->string('choice_text'); // Text of the choice
            $table->boolean('is_correct'); // Whether this choice is correct
            $table->foreignId('question_id')->constrained('bestscenario_questions')->onDelete('cascade'); // Link to question
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bestscenario_categories');
        Schema::dropIfExists('bestscenario_questions');
        Schema::dropIfExists('bestscenario_choices');
    }
};
