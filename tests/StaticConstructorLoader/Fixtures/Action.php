<?php


namespace Dbalabka\StaticConstructorLoader\Tests\Fixtures;


use Dbalabka\StaticConstructorLoader\StaticConstructorInterface;

class Action implements StaticConstructorInterface
{
    public static $instance;

    public static function __constructStatic()
    {
        static::$instance = new static();
    }
}
