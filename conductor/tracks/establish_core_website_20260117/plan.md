# Plan: Establish Core Website Structure and Event Listing

This plan outlines the steps to establish the core website structure for JADE 2026, integrate frontend technologies, and display event listings.

## Phase 1: Core Application Setup and Frontend Integration

- [x] **Task: Set up Laravel Application**
    - [x] Write Tests: Verify basic Laravel installation and homepage route.
    - [x] Implement Feature: Install Laravel 12.
    - [x] Implement Feature: Configure `.env` for MariaDB connection.
    - [x] Implement Feature: Ensure basic routing for `/` is functional.
- [x] **Task: Integrate Livewire**
    - [x] Write Tests: Verify Livewire is installed and a basic component renders.
    - [x] Implement Feature: Install and configure Livewire 4.
- [x] **Task: Integrate Tailwind CSS 4.1**
    - [x] Write Tests: Verify Tailwind CSS is compiling and basic utility classes are applied.
    - [x] Implement Feature: Install Tailwind CSS 4.1.
    - [x] Implement Feature: Configure `postcss.config.js` and `tailwind.config.js` (if needed for v4).
    - [x] Implement Feature: Integrate Tailwind CSS into `resources/css/app.css` and `vite.config.js`.
- [x] **Task: Integrate HyperUI Components**
    - [x] Implement Feature: Explore HyperUI components and understand their usage with Tailwind CSS.
    - [x] Implement Feature: Set up a basic example of a HyperUI component.
- [x] **Task: Configure Vite**
    - [x] Implement Feature: Ensure `vite.config.js` is correctly configured for Laravel, Livewire, and Tailwind CSS.
    - [x] Implement Feature: Verify asset compilation is working.
- [x] Task: Conductor - User Manual Verification 'Core Application Setup and Frontend Integration' (Protocol in workflow.md)

## Phase 2: Event Data Management and Display

- [x] **Task: Create Events Database Migration**
    - [x] Write Tests: Verify the `events` table can be created and has the correct columns.
    - [x] Implement Feature: Create `create_events_table` migration with `title`, `description`, `date`, `time`, `location` columns.
    - [x] Implement Feature: Run migration.
- [x] **Task: Create Event Eloquent Model**
    - [x] Write Tests: Verify `Event` model can create, read, update, and delete records.
    - [x] Implement Feature: Create `Event` model (`app/Models/Event.php`).
    - [x] Implement Feature: Define fillable attributes and casts in `Event` model.
- [x] **Task: Create Event Factory and Seeder**
    - [x] Write Tests: Verify factory can generate valid event data and seeder populates the database.
    - [x] Implement Feature: Create `EventFactory` to generate dummy event data.
    - [x] Implement Feature: Create `EventSeeder` to use the factory and populate the `events` table.
    - [x] Implement Feature: Run seeder.
- [x] **Task: Display Upcoming Events on Homepage**
    - [x] Write Tests: Verify the homepage loads and displays event data correctly, applying styling.
    - [x] Implement Feature: Create a Livewire component to fetch and display events.
    - [x] Implement Feature: Integrate the Livewire component into `resources/views/welcome.blade.php`.
    - [x] Implement Feature: Apply Tailwind CSS and HyperUI classes for styling the event list.
- [x] Task: Conductor - User Manual Verification 'Event Data Management and Display' (Protocol in workflow.md)