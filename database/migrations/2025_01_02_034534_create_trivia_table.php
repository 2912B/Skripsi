<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('trivia_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the category
            $table->timestamps();
        });

        Schema::create('trivia_questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_text'); // Text of the question
            $table->text('reason')->nullable(); // Explanation for the answer
            $table->foreignId('category_id')->constrained('trivia_categories')->onDelete('cascade'); // Link to category
            $table->timestamps();
        });

        Schema::create('trivia_choices', function (Blueprint $table) {
            $table->id();
            $table->string('choice_text'); // Text of the choice
            $table->boolean('is_correct'); // Whether this choice is correct
            $table->foreignId('question_id')->constrained('trivia_questions')->onDelete('cascade'); // Link to question
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trivia_categories');
        Schema::dropIfExists('trivia_questions');
        Schema::dropIfExists('trivia_choices');
    }
};
