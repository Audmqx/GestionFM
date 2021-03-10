<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetencesfichemetierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competencesfichemetier', function (Blueprint $table) {
            $table->string('code_ROM');
            $table->integer('idCompetence')->index('FK_idCompetence');
            $table->primary(['code_ROM', 'idCompetence']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competencesfichemetier');
    }
}
