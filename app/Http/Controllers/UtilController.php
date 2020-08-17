<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilController extends Controller
{
    //Array de respuesta Default
    static function arrayResponse(){
        return [
            "status" => 0,
            "msg" => "ok",
            "data" => []
        ];
    }
}
