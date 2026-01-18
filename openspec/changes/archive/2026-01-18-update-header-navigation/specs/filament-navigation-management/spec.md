## ADDED Requirements

### Requirement: Navigation Item Database Management
The website MUST provide a mechanism to manage header navigation items, including their hierarchy, through a Filament administration interface.

#### Scenario: Database table for navigation items exists
  Given the application is set up,
  When the migrations are run,
  Then a `navigation_items` table MUST exist in the database with columns for `label`, `url`, `parent_id`, `order`, and `is_active`.

#### Scenario: Eloquent model for navigation items is available
  Given the application is set up,
  When interacting with navigation data,
  Then an `App\Models\NavigationItem` Eloquent model MUST exist, capable of representing hierarchical relationships.

#### Scenario: Navigation items are manageable via Filament
  Given an authenticated administrator accesses the Filament admin panel,
  When navigating to the `NavigationItemResource`,
  Then the administrator MUST be able to create, read, update, delete, and reorder navigation items, including assigning parent-child relationships.

#### Scenario: Header component fetches data from the database
  Given the header component is rendered,
  When it displays navigation links,
  Then it MUST fetch the navigation data from the `navigation_items` table via the `NavigationItem` model, and not from a static configuration file.

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
