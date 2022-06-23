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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('applications_id');
            $table->integer('user_id')->nullable();
            $table->string('department')->nullable();
            $table->string('school')->nullable();
            $table->string('campus')->nullable();
            $table->string('course')->nullable();
            $table->string('campus')->nullable();
            $table->integer('intake_id')->nullable();
            $table->text('status')->nullable();
            $table->integer('final_status')->nullable();
            $table->integer('year')->nullable();
            $table->string('academic_program')->nullable();
            $table->tinyInteger('declaration')->default(1);
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
        Schema::dropIfExists('applications');
    }
};
