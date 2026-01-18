# Design: Replace Speaker Lineup Grid with Image Placeholder

## 1. Context and Problem
The "Speaker Lineup" section on the JADE 2026 website, currently implemented in `resources/views/livewire/home.blade.php` using a grid structure (likely "Small Team Sections" as indicated in previous proposals), is either incomplete or displaying placeholder data. This can lead to a less polished user experience. The goal is to provide a cleaner, more visually appealing temporary solution.

## 2. Proposed Solution: Static Image Placeholder
The most straightforward and minimal implementation is to replace the entire dynamic or placeholder grid structure with a single static image. This offers a clear visual cue that the section is present but awaiting full content, while maintaining the overall aesthetic quality of the page.

### 2.1. Placeholder Image Selection
A suitable image will be a generic placeholder that visually communicates the section's purpose (e.g., a "Speakers Coming Soon" graphic, or a simple grey box with descriptive text). It should be aesthetically aligned with the "Elegant and Sophisticated" visual aesthetic of the website. For implementation, it will be assumed that a placeholder image (e.g., `speaker-placeholder.jpg`) will be available in the `public/assets/` directory.

### 2.2. HTML Structure Modification
The existing HTML code within `resources/views/livewire/home.blade.php` that renders the speaker grid will be commented out or removed. In its place, a standard `<img>` tag will be inserted.

**Example HTML (conceptual):**
```html
<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold sm:text-4xl text-center mb-8">Speaker Lineup</h2>
    <!-- Existing Speaker Lineup Grid (will be replaced/commented out) -->
    <!--
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        ... speaker cards ...
    </div>
    -->
    <img src="{{ asset('assets/speaker-placeholder.jpg') }}" alt="Speaker Lineup Coming Soon" class="w-full h-auto object-cover rounded-lg shadow-lg">
</div>
```

### 2.3. Styling with Tailwind CSS
The placeholder `<img>` tag will be styled using Tailwind CSS utility classes to ensure it is responsive, correctly sized, and visually integrated with the page layout. Key styling considerations include:
*   `w-full`: To make the image span the full width of its container.
*   `h-auto`: To maintain the image's aspect ratio.
*   `object-cover` or `object-contain`: Depending on how the image should fit its container. `object-cover` is generally preferred for hero-like sections.
*   `rounded-lg` and `shadow-lg`: To maintain the "Elegant and Sophisticated" design.
*   `mx-auto`: For horizontal centering if the image is not full width.
*   Appropriate vertical margin/padding (e.g., `my-8`) to maintain spacing.

### 2.4. Handling Image Assets
The placeholder image will be placed in the `public/assets/` directory. Laravel's `asset()` helper function will be used to generate the correct public URL for the image, ensuring proper linking in both development and production environments.

## 3. Alternatives Considered

### 3.1. Retaining Current Placeholder Grid
Keeping the existing, potentially incomplete, grid structure was considered. However, a static image provides a more definite "under construction" visual, is less prone to rendering errors from missing data, and is simpler to implement, aligning with the minimal intervention principle.

### 3.2. Dynamic Placeholder (e.g., loading spinner)
Implementing a dynamic placeholder like a loading spinner would imply that data is being actively fetched, which is not the case for this interim solution. A static image clearly communicates a "content coming soon" state.

## 4. Acceptance Criteria (Technical)
*   The `resources/views/livewire/home.blade.php` file MUST contain an `<img>` tag where the speaker lineup grid was previously rendered.
*   The `<img>` tag's `src` attribute MUST point to an image within `public/assets/` using Laravel's `asset()` helper.
*   The `<img>` tag MUST have an `alt` attribute for accessibility.
*   The `<img>` tag MUST utilize Tailwind CSS classes for sizing and positioning, ensuring it is responsive and visually appealing.
*   No other HTML structure related to dynamic speaker listing should be present in the designated area.
*   The browser's developer console MUST show no broken image links or JavaScript errors related to this change.
