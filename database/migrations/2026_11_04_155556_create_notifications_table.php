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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id_initiator')->nullable();
            $table->unsignedBigInteger('user_id_target')->nullable();
            $table->unsignedBigInteger('publication_id')->nullable();
            $table->string('type');
            $table->string('message');
            $table->boolean('is_read')->default(false);
            $table->foreign('user_id_initiator')->references('id')->on('users');
            $table->foreign('user_id_target')->references('id')->on('users');
            $table->foreign('publication_id')->references('id')->on('publications');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
