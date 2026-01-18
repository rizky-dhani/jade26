<?php

namespace Tests\Feature;

use Database\Seeders\EventSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventSeederTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if EventSeeder populates the database.
     */
    public function test_event_seeder_populates_database(): void
    {
        $this->seed(EventSeeder::class);

        $this->assertDatabaseCount('events', 10);
    }
}
