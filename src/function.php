<?php

require_once __DIR__ . '/Expect.php';

if (!function_exists('expect')) {
    /**
     * @param $value
     *
     * @return \Expect\Expect
     */
    function expect($value)
    {
        return new \Expect\Expect($value);
    }
}
