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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();

            $table->string('klant_voornaam');
            $table->string('klant_tussenvoegsel')->nullable();
            $table->string('klant_achternaam');
            $table->string('klant_mobiel', 10);
            $table->string('klant_straatnaam');
            $table->string('klant_huisnummer');
            $table->string('klant_postcode');
            $table->string('klant_woonplaats');
            $table->string('klant_email');
            $table->integer('rank_id')->default(3);

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
};
