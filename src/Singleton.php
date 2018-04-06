<?php
/**
 * Created by PhpStorm.
 * User: MaxF
 * Date: 06.04.2018
 * Time: 20:15
 */

namespace Nemero\Package;

trait Singleton
{
    private static $instance = null;

    private function __clone () {}
    private function __wakeup () {}

    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}