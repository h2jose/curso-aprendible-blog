<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function inicio()
    {
    	// return $this->division(4);
        return view('inicio.inicio');
    }

    public function division($numerador, $denominador)
    {
    	if ($denominador == 0) {
    		return "Operación no permitida";
    	}

    	if ($denominador == 1) {
    		return $numerador;
    	}
    	
    	return $numerador / $denominador;
    }

    public function FunctionName($a, $b)
    {
    	if ($b == 0) {
    		return "Operación no permitida";
    	} elseif ($b = 1) {
    		return $a;
    	} else {
    		return $a / $b;
    	}
    }
}
