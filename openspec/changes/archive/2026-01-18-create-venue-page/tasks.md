# Tasks: Create Venue Page

This document outlines the tasks required to create the "Venue" page.

## Phase 1: Page Structure and Content

- [x] Task: Create a new route for the page
    - [x] Define a new GET route in `routes/web.php` for `/venue` that points to a new Livewire component.
- [x] Task: Create Livewire component
    - [x] Create a new Livewire component (e.g., `VenuePage`) using `php artisan make:livewire VenuePage`.
- [x] Task: Implement two-column layout
    - [x] Within the Livewire component, create a basic two-column layout using Tailwind CSS flexbox or grid utilities.
- [x] Task: Embed Google Maps
    - [x] Obtain a Google Maps embed code for the JADE 2026 venue (using a placeholder address if the exact address is not yet available).
    - [x] Insert the Google Maps `<iframe>` into the left column of the layout.
    - [x] Ensure the map is responsive (e.g., `w-full h-full` on the iframe).
- [x] Task: Add placeholder content for surroundings
    - [x] Draft a brief description of the venue's surroundings (e.g., nearby hotels, public transport access, local attractions).
    - [x] Add this content to the right column of the layout within the Livewire component.
- [x] Task: Conductor - User Manual Verification 'Page Structure and Content' (Protocol in workflow.md)

## Phase 2: Styling and Responsiveness

- [x] Task: Apply Tailwind CSS and UI library styling
    - [x] Use Tailwind CSS utility classes to style the two-column layout, map container, and descriptive text.
    - [x] Utilize HyperUI or daisyUI components (e.g., cards, sections) to present the content aesthetically.
    - [x] Ensure the "Elegant and Sophisticated" visual aesthetic is maintained.
- [x] Task: Ensure responsiveness
    - [x] Verify the page layout, including the two columns and embedded map, adapts well to different screen sizes (mobile, tablet, desktop) using responsive Tailwind CSS utilities. On smaller screens, the layout should gracefully stack.
- [x] Task: Add page to header navigation (cross-reference)
    - [x] Note: This task is dependent on the "update-header-navigation" proposal. Once that is implemented, add a link to this new page under the appropriate navigation item ("Venue" nested under "Travel").
- [x] Task: Conductor - User Manual Verification 'Styling and Responsiveness' (Protocol in workflow.md)
