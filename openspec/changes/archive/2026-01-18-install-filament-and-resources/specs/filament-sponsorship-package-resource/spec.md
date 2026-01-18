## ADDED Requirements

### Requirement: Sponsorship Package Resource Management in Filament
A Filament resource MUST be available for managing `SponsorshipPackage` records, allowing for full CRUD operations and detailed configuration.

#### Scenario: `SponsorshipPackageResource` is available
  Given Filament is installed and configured,
  When an authenticated administrator accesses the Filament panel,
  Then a `SponsorshipPackageResource` entry MUST be visible and accessible in the navigation.

#### Scenario: `SponsorshipPackageResource` form allows creation/editing
  Given an administrator is creating or editing a sponsorship package via `SponsorshipPackageResource`,
  When the form is presented,
  Then it MUST include input fields for:
    *   `name` (text)
    *   `slug` (text)
    *   `description` (rich editor)
    *   `price` (numeric)
    *   `features` (repeater, allowing multiple text inputs)
    *   `is_active` (toggle)
    *   `order` (numeric)

#### Scenario: `SponsorshipPackageResource` table displays relevant data
  Given an administrator is viewing a list of sponsorship packages via `SponsorshipPackageResource`,
  When the table is presented,
  Then it MUST display columns for:
    *   `name`
    *   `price`
    *   `is_active` (as an icon)
    *   `order`
