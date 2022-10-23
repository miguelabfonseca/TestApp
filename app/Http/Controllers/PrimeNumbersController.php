<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#use App\Lib\PrimeNumbersController;

use \App\Lib\PrimeNumbersHelper;
use App\Http\Controllers\Controller;

class PrimeNumbersController extends Controller
{
    public function index(Request $request)
    {
        $total = 100;
        if ($request->input('total')) {
            $total = $request->input('total');
        }

        $prime = new PrimeNumbersHelper();
        for ($i = 1; $i <= $total; $i++) {
            $data[$i] = $prime->isPrimeNumber($i);
        }
        return view('primenumbers', compact('data', 'total'));
    }
}
