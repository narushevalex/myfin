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
        Schema::table('teachers', function (Blueprint $table) {
            $table->boolean('honored_teacher');
            $table->boolean('candidate_science');
            $table->boolean('state_award');
            $table->boolean('badge');
            $table->integer('education')->after('start_work');
            $table->dropColumn('achieve');
        });


        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teacher', function (Blueprint $table) {
            $table->dropColumn('honored_teacher');
            $table->dropColumn('candidate_science');
            $table->dropColumn('state_award');
            $table->dropColumn('badge');
            $table->dropColumn('education');
            $table->integer('achieve');
        });

        //
    }
};
