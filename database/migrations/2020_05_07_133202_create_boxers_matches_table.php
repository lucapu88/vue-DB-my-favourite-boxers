<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxersMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxers_matches', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('boxer_id')->unsigned();
            $table->string('total_fitghs');
            $table->string('wins_(KO)');
            $table->string('losses_(KO)');
            $table->string('draws');
            $table->mediumText('titles_won');
            $table->timestamps();
            $table->foreign('boxer_id')->references('id')->on('boxers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boxers_matches');
    }
}
