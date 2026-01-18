<?php

namespace Tests\Unit;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventModelTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test Event model can create a record.
     */
    public function test_event_can_be_created(): void
    {
        $eventData = [
            'title' => 'Sample Event',
            'description' => 'Sample Description',
            'date' => '2026-01-20',
            'time' => '10:00:00',
            'location' => 'Sample Location',
        ];

        $event = Event::create($eventData);

        $this->assertEquals('Sample Event', $event->title);
        $this->assertEquals('2026-01-20', $event->date->format('Y-m-d'));
        $this->assertDatabaseHas('events', [
            'title' => 'Sample Event',
            'location' => 'Sample Location',
        ]);
    }
}
