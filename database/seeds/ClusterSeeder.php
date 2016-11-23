<?php

use Illuminate\Database\Seeder;

class ClusterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x=0;$x<=51;$x++){
            $id = DB::table('cluster_info')->insertGetId([
            'code' =>str_random(6),
            'pa_lastname'=>str_random(10),   
            'pa_firstname'=>str_random(10),
            'pa_middlename'=>str_random(10),   
            'pa_suffix'=>str_random(2),
            'branch_id'=>1,
            

            ]);
            DB::table('cluster_grouping')->insertGetId([
            'cluster_id' =>$id,
            'client_id'=>rand(0,51)   
            

            ]);
        }
    }
}
