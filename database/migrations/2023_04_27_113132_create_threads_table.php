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
        Schema::create('threads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('author_id');
            $table->bigInteger('category_id');
            $table->string('slug');
            $table->string('title');
            $table->text('body');
            $table->integer('like_count')->default(0);
            $table->integer('share_count')->default(0);
            $table->integer('reply_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('threads');
    }
};
