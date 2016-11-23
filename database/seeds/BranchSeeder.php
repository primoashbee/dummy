<?php

use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branch')->insert([
           'code'=>str_random(6),
           'name'=>'Angeles',
           'region'=>'South Luzon',
           'created_at'=>date('Y-m-d H:i:s'),

        ]);
    }
}
