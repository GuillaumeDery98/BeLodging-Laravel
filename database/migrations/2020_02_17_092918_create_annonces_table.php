<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('annonces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('city');
            $table->string('description');
            $table->integer('price');
            $table->timestamps();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('duration_id');
            $table->foreign('duration_id')
                ->references('id')
                ->on('durations')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonces');
    }
}
