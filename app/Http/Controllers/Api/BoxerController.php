<?php

namespace App\Http\Controllers\Api;

use App\Boxer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoxerController extends Controller
{
    public function index() {
        $boxers = Boxer::all();
        return response()->json($boxers); 
    }
   
}
