<?php

declare(strict_types=1);

function isStringLong(string $text): bool
{
    if ($text < 5) {
        return false;
    }

    return true;
}

function fizbuzz(int $number): string
{
    $text = '';
    if ($number % 3 === 0 || $number % 5 === 0) {
        if ($number % 3 == 0 && $number % 5 !== 0) {
            $text = 'fiz';
        } elseif ($number % 3 !== 0 && $number % 5 === 0) {
            $text = 'buzz';
        } elseif ($number % 3 === 0 && $number % 5 === 0) {
            $text = 'fizbuzz';
        }
    } else {
        $text .= $number;
    }

    return $text;
}
