<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client_Business_Activities extends Model
{
    protected $table = 'client_business_activities';
    protected $fillable = [];
    public function business_info(){
        return $this->belongsTo('App\Client_Personal_Information');
    }
}
