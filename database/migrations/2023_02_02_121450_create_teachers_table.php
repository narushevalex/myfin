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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->date('start_work');
            $table->integer('cash');
            $table->boolean('method_room');
            $table->boolean('notepad_015');
            $table->boolean('notepad_01');
            $table->boolean('classroom_teacher');
            $table->boolean('methodist');
            $table->integer('qualification');
            $table->integer('achieve');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
};
