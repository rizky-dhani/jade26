# filament-navigation-management Specification

## Purpose
TBD - created by archiving change update-header-navigation. Update Purpose after archive.
## Requirements
### Requirement: Navigation Item Database Management
The website MUST provide a mechanism to manage header navigation items, including their hierarchy, type, and new tab behavior, through a Filament administration interface.

#### Scenario: Database table for navigation items includes new columns
  Given the application is set up,
  When the migrations are run,
  Then the `navigation_items` table MUST include `type` (string, default 'url') and `open_new_tab` (boolean, default false) columns, in addition to existing columns.

#### Scenario: Eloquent model for navigation items handles new attributes
  Given the application is set up,
  When interacting with navigation data,
  Then an `App\Models\NavigationItem` Eloquent model MUST correctly handle the `type` and `open_new_tab` attributes.

#### Scenario: Navigation item type is configurable in Filament
  Given an authenticated administrator accesses the Filament admin panel,
  When managing navigation items,
  Then the `NavigationItemResource` form MUST include a field (e.g., `Select`) to allow administrators to choose the `type` of the navigation item (e.g., 'URL', 'File').

#### Scenario: "Open in new tab" behavior is configurable in Filament
  Given an authenticated administrator accesses the Filament admin panel,
  When managing navigation items,
  Then the `NavigationItemResource` form MUST include a field (e.g., `Toggle` or `Checkbox`) to allow administrators to configure the `open_new_tab` behavior for each navigation item.

### Requirement: Hierarchical Data Representation in Filament
The Filament interface for managing navigation items MUST clearly represent and allow modification of the hierarchical structure of the navigation.

#### Scenario: Parent-child relationships are visible in Filament
  Given an administrator is managing navigation items in Filament,
  When viewing the list of navigation items,
  Then parent-child relationships (e.g., indentation, tree view) MUST be clearly visible.

#### Scenario: Parent can be assigned to a navigation item
  Given an administrator is creating or editing a navigation item in Filament,
  When configuring the item's properties,
  Then the administrator MUST be able to assign an existing navigation item as its parent.

#### Scenario: Navigation item order can be managed
  Given an administrator is managing navigation items in Filament,
  When viewing or editing navigation items,
  Then the administrator MUST be able to define the display order of sibling navigation items.

### Requirement: Navigation Item Functionality on Frontend
The header navigation items MUST correctly implement their specified type and new tab behavior on the frontend.

#### Scenario: Links open in new tab when configured
  Given a navigation item has `open_new_tab` set to `true` in Filament,
  When the user clicks on this navigation item in the header,
  Then the link MUST open in a new browser tab.

#### Scenario: Link `rel` attribute is secure for new tabs
  Given a navigation item opens in a new tab,
  When the link is rendered in the frontend,
  Then the `<a>` tag MUST include `rel="noopener noreferrer"` for security.

#### Scenario: Frontend handles different navigation item types
  Given a navigation item has a specified `type` (e.g., 'file'),
  When the navigation item is rendered in the frontend,
  Then the frontend rendering logic MUST correctly interpret and apply behavior appropriate for that `type` (e.g., download for 'file' type).

