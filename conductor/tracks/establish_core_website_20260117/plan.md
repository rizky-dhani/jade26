# Plan: Establish Core Website Structure and Event Listing

This plan outlines the steps to establish the core website structure for JADE 2026, integrate frontend technologies, and display event listings.

## Phase 1: Core Application Setup and Frontend Integration

- [ ] **Task: Set up Laravel Application**
    - [ ] Write Tests: Verify basic Laravel installation and homepage route.
    - [ ] Implement Feature: Install Laravel 12.
    - [ ] Implement Feature: Configure `.env` for MariaDB connection.
    - [ ] Implement Feature: Ensure basic routing for `/` is functional.
- [ ] **Task: Integrate Livewire**
    - [ ] Write Tests: Verify Livewire is installed and a basic component renders.
    - [ ] Implement Feature: Install and configure Livewire 4.
- [ ] **Task: Integrate Tailwind CSS 4.1**
    - [ ] Write Tests: Verify Tailwind CSS is compiling and basic utility classes are applied.
    - [ ] Implement Feature: Install Tailwind CSS 4.1.
    - [ ] Implement Feature: Configure `postcss.config.js` and `tailwind.config.js` (if needed for v4).
    - [ ] Implement Feature: Integrate Tailwind CSS into `resources/css/app.css` and `vite.config.js`.
- [ ] **Task: Integrate HyperUI Components**
    - [ ] Implement Feature: Explore HyperUI components and understand their usage with Tailwind CSS.
    - [ ] Implement Feature: Set up a basic example of a HyperUI component.
- [ ] **Task: Configure Vite**
    - [ ] Implement Feature: Ensure `vite.config.js` is correctly configured for Laravel, Livewire, and Tailwind CSS.
    - [ ] Implement Feature: Verify asset compilation is working.
- [ ] Task: Conductor - User Manual Verification 'Core Application Setup and Frontend Integration' (Protocol in workflow.md)

## Phase 2: Event Data Management and Display

- [ ] **Task: Create Events Database Migration**
    - [ ] Write Tests: Verify the `events` table can be created and has the correct columns.
    - [ ] Implement Feature: Create `create_events_table` migration with `title`, `description`, `date`, `time`, `location` columns.
    - [ ] Implement Feature: Run migration.
- [ ] **Task: Create Event Eloquent Model**
    - [ ] Write Tests: Verify `Event` model can create, read, update, and delete records.
    - [ ] Implement Feature: Create `Event` model (`app/Models/Event.php`).
    - [ ] Implement Feature: Define fillable attributes and casts in `Event` model.
- [ ] **Task: Create Event Factory and Seeder**
    - [ ] Write Tests: Verify factory can generate valid event data and seeder populates the database.
    - [ ] Implement Feature: Create `EventFactory` to generate dummy event data.
    - [ ] Implement Feature: Create `EventSeeder` to use the factory and populate the `events` table.
    - [ ] Implement Feature: Run seeder.
- [ ] **Task: Display Upcoming Events on Homepage**
    - [ ] Write Tests: Verify the homepage loads and displays event data correctly, applying styling.
    - [ ] Implement Feature: Create a Livewire component to fetch and display events.
    - [ ] Implement Feature: Integrate the Livewire component into `resources/views/welcome.blade.php`.
    - [ ] Implement Feature: Apply Tailwind CSS and HyperUI classes for styling the event list.
- [ ] Task: Conductor - User Manual Verification 'Event Data Management and Display' (Protocol in workflow.md)
