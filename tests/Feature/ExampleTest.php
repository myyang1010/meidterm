<?php
namespace Tests\Feature;

use tests\Mockery\Adapter\Phpunit\EmptyTestCase;
use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
}