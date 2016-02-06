<?php

if (!function_exists('expect')) {
    /**
     * @param $value
     *
     * @return \Expect\Expect
     */
    function expect($value)
    {
        require_once __DIR__ . '/Expect.php';

        return new \Expect\Expect($value);
    }
}
