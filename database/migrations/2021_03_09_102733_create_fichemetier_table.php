<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichemetierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichemetier', function (Blueprint $table) {
            $table->string('code_ROM', 5)->primary();
            $table->string('titre');
            $table->text('description_longue');
            $table->text('description_courte');
            $table->integer('vues')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichemetier');
    }
}
