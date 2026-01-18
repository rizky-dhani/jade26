<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

new #[Title('I Want to Visit - JADE 2026')] class extends Component
{
    #[Validate('required|min:3')]
    public string $name = '';

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required')]
    public string $phone = '';

    #[Validate('required')]
    public string $profession = '';

    public bool $submitted = false;

    public function submit(): void
    {
        $this->validate();

        // Future: Process registration
        
        $this->submitted = true;
    }

    public function with(): array
    {
        return [
            'reasons' => [
                [
                    'title' => 'Cutting-Edge Innovation',
                    'description' => 'Experience the latest advancements in dental technology and clinical equipment from 200+ global brands.',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>',
                ],
                [
                    'title' => 'Scientific Excellence',
                    'description' => 'Attend world-class scientific sessions and hands-on workshops led by renowned international speakers.',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /></svg>',
                ],
                [
                    'title' => 'Strategic Networking',
                    'description' => 'Connect with 5,000+ fellow dental professionals and industry leaders from across Southeast Asia.',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>',
                ],
            ],
            'visitors' => [
                'Dentists & Specialists',
                'Dental Hygienists',
                'Dental Students',
                'Clinic Owners & Managers',
                'Dental Technicians',
                'Industry Distributors',
            ],
            'professions' => [
                'Dentist',
                'Specialist',
                'Student',
                'Dental Nurse/Hygienist',
                'Technician',
                'Clinic Manager',
                'Other',
            ],
        ];
    }
};
?>

<div>
    <!-- Section 1: Why Visit JADE 2026 -->
    <section class="bg-gray-50 py-16 lg:py-24">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl lg:text-5xl">
                    Why Visit <span class="text-primary">JADE 2026</span>?
                </h2>
                <p class="mt-4 text-xl text-gray-500">
                    JADE 2026 is more than just an exhibition; it's a transformative experience for dental professionals committed to excellence and innovation.
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-3">
                @foreach($reasons as $reason)
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 transition hover:shadow-md">
                    <div class="rounded-xl bg-primary/5 p-3 w-fit mb-6">
                        {!! $reason['icon'] !!}
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">{{ $reason['title'] }}</h3>
                    <p class="mt-4 text-gray-500 leading-relaxed">
                        {{ $reason['description'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section 2: Who Should Visit JADE 2026 -->
    <section class="bg-white py-16 lg:py-24">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-center lg:gap-16">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Who Should Join Us?
                    </h2>
                    <p class="mt-4 text-lg text-gray-500">
                        JADE 2026 is designed for all stakeholders in the dental ecosystem who are looking to stay ahead in a rapidly evolving industry.
                    </p>

                    <ul class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2">
                        @foreach($visitors as $visitor)
                        <li class="flex items-center gap-3 text-gray-700 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ $visitor }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="mt-12 lg:mt-0 lg:w-1/2">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl">
                        <img 
                            src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=2070&auto=format&fit=crop" 
                            alt="Dental Professionals Networking" 
                            class="w-full h-auto object-cover aspect-4/3"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Registration Form -->
    <section id="registration" class="bg-gray-50 py-16 lg:py-24 border-t border-gray-100">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Express Interest</h2>
                <p class="mt-4 text-gray-500 text-lg">Register your interest to receive exclusive early-bird updates and priority booking information.</p>
            </div>

            <div class="mx-auto max-w-xl bg-white rounded-3xl p-8 lg:p-12 shadow-sm border border-gray-100">
                @if($submitted)
                <div class="text-center py-8">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-green-100 mb-6">
                        <svg class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Interest Registered!</h3>
                    <p class="mt-4 text-gray-500">Thank you, {{ $name }}. We have received your expression of interest and will be in touch shortly with event details.</p>
                    <button wire:click="$set('submitted', false)" class="mt-8 text-primary font-bold hover:underline">Register another</button>
                </div>
                @else
                <form wire:submit="submit" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-bold text-gray-700">Full Name</label>
                        <input 
                            wire:model="name"
                            type="text" 
                            id="name" 
                            class="mt-1 w-full rounded-xl border-gray-200 bg-gray-50 p-3 text-gray-700 shadow-xs transition focus:border-primary focus:ring-3 focus:ring-primary/10 outline-hidden"
                            placeholder="John Doe"
                        />
                        @error('name') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="email" class="block text-sm font-bold text-gray-700">Email Address</label>
                            <input 
                                wire:model="email"
                                type="email" 
                                id="email" 
                                class="mt-1 w-full rounded-xl border-gray-200 bg-gray-50 p-3 text-gray-700 shadow-xs transition focus:border-primary focus:ring-3 focus:ring-primary/10 outline-hidden"
                                placeholder="john@example.com"
                            />
                            @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-bold text-gray-700">Phone Number</label>
                            <input 
                                wire:model="phone"
                                type="tel" 
                                id="phone" 
                                class="mt-1 w-full rounded-xl border-gray-200 bg-gray-50 p-3 text-gray-700 shadow-xs transition focus:border-primary focus:ring-3 focus:ring-primary/10 outline-hidden"
                                placeholder="+62 ..."
                            />
                            @error('phone') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div>
                        <label for="profession" class="block text-sm font-bold text-gray-700">Profession</label>
                        <select 
                            wire:model="profession"
                            id="profession" 
                            class="mt-1 w-full rounded-xl border-gray-200 bg-gray-50 p-3 text-gray-700 shadow-xs transition focus:border-primary focus:ring-3 focus:ring-primary/10 outline-hidden"
                        >
                            <option value="">Select your profession</option>
                            @foreach($professions as $p)
                            <option value="{{ $p }}">{{ $p }}</option>
                            @endforeach
                        </select>
                        @error('profession') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="pt-4">
                        <button 
                            type="submit"
                            class="w-full flex justify-center items-center gap-2 rounded-xl bg-primary px-8 py-4 text-white font-bold transition hover:bg-primary/90 focus:ring-3 focus:ring-primary/20 shadow-md"
                        >
                            <span>Express Interest</span>
                            <div wire:loading class="loading loading-spinner loading-xs"></div>
                        </button>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </section>
</div>
