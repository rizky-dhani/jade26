<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_homepage_is_accessible(): void
    {
        \App\Models\Event::factory()->create([
            'title' => 'Specific Test Event',
            'location' => 'Test Location, Indonesia',
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('JADE 2026');
        $response->assertSee('Specific Test Event');
        $response->assertSee('Test Location, Indonesia');
    }
}
