<?php

namespace Database\Seeders;

use App\Models\NavigationItem;
use Illuminate\Database\Seeder;

class NavigationItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Home
        NavigationItem::create(['label' => 'Home', 'url' => '/', 'order' => 1]);

        // 2. About
        $about = NavigationItem::create(['label' => 'About', 'url' => '#about', 'order' => 2]);
        NavigationItem::create(['label' => 'General Info', 'url' => '#info', 'parent_id' => $about->id, 'order' => 1]);
        NavigationItem::create(['label' => 'Objectives', 'url' => '#objectives', 'parent_id' => $about->id, 'order' => 2]);

        $jade2026 = NavigationItem::create(['label' => 'JADE 2026', 'url' => '#', 'parent_id' => $about->id, 'order' => 3]);
        NavigationItem::create(['label' => 'Date & Opening Hours', 'url' => '/date-opening-hours', 'parent_id' => $jade2026->id, 'order' => 1]);
        NavigationItem::create(['label' => 'Organizers', 'url' => '/organizer', 'parent_id' => $jade2026->id, 'order' => 2]);
        NavigationItem::create(['label' => 'Official Partners', 'url' => '/official-partners', 'parent_id' => $jade2026->id, 'order' => 3]);

        $travel = NavigationItem::create(['label' => 'Travel', 'url' => '#', 'parent_id' => $about->id, 'order' => 4]);
        NavigationItem::create(['label' => 'Venue', 'url' => '/venue', 'parent_id' => $travel->id, 'order' => 1]);

        // 3. Exhibitor
        $exhibitor = NavigationItem::create(['label' => 'Exhibitor', 'url' => '#', 'order' => 3]);
        $prospectus = NavigationItem::create(['label' => 'Prospectus', 'url' => '#', 'parent_id' => $exhibitor->id, 'order' => 1]);
        NavigationItem::create(['label' => 'Download PDF', 'url' => '#', 'parent_id' => $prospectus->id, 'order' => 1, 'type' => 'file', 'open_new_tab' => true]);
        NavigationItem::create(['label' => 'Floor Plan', 'url' => '#', 'parent_id' => $exhibitor->id, 'order' => 2]);
        NavigationItem::create(['label' => 'Sponsorship Packages', 'url' => '/sponsorship-packages', 'parent_id' => $exhibitor->id, 'order' => 3]);

        // 4. Visitor
        $visitor = NavigationItem::create(['label' => 'Visitor', 'url' => '#', 'order' => 4]);
        NavigationItem::create(['label' => 'I Want to Visit', 'url' => '/i-want-to-visit', 'parent_id' => $visitor->id, 'order' => 1]);
        NavigationItem::create(['label' => 'Registration', 'url' => '#', 'parent_id' => $visitor->id, 'order' => 2]);
        NavigationItem::create(['label' => 'Scientific Sessions', 'url' => '#', 'parent_id' => $visitor->id, 'order' => 3]);

        // 5. Press
        NavigationItem::create(['label' => 'Press', 'url' => '#', 'order' => 5]);

        // 6. Contact Us
        NavigationItem::create(['label' => 'Contact Us', 'url' => '#contact', 'order' => 6]);
    }
}
