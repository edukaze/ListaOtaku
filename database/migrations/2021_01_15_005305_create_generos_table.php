<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generos', function (Blueprint $table) {
            $table->id();
            $table->string('acao');
            $table->string('aventura');
            $table->string('comedia');
            $table->string('drama');
            $table->string('fantasia');
            $table->string('ecchi');
            $table->string('musical');
            $table->string('romance');
            $table->string('ficcao_cientifica');
            $table->string('seinen');
            $table->string('shoujo');
            $table->string('shounen');
            $table->string('slife-of-slife');
            $table->string('esportes');
            $table->string('sobrenatural');
            $table->string('suspense');
            $table->integer('anime_id');
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
        Schema::dropIfExists('generos');
    }
}
