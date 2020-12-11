<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('donor_id');
            $table->string('national_id');
            $table->string('name');
            $table->string('gender');
            $table->string('marital_status');
            $table->date('dob');
            $table->string('location');
            $table->string('phone_number');
            $table->string('health_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donors');
    }
}
