<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->unsignedBigInteger('tipo_id')->nullable();
            $table->string('nome');
            $table->mediumText('descricao');

            $table->string('imagem');
            $table->string('logo')->nullable();
            $table->char('video')->nullable();
            $table->string('tour_virtual')->nullable();

            $table->char('cep', 15)->nullable();
            $table->string('endereco');
            $table->string('lougradouro', 100);
            $table->char('numero', 20)->nullable();
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->string('estado', 50);
            $table->string('latitude', 50);
            $table->string('longitude', 50);

            $table->boolean('status')->nullable(); 
            $table->boolean('view_home')->nullable();
            $table->string('slug', 100);
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imoveis');
    }
}
