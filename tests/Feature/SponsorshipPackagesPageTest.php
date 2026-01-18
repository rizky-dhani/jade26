<?php

namespace Tests\Feature;

use App\Models\SponsorshipPackage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SponsorshipPackagesPageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if the Sponsorship Packages page is accessible.
     */
    public function test_sponsorship_packages_page_is_accessible(): void
    {
        // Seed some packages
        SponsorshipPackage::create([
            'name' => 'Test Platinum',
            'slug' => 'test-platinum',
            'description' => 'Test description',
            'price' => 1000000,
            'features' => ['Feature 1', 'Feature 2'],
            'is_active' => true,
            'order' => 1,
        ]);

        // Seed the navigation items for the test
        $this->seed(\Database\Seeders\NavigationItemSeeder::class);

        $response = $this->get('/sponsorship-packages');

        $response->assertStatus(200);
        $response->assertSee('Sponsorship Packages');
        $response->assertSee('Test Platinum');
        $response->assertSee('Rp 1.000.000');
        $response->assertSee('Feature 1');
        $response->assertSee('Feature 2');

        // Verify navigation link exists
        $response->assertSee('/sponsorship-packages');
    }
}
