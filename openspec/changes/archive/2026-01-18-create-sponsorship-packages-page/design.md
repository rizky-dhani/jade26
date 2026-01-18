# Design: Create Sponsorship Packages Page

## 1. Context and Problem
The JADE 2026 website needs to present various sponsorship opportunities to potential partners. This requires a dedicated page that clearly outlines different packages, their pricing, and features. To ensure ease of management and maintain up-to-date information, the sponsorship data should be manageable through the Filament admin panel. The presentation should be professional and visually appealing, leveraging existing UI components.

## 2. Proposed Solution: Sponsorship Packages Page with Filament Management and HyperUI Components

A new page will be created to display sponsorship packages. The packages will be defined and managed within Filament, stored in a database, and rendered on the frontend using HyperUI's pricing components.

### 2.1. Data Model and Filament Integration

*   **Database Migration (`sponsorship_packages` table):**
    A new database migration will create a `sponsorship_packages` table. This table will store essential details for each package:
    *   `id` (primary key)
    *   `name` (string): e.g., "Platinum Sponsor", "Gold Sponsor"
    *   `slug` (string): unique identifier for URL friendlyness
    *   `description` (text): A brief overview of the package.
    *   `price` (decimal): The cost of the sponsorship.
    *   `features` (JSON): A JSON column to store an array of bulleted features/benefits.
    *   `is_active` (boolean): To toggle visibility on the frontend.
    *   `order` (integer): To define the display order of packages.
    *   `created_at`, `updated_at` (timestamps)

*   **Eloquent Model (`SponsorshipPackage`):**
    An `App\Models\SponsorshipPackage` Eloquent model will be created, with appropriate mass assignment protection (`$fillable` or `$guarded`) and casts (e.g., `features` to `array`).

*   **Filament Resource (`SponsorshipPackageResource`):**
    A Filament resource will be generated for `SponsorshipPackage`. This resource will provide a comprehensive interface for administrators to:
    *   Create, edit, and delete sponsorship packages.
    *   Input package name, description, price.
    *   Manage features using a Filament `Repeater` field or similar (allowing adding/removing individual features).
    *   Toggle `is_active` status.
    *   Set display `order`.

### 2.2. Frontend Page Implementation

*   **Routing:** A new GET route will be defined in `routes/web.php` for `/sponsorship-packages`. This route MUST point to a Livewire component.
*   **Data Fetching:** The Livewire component or Blade view will query the `SponsorshipPackage` model to retrieve active sponsorship packages, ideally ordered by the `order` column.
*   **HyperUI Pricing Components:** The fetched data will be rendered using appropriate "Pricing" components from HyperUI. These components are designed to present different tiers of features and costs in a clear, comparative format.
    *   The component will loop through the `SponsorshipPackage` collection.
    *   Each package's `name`, `description`, `price`, and `features` will be dynamically inserted into the HyperUI component's structure.
*   **Styling:** The page will be styled using Tailwind CSS for overall layout, spacing, typography, and any custom adjustments to the HyperUI components. The styling will adhere to the "Elegant and Sophisticated" visual aesthetic.

### 2.3. Responsiveness
The page will be designed with responsiveness in mind. HyperUI components are typically responsive out-of-the-box, but responsive Tailwind CSS utilities will be used to ensure the overall page layout and pricing components adapt gracefully to various screen sizes.

## 3. Architectural Reasoning

This solution leverages Filament for robust backend management, allowing non-developers to maintain critical business data (sponsorship packages). By using HyperUI for the frontend presentation, design consistency and accelerated development are achieved. The separation of data management (Filament/database) from presentation (Livewire/HyperUI) promotes a modular and scalable architecture. This approach adheres to the project's tech stack and design principles, offering a complete and maintainable solution. Using a Livewire component ensures consistency with the project's preference for Livewire and offers flexibility for future dynamic updates.

## 4. Acceptance Criteria (Technical)
*   A database migration MUST create a `sponsorship_packages` table with `name`, `slug`, `description`, `price`, `features` (JSON), `is_active`, and `order` columns.
*   An `App\Models\SponsorshipPackage` Eloquent model MUST exist, correctly configured for the `sponsorship_packages` table and JSON casting for features.
*   A `SponsorshipPackageResource` MUST be available in Filament, allowing administrators to create, edit, delete, and reorder sponsorship packages, and manage their features.
*   A new GET route `'/sponsorship-packages'` MUST be defined in `routes/web.php`.
*   A dedicated Livewire component MUST be created for the "Sponsorship Packages" page.
*   The page MUST dynamically fetch active `SponsorshipPackage` data from the database.
*   The fetched `SponsorshipPackage` data MUST be rendered using HyperUI Pricing components.
*   The page MUST be styled using Tailwind CSS, HyperUI, and/or daisyUI components, aligning with the website's "Elegant and Sophisticated" design.
*   The page MUST be fully responsive and function correctly across various device sizes.
*   No broken links or console errors MUST be present on the "Sponsorship Packages" page.
