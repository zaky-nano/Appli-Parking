

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identifiant')->unique();
            $table->string('nom');
            $table->string('identiteResponsable');
            $table->string('adressePostale');
            $table->integer('nombrePersonnes');
            $table->string('nomPays');
            $table->string('emailresp')->unique();
            $table->string('mot_de_passe');
            $table->string('password_confirmation');
            $table->rememberToken();
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
        Schema::dropIfExists('utilisateurs');
    }
}