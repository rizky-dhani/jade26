## ADDED Requirements

### Requirement: Navigation Item Resource Management in Filament
A Filament resource MUST be available for managing `NavigationItem` records, allowing for full CRUD operations and hierarchical configuration.

#### Scenario: `NavigationItemResource` is available
  Given Filament is installed and configured,
  When an authenticated administrator accesses the Filament panel,
  Then a `NavigationItemResource` entry MUST be visible and accessible in the navigation.

#### Scenario: `NavigationItemResource` form allows creation/editing
  Given an administrator is creating or editing a navigation item via `NavigationItemResource`,
  When the form is presented,
  Then it MUST include input fields for:
    *   `label` (text)
    *   `url` (text)
    *   `parent_id` (select, populated with other `NavigationItem` records)
    *   `order` (numeric)
    *   `is_active` (toggle)
    *   `type` (select, with options like 'URL', 'File', 'Route')
    *   `open_new_tab` (toggle)

#### Scenario: `NavigationItemResource` table displays relevant data
  Given an administrator is viewing a list of navigation items via `NavigationItemResource`,
  When the table is presented,
  Then it MUST display columns for:
    *   `label`
    *   `url`
    *   `parent.label` (or similar representation of parent)
    *   `order`
    *   `is_active` (as an icon)
    *   `type`
    *   `open_new_tab` (as an icon)
