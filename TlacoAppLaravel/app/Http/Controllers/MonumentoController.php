<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monumento;

class MonumentoController extends Controller
{
    public function index(){
        $monumento = Monumento::all();
    
        return response()->json($monumento);
    }
}
