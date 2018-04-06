<?php
/**
 * Created by PhpStorm.
 * User: MaxF
 * Date: 06.04.2018
 * Time: 19:21
 */

namespace Nemero\Package;

/**
 * Class Hello
 * @package Nemero\Package
 */
class Hello
{
    use Singleton;

    /**
     * Just return string
     *
     * @return string
     */
    public function getHello()
    {
        return "Hello this a helper method.";
    }
}