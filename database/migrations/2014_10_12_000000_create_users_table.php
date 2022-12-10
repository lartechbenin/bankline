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
            $table->string('nom');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('telephone');
            $table->string('adresse_domicile');
            $table->string('profession');
            $table->integer('numero_carte');
            $table->integer('solde');
            $table->string('devise');
            $table->string('statut_compte')->default('inactif');
            $table->integer('montant_attente');
            $table->integer('etape')->default(0);
            $table->integer('code1');
            $table->integer('code2');
            $table->integer('code3');
            $table->integer('code4');
            $table->integer('code5');
            $table->boolean('bloque_compte')->default(false);
            $table->integer('pourcentage')->default(5);
            $table->string('login');
            $table->string('pays');
            $table->string('sexe');
            
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
