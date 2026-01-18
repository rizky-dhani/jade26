# Tasks: Add 'type' and 'open_new_tab' Columns to Navigation Items

This document outlines the tasks required to add `type` and `open_new_tab` columns to navigation items.

## Phase 1: Database and Model Updates

- [x] Task: Create new migration to add columns
    - [x] Generate a new migration (`php artisan make:migration add_type_and_open_new_tab_to_navigation_items_table`).
    - [x] Add `type` column (e.g., `string`, nullable, default 'url') and `open_new_tab` column (`boolean`, default false) to the `navigation_items` table.
    - [x] Run `php artisan migrate`.
- [x] Task: Update `NavigationItem` Eloquent Model
    - [x] Add `type` and `open_new_tab` to the `$fillable` array or ensure they are not guarded.
    - [x] Optionally, define default values or casts for these attributes.
- [x] Task: Conductor - User Manual Verification 'Database and Model Updates' (Protocol in workflow.md)

## Phase 2: Filament Resource and Frontend Integration

- [x] Task: Update `NavigationItemResource` in Filament
    - [x] Add a `Select` field for `type` (e.g., options: 'URL', 'File') to the Filament form schema. (Skipped: Filament not installed).
    - [x] Add a `Toggle` or `Checkbox` field for `open_new_tab` to the Filament form schema. (Skipped: Filament not installed).
- [x] Task: Update frontend header component logic
    - [x] Modify `resources/views/components/header.blade.php` to access `open_new_tab` and `type` attributes for each navigation item.
    - [x] Conditionally add `target="_blank" rel="noopener noreferrer"` to `<a>` tags if `open_new_tab` is true.
    - [x] Implement conditional rendering or linking based on the `type` (e.g., if `type` is 'file', construct a download link, else a regular URL link).
- [x] Task: Verify functionality in Filament
    - [x] Create/edit navigation items in the Filament admin panel, setting different types and `open_new_tab` values. (Skipped: Filament not installed).
- [x] Task: Verify frontend navigation behavior
    - [x] Navigate the website and test various navigation links configured with different `type` and `open_new_tab` settings.
- [x] Task: Conductor - User Manual Verification 'Filament Resource and Frontend Integration' (Protocol in workflow.md)