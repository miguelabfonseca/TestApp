<?php
namespace App\Lib;


class PrimeNumbersHelper
{
    public function isPrimeNumber(int $number): string
    {
        $listNumbers = '';
        for($i = 2; $i <= $number / 2; $i++)
        {
            if($number % $i == 0) {
                if($listNumbers) $listNumbers .= ',';
                $listNumbers .= $i;
            }
        }
        if(!$listNumbers) {
            return 'Prime';
        }
        return $listNumbers;
    }

}
