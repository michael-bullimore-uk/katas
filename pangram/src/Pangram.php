<?php

declare(strict_types=1);

namespace App;

class Pangram
{
    public function is(string $string): bool
    {
        $letters = str_split(strtolower(preg_replace('/[^A-Za-z]+/', '', $string)));
        $alphabet = range('a', 'z');

        return empty(array_diff($alphabet, $letters));
    }
}
