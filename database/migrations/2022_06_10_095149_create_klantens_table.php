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
        Schema::create('klantens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//            $table->string('klant_voornaam');
//            $table->string('klant_tussenvoegsel')->nullable();
//            $table->string('klant_achternaam');
//            $table->string('klant_mobiel', 10);
//            $table->string('klant_straatnaam');
//            $table->string('klant_huisnummer');
//            $table->string('klant_postcode');
//            $table->string('klant_woonplaats');
//            $table->string('klant_email');
//            $table->integer('rank_id')->default(3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('klantens');
    }
};
