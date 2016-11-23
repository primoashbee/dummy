<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Cluster_Information extends Model
{
    protected $table='cluster_info';
    protected $primaryKey='id';
    public $timestamps=true;

    
    public function Members(){
        return $this->belongsTo('App\Cluster_Grouping','branch_id');
    }
    public function Summary(){
         DB::table('cluster_info')
                    ->select('cluster_info.*','branch.name')
                    ->join('branch','cluster_info.branch_id','=','branch.id')
                    ->get();
     
    }
}
