<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BoxerMatch;

class Boxer extends Model
{
    protected $fillable = ['name','birthday','poster','description'];

    public function boxerMatch() {
        return $this->hasOne('App\BoxerMatch');
    }
}
