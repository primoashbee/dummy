<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Client_Personal_Information extends Model
{
    //protected $fillable = ['name'];
    protected $table = 'clients';
    protected $primaryKey = 'id';
    public function income(){
        return $this->hasOne('App\Client_Household_Income','clients_id');
    }
    public function business(){
        return $this->hasOne('App\Client_Business_Activities','clients_id');
    }
    
}
