<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('suffix');
            $table->string('nickname');
            $table->string('mother_lastname');
            $table->string('mother_firstname');
            $table->string('mother_middlename');
            $table->string('spouse_lname');
            $table->string('spouse_fname');
            $table->integer('TIN');
            $table->string('birthday');
            $table->string('home_address');
            $table->string('home_year');
            $table->string('business_address');
            $table->string('business_year');
            $table->string('mobile_number');
            $table->string('telephone_number');
            $table->string('civil_status');
            $table->string('education');
            $table->string('house_type');
            $table->timestamps();
        });
        Schema::create('client_household_composition_income', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clients_id');
            $table->string('member_lastname');
            $table->string('member_firstname');
            $table->string('member_middlename');
            $table->string('member_suffix');
            $table->string('member_age');
            $table->string('member_occupation');
            $table->string('member_monthly_income');
            $table->string('member_address');
            $table->timestamps();
        });
        
        Schema::create('client_business_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clients_id');
            $table->string('main_business');
            $table->string('secondary_business');
            $table->string('main_business_years');
            $table->string('secondary_business_years');
            $table->integer('number_of_paid_employees');
            $table->string('business_place_characteristic');
            //
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
        Schema::dropIfExists('client_household_composition_income');
        Schema::dropIfExists('client_business_activities');
    }
}
