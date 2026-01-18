# Design: Add Sticky State to the Header

## 1. Context and Problem
The current website header, as identified in `openspec/project.md`, is intended to provide navigation and key information. Without a sticky state, users scrolling down long pages lose immediate access to these critical elements, potentially leading to a degraded user experience. The introduction of a sticky header aims to mitigate this by ensuring constant visibility of navigation.

A key challenge is the project's use of both `HyperUI` and `daisyUI` components, which might each contribute to the header's structure and styling. The solution must gracefully integrate with both or identify a primary component for the sticky behavior.

## 2. Proposed Solution: CSS `position: sticky`
The most straightforward and performant approach for implementing a sticky header is using CSS `position: sticky;` along with `top: 0;`. This method leverages the browser's native scrolling capabilities, offering better performance compared to JavaScript-based solutions that manipulate element positions on scroll events.

### 2.1. Element Selection
The first step will be to identify the main header `div` or semantic HTML `<header>` element that encapsulates the primary navigation and branding. This element will be targeted for the sticky style application.

### 2.2. CSS Implementation
The core CSS will involve:
```css
.sticky-header {
    position: sticky;
    top: 0;
    z-index: 1000; /* Ensure header stays above other content */
    /* Add background-color and box-shadow for visual distinction */
}
```
The `z-index` value will be chosen carefully to prevent any other page elements from overlapping the header. A background color and subtle `box-shadow` will be added to visually distinguish the sticky header from the content below it, enhancing readability and design elegance.

### 2.3. Preventing Content Overlap
A common issue with sticky headers is that the page content scrolls underneath them, leading to content being obscured. To counteract this, dynamic padding or margin will be applied to the main content area of the page.

*   **Approach 1 (Preferred): CSS-only with `calc()` or `var()`:** If the header height is static or can be reliably determined, a CSS `padding-top` on the main content element equal to the header's height can be used. This may involve using CSS custom properties (variables) if header height varies (e.g., in responsive views) or if the header uses multiple rows.
*   **Approach 2 (Fallback): JavaScript for dynamic padding:** If CSS-only solutions prove unreliable due to complex header structures or dynamic height changes, a small JavaScript snippet could measure the header's height on page load and resize, then apply `padding-top` to the main content element. This would be integrated into `resources/js/app.js`.

### 2.4. Integration with UI Libraries (HyperUI & daisyUI)
The `position: sticky` property can be applied directly to the header element regardless of whether its children are daisyUI or HyperUI components. The main consideration will be how `z-index`, `background-color`, and `box-shadow` interact with the existing styling provided by these libraries. Tailwind CSS utility classes will be preferred for applying these styles to maintain consistency.

## 3. Alternatives Considered

### 3.1. JavaScript Scroll Events
Manipulating `position: fixed;` via JavaScript on scroll events was considered. However, `position: sticky` is a more performant and less resource-intensive native browser feature, leading to a smoother user experience, especially on mobile devices. It also reduces the complexity of JavaScript code and potential for layout jank.

### 3.2. Existing Library Components
While both HyperUI and daisyUI might offer components that *appear* sticky (e.g., fixed navigation bars), directly applying `position: sticky` ensures maximum control and minimizes potential conflicts with library-specific JavaScript or CSS that might not be designed for a true sticky behavior. It also allows for a more generic solution that applies to the overall header element rather than a specific component within it.

## 4. Acceptance Criteria (Technical)
*   The header element must have `position: sticky; top: 0;` applied.
*   The header's `z-index` must be higher than other potential overlapping page elements.
*   The main page content area must have sufficient top padding or margin to prevent content from being hidden behind the sticky header.
*   The sticky header must render correctly and maintain functionality (e.g., clickable navigation links) across various browsers (Chrome, Firefox, Safari, Edge) and screen sizes.
*   No JavaScript errors related to the sticky header functionality should be present in the console.
