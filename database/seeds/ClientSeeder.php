<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = mt_rand(1, time());

        //Format that timestamp into a readable date string.
      
      

        for($x=0;$x<=50;$x++){
        $year=rand(1990,2016);
        $month=rand(10,12);
        $day=rand(10,29);
        $date = $year."-".$month."-".$day;
        $id = DB::table('clients')->insertGetId([
            'lastname'=>str_random(10),
            'firstname'=>str_random(10),
            'middlename'=>str_random(10),
            'branch_id'=>str_random(10),
            'suffix'=>str_random(10),
            'nickname'=>str_random(5),
            'mother_name'=>str_random(5),
            'spouse_name'=>str_random(5),
            'TIN'=>rand(0,1000),
            'birthday'=>$date,
            'home_address'=>str_random(15),
            'home_year'=>rand(1990,2016),
            'business_address'=>str_random(15),
            'business_year'=>rand(1990,2016),
            'mobile_number'=>rand(0,10000),
            'telephone_number'=>rand(),
            'civil_status'=>'single',
            'sex'=>'male',
            'education'=>str_random(15),
            'house_type'=>str_random(15),
            
            

        ]);
        DB::table('client_household_composition_income')->insert([
            'clients_id'=>$id,
            'member_lastname'=>str_random(10),
            'member_firstname'=>str_random(10),
            'member_middlename'=>str_random(10),
            'member_suffix'=>str_random(3),
            'member_age'=>rand(18,99),
            'member_relationship'=>str_random(10),
            'member_occupation'=>str_random(10),
            'member_occupation_years'=>rand(0,20),
            'member_monthly_income'=>rand(1000,100000),
            'member_address'=>str_random(15),
            ]);

            DB::table('client_business_activities')->insert([
            'clients_id'=>$id,
            'main_business'=>str_random(10),
            'secondary_business'=>str_random(10),
            'main_business_years'=>rand(0,100),
            'number_of_paid_employees'=>rand(0,100),
            'business_place_characteristic'=>str_random(10),
            ]);
        }
    }
}
