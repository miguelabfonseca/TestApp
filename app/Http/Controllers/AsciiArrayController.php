<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Lib\AsciiTableHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AsciiArrayController extends Controller
{
    public function index(Request $request)
    {
        $asciiTable = new AsciiTableHelper();
        $request->session()->put('array', $asciiTable->createList());
        $data = $request->session()->all();
        return view('ascii', compact('data'));
    }

    public function removeChar(Request $request)
    {
        $asciiTable = new AsciiTableHelper();
        $asciiTable = $asciiTable->removeChar($request);
        $data = $request->session()->all();
        $title = 'Removed character: ';
        return view('asciiremoved', compact('data', 'title'));
    }

    public function verifyRemovedChar(Request $request) {
        $asciiTable = new AsciiTableHelper();
        $asciiTable = $asciiTable->verifyRemovedChar($request);
        $data = $request->session()->all();
        $title = 'Verify missing character: ';
        return view('asciiremoved', compact('data', 'title'));
    }
}
