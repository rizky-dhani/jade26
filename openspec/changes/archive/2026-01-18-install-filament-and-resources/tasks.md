# Tasks: Install Filament 4 and Create Required Resources

This document outlines the tasks required to install Filament 4 and set up its initial resources for navigation and sponsorship management.

## Phase 1: Filament Installation and Panel Configuration

- [x] Task: Install Filament 4 via Composer
    - [x] Run `composer require filament/filament:"^5.0"` (Installed v5 for Livewire 4 compatibility).
- [x] Task: Publish Filament assets and configuration
    - [x] Run `php artisan filament:install --panels --no-interaction`.
- [x] Task: Create initial Filament user
    - [x] Run `php artisan make:filament-user` to create an administrator account (`admin@jade2026.com`).
- [x] Task: Configure "dashboard" panel
    - [x] In `app/Providers/Filament/AdminPanelProvider.php` (or similar panel provider), ensure the panel is named 'dashboard'.
    - [x] Confirm basic access to `/dashboard` route.
- [x] Task: Conductor - User Manual Verification 'Filament Installation and Panel Configuration' (Protocol in workflow.md)

## Phase 2: NavigationItemResource Creation and Configuration

- [x] Task: Generate `NavigationItemResource`
    - [x] Run `php artisan make:filament-resource NavigationItem`.
- [x] Task: Configure `NavigationItemResource` form schema
    - [x] In `app/Filament/Resources/NavigationItems/Schemas/NavigationItemForm.php`, define `configure()` method.
    - [x] Add `TextInput::make('label')`, `TextInput::make('url')`.
    - [x] Add `Select::make('parent_id')` with options from `NavigationItem::class` (for hierarchical structure).
    - [x] Add `TextInput::make('order')`.
    - [x] Add `Toggle::make('is_active')`.
    - [x] Add `Select::make('type')->options(['url' => 'URL', 'file' => 'File', 'route' => 'Route'])->default('url')`.
    - [x] Add `Toggle::make('open_new_tab')->default(false)`.
- [x] Task: Configure `NavigationItemResource` table schema
    - [x] In `app/Filament/Resources/NavigationItems/Tables/NavigationItemsTable.php`, define `configure()` method.
    - [x] Add `TextColumn::make('label')`, `TextColumn::make('url')`, `TextColumn::make('parent.label')`, `TextColumn::make('order')`, `IconColumn::make('is_active')`, `TextColumn::make('type')`, `IconColumn::make('open_new_tab')`.
    - [x] Ensure sortable and searchable properties where appropriate.
- [x] Task: Conductor - User Manual Verification 'NavigationItemResource Creation and Configuration' (Protocol in workflow.md)

## Phase 3: SponsorshipPackageResource Creation and Configuration

- [x] Task: Generate `SponsorshipPackageResource`
    - [x] Run `php artisan make:filament-resource SponsorshipPackage`.
- [x] Task: Configure `SponsorshipPackageResource` form schema
    - [x] In `app/Filament/Resources/SponsorshipPackages/Schemas/SponsorshipPackageForm.php`, define `configure()` method.
    - [x] Add `TextInput::make('name')`, `TextInput::make('slug')`.
    - [x] Add `RichEditor::make('description')`.
    - [x] Add `TextInput::make('price')->numeric()`.
    - [x] Add `Repeater::make('features')->schema([TextInput::make('feature')])` (for bulleted features).
    - [x] Add `Toggle::make('is_active')`.
    - [x] Add `TextInput::make('order')->numeric()`.
- [x] Task: Configure `SponsorshipPackageResource` table schema
    - [x] In `app/Filament/Resources/SponsorshipPackages/Tables/SponsorshipPackagesTable.php`, define `configure()` method.
    - [x] Add `TextColumn::make('name')`, `TextColumn::make('price')`, `IconColumn::make('is_active')`, `TextColumn::make('order')`.
    - [x] Ensure sortable and searchable properties where appropriate.
- [x] Task: Conductor - User Manual Verification 'SponsorshipPackageResource Creation and Configuration' (Protocol in workflow.md)