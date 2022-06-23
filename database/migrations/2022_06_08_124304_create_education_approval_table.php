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
        Schema::create('education_approval', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('school');
            $table->string('department');
            $table->string('course');
            $table->string('campus');
            $table->string('subject_1');
            $table->string('subject_2');
            $table->string('subject_3');
            $table->string('subject_4');
            $table->tinyInteger('declaration')->default(1);
            $table->integer('user_id');
            $table->text('academics');
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
        Schema::dropIfExists('education_approval');
    }
};
