<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteCastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_casts', function (Blueprint $table) {
            $table->id();

            $table->foreignId("vote_id")->constrained("votes");
            $table->foreignId("candidat_id")->constrained("candidats");
            $table->integer("statut");

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
        Schema::dropIfExists('vote_casts');
    }
}
