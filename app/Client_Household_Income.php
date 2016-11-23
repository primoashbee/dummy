<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Client_Household_Income extends Model
{
    public $timestamps = true;
    protected $table = 'client_household_composition_income';
    protected $fillable = ['income'];
    public function info(){
        return $this->belongsTo('App\Client_Personal_Information');
    }
    
}
