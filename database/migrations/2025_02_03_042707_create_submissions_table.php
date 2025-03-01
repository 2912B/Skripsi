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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('game');
            $table->string('category');
            $table->text('question');
            $table->text('answer');
            $table->text('explanation')->nullable();
            $table->date('accepted_date')->nullable();
            $table->timestamp('submitted_at')->useCurrent();
            $table->boolean('is_accepted')->nullable()->default(null);
            $table->text('feedback')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
