<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemographicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demographics', function (Blueprint $table) {
            $table->id();
            $table->string('county_code')->nullable();
            $table->string('county_name')->nullable();
            $table->string('constituency_code')->nullable();
            $table->string('constituency_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('other_names')->nullable();
            $table->string('party_code')->nullable();
            $table->string('political_party_name')->nullable();
            $table->string('abbreviation')->nullable();
            $table->string('votes_garnered')->nullable();
            $table->string('winning_status')->nullable();
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
        Schema::dropIfExists('sales');
    }
}
