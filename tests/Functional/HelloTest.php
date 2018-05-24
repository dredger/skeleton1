<?php

namespace Ciklum\QrGenerator\Tests\Functional;

use Skeleton1\Hello;


class HelloTest extends \PHPUnit_Framework_TestCase
{
    public function testGetImage()
    {


        $h = new Hello();

        $file = __DIR__ . '/fixture/cat.png';
        $this->assertStringEqualsFile(
            $file,
            $h->getImage($file)
        );
    }
}
