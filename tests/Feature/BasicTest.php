<?php
# test/Feature/BasicTest.php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_home(): void
    {
        $response = $this->get('en/home');

        $response->assertStatus(200);
    }
    public function test_planets(): void
    {
        $response = $this->get('en/planets/moon');

        $response->assertStatus(200);
    }
    public function test_equipages(): void
    {
        $response = $this->get('en/equipages');

        $response->assertStatus(200);
    }
    public function test_technologie(): void
    {
        $response = $this->get('en/technologie');

        $response->assertStatus(200);
    }
}
