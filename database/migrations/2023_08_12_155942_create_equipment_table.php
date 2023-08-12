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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('cbn');
            $table->string('name');
            $table->text('description');
            $table->timestamps();

            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('equipment_associated_id');
 
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('type_id')->references('id')->on('type');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('equipment_associated_id')->references('id')->on('equipment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
