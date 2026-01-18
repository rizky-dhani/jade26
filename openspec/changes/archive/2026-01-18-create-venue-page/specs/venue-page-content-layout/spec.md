## ADDED Requirements

### Requirement: Dedicated Venue Information Page
The JADE 2026 website MUST include a dedicated page providing detailed information about the event venue, presented in a two-column layout.

#### Scenario: Page is accessible via URL
  Given the website is running,
  When a user navigates to `/venue`,
  Then a dedicated page displaying venue information MUST be shown.

#### Scenario: Two-column layout is present
  Given the "Venue" page is loaded,
  When the page content is rendered,
  Then a responsive two-column layout MUST be present, adapting to different screen sizes (e.g., stacking on mobile).

#### Scenario: Google Maps embed in left column
  Given the "Venue" page is loaded,
  When the page content is rendered,
  Then the left column MUST contain an embedded Google Map displaying the JADE 2026 venue location.

#### Scenario: Surroundings description in right column
  Given the "Venue" page is loaded,
  When the page content is rendered,
  Then the right column MUST contain descriptive text explaining the surroundings of the venue.

### Requirement: Page Styling and Responsiveness
The "Venue" page MUST be styled consistently with the website's aesthetic and function responsively across all device sizes.

#### Scenario: Page styling is consistent
  Given the "Venue" page is displayed,
  When viewing the page,
  Then its layout, typography, and color scheme SHALL align with the "Elegant and Sophisticated" visual aesthetic of the JADE 2026 website, utilizing Tailwind CSS, HyperUI, and/or daisyUI.

#### Scenario: Page is responsive on different devices
  Given the "Venue" page is viewed on various devices (desktop, tablet, mobile),
  When the page is rendered,
  Then it MUST adapt responsively, providing an intuitive and usable experience on all screen sizes, with columns stacking gracefully on smaller screens.

### Requirement: Technical Implementation Details
The "Venue" page MUST be implemented using standard Laravel practices, ensuring maintainability and adherence to the project's tech stack.

#### Scenario: Route definition
  Given a dedicated page is required,
  When the application routes are defined,
  Then a GET route for `/venue` MUST be present in `routes/web.php`.

#### Scenario: Content rendering
  Given the content needs to be displayed,
  When the page is implemented,
  Then it SHALL be rendered either through a dedicated Blade view (e.g., `resources/views/pages/venue.blade.php`) or a Livewire component.

#### Scenario: Google Maps embed is functional
  Given the "Venue" page is loaded,
  When the Google Maps embed is displayed,
  Then it MUST be interactive and correctly show the JADE 2026 venue.
