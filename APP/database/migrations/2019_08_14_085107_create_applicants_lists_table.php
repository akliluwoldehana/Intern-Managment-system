<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('First_name');
            $table->string('Last_name');
            $table->string('Email_address');
            $table->biginteger('Phone_number');
            $table->string('University');
            $table->mediumText('Application_latter');
            $table->string('Status');
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
        Schema::dropIfExists('applicants_lists');
    }
}
