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
        //for personal information
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('branch_id')->nullable();
            $table->string('suffix')->nullable();
            $table->string('nickname')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->integer('TIN')->nullable();
            $table->string('birthday')->nullable();
            $table->string('home_address')->nullable();
            $table->string('home_year')->nullable();
            $table->string('business_address')->nullable();
            $table->string('business_year')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('telephone_number')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('sex')->nullable();
            $table->string('education')->nullable();
            $table->string('house_type')->nullable();
            $table->timestamps();
        });
        //for household composition with their source of income
        Schema::create('client_household_composition_income', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clients_id')->nullable();
            $table->string('member_lastname')->nullable();
            $table->string('member_firstname')->nullable();
            $table->string('member_middlename')->nullable();
            $table->string('member_suffix')->nullable();
            $table->string('member_age')->nullable();
            $table->string('member_relationship')->nullable();
            $table->string('member_occupation')->nullable();
            $table->string('member_occupation_years')->nullable();
            $table->string('member_monthly_income')->nullable();
            $table->string('member_address')->nullable();
            $table->timestamps();
        });
        //business activities
        Schema::create('client_business_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clients_id');
            $table->string('main_business')->nullable();
            $table->string('secondary_business')->nullable();
            $table->string('main_business_years')->nullable();
            
            $table->integer('number_of_paid_employees')->nullable();
            $table->string('business_place_characteristic')->nullable();
            $table->timestamps();
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
