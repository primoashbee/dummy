<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCluster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cluster_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('pa_lastname');
            $table->string('pa_firstname');
            $table->string('pa_middlename');
            $table->string('pa_suffix');
            $table->integer('branch_id');
            $table->timestamps();
            
        });
        Schema::create('cluster_grouping', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cluster_id');
            $table->integer('client_id');
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
        
        Schema::drop('cluster_grouping');
        Schema::drop('cluster_info');
        
    }
}
