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
        Schema::create('historique_logins', function (Blueprint $table) {
            $table->id('ID_login');
            $table->unsignedBigInteger('ID_utilisateur');
            $table->dateTime('Date_login');
            $table->string('Adresse_IP');
            $table->string('Statut');
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
        Schema::dropIfExists('create_historique_logins_tables');
    }
};
