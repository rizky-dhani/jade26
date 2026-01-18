## MODIFIED Requirements

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

## ADDED Requirements

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