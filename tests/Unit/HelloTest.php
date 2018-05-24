<?php

namespace Skeleton1\Tests\Unit;

use Skeleton1\Hello;

class HelloTest extends \PHPUnit_Framework_TestCase
{
    public function testDo1True()
    {
        $h = new Hello();
        $this->assertTrue($h->do1('11'));
    }

    public function testDo1False()
    {
        $h = new Hello();
        $this->assertFalse($h->do1());
    }

}
