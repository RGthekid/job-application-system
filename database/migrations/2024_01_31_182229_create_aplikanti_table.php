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
        Schema::create('aplikanti', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('contact');
            $table->string('address');
            $table->text('description');
            $table->string('application_position');
            $table->integer("kualifikimi_id")->unsigned();
            $table->foreign('kualifikimi_id')->references('id')->on('kualifikimi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aplikanti');
    }
};
