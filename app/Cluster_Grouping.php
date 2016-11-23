<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cluster_Grouping extends Model
{
    protected $table='cluster_grouping';
    protected $primaryKey='id';
    public $timestamps=true;
    
    public function Information(){
        return $this->belongsToMany('App\Cluster_Information');
    }

}
