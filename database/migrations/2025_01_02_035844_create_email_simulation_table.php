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
        Schema::create('email_levels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable;
            $table->timestamps();
        });

        Schema::create('email_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('email_level_id')->constrained('email_levels')->onDelete('cascade');
            $table->text('question_text');
            $table->timestamps();
        });

        Schema::create('email_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('email_question_id')->constrained('email_questions')->onDelete('cascade');
            $table->enum('response_type', ['legitimate', 'phishing']);
            $table->text('reason');
            $table->boolean('is_correct')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_levels');
        Schema::dropIfExists('email_questions');
        Schema::dropIfExists('email_responses');
    }
};
