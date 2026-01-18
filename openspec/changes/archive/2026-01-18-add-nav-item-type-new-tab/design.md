# Design: Add 'type' and 'open_new_tab' Columns to Navigation Items

## 1. Context and Problem
The current navigation item structure, while hierarchical, implicitly assumes all navigation items are simple URLs that open in the same tab. To provide more flexibility and control for content editors, and to improve the user experience for external links or document downloads, explicit fields for link type and target behavior are needed. This modification extends the existing Filament-managed navigation data model.

## 2. Proposed Solution: Extending `navigation_items` with `type` and `open_new_tab`

The solution involves adding two new columns to the `navigation_items` database table, updating the Eloquent model, integrating corresponding fields into the Filament resource, and modifying the frontend rendering logic to utilize these new attributes.

### 2.1. Database Schema Modification
A new migration will add the following columns to the `navigation_items` table:

*   **`type` (string):** This column will store the type of the navigation item.
    *   **Data Type:** `VARCHAR(255)`
    *   **Default Value:** 'url'
    *   **Allowed Values (conceptual enum):** 'url', 'file', 'route' (or more as needed)
    *   **Rationale:** Allows the frontend to render different link types (e.g., standard `<a>` for URL, `<a>` with download attribute for File, or `<a>` with `route()` helper for named routes).

*   **`open_new_tab` (boolean):** This column will indicate whether the link should open in a new browser tab.
    *   **Data Type:** `BOOLEAN`
    *   **Default Value:** `false`
    *   **Rationale:** Provides content editors control over link target behavior. Frontend will apply `target="_blank" rel="noopener noreferrer"` if true.

### 2.2. Eloquent Model (`App\Models\NavigationItem`) Update
The `App\Models\NavigationItem` model will be updated to include `type` and `open_new_tab` in its fillable attributes. Appropriate casts might be added if `type` were to become an enum in the future, but for a simple string, it's not strictly necessary beyond ensuring it's fillable.

### 2.3. Filament Resource (`NavigationItemResource`) Update
The `NavigationItemResource` will be modified to include new form fields:

*   **`type` field:** A `Select` field will be added, offering administrators a dropdown to choose the link type (e.g., 'URL', 'File', 'Route'). The options will be mapped to the database string values.
*   **`open_new_tab` field:** A `Toggle` or `Checkbox` field will be added, allowing administrators to easily enable or disable opening the link in a new tab.

These fields will be integrated into the existing form schema of the `NavigationItemResource`.

### 2.4. Frontend Header Component Rendering Logic
The `resources/views/components/header.blade.php` (or relevant Blade/Livewire component) will be updated to consume these new attributes:

*   **`open_new_tab` Handling:** If `open_new_tab` is `true`, the `<a>` tag will dynamically include `target="_blank"` and `rel="noopener noreferrer"` for security and best practice.
*   **`type` Handling:**
    *   If `type` is 'url' (default): Render as a standard `<a>` tag with the provided `url`.
    *   If `type` is 'file': Render as an `<a>` tag, potentially with a `download` attribute, and ensure the `url` points to the downloadable file.
    *   If `type` is 'route': Use Laravel's `route()` helper with the provided `url` (which would be the route name) to generate the correct URL. This will require some additional logic to pass parameters if needed (future consideration for complex routing).

## 3. Architectural Reasoning

This modification enhances the flexibility and maintainability of the navigation system without introducing significant architectural overhead. By centralizing the management of link behavior and type within Filament, content editors gain granular control over the navigation, reducing the need for developer intervention for common updates. This approach aligns with the existing Filament-based navigation strategy and the project's goal of dynamic content management. The frontend changes are purely presentational, consuming the data provided by the backend.

## 4. Acceptance Criteria (Technical)
*   A new database migration MUST successfully add `type` (string, default 'url') and `open_new_tab` (boolean, default false) columns to the `navigation_items` table.
*   The `App\Models\NavigationItem` Eloquent model MUST correctly handle the `type` and `open_new_tab` attributes.
*   The `NavigationItemResource` in Filament MUST include form fields (e.g., Select for `type`, Toggle/Checkbox for `open_new_tab`) for administrators to manage these attributes.
*   When `open_new_tab` is `true` for a navigation item, the corresponding `<a>` tag in the frontend header MUST include `target="_blank" rel="noopener noreferrer"`.
*   The frontend header rendering logic MUST correctly interpret and apply behavior based on the `type` attribute (at least for 'url' and 'file' types).
*   All existing navigation functionality MUST remain intact.
*   No database, Filament, or frontend errors related to these changes.
