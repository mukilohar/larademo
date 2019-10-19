<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('officename');
            $table->string('pincode');
            $table->string('officetype');
            $table->string('deliverystatus');
            $table->string('divisionname');
            $table->string('regionname');
            $table->string('circlename');
            $table->string('taluk');
            $table->string('districtname');
            $table->string('statename');
            $table->string('telephone');
            $table->string('related_suboffice');
            $table->string('related_headoffice');
            $table->string('longitude');
            $table->string('latitude');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
