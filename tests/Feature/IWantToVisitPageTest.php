<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class IWantToVisitPageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if the I Want to Visit page is accessible.
     */
    public function test_i_want_to_visit_page_is_accessible(): void
    {
        // Seed the navigation items for the test
        $this->seed(\Database\Seeders\NavigationItemSeeder::class);

        $response = $this->get('/i-want-to-visit');

        $response->assertStatus(200);
        $response->assertSee('Why Visit');
        $response->assertSee('JADE 2026');
        $response->assertSee('Who Should Join Us?');
        $response->assertSee('Express Interest');

        // Verify navigation link exists
        $response->assertSee('/i-want-to-visit');
    }

    /**
     * Test interest registration form validation and submission.
     */
    public function test_interest_registration_form(): void
    {
        Livewire::test('i-want-to-visit')
            ->set('name', '')
            ->call('submit')
            ->assertHasErrors(['name' => 'required'])
            ->set('name', 'John Doe')
            ->set('email', 'invalid-email')
            ->call('submit')
            ->assertHasErrors(['email' => 'email'])
            ->set('email', 'john@example.com')
            ->set('phone', '08123456789')
            ->set('profession', 'Dentist')
            ->call('submit')
            ->assertHasNoErrors()
            ->assertSet('submitted', true)
            ->assertSee('Interest Registered!');
    }
}
