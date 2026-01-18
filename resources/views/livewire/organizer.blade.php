<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Official Organizer - JADE 2026')] class extends Component
{
    public function with(): array
    {
        return [
            'highlights' => [
                [
                    'title' => 'Event Excellence',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-7.714 2.143L11 21l-2.286-6.857L1 12l7.714-2.143L11 3z" /></svg>',
                    'description' => 'Extensive expertise in planning and managing large-scale international exhibitions.'
                ],
                [
                    'title' => 'Professional Networking',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>',
                    'description' => 'Fostering connections between global innovators and local industry leaders.'
                ],
                [
                    'title' => 'Cultural Bridge',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>',
                    'description' => 'Integrating international standards with local cultural expertise.'
                ]
            ]
        ];
    }
};
?>

<div class="py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <header class="text-center mb-16">
            <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl tracking-tight">Official Organizer</h1>
            <p class="mt-4 text-xl text-gray-500 max-w-2xl mx-auto">Introducing the team behind the Jakarta Dental Exhibitions 2026.</p>
        </header>

        <section class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden lg:flex mb-16">
            <div class="p-8 lg:p-12 lg:flex-1">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">World KPop Center Indonesia (WKCI)</h2>
                <div class="prose prose-primary text-gray-600 max-w-none space-y-4">
                    <p>
                        World KPop Center Indonesia (WKCI) is a premier event management and cultural institution dedicated to excellence in international exhibitions, scientific sessions, and professional networking events.
                    </p>
                    <p>
                        As the official organizer of JADE 2026, WKCI leverages its robust logistical infrastructure and deep industry connections to create a seamless and impactful experience for all participants. Our commitment is to deliver an event that not only meets but exceeds international standards for dental professional development and exhibition quality.
                    </p>
                    <p>
                        Through JADE 2026, WKCI aims to establish a world-class platform in Jakarta where the latest dental innovations meet the brightest scientific minds, fostering a future of progress and collaboration in Southeast Asia's dental industry.
                    </p>
                </div>
            </div>
            <div class="bg-gray-50/50 p-8 lg:p-12 lg:w-1/3 flex flex-col justify-center border-t border-gray-100 lg:border-t-0 lg:border-l">
                <div class="space-y-8">
                    @foreach($highlights as $highlight)
                    <div>
                        <div class="flex items-center gap-3 mb-2">
                            <div class="rounded-lg bg-primary/10 p-2">
                                {!! $highlight['icon'] !!}
                            </div>
                            <h3 class="font-bold text-gray-900">{{ $highlight['title'] }}</h3>
                        </div>
                        <p class="text-sm text-gray-500 leading-relaxed">{{ $highlight['description'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <div class="bg-primary/5 rounded-2xl p-8 text-center border border-primary/10">
            <h2 class="text-xl font-bold text-gray-900 mb-2">Collaborate with Us</h2>
            <p class="text-gray-600 mb-6 max-w-lg mx-auto italic">"Bridging professional excellence with world-class event management."</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/date-opening-hours" class="inline-flex items-center px-6 py-2.5 text-sm font-semibold rounded-xl text-white bg-primary hover:bg-primary/90 transition shadow-sm">
                    Event Logistics
                </a>
                <a href="#" class="inline-flex items-center px-6 py-2.5 text-sm font-semibold rounded-xl text-primary bg-white border border-primary/20 hover:bg-gray-50 transition shadow-sm">
                    Contact Organizer
                </a>
            </div>
        </div>
    </div>
</div>
