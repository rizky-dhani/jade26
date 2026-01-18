# Design: Create Venue Page

## 1. Context and Problem
Attendees and interested parties for JADE 2026 require comprehensive information about the event venue, including its exact location and details about the surrounding area. A dedicated "Venue" page, combining an interactive map with descriptive text, will fulfill this need.

## 2. Proposed Solution: Dedicated "Venue" Page with Two-Column Layout

A new, informational page will be created for the venue. It will feature a responsive two-column layout. The left column will embed a Google Map, while the right column will provide textual descriptions of the venue's surroundings.

### 2.1. Routing
A new GET route will be defined in `routes/web.php` for `/venue`. This route MUST point to a Livewire component.

### 2.2. Page Layout
The core of the page design will be a two-column layout, which will adapt responsively:
*   **Desktop/Tablet:** Two columns side-by-side.
*   **Mobile:** Columns will stack vertically, with the map typically appearing first, followed by the descriptive text.

This layout will be implemented using Tailwind CSS grid or flexbox utilities.

### 2.3. Left Column: Google Maps Embed
The left column will contain an embedded Google Map.

*   **Google Maps Embed:** An `<iframe>` provided by Google Maps Embed API will be used. This allows for an interactive map without requiring extensive JavaScript integration or API key management beyond what's needed for the embed URL.
*   **Venue Marking:** The map will be configured to display the precise location of the JADE 2026 venue. Initially, a placeholder address (e.g., "Jakarta International Convention Center") can be used if the exact coordinates are not yet available.
*   **Responsiveness:** The `<iframe>` will be styled with Tailwind CSS (e.g., `w-full h-full`) to ensure it fills its container and resizes appropriately across different screen sizes.

### 2.4. Right Column: Surroundings Description
The right column will contain descriptive text about the venue's immediate and broader surroundings.

*   **Content:** This will include information such as:
    *   Nearby accommodation options (hotels, guesthouses).
    *   Public transportation access (bus stops, train stations, taxi stands).
    *   Local amenities (restaurants, cafes, shopping centers).
    *   Notable landmarks or attractions.
*   **Styling:** The text will be styled using Tailwind CSS for typography, spacing, and readability, consistent with the website's "Professional and Informative" tone.

### 2.5. UI Framework Integration
*   **Livewire:** The page's content and structure MUST be defined within a Livewire component's render method.
*   **Tailwind CSS:** All styling will be handled by Tailwind CSS classes.
*   **HyperUI/daisyUI:** Components from these libraries can be used to wrap sections (e.g., a card for the description, a dedicated section for the map) to enhance visual presentation and alignment with the "Elegant and Sophisticated" aesthetic.

## 3. Architectural Reasoning

A dedicated "Venue" page improves user experience by consolidating critical travel and location information. The two-column layout is a common and effective pattern for presenting a map alongside descriptive content. Using a Google Maps embed simplifies integration, reduces development overhead, and provides a familiar user interface for map interaction. The content about surroundings adds significant value for out-of-town attendees. This approach leverages the existing tech stack efficiently and adheres to the project's design principles. Using a Livewire component ensures consistency with the project's preference for Livewire and offers flexibility for future dynamic updates.

## 4. Acceptance Criteria (Technical)
*   A new GET route `'/venue'` MUST be defined in `routes/web.php`.
*   A dedicated Livewire component MUST be created for the page.
*   The page MUST implement a responsive two-column layout.
*   The left column MUST contain an embedded Google Map (`<iframe>`) displaying the JADE 2026 venue location.
*   The right column MUST contain descriptive text about the venue's surroundings.
*   The page, including its layout and content, MUST be styled using Tailwind CSS, potentially incorporating HyperUI or daisyUI components, to match the website's "Elegant and Sophisticated" design.
*   The page MUST be fully responsive and function correctly across various device sizes, with columns stacking gracefully on smaller screens.
*   No broken links, map errors (e.g., invalid API key warnings), or console errors MUST be present on the "Venue" page.
