<?php
namespace App\Lib;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AsciiTableHelper
{
    public function createList(): array
    {
        for ($i = 44; $i <= 124; $i++) {
            $array[$i] = chr($i);
        }
        shuffle($array);
        return $array;
    }

    public function removeChar(Request $request): array
    {
        $c = rand(0, 80);
        $asciiTable = $request->session()->all();
        $asciiTable = $asciiTable['array'];
        $removedChar = $asciiTable[$c];
        unset($asciiTable[$c]);
        $request->session()->put('removedChar', $removedChar);
        $request->session()->put('id', $c);
        $request->session()->put('arrayWithoutChar', $asciiTable);
        Session::save();
        return $asciiTable;
    }

    public function verifyRemovedChar(Request $request): array
    {
        $data = $request->session()->all();
        $asciiTable = $data['array'];
        $asciiTableRemovedChar = $data['arrayWithoutChar'];
        for($i=0;$i<=80;$i++) {
            if(!isset($asciiTableRemovedChar[$i])) {
                $removedChar = $asciiTable[$i];
                $removedCharIndex = $i;
            }
        }
        return ['removedChar' => $removedChar, 'removedCharIndex' => $removedCharIndex];
    }
}
