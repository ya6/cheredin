<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('take_parts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('image');
            $table->string('title_ru');
            $table->string('title_en');

            $table->text('description_ru');
            $table->text('description_en');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('take_parts');
    }
}
