<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Jakarta Dental Exhibitions 2026')] class extends Component
{
    public function with(): array
    {
        return [
            'upcomingEvents' => \App\Models\Event::query()
                ->where('date', '>=', now())
                ->orderBy('date')
                ->take(3)
                ->get(),
            'objectives' => [
                [
                    'title' => 'Innovating Practice',
                    'description' => 'Discover the latest tools and techniques to modernize your clinical workflow and improve patient outcomes.',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-10 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>',
                ],
                [
                    'title' => 'Global Networking',
                    'description' => 'Connect with leading international experts and fellow dental professionals from across the region.',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-10 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>',
                ],
                [
                    'title' => 'Advanced Education',
                    'description' => 'Earn accreditation through seminars and hands-on workshops led by world-class clinical instructors.',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-10 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 14l9-5-9-5-9 5 9 5z" /><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /></svg>',
                ],
            ],
            'news' => [
                [
                    'title' => 'Early Bird Registration Open',
                    'date' => 'Oct 15, 2025',
                    'excerpt' => 'Secure your spot at JADE 2026 and save up to 30% with our early bird rates.',
                    'image' => 'https://images.unsplash.com/photo-1588776814546-1ffce47267a5?q=80&w=2070&auto=format&fit=crop',
                ],
                [
                    'title' => 'Keynote Speakers Announced',
                    'date' => 'Nov 02, 2025',
                    'excerpt' => 'We are thrilled to welcome world-renowned clinical experts to our scientific lineup.',
                    'image' => 'https://images.unsplash.com/photo-1475721027785-f74eccf877e2?q=80&w=2070&auto=format&fit=crop',
                ],
                [
                    'title' => 'New Exhibition Floor Plan',
                    'date' => 'Dec 10, 2025',
                    'excerpt' => 'Explore the expanded exhibition hall with over 200+ global brands represented.',
                    'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069&auto=format&fit=crop',
                ],
            ],
        ];
    }
};
?>

<div>
  <!-- Hero Section (Centered Banner) -->
  <section class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
      <div class="mx-auto max-w-xl text-center">
        <h1 class="text-3xl font-extrabold sm:text-5xl">
          The Future of Dentistry.
          <strong class="font-extrabold text-primary sm:block"> JADE 2026 </strong>
        </h1>

        <p class="mt-4 sm:text-xl/relaxed">
          Join us in Jakarta for Southeast Asia's premier dental exhibition and scientific sessions.
        </p>

        <div class="mt-8 flex flex-wrap justify-center gap-4">
          <a
            class="block w-full rounded-sm bg-primary px-12 py-3 text-sm font-medium text-white shadow-sm hover:bg-primary/90 focus:ring-3 focus:outline-hidden sm:w-auto"
            href="#"
          >
            Get Started
          </a>

          <a
            class="block w-full rounded-sm px-12 py-3 text-sm font-medium text-primary shadow-sm hover:text-primary/90 focus:ring-3 focus:outline-hidden sm:w-auto"
            href="#about"
          >
            Learn More
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Event Objectives (Simple Grid Feature) -->
  <section id="objectives" class="bg-white">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
      <div class="mx-auto max-w-lg text-center">
        <h2 class="text-3xl font-bold sm:text-4xl">Event Objectives</h2>
        <p class="mt-4 text-gray-500">
          Our mission is to elevate dental practice through innovation, connection, and education.
        </p>
      </div>

      <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach($objectives as $objective)
        <div class="block rounded-xl border border-gray-100 p-8 shadow-sm transition hover:border-primary/10 hover:shadow-primary/10">
          <span class="inline-block rounded-lg bg-gray-50 p-3">
            {!! $objective['icon'] !!}
          </span>

          <h2 class="mt-4 text-xl font-bold text-gray-900">{{ $objective['title'] }}</h2>

          <p class="mt-1 text-sm text-gray-500">
            {{ $objective['description'] }}
          </p>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Upcoming Events Section -->
  <section id="events" class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
      <div class="mx-auto max-w-lg text-center">
        <h2 class="text-3xl font-bold sm:text-4xl">Upcoming Events</h2>
        <p class="mt-4 text-gray-500">
          Don't miss out on these key highlights of the JADE 2026 exhibition and conference.
        </p>
      </div>

      <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-3">
        @foreach($upcomingEvents as $event)
        <div class="flex flex-col justify-between rounded-lg border border-gray-100 bg-white p-6 shadow-sm transition hover:shadow-md">
          <div>
            <h3 class="text-lg font-bold text-gray-900">{{ $event->title }}</h3>

            <div class="mt-2 flex items-center gap-2 text-sm text-gray-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
              <span>{{ $event->date->format('M d, Y') }}</span>
            </div>

            <div class="mt-1 flex items-center gap-2 text-sm text-gray-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              <span>{{ \Carbon\Carbon::parse($event->time)->format('H:i') }}</span>
            </div>

            <div class="mt-1 flex items-center gap-2 text-sm text-gray-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 2.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
              <span>{{ $event->location }}</span>
            </div>

            <p class="mt-4 text-sm text-gray-500 line-clamp-3">
              {{ $event->description }}
            </p>
          </div>

          <div class="mt-6">
            <a href="#" class="inline-block text-sm font-bold text-primary hover:underline">
              Learn More &rarr;
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Speaker Lineup (Coming Soon Placeholder) -->
  <section id="speakers" class="bg-white">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
      <div class="mx-auto max-w-lg text-center mb-8">
        <h2 class="text-3xl font-bold sm:text-4xl">Speaker Lineup</h2>
        <p class="mt-4 text-gray-500">
          We are currently finalizing our lineup of world-class dental experts. Stay tuned!
        </p>
      </div>

      <div class="relative overflow-hidden rounded-xl shadow-lg">
        <img
          src="https://images.unsplash.com/photo-1588776814546-1ffce47267a5?q=80&w=2070&auto=format&fit=crop"
          alt="Speaker Lineup Coming Soon"
          class="h-64 w-full object-cover sm:h-96"
        />
        <div class="absolute inset-0 flex items-center justify-center bg-gray-900/40">
          <span class="text-2xl font-bold text-white uppercase tracking-widest md:text-4xl">
            Coming Soon
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- News/Blog Section (Bordered Cards) -->
  <section id="news" class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
      <div class="mx-auto max-w-lg text-center">
        <h2 class="text-3xl font-bold sm:text-4xl">Latest Updates</h2>
        <p class="mt-4 text-gray-500">
          Stay informed about JADE 2026 news, announcements, and dental industry insights.
        </p>
      </div>

      <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach($news as $article)
        <article class="flex flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition hover:shadow-lg">
          <img
            alt="{{ $article['title'] }}"
            src="{{ $article['image'] }}"
            class="h-56 w-full object-cover"
          />

          <div class="flex flex-1 flex-col justify-between p-4 sm:p-6">
            <div>
              <time datetime="{{ $article['date'] }}" class="block text-xs text-gray-500">
                {{ $article['date'] }}
              </time>

              <a href="#">
                <h3 class="mt-0.5 text-lg font-medium text-gray-900">
                  {{ $article['title'] }}
                </h3>
              </a>

              <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                {{ $article['excerpt'] }}
              </p>
            </div>

            <div class="mt-4 sm:flex sm:items-center sm:justify-end">
              <a
                href="#"
                class="block bg-primary px-5 py-3 text-center text-xs font-bold uppercase text-white transition hover:bg-primary/90"
              >
                Read Blog
              </a>
            </div>
          </div>
        </article>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Contact Call to Action -->
  <section class="bg-white">
    <div class="p-8 md:p-12 lg:px-16 lg:py-24">
      <div class="mx-auto max-w-lg text-center">
        <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
          Interested in Exhibiting?
        </h2>

        <p class="hidden text-gray-500 sm:mt-4 sm:block">
          Join 200+ global brands and showcase your latest innovations to 5,000+ dental professionals.
        </p>
      </div>

      <div class="mx-auto mt-8 max-w-xl">
        <form action="#" class="sm:flex sm:gap-4">
          <div class="sm:flex-1">
            <label for="email" class="sr-only">Email</label>

            <input
              type="email"
              placeholder="Email address"
              class="w-full rounded-md border-gray-200 bg-white p-3 text-gray-700 shadow-sm transition focus:border-white focus:ring-3 focus:ring-primary focus:outline-hidden"
            />
          </div>

          <button
            type="submit"
            class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-primary px-5 py-3 text-white transition focus:ring-3 focus:outline-hidden sm:mt-0 sm:w-auto"
          >
            <span class="text-sm font-medium"> Get Prospectus </span>

            <svg
              class="size-5 rtl:rotate-180"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 8l4 4m0 0l-4 4m4-4H3"
              />
            </svg>
          </button>
        </form>
      </div>
    </div>
  </section>
</div>
