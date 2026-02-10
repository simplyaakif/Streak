<?php

if (! function_exists('short_currency')) {
    function short_currency($number)
    {
        if ($number >= 1000000000) {
            return round($number / 1000000000, 1) . 'B';
        }

        if ($number >= 1000000) {
            return round($number / 1000000, 1) . 'M';
        }

        if ($number >= 1000) {
            return round($number / 1000) . 'K';
        }

        return $number;
    }
}
