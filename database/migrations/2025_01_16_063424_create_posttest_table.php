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
        Schema::create('posttest', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('attempt_count')->default(0);
            $table->integer('score')->nullable();
            $table->timestamp('cooldown_until')->nullable();
            $table->timestamp('taken_at')->nullable();
            $table->timestamps();
        });

        Schema::create('posttest_questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_text');
            $table->string('type');
            $table->unsignedBigInteger('original_question_id');
            $table->text('reason')->nullable();
            $table->timestamps();
        });

        Schema::create('posttest_choices', function (Blueprint $table) {
            $table->id();
            $table->string('choice_text');
            $table->boolean('is_correct');
            $table->foreignId('assessment_question_id')->constrained('posttest_questions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posttest');
        Schema::dropIfExists('posttest_choices');
        Schema::dropIfExists('posttest_questions');
    }
};
