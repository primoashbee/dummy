<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client_Household_Income extends Model
{
    protected $table = 'client_household';
    protected $fillable = ['income'];
    public function info(){
        return $this->belongsTo('App\Client_Personal_Information');
    }
}
