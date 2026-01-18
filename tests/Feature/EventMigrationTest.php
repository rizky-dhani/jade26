<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class EventMigrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if events table exists and has correct columns.
     */
    public function test_events_table_has_expected_columns(): void
    {
        $this->assertTrue(Schema::hasTable('events'));
        $this->assertTrue(Schema::hasColumns('events', [
            'id', 'title', 'description', 'date', 'time', 'location', 'created_at', 'updated_at',
        ]));
    }
}
