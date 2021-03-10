<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCompetencesfichemetierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('competencesfichemetier', function (Blueprint $table) {
            $table->foreign('code_ROM', 'FK_code_ROM')->references('code_ROM')->on('fichemetier')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('idCompetence', 'FK_idCompetence')->references('idCompetence')->on('competences')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('competencesfichemetier', function (Blueprint $table) {
            $table->dropForeign('FK_code_ROM');
            $table->dropForeign('FK_idCompetence');
        });
    }
}
