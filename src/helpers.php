<?php

if (!function_exists('hello')) {
    function hello()
    {
        return \Nemero\Package\Hello::getInstance();
    }
}