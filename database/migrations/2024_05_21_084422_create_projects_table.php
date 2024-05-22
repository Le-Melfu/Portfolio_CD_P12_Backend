<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // database/migrations/xxxx_xx_xx_create_projects_table.php
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('desc');
            $table->string('image')->nullable();
            $table->string('image_alt')->nullable();
            $table->string('pin');
            $table->string('pin_alt');
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }
};
