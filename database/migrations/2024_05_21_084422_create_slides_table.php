<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // database/migrations/xxxx_xx_xx_create_slides_table.php
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('image_tablet');
            $table->string('image_mobile');
            $table->string('alt');
            $table->timestamps();
        });
    }
};
