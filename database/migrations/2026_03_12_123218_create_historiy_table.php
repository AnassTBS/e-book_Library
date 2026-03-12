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
        Schema::create('historiy', function (Blueprint $table) {
            $table->id('history_id');
            $table->foreignId('profile_id')
                ->constrained('profiles', 'profile_id')
                ->cascadeOnDelete();
            $table->foreignId('book_id')
                ->constrained('books', 'book_id')
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_historiy');
    }
};
