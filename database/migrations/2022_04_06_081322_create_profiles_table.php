<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->foreignId('contact_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('additional_name');
            $table->foreignId('organization_id');
            $table->foreignId('picture_id');
            $table->foreignId('background_picture_id');
            $table->foreignId('pronounce_name_id');
            
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
