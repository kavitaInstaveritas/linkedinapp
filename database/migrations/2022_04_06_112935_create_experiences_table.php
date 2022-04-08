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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
             $table->date('start_date');
            $table->date('end_date');
            $table->longText('headline');
            $table->longText('description');
            $table->foreignId('user_id');
            $table->foreignId('organization_id');
            $table->foreignId('position_id');
            $table->foreignId('industry_id');
            $table->foreignId('location_id');
            $table->enum('employment_type',['fulltime', 'parttime','freelance']);
           
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
        Schema::dropIfExists('experiences');
    }
};
