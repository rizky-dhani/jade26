# Proposal: Redesign Homepage with HyperUI

## Why
The current homepage uses basic daisyUI components. A redesign using HyperUI (hyperui.dev) Tailwind CSS components will provide a more bespoke and modern look tailored to the event's professional aesthetic.

## What Changes
- Implement a new Header with "Icon on the left, links in the middle and call to actions on the right" pattern.
- Replace the Hero section with a "Center" Banner.
- Add an "Event Objectives" section using the "Simple Grid" Feature pattern.
- Add a single column section for full-width imagery.
- Implement a "Speaker Lineup" section using "Small" Team Sections.
- Add a "News/Blog" section using "Bordered with image, title, excerpt and call to action" Blog Cards in a loop.
- Implement a "Simple row" Footer.

## Impact
- Affected specs: `homepage` (new capability), `core` (UI foundation).
- Affected code: `resources/views/components/layouts/app.blade.php`, `resources/views/livewire/home.blade.php`.
