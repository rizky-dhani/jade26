<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Date & Opening Hours - JADE 2026')] class extends Component
{
    public function with(): array
    {
        return [
            'sections' => [
                [
                    'title' => 'Event Dates',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>',
                    'content' => 'October 14 – 16, 2026',
                    'description' => 'Mark your calendars for the premier dental event of the year.'
                ],
                [
                    'title' => 'Opening Hours',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>',
                    'content' => '10:00 AM – 06:00 PM',
                    'description' => 'Daily exhibition and scientific session hours.'
                ],
                [
                    'title' => 'Venue Location',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 2.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>',
                    'content' => 'Jakarta International Convention Center',
                    'description' => 'Jl. Gatot Subroto No.1, Gelora, Tanah Abang, Jakarta Pusat.'
                ]
            ]
        ];
    }
};
?>

<div class="py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <header class="text-center mb-16">
            <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl tracking-tight">Date & Opening Hours</h1>
            <p class="mt-4 text-xl text-gray-500 max-w-2xl mx-auto">Essential logistical information for your visit to the Jakarta Dental Exhibitions 2026.</p>
        </header>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            @foreach($sections as $section)
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 flex flex-col items-center text-center transition hover:shadow-lg hover:border-primary/20 group">
                <div class="rounded-2xl bg-primary/5 p-4 mb-6 transition group-hover:bg-primary/10">
                    {!! $section['icon'] !!}
                </div>
                <h2 class="text-xl font-bold text-gray-900 mb-2">{{ $section['title'] }}</h2>
                <p class="text-lg font-semibold text-primary mb-4">{{ $section['content'] }}</p>
                <p class="text-sm text-gray-500 leading-relaxed">{{ $section['description'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="mt-16 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden lg:flex">
            <div class="p-8 lg:p-12 lg:flex-1">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Registration Information</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Visitors can register before the show for free admission, while onsite registration will cost Rp 50,000 per person. We strongly recommend pre-registering online to ensure a smooth entry and avoid potential queues at the venue.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#" class="inline-flex items-center px-8 py-3.5 border border-transparent text-base font-semibold rounded-xl text-white bg-primary hover:bg-primary/90 transition shadow-sm hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Pre-Register Now
                    </a>
                    <a href="#" class="inline-flex items-center px-8 py-3.5 border border-gray-200 text-base font-semibold rounded-xl text-gray-700 bg-white hover:bg-gray-50 transition shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Event Prospectus
                    </a>
                </div>
            </div>
            <div class="bg-gray-50/50 p-8 lg:p-12 lg:w-1/3 flex flex-col justify-center border-t border-gray-100 lg:border-t-0 lg:border-l">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Organized by</h3>
                <div class="mb-6">
                    <p class="text-sm font-semibold text-gray-900 uppercase tracking-wider mb-1">WKCI</p>
                    <p class="text-sm text-gray-500">World KPop Center Indonesia</p>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-4">Contact Support</h3>
                <ul class="space-y-4">
                    <li class="flex items-center text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 mr-3 text-primary/70" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                        info@jade2026.com
                    </li>
                    <li class="flex items-center text-sm text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 mr-3 text-primary/70" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                        +62 21 1234 5678
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
