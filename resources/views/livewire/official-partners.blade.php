<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Official Partners - JADE 2026')] class extends Component
{
    //
};
?>

<div class="py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <header class="text-center mb-16">
            <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl tracking-tight">Official Partners</h1>
            <p class="mt-4 text-xl text-gray-500 max-w-2xl mx-auto">Acknowledging the prestigious organizations supporting the Jakarta Dental Exhibitions 2026.</p>
        </header>

        <section class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-16">
            <div class="p-8 lg:p-12 text-center">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Our Distinguished Partners</h2>
                
                <div class="relative overflow-hidden rounded-xl shadow-inner bg-gray-50">
                    <img 
                        src="https://images.unsplash.com/photo-1560179707-f14e90ef3623?q=80&w=2073&auto=format&fit=crop" 
                        alt="Official Partners List Coming Soon" 
                        class="w-full h-auto object-cover opacity-80 min-h-[300px]"
                    />
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-900/40">
                        <div class="text-center p-6 bg-white/10 backdrop-blur-md rounded-2xl border border-white/20">
                            <span class="text-2xl font-bold text-white uppercase tracking-widest md:text-4xl">
                                Partners Coming Soon
                            </span>
                            <p class="mt-2 text-white/90 text-sm md:text-base">We are finalizing our list of distinguished industry partners.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-8 opacity-40 grayscale filter">
                    <!-- Placeholder logo blocks to represent the future layout -->
                    <div class="h-16 bg-gray-200 rounded-lg animate-pulse"></div>
                    <div class="h-16 bg-gray-200 rounded-lg animate-pulse"></div>
                    <div class="h-16 bg-gray-200 rounded-lg animate-pulse"></div>
                    <div class="h-16 bg-gray-200 rounded-lg animate-pulse"></div>
                </div>
            </div>
        </section>

        <div class="bg-primary/5 rounded-2xl p-8 text-center border border-primary/10">
            <h2 class="text-xl font-bold text-gray-900 mb-2">Interested in Partnering?</h2>
            <p class="text-gray-600 mb-6 max-w-lg mx-auto">Join a network of leading organizations shaping the future of dentistry in Southeast Asia.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/organizer" class="inline-flex items-center px-6 py-2.5 text-sm font-semibold rounded-xl text-white bg-primary hover:bg-primary/90 transition shadow-sm">
                    About Organizer
                </a>
                <a href="#" class="inline-flex items-center px-6 py-2.5 text-sm font-semibold rounded-xl text-primary bg-white border border-primary/20 hover:bg-gray-50 transition shadow-sm">
                    Partnership Inquiry
                </a>
            </div>
        </div>
    </div>
</div>
