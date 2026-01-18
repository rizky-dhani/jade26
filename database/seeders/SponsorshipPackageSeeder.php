<?php

namespace Database\Seeders;

use App\Models\SponsorshipPackage;
use Illuminate\Database\Seeder;

class SponsorshipPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Platinum Sponsor',
                'slug' => 'platinum-sponsor',
                'description' => 'The ultimate level of visibility and prestige at JADE 2026.',
                'price' => 50000000.00,
                'features' => [
                    'Premium 36sqm Island Booth',
                    'Keynote Scientific Session Speaking Slot',
                    'Logo on all Official Marketing Materials',
                    'Full-page Ad in Event Guide',
                    '5 VIP Gala Dinner Invitations',
                    'Push Notification on Event App',
                ],
                'is_active' => true,
                'order' => 1,
            ],
            [
                'name' => 'Gold Sponsor',
                'slug' => 'gold-sponsor',
                'description' => 'Significant brand exposure across the scientific sessions.',
                'price' => 30000000.00,
                'features' => [
                    'Prime 18sqm Corner Booth',
                    'Logo on Delegate Lanyards',
                    'Half-page Ad in Event Guide',
                    '2 VIP Gala Dinner Invitations',
                    'Logo on Main Stage Backdrops',
                ],
                'is_active' => true,
                'order' => 2,
            ],
            [
                'name' => 'Silver Sponsor',
                'slug' => 'silver-sponsor',
                'description' => 'Essential visibility for growing dental brands.',
                'price' => 15000000.00,
                'features' => [
                    'Standard 9sqm Shell Scheme Booth',
                    'Logo on Event Website',
                    'Logo in Event Guide Sponsor List',
                    '1 VIP Gala Dinner Invitation',
                ],
                'is_active' => true,
                'order' => 3,
            ],
        ];

        foreach ($packages as $package) {
            SponsorshipPackage::create($package);
        }
    }
}
