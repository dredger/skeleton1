<?php

namespace Skeleton1\Tests\Functional;

use Skeleton1\Renderer;
use GuzzleHttp\Client;

class RendererTest extends \PHPUnit_Framework_TestCase
{
    public function testRenderer()
    {

        $renderer = new Renderer(new Client());


        $file = $renderer->render('PA_Trekk Soft', 50, 50);

        file_put_contents(__DIR__ . '/fixture/tt.png' , $file);

        $this->assertStringEqualsFile(
            __DIR__ . '/fixture/tt.png',
            $renderer->render('PA_Trekk Soft', 50, 50)
        );

    }
}
