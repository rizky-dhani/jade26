<?php

use App\Models\SponsorshipPackage;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Sponsorship Packages - JADE 2026')] class extends Component
{
    public function with(): array
    {
        return [
            'packages' => SponsorshipPackage::query()
                ->where('is_active', true)
                ->orderBy('order')
                ->get(),
        ];
    }
};
?>

<div class="py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <header class="text-center mb-16">
            <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl tracking-tight">Sponsorship Packages</h1>
            <p class="mt-4 text-xl text-gray-500 max-w-2xl mx-auto">Partner with JADE 2026 and elevate your brand within the regional dental industry.</p>
        </header>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach($packages as $package)
            <div class="flex flex-col justify-between rounded-3xl border border-gray-200 bg-white p-8 shadow-sm transition hover:shadow-xl hover:border-primary/20 @if($package->order == 1) ring-2 ring-primary ring-offset-2 @endif">
                <div>
                    <div class="flex items-center justify-between gap-4">
                        <h2 class="text-2xl font-bold text-gray-900">{{ $package->name }}</h2>
                        @if($package->order == 1)
                        <span class="rounded-full bg-primary/10 px-3 py-1 text-xs font-bold text-primary uppercase">Best Value</span>
                        @endif
                    </div>

                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                        {{ $package->description }}
                    </p>

                    <div class="mt-8">
                        <span class="text-4xl font-bold tracking-tight text-gray-900">
                            Rp {{ number_format($package->price, 0, ',', '.') }}
                        </span>
                        <span class="text-gray-500">/ event</span>
                    </div>

                    <div class="mt-8 border-t border-gray-100 pt-8">
                        <p class="text-sm font-bold text-gray-900 uppercase tracking-wider">What's included:</p>
                        <ul class="mt-6 space-y-4">
                            @foreach($package->features as $feature)
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 flex-none text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-600 text-sm">
                                    {{ $feature }}
                                </span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="mt-10">
                    <a
                        href="#"
                        class="block rounded-xl @if($package->order == 1) bg-primary text-white hover:bg-primary/90 shadow-md @else bg-gray-50 text-primary border border-primary/10 hover:bg-gray-100 @endif px-8 py-4 text-center text-sm font-bold transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary"
                    >
                        Inquire for {{ $package->name }}
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-16 bg-gray-50 rounded-3xl p-8 lg:p-12 text-center border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Custom Sponsorship Opportunities</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">Looking for something more tailored? We offer bespoke sponsorship packages designed to meet your specific marketing objectives and budget.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="inline-flex items-center px-8 py-3.5 border border-transparent text-base font-semibold rounded-xl text-white bg-gray-900 hover:bg-gray-800 transition shadow-sm">
                    Contact Our Sales Team
                </a>
                <a href="/organizer" class="inline-flex items-center px-8 py-3.5 border border-gray-200 text-base font-semibold rounded-xl text-gray-700 bg-white hover:bg-gray-50 transition shadow-sm">
                    About Organizer
                </a>
            </div>
        </div>
    </div>
</div>
