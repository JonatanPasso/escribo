<?php

namespace App\Http\Controllers;

use App\Entities\Pessoa;
use Illuminate\Http\Request;

class EscriboController extends Controller
{

    public function calcularNumero(Request $request)
    {
        $i = 1;
        $soma = 0;
        $soma1 = 0;

        while($i < $request['inteiro'])
        {
            $div1 = $i / 3;
            $div2 = $i / 5;

            if(is_int($div1))
            {
                $soma += $i;
            }

            if(is_int($div2))
            {
                $soma1 += $i;
            }

            $i++;
        }

        return $soma + $soma1;

    }

}
