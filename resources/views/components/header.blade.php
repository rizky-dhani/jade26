@php
    $menuItems = \App\Models\NavigationItem::getHierarchicalMenu();
@endphp

<header class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm font-sans">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="md:flex md:items-center md:gap-12">
        <a class="block text-primary" href="/">
          <span class="sr-only">Home</span>
          <img src="{{ asset('assets/logo.svg') }}" class="h-10 w-auto" alt="JADE 2026 Logo">
        </a>
      </div>

      <div class="hidden md:block">
        <nav aria-label="Global">
          <ul class="flex items-center gap-6 text-sm">
            @foreach($menuItems as $item)
              @if($item->children->count() > 0)
                <li class="relative group">
                  <div class="dropdown dropdown-hover">
                    <label tabindex="0" class="flex items-center gap-1 text-gray-500 transition hover:text-primary cursor-pointer py-2">
                      {{ $item->label }}
                      <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                      </svg>
                    </label>
                    <ul tabindex="0" class="dropdown-content z-1 menu p-2 shadow-sm bg-base-100 rounded-box w-52 border border-gray-100">
                      @foreach($item->children as $child)
                        @if($child->children->count() > 0)
                          <li class="relative group/sub">
                            <details>
                              <summary class="text-gray-600 hover:text-primary">
                                {{ $child->label }}
                              </summary>
                              <ul>
                                @foreach($child->children as $grandchild)
                                  <li>
                                    <a 
                                      href="{{ $grandchild->url }}" 
                                      class="text-gray-500 hover:text-primary"
                                      @if($grandchild->open_new_tab) target="_blank" rel="noopener noreferrer" @endif
                                      @if($grandchild->type === 'file') download @endif
                                    >
                                      {{ $grandchild->label }}
                                    </a>
                                  </li>
                                @endforeach
                              </ul>
                            </details>
                          </li>
                        @else
                          <li>
                            <a 
                              href="{{ $child->url }}" 
                              class="text-gray-600 hover:text-primary"
                              @if($child->open_new_tab) target="_blank" rel="noopener noreferrer" @endif
                              @if($child->type === 'file') download @endif
                            >
                              {{ $child->label }}
                            </a>
                          </li>
                        @endif
                      @endforeach
                    </ul>
                  </div>
                </li>
              @else
                <li>
                  <a 
                    class="text-gray-500 transition hover:text-primary" 
                    href="{{ $item->url }}"
                    @if($item->open_new_tab) target="_blank" rel="noopener noreferrer" @endif
                    @if($item->type === 'file') download @endif
                  >
                    {{ $item->label }}
                  </a>
                </li>
              @endif
            @endforeach
          </ul>
        </nav>
      </div>

      <div class="flex items-center gap-4">
        <div class="sm:flex sm:gap-4">
          <a
            class="rounded-md bg-primary px-5 py-2.5 text-sm font-medium text-white shadow-sm transition hover:bg-primary/90"
            href="#"
          >
            Register Now
          </a>

          <div class="hidden sm:flex">
            <a
              class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-primary transition hover:bg-gray-200"
              href="#"
            >
              Exhibitor Info
            </a>
          </div>
        </div>

        <div class="block md:hidden">
          <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-sm rounded-sm bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </label>
            <ul tabindex="0" class="dropdown-content z-1 menu p-2 shadow-sm bg-base-100 rounded-box w-64 border border-gray-100 mt-4">
              @foreach($menuItems as $item)
                @if($item->children->count() > 0)
                  <li>
                    <details>
                      <summary class="text-gray-700 font-medium">{{ $item->label }}</summary>
                      <ul>
                        @foreach($item->children as $child)
                          @if($child->children->count() > 0)
                            <li>
                              <details>
                                <summary class="text-gray-600">{{ $child->label }}</summary>
                                <ul>
                                  @foreach($child->children as $grandchild)
                                    <li>
                                      <a 
                                        href="{{ $grandchild->url }}"
                                        @if($grandchild->open_new_tab) target="_blank" rel="noopener noreferrer" @endif
                                        @if($grandchild->type === 'file') download @endif
                                      >
                                        {{ $grandchild->label }}
                                      </a>
                                    </li>
                                  @endforeach
                                </ul>
                              </details>
                            </li>
                          @else
                            <li>
                              <a 
                                href="{{ $child->url }}"
                                @if($child->open_new_tab) target="_blank" rel="noopener noreferrer" @endif
                                @if($child->type === 'file') download @endif
                              >
                                {{ $child->label }}
                              </a>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </details>
                  </li>
                @else
                  <li>
                    <a 
                      href="{{ $item->url }}" 
                      class="text-gray-700 font-medium"
                      @if($item->open_new_tab) target="_blank" rel="noopener noreferrer" @endif
                      @if($item->type === 'file') download @endif
                    >
                      {{ $item->label }}
                    </a>
                  </li>
                @endif
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>