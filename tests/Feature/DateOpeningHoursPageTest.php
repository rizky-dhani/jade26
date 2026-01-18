<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DateOpeningHoursPageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if the Date & Opening Hours page is accessible.
     */
    public function test_date_opening_hours_page_is_accessible(): void
    {
        // Seed the navigation items for the test
        $this->seed(\Database\Seeders\NavigationItemSeeder::class);

        $response = $this->get('/date-opening-hours');

        $response->assertStatus(200);
        $response->assertSee('Date & Opening Hours');
        $response->assertSee('October 14 – 16, 2026');
        $response->assertSee('10:00 AM – 06:00 PM');
        $response->assertSee('Jakarta International Convention Center');

        // Verify navigation link exists
        $response->assertSee('/date-opening-hours');
    }
}
