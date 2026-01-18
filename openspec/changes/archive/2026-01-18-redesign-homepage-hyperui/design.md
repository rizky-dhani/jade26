# Design: Homepage Redesign with HyperUI Patterns

## Context
Redesigning the JADE 2026 homepage to use specific Tailwind CSS component patterns from HyperUI (hyperui.dev). The project continues to use Laravel 12, Livewire 4, and Tailwind CSS.

## Goals
- Professional and clean layout using modern UI patterns.
- High modularity in the `home.blade.php` Livewire component.
- Seamless integration of local assets.

## Decisions
- **Component Source**: Adopt patterns from HyperUI (hyperui.dev) for the Header, Hero, Features, Team, Blog, and Footer.
- **Styling**: Continue using Tailwind CSS as the primary engine. daisyUI will remain available for base utilities and simple components if needed, but HyperUI patterns will take precedence for the main layout.
- **Layout**: The master layout will be updated to accommodate the new header and footer structures.

## UI Patterns
1. **Header**: Navigation with balanced distribution (Icon | Links | CTA).
2. **Hero (Banner)**: Centered text and branding for maximum impact.
3. **Features (Event Objectives)**: Grid-based layout for clear objective communication.
4. **Team (Speakers)**: Small card-based lineup for featured professionals.
5. **Blog/News**: Bordered cards with high visibility for titles and call-to-actions.
6. **Footer**: Single-row clean ending.

## Risks / Trade-offs
- Complexity: Custom Tailwind patterns might require more maintenance than standard daisyUI components.
- Mitigation: Keep the component code clean and well-commented within the Blade files.