<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VenuePageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if the Venue page is accessible.
     */
    public function test_venue_page_is_accessible(): void
    {
        // Seed the navigation items for the test
        $this->seed(\Database\Seeders\NavigationItemSeeder::class);

        $response = $this->get('/venue');

        $response->assertStatus(200);
        $response->assertSee('The Venue');
        $response->assertSee('Jakarta International Convention Center');
        $response->assertSee('Accommodation');
        $response->assertSee('Transportation');
        $response->assertSee('Local Attractions');

        // Verify navigation link exists
        $response->assertSee('/venue');
    }
}
