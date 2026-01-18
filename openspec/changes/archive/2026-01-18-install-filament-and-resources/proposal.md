# Proposal: Install Filament 4 and Create Required Resources

## Why
To provide an intuitive admin panel for managing dynamic content like navigation items and sponsorship packages, improving operational efficiency and ensuring content remains up-to-date.

## What Changes
- Install Filament 5 (latest stable version compatible with Livewire 4).
- Configure a "dashboard" panel accessible via `/dashboard`.
- Create `NavigationItemResource` with fields for hierarchy, link type, and new tab behavior.
- Create `SponsorshipPackageResource` with fields for pricing, features, and active status.
- Create an initial administrator user.

## Impact
- Affected specs: `filament-navigation-management`, `filament-sponsorship-management`.
- Affected code: `app/Filament`, `app/Providers/Filament`, `config/filament.php`.

## 1. Overview
This proposal outlines the installation of Filament 4 (latest version) into the JADE 2026 Laravel application. Following the installation, a Filament panel named "dashboard" will be configured. Subsequently, the necessary Filament resources (`NavigationItemResource` and `SponsorshipPackageResource`) will be generated and configured based on previously defined specifications.

## 2. Rationale
Filament 4 provides a powerful and intuitive admin panel for Laravel applications. Integrating Filament will enable event organizers to manage critical website content dynamically, such as navigation items and sponsorship packages, without requiring direct code modifications. This significantly improves operational efficiency and ensures content remains up-to-date, aligning with the project's goal for a maintainable and user-friendly backend.

## 3. Scope
This change involves:
*   Installing Filament 4 via Composer.
*   Publishing Filament assets and configuration files.
*   Creating a Filament panel named "dashboard".
*   Generating `NavigationItemResource` and configuring its form and table schema based on the `update-header-navigation` and `add-nav-item-type-new-tab` proposals.
*   Generating `SponsorshipPackageResource` and configuring its form and table schema based on the `create-sponsorship-packages-page` proposal.
*   Ensuring the necessary models and migrations for `NavigationItem` and `SponsorshipPackage` are (or will be) in place.

## 4. Dependencies
*   Existing Laravel application (JADE 2026 website).
*   Composer for package management.
*   PHP 8.4.15 (as per project context).
*   Existing database (MariaDB).
*   `update-header-navigation` proposal for `NavigationItemResource` details.
*   `add-nav-item-type-new-tab` proposal for `NavigationItemResource` column details.
*   `create-sponsorship-packages-page` proposal for `SponsorshipPackageResource` details.

## 5. High-Level Plan
1.  Run Composer command to install Filament 4.
2.  Run Artisan commands to publish Filament assets and create a user.
3.  Configure the default Filament panel, naming it "dashboard".
4.  Generate `NavigationItemResource` using `php artisan make:filament-resource NavigationItem`.
5.  Implement form fields (label, url, parent_id, order, is_active, type, open_new_tab) and table columns for `NavigationItemResource`.
6.  Generate `SponsorshipPackageResource` using `php artisan make:filament-resource SponsorshipPackage`.
7.  Implement form fields (name, description, price, features, is_active, order) and table columns for `SponsorshipPackageResource`.
8.  Ensure existing migrations for `navigation_items` and `sponsorship_packages` tables are ready or created as part of their respective proposals.
9.  Verify Filament admin panel access and resource functionality.

## 6. Future Considerations
*   Implementing Filament authentication and authorization (roles/permissions).
*   Customizing Filament theme and dashboard widgets.
*   Adding more Filament resources for other dynamic content (e.g., events, speakers).

## 7. Acceptance Criteria
*   Filament 4 MUST be successfully installed in the Laravel application.
*   A Filament panel named "dashboard" MUST be accessible.
*   `NavigationItemResource` MUST be available in the "dashboard" panel, allowing full CRUD operations for navigation items with `label`, `url`, `parent_id`, `order`, `is_active`, `type`, and `open_new_tab` fields.
*   `SponsorshipPackageResource` MUST be available in the "dashboard" panel, allowing full CRUD operations for sponsorship packages with `name`, `description`, `price`, `features`, `is_active`, and `order` fields.
*   The Filament admin panel MUST be accessible without errors.
*   Filament resources MUST correctly interact with their respective database tables.