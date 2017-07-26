<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->integer('exam_id')->nullable();
            $table->integer('post_id')->nullable();
            $table->boolean('enabled');
            $table->timestamp('tenure_start')->nullable();
            $table->timestamp('tenure_stop')->nullable();
            $table->timestamp('duration_start')->nullable();
            $table->timestamp('duration_stop')->nullable();
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
        Schema::drop('programs');
    }
}
