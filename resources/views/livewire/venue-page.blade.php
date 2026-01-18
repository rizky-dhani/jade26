<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Venue - JADE 2026')] class extends Component
{
    public function with(): array
    {
        return [
            'venue' => [
                'name' => 'Jakarta International Convention Center (JICC)',
                'address' => 'Jl. Gatot Subroto No.1, Gelora, Tanah Abang, Jakarta Pusat, DKI Jakarta 10270, Indonesia',
                'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.353666324341!2d106.806441375868!3d-6.217004960893141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14df0900001%3A0x6966ca00600469c5!2sJakarta%20International%20Convention%20Center!5e0!3m2!1sen!2sid!4v1705500000000!5m2!1sen!2sid'
            ],
            'surroundings' => [
                [
                    'title' => 'Accommodation',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H5a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>',
                    'description' => 'A variety of world-class hotels are located within walking distance or a short drive from JICC, including The Sultan Hotel & Residence, Hotel Mulia Senayan, and Ritz-Carlton Mega Kuningan.'
                ],
                [
                    'title' => 'Transportation',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" /></svg>',
                    'description' => 'The venue is easily accessible via TransJakarta bus lines, taxis, and ride-sharing services. It is strategically positioned near major arterial roads, providing convenient access from all parts of Jakarta.'
                ],
                [
                    'title' => 'Local Attractions',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 2.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>',
                    'description' => 'Explore nearby landmarks such as the Gelora Bung Karno Sports Complex, Pacific Place Mall for premium shopping, and a diverse range of Indonesian and international dining options in the Senayan area.'
                ]
            ]
        ];
    }
};
?>

<div class="py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <header class="text-center mb-16">
            <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl tracking-tight">The Venue</h1>
            <p class="mt-4 text-xl text-gray-500 max-w-2xl mx-auto">Discover the prestigious location hosting the Jakarta Dental Exhibitions 2026.</p>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
            <!-- Left Column: Google Map -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden h-[400px] lg:h-auto min-h-[400px] relative group">
                <iframe 
                    src="{{ $venue['map_url'] }}" 
                    class="w-full h-full border-0 absolute inset-0" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="{{ $venue['name'] }}"
                ></iframe>
                <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-sm p-4 rounded-xl shadow-lg border border-white/20 pointer-events-none transition-opacity group-hover:opacity-0 lg:group-hover:opacity-100">
                    <h3 class="font-bold text-gray-900">{{ $venue['name'] }}</h3>
                    <p class="text-xs text-gray-500 mt-1">{{ $venue['address'] }}</p>
                </div>
            </div>

            <!-- Right Column: Surroundings -->
            <div class="flex flex-col justify-between space-y-8">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-10 flex-1">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8">Location & Surroundings</h2>
                    
                    <div class="space-y-10">
                        @foreach($surroundings as $item)
                        <div class="flex gap-5">
                            <div class="flex-none">
                                <div class="rounded-xl bg-primary/5 p-3">
                                    {!! $item['icon'] !!}
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $item['title'] }}</h3>
                                <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-primary/5 rounded-2xl p-8 border border-primary/10 flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="text-center md:text-left">
                        <h2 class="text-lg font-bold text-gray-900 mb-1">Need travel assistance?</h2>
                        <p class="text-gray-600 text-sm italic">"Our team is here to help you plan your visit to Jakarta."</p>
                    </div>
                    <div class="flex gap-4">
                        <a href="/date-opening-hours" class="inline-flex items-center px-6 py-2.5 text-sm font-semibold rounded-xl text-white bg-primary hover:bg-primary/90 transition shadow-sm">
                            Event Info
                        </a>
                        <a href="#" class="inline-flex items-center px-6 py-2.5 text-sm font-semibold rounded-xl text-primary bg-white border border-primary/20 hover:bg-gray-50 transition shadow-sm">
                            Contact Support
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
