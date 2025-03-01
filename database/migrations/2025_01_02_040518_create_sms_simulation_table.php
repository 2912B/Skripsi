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
        Schema::create('sms_levels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable;
            $table->timestamps();
        });

        Schema::create('sms_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sms_level_id')->constrained('sms_levels')->onDelete('cascade');
            $table->text('question_text');
            $table->timestamps();
        });

        Schema::create('sms_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sms_question_id')->constrained('sms_questions')->onDelete('cascade');
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
        Schema::dropIfExists('sms_levels');
        Schema::dropIfExists('sms_questions');
        Schema::dropIfExists('sms_responses');
    }
};
