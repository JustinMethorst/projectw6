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
        Schema::create('afspraaks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinyInteger('afspraak_bevestiging')->default(0);
            $table->date('datum_afspraak');
            $table->time('tijd_afspraak');
            $table->text('afspraak_opmerking');
            $table->enum('afspraak_status', ['open', 'afgewezen', 'bevestigd'])->default('open');
            $table->enum('afspraak_type', ['afspraak', 'vergadering'])->default('afspraak');
            $table->integer('monteur_id');
            $table->integer('klant_id');
            $table->text('klant_opmerking');
            $table->boolean('factuur_betaald')->default(false);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afspraaks');
    }
};
