<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Lethaba\Router;

final class RouterTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
    }

    /** @test */
    public function it_should_accept_a_get_parameter_and_function()
    {
        $router = new Router();
        $path = '/test';
        $func = function () { return 'its me'; };
        $router->registerGet($path, $func);
        $this->assertTrue($router->hasRoute($path));
    }

    /** @test */
    public function it_should_return_the_result_of_the_route_when_invoked()
    {
        $router = new Router();
        $path = '/test';
        $resString = 'it\'s me';
        $func = function () use ($resString) { return $resString; };
        $router->registerGet($path, $func);
        $result = $router->matchRoute($path);
        $this->assertEquals($resString, $result);
    }

}