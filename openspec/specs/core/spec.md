# core Specification

## Purpose
TBD - created by archiving change init-jade2026-website. Update Purpose after archive.
## Requirements
### Requirement: Framework Initialization
The project SHALL be initialized with Laravel 12 and Livewire 4.

#### Scenario: Verify Installation
- **Given** a new environment
- **When** checking the composer dependencies
- **Then** `laravel/framework` should be `^12.0` and `livewire/livewire` should be `^4.0`.

### Requirement: UI Foundation
The website MUST use Tailwind CSS and daisyUI for styling.

#### Scenario: Verify CSS Setup
- **Given** the application layout
- **When** inspecting the rendered HTML
- **Then** Tailwind utility classes and daisyUI component classes (e.g., `btn`, `card`) should be present and functional.

### Requirement: JADE 2026 Homepage
A dedicated homepage MUST be accessible, displaying event information.

#### Scenario: Access Homepage
- **Given** the application is running
- **When** a user visits `/`
- **Then** they should see "Jakarta Dental Exhibitions 2026" and mentions of "World Kpop Center Indonesia".

### Requirement: Local Asset Integration
The website SHALL use local images from the `assets/` folder for illustrations.

#### Scenario: Display Local Illustrations
- **Given** the hero section
- **When** the page loads
- **Then** it should display at least one image sourced from the `assets/` directory.

