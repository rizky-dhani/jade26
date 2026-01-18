# Design: Update Header Navigation Items

## 1. Context and Problem
The current navigation structure of the JADE 2026 website, likely a flat list, is insufficient for the hierarchical content specified by the user. A more organized, multi-level navigation is required to improve user experience and information discoverability. The existing header component in `resources/views/components/header.blade.php` needs to be adapted to support this new structure, integrating with both Tailwind CSS, HyperUI, and daisyUI.

## 2. Proposed Solution: Hierarchical Navigation with UI Libraries

The solution involves defining a clear data structure for the new navigation and rendering it within the existing header component, leveraging the styling and interactive capabilities of Tailwind CSS, HyperUI, and daisyUI.

### 2.1. Navigation Data Structure
The navigation structure will be managed through Filament resources, allowing for dynamic updates via the administration panel. This involves:
*   **Database Schema:** A new migration will create a `navigation_items` table to store hierarchical navigation data (e.g., `label`, `url`, `parent_id`, `order`, `type`).
*   **Eloquent Model:** An `App\Models\NavigationItem` model will be created to interact with this table, defining relationships for hierarchical structures (e.g., self-referencing `parent` and `children`).
*   **Filament Resource:** A `NavigationItemResource` will be created to provide a user-friendly interface within the Filament admin panel for creating, editing, reordering, and deleting navigation items, including nesting capabilities.
*   **Data Fetching:** The header component will fetch navigation items from the database, typically cached for performance, ensuring the latest navigation structure is always displayed.

### 2.2. Header Component Modification (`resources/views/components/header.blade.php`)

The Blade template will be modified to recursively render the navigation items. This approach allows for flexible nesting.

**High-level rendering logic:**

1.  Retrieve the navigation data from the database, likely through a dedicated service or directly from the `NavigationItem` model (e.g., `NavigationItem::getHierarchicalMenu()`).
2.  Loop through the parent navigation items.
3.  For each parent item:
    *   Render the main link.
    *   If `children` exist, render a dropdown/sub-menu structure.
    *   Recursively render first-child and second-child items within their respective containers.

### 2.3. Styling and Interactivity

*   **Tailwind CSS:** All styling for layout, typography, colors, and responsive behavior will utilize Tailwind CSS utility classes. This ensures consistency with the project's overall design system.
*   **HyperUI/daisyUI:** Where applicable, pre-built components or patterns from HyperUI and daisyUI will be adapted for dropdown menus or off-canvas mobile navigation. This will accelerate development and leverage existing UI library benefits.
    *   For dropdowns, a combination of Tailwind's `group` and `group-hover` classes, potentially with daisyUI's `dropdown` component or HyperUI's similar patterns, will be used to show/hide child menus.
    *   For mobile, an off-canvas menu (e.g., a "hamburger" menu) will be implemented, likely using a Livewire component for toggle state and Tailwind for transitions.

### 2.4. Responsiveness
The navigation MUST be fully responsive. On smaller screens, the multi-level menu will collapse into a toggleable (e.g., hamburger) menu, revealing the full hierarchy upon interaction. This will involve using Tailwind's responsive prefixes (e.g., `md:hidden`, `lg:flex`).

### 2.5. Accessibility
Standard accessibility practices will be followed:
*   Use semantic HTML (`<nav>`, `<ul>`, `<li>`, `<a>`).
*   Implement `aria-` attributes (e.g., `aria-haspopup`, `aria-expanded`) for dropdowns and interactive elements.
*   Ensure full keyboard navigability for all menu items and sub-items.

## 3. Architectural Reasoning

This updated approach significantly enhances maintainability and flexibility. By moving navigation management to Filament resources and the database, content editors can dynamically update the navigation structure through a user-friendly interface without requiring code changes. This aligns with the project's use of Filament for administrative tasks. The header component will become a consumer of this managed data, promoting a cleaner separation of concerns. Leveraging existing UI libraries (Tailwind CSS, HyperUI, daisyUI) continues to ensure a consistent and efficient styling approach, while native CSS `position: sticky` (from the previous proposal) will continue to manage the header's fixed behavior without interference. Caching mechanisms will be crucial to ensure optimal performance when fetching navigation data from the database.

## 4. Acceptance Criteria (Technical)
*   A Filament resource (`NavigationItemResource`) and corresponding database table (`navigation_items`) MUST be used to define and manage the hierarchical navigation structure.
*   `resources/views/components/header.blade.php` MUST dynamically render the parent, first-child, and second-child navigation items based on the defined structure.
*   The navigation MUST be styled using Tailwind CSS, HyperUI, and/or daisyUI components to match the website's design.
*   Dropdown functionality for child navigation MUST be implemented using CSS-only solutions or minimal JavaScript, ensuring smooth user interaction.
*   The navigation MUST be fully responsive, providing an intuitive experience on all device sizes, including a mobile-specific menu toggle.
*   All interactive navigation elements MUST be accessible via keyboard and screen readers, incorporating relevant `aria-` attributes.
*   No JavaScript errors related to the navigation functionality should be present in the console.
