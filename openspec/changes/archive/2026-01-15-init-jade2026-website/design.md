# Design: JADE 2026 Foundation

## Overview
The website will follow a component-based architecture using Laravel Livewire 4 for the frontend and standard Laravel 12 routing/controllers for the backend. Styling is strictly utility-first with daisyUI components to ensure a modern look.

## Architecture

### Frontend
- **Blade Layouts**: A master layout (`layouts.app`) containing the HTML skeleton, Tailwind/Livewire scripts, and daisyUI theme configuration.
- **Livewire Components**:
  - `Homepage`: The main landing page, divided into functional sub-views or nested components for better maintainability.
- **daisyUI Themes**: Use a professional theme (e.g., `light` or a custom `jade` theme) aligned with medical/exhibition aesthetics.

### Backend
- **Controllers**: Minimal use, primarily for static routing to Livewire components.
- **Assets**:
  - Images from the root `assets/` folder will be symlinked or moved to `public/assets/` to be accessible by the web server.

## User Experience
- Responsive design from mobile to desktop.
- Interactive elements (e.g., smooth scroll, hover effects) powered by Livewire and daisyUI.

## External API Integration
- None.
