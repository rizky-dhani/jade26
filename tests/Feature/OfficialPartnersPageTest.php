<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OfficialPartnersPageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if the Official Partners page is accessible.
     */
    public function test_official_partners_page_is_accessible(): void
    {
        // Seed the navigation items for the test
        $this->seed(\Database\Seeders\NavigationItemSeeder::class);

        $response = $this->get('/official-partners');

        $response->assertStatus(200);
        $response->assertSee('Official Partners');
        $response->assertSee('Our Distinguished Partners');
        $response->assertSee('Partners Coming Soon');

        // Verify navigation link exists
        $response->assertSee('/official-partners');
    }
}
