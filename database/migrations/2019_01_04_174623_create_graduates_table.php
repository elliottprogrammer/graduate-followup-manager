<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduates', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('created_by');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();;
            $table->string('phone1');
            $table->string('alt_phone1')->nullable();;
            $table->string('alt_phone2')->nullable();;
            $table->string('email1')->nullable();;
            $table->enum('gender', array('Male', 'Female'));
            $table->timestamp('graduation_date');
            $table->dateTime('date_of_birth')->nullable();
            $table->string('condition')->nullable();
            $table->timestamp('last_contacted')->nullable();
            $table->timestamp('next_call_date')->nullable();
            $table->text('additional_notes')->nullable();
            $table->enum('status', array('Active', 'Inactive', 'Deleted'));
            $table->string('fam_first_name')->nullable();
            $table->string('fam_last_name')->nullable();
            $table->string('fam_relationship')->nullable();
            $table->string('fam_street_address')->nullable();
            $table->string('fam_city')->nullable();
            $table->string('fam_state')->nullable();
            $table->string('fam_zip')->nullable();
            $table->string('fam_phone1')->nullable();
            $table->string('fam_alt_phone1')->nullable();
            $table->string('fam_alt_phone2')->nullable();
            $table->string('fam_email1')->nullable();
            $table->enum('fam_gender', array('Male', 'Female'))->nullable();
            $table->text('fam_additional_notes')->nullable();
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
        Schema::dropIfExists('graduates');
    }
}
