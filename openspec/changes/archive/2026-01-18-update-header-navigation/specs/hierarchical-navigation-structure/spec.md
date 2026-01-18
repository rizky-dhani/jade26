## ADDED Requirements

### Requirement: Hierarchical Navigation Structure
The main header navigation MUST be updated to a multi-level hierarchical structure as specified, including parent, first-child, and second-child navigation items.

#### Scenario: Parent navigation items are present
  Given the header is displayed,
  When the main navigation is rendered,
  Then the following parent navigation items MUST be present: "Home", "About", "Exhibitor", "Visitor", "Press", "Contact Us".

#### Scenario: First-child navigation items are correctly nested
  Given the main navigation is rendered,
  When accessing parent items with children,
  Then "JADE 2026" and "Travel" MUST be nested under "About".
  Then "I want to Exhibit", "I am Exhibiting", and "Sponsorship Packages" MUST be nested under "Exhibitor".
  Then "I want to Visit", "JADE 2026 Exhibitor List", and "Visitor FAQ" MUST be nested under "Visitor".
  Then "News & Blog", "Media Partners", "Galleries", "Press Release", and "Media Registration" MUST be nested under "Press".

#### Scenario: Second-child navigation items are correctly nested
  Given the main navigation is rendered,
  When accessing first-child items with children,
  Then "Date & Opening Hours", "Organizers", and "Official Partners" MUST be nested under "JADE 2026" (which is under "About").
  Then "Venue" MUST be nested under "Travel" (which is under "About").
  Then "Brochure" MUST be nested under "I want to Exhibit" (which is under "Exhibitor").
  Then "Exhibitor Services" MUST be nested under "I am Exhibiting" (which is under "Exhibitor").

### Requirement: Navigation Item Functionality
The hierarchical navigation items MUST be functional, providing access to their respective pages or sections, and behaving intuitively for the user.

#### Scenario: Navigation links are clickable
  Given the navigation is displayed,
  When a user clicks on any navigation item (parent, first-child, or second-child),
  Then the user SHALL be directed to the corresponding page or section.

#### Scenario: Dropdowns are interactive and clear
  Given a navigation item has child items,
  When the user interacts with the parent item (e.g., hover or click),
  Then a dropdown or similar interactive element MUST appear, clearly displaying the child navigation items.

### Requirement: Styling and Responsiveness
The updated header navigation MUST be styled consistently with the website's aesthetic and function responsively across all device sizes.

#### Scenario: Navigation is visually consistent
  Given the navigation is displayed,
  When viewing the website,
  Then the navigation's appearance (colors, fonts, spacing) SHALL align with the "Elegant and Sophisticated" visual aesthetic.

#### Scenario: Navigation is responsive on different devices
  Given the website is viewed on various devices (desktop, tablet, mobile),
  When the navigation is displayed,
  Then it MUST adapt responsively, providing an intuitive and usable experience on all screen sizes, including a mobile-specific menu toggle.

### Requirement: Accessibility
The header navigation MUST adhere to accessibility best practices, ensuring usability for all users, including those using assistive technologies.

#### Scenario: Keyboard navigation is supported
  Given the navigation is displayed,
  When a user uses keyboard controls,
  Then they SHALL be able to navigate through all levels of the menu.

#### Scenario: Screen reader compatibility is ensured
  Given the navigation is displayed,
  When a screen reader is used,
  Then all navigation items and their hierarchical relationships MUST be correctly announced, utilizing appropriate `aria-` attributes.
