<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrganizerPageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if the Organizer page is accessible.
     */
    public function test_organizer_page_is_accessible(): void
    {
        // Seed the navigation items for the test
        $this->seed(\Database\Seeders\NavigationItemSeeder::class);

        $response = $this->get('/organizer');

        $response->assertStatus(200);
        $response->assertSee('Official Organizer');
        $response->assertSee('World KPop Center Indonesia (WKCI)');
        $response->assertSee('official organizer of JADE 2026');

        // Verify navigation link exists
        $response->assertSee('/organizer');
    }
}
