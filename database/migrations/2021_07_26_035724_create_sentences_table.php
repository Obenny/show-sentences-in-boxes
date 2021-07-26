<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sentences', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('table_id')->nullable();
            $table->text('sentence_text');
            $table->string('sentence_row_column');
//            $table->string('sentence_style');
//            $table->string('sentence_color');
            $table->timestamps();

            // references on delete cascade
            $table->foreign('table_id')
                ->references('id')
                ->on('tables')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sentences');
    }
}
