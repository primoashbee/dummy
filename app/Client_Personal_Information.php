<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Client_Personal_Information extends Model
{
    //protected $fillable = ['name'];
    protected $table = 'clients';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public function Household(){
        return $this->hasOne('App\Client_Household_Income','clients_id');
    }
    public function Business(){
        return $this->hasOne('App\Client_Business_Activities','clients_id');
    }
    
    
}
