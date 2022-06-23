<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->bigInteger('user-id');
            $table->string('primary_school');
            $table->string('primary_qualification');
            $table->date('primary_start');
            $table->date('primary_end');
            $table->string('primary_certificate')->nullable();
            $table->string('secondary_school');
            $table->string('secondary_qualification');
            $table->date('secondary_start');
            $table->date('secondary_end');
            $table->string('secondary_certificate')->nullable();
            $table->string('tertiary_school');
            $table->string('tertiary_qualification');
            $table->date('tertiary_start');
            $table->date('tertiary_end');
            $table->string('tertiary_certificate')->nullable();
            $table->string('tertiary1_school');
            $table->string('tertiary1_qualification');
            $table->date('tertiary1_start');
            $table->date('tertiary1_end');
            $table->string('tertiary1_certificate')->nullable();
            $table->string('tertiary2_school');
            $table->string('tertiary2_qualification');
            $table->date('tertiary2_start');
            $table->date('tertiary2_end');
            $table->string('tertiary2_certificate')->nullable();
=======
            $table->bigInteger('user_id');
            $table->string('institution');
            $table->string('qualification');
            $table->string('start_date');
            $table->string('exit_date');
            $table->string('certificate');
>>>>>>> 141c7265a4327920d2a08125a1b3c02f53d1b2df
            $table->timestamps();
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
        Schema::dropIfExists('education');
    }
};
