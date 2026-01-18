## ADDED Requirements

### Requirement: Speaker Lineup Section Placeholder
The existing Speaker Lineup section in `resources/views/livewire/home.blade.php` SHALL be replaced with a static image placeholder.

#### Scenario: Existing Speaker Lineup is removed
  Given the `resources/views/livewire/home.blade.php` file,
  When the change is applied,
  Then the HTML structure for the dynamic Speaker Lineup grid MUST be removed or commented out.

#### Scenario: Placeholder image is displayed
  Given the homepage is viewed,
  When the Speaker Lineup section is rendered,
  Then an `<img>` tag displaying a static placeholder image MUST be present in place of the original grid.

#### Scenario: Placeholder image is accessible
  Given an `<img>` tag is used for the placeholder,
  When the image is rendered,
  Then it MUST have an `alt` attribute describing its content (e.g., "Speaker Lineup Coming Soon").

#### Scenario: Placeholder image is correctly linked
  Given an `<img>` tag is used for the placeholder,
  When the image is rendered,
  Then its `src` attribute MUST correctly point to an image asset within the `public/assets/` directory using Laravel's `asset()` helper.

#### Scenario: Placeholder image is styled with Tailwind CSS
  Given an `<img>` tag is used for the placeholder,
  When the image is rendered,
  Then it SHALL be styled using Tailwind CSS classes to ensure appropriate sizing, responsiveness, and visual integration into the website's design.

#### Scenario: No broken image links or console errors
  Given the homepage is viewed,
  When the Speaker Lineup placeholder is displayed,
  Then there MUST be no broken image links or JavaScript errors visible in the browser's developer console.
