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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('book_name', 100);
            $table->mediumText('description')->nullable();
            $table->string('author', 100);
            $table->year('release_date');
            $table->string('image', 255)->nullable();
            $table->enum('category', ["fiction", "action", "fantasy", "comedy", "non-fiction"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
