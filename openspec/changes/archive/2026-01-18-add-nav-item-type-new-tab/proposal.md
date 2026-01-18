# Proposal: Add 'type' and 'open_new_tab' Columns to Navigation Items

## Why
Currently, navigation items are implicitly assumed to be simple URLs. Introducing a `type` column provides flexibility to handle different types of navigation targets, such as downloadable files or internal routes. The `open_new_tab` boolean column gives administrators control over link behavior, allowing external links or specific documents to open without navigating away from the current page.

## What Changes
- Add `type` (string, default 'url') and `open_new_tab` (boolean, default false) columns to the `navigation_items` database table.
- Update the `App\Models\NavigationItem` Eloquent model to include these new attributes.
- Modify the `NavigationItemResource` in Filament to expose form fields for these new columns.
- Update the header component rendering logic to conditionally apply `target="_blank"` and `rel="noopener noreferrer"` based on the `open_new_tab` value, and handle the 'file' type with a `download` attribute.

## Impact
- Affected specs: `filament-navigation-management` (MODIFIED).
- Affected code: `app/Models/NavigationItem.php`, `database/migrations/`, `resources/views/components/header.blade.php`.

## 1. Overview
This proposal details the modification of the `navigation_items` database table and the corresponding Filament resource to include two new columns: `type` and `open_new_tab`. The `type` column will allow administrators to specify the nature of a navigation item's target (e.g., URL, File), and `open_new_tab` will control whether the link opens in a new browser tab.

## 2. Rationale
Currently, navigation items are implicitly assumed to be simple URLs. Introducing a `type` column provides flexibility to handle different types of navigation targets, such as downloadable files or internal routes, which might require different rendering logic on the frontend. The `open_new_tab` boolean column gives administrators control over link behavior, enhancing user experience by allowing external links or specific documents to open without navigating away from the current page. This improves content accessibility and aligns with best practices for external linking.

## 3. Scope
This change involves:
*   Adding `type` (string, enum or similar) and `open_new_tab` (boolean) columns to the `navigation_items` database table via a new migration.
*   Updating the `App\Models\NavigationItem` Eloquent model to include these new attributes.
*   Modifying the `NavigationItemResource` in Filament to expose form fields for these new columns, allowing administrators to select the type and toggle the "open in new tab" behavior.
*   Updating the header component rendering logic to conditionally apply `target="_blank"` and `rel="noopener noreferrer"` based on the `open_new_tab` value, and potentially adapt rendering based on the `type`.

## 4. Dependencies
*   The existing `update-header-navigation` proposal, specifically the `filament-navigation-management` spec delta.
*   The `navigation_items` database table and `App\Models\NavigationItem` model.
*   The `NavigationItemResource` in Filament.
*   The frontend header component (`resources/views/components/header.blade.php`) for rendering logic.

## 5. High-Level Plan
1.  Create a new database migration to add the `type` and `open_new_tab` columns to `navigation_items` table.
2.  Update the `App\Models\NavigationItem` model to reflect the new attributes.
3.  Modify the `NavigationItemResource` in Filament to include input fields for `type` (e.g., a dropdown/select) and `open_new_tab` (e.g., a toggle/checkbox).
4.  Update the header component's Blade view logic to:
    *   Conditionally add `target="_blank" rel="noopener noreferrer"` to links if `open_new_tab` is true.
    *   Potentially adapt link rendering based on the `type` (e.g., if type is 'file', link to a download).
5.  Ensure proper styling and validation for the new fields in Filament.
6.  Verify frontend behavior of links.

## 6. Future Considerations
*   More sophisticated handling of different navigation item types (e.g., custom icon for file downloads).
*   Integration with a file manager in Filament for 'File' type links.

## 7. Acceptance Criteria
*   The `navigation_items` table MUST include `type` (string) and `open_new_tab` (boolean) columns.
*   The `NavigationItem` model MUST correctly handle the new `type` and `open_new_tab` attributes.
*   The `NavigationItemResource` in Filament MUST allow administrators to select the `type` and toggle `open_new_tab` for each navigation item.
*   Links in the header navigation MUST open in a new tab when `open_new_tab` is true.
*   Links in the header navigation MUST handle different `type` values (e.g., 'url', 'file') correctly on the frontend.
*   No breaking changes to existing navigation functionality.
*   No errors in Filament or on the frontend.