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
        Schema::create('aluno_curso', function (Blueprint $table) {
            $table->primary(['aluno_id', 'curso_id']);
            $table->timestamps();
            $table->integer('nota')->nullable();
            $table->integer('status')->default(1);
            $table->foreignUuid('aluno_id')->references('id')->on('usuarios');
            $table->foreignUuid('curso_id')->references('id')->on('cursos');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_curso');
    }
};
