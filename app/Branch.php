<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public $timestamps = true;
    public $table = 'branch';
    public function Index(){
        return $this->hasMany('App\Cluster_Information');
    }
    public function GetClusters(){
        return $this->hasMany('App\Cluster_Information','branch_id');
    }

}
