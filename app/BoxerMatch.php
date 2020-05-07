<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Boxer;

class BoxerMatch extends Model
{
    protected $fillable = ['total_fitghs','wins_(KO)','losses_(KO)','draws','titles_won'];
    
    public function boxer() {
        return $this->belongsTo('App\Boxer');
    }
}
