<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{  
    public function index(){
        return "ciii";
    }

    public function organizaciones(){
        return "orga";
    }

    public function invesion(){
        return "ciii";
    }

    public function Acesores(){
        return "ciii";
    }
    use AuthorizesRequests, ValidatesRequests;
}
