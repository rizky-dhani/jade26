# Design: Install Filament 4 and Create Required Resources

## 1. Context and Problem
The JADE 2026 project requires an administrative interface to manage dynamic content, specifically navigation items and sponsorship packages. Filament 4 has been identified as the preferred admin panel technology. The current state lacks this foundational admin infrastructure and its associated resources.

## 2. Proposed Solution: Filament 4 Installation and Resource Generation

The solution involves a phased approach: first, installing Filament 4 and configuring its primary panel, then generating and setting up the specific Filament resources required for `NavigationItem` and `SponsorshipPackage` models.

### 2.1. Filament 4 Installation
Filament will be installed via Composer, and its essential assets and configuration files will be published using Artisan commands. A default administrator user will also be created to enable access to the panel.

*   **Composer Installation:** The standard Composer command for Filament will be executed.
*   **Artisan Commands:** `filament:install` will publish necessary files, and `make:filament-user` will create the initial admin account.

### 2.2. Panel Configuration ("dashboard")
Filament allows for multiple panels. For this project, a single panel named "dashboard" will be configured. This name will be set within the generated `AdminPanelProvider` (e.g., `app/Providers/Filament/AdminPanelProvider.php`).

### 2.3. `NavigationItemResource` Design
Based on the `update-header-navigation` and `add-nav-item-type-new-tab` proposals, the `NavigationItemResource` will manage navigation links.

*   **Model:** `App\Models\NavigationItem`
*   **Form Schema:**
    *   `TextInput::make('label')`: For the display text of the navigation item.
    *   `TextInput::make('url')`: For the target URL or route name.
    *   `Select::make('parent_id')`: A dropdown to select a parent navigation item, enabling hierarchical structuring. This will dynamically load options from existing `NavigationItem` records.
    *   `TextInput::make('order')`: A numeric field to control the display order of sibling navigation items.
    *   `Toggle::make('is_active')`: A boolean switch to activate/deactivate the navigation item.
    *   `Select::make('type')`: A dropdown to select the type of link (e.g., 'URL', 'File', 'Route'). Defaults to 'URL'.
    *   `Toggle::make('open_new_tab')`: A boolean switch to open the link in a new browser tab. Defaults to `false`.
*   **Table Schema:**
    *   `TextColumn::make('label')`, `TextColumn::make('url')`, `TextColumn::make('parent.label')`, `TextColumn::make('order')`, `IconColumn::make('is_active')`, `TextColumn::make('type')`, `IconColumn::make('open_new_tab')`.
    *   Columns will be searchable and sortable where appropriate.

### 2.4. `SponsorshipPackageResource` Design
Based on the `create-sponsorship-packages-page` proposal, the `SponsorshipPackageResource` will manage sponsorship tiers.

*   **Model:** `App\Models\SponsorshipPackage`
*   **Form Schema:**
    *   `TextInput::make('name')`: For the name of the sponsorship package.
    *   `TextInput::make('slug')`: A unique, URL-friendly identifier.
    *   `RichEditor::make('description')`: A rich text editor for a detailed package description.
    *   `TextInput::make('price')->numeric()`: A numeric input for the sponsorship cost.
    *   `Repeater::make('features')`: A flexible field allowing administrators to add multiple text inputs for individual features/benefits of the package.
    *   `Toggle::make('is_active')`: A boolean switch to activate/deactivate the package's visibility.
    *   `TextInput::make('order')->numeric()`: A numeric field to control the display order of packages.
*   **Table Schema:**
    *   `TextColumn::make('name')`, `TextColumn::make('price')`, `IconColumn::make('is_active')`, `TextColumn::make('order')`.
    *   Columns will be searchable and sortable where appropriate.

## 3. Architectural Reasoning

Integrating Filament provides a robust, user-friendly, and extensible administrative interface, which is a core component for managing dynamic content on modern websites. By centralizing content management within Filament, the project reduces reliance on developers for content updates, thereby increasing operational agility. The choice of Filament aligns with the Laravel ecosystem and leverages its conventions, ensuring maintainability and scalability. This setup forms the backbone for content updates and future administrative features.

## 4. Acceptance Criteria (Technical)
*   Filament 4 MUST be installed and configured as specified.
*   The Filament admin panel MUST be accessible via the `/dashboard` route (or configured equivalent).
*   `NavigationItemResource` MUST be correctly generated and configured in Filament, supporting CRUD operations for `NavigationItem` model with all specified fields (`label`, `url`, `parent_id`, `order`, `is_active`, `type`, `open_new_tab`).
*   `SponsorshipPackageResource` MUST be correctly generated and configured in Filament, supporting CRUD operations for `SponsorshipPackage` model with all specified fields (`name`, `slug`, `description`, `price`, `features`, `is_active`, `order`).
*   The configured Filament resources MUST correctly interact with their respective Eloquent models and database tables.
*   No errors MUST occur during Filament installation or resource access/usage.
