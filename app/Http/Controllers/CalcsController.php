<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function result($num1,$operator,$num2)
    {
        $result = '';

        if($operator === 'addition') {
            $result = $num1 + $num2;
        } elseif ($operator === 'subtraction') {
            $result = $num1 - $num2;
        } elseif ($operator === 'multiplication') {
            $result = $num1 * $num2;
        } elseif ($operator === 'division') {
            $result = $num1 / $num2;
        } else  {
            $result = '演算子が間違えています';
        }

        return view('calculation.calc', [
            'result' => $result
        ]);
    }
}
