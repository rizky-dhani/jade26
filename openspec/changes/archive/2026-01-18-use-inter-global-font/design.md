# Design: Use Inter as Global Font

## 1. Context and Problem
The current typographic styling of the JADE 2026 website might be relying on default browser fonts or a generic font stack. To establish a more distinct and modern visual identity, and to align with the "Elegant and Sophisticated" aesthetic, a specific global font needs to be implemented. The "Inter" typeface has been chosen for its readability and suitability for user interfaces.

## 2. Proposed Solution: Integrating Inter as the Global Font

The solution involves importing the Inter font into the project and configuring Tailwind CSS to use it as the default sans-serif font for the entire application.

### 2.1. Font Import Method
Two primary methods for importing fonts will be considered:

*   **Google Fonts CDN (Recommended for simplicity):** This is the easiest and fastest way to get started. A simple `<link>` tag will be added to the primary Blade layout file (e.g., `resources/views/app.blade.php`).
    ```html
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    ```
    Alternatively, an `@import` rule can be added to the main CSS file (`resources/css/app.css`).

*   **Self-hosting:** For maximum control over font loading and privacy, the font files (WOFF2, WOFF) can be downloaded and served locally. This requires defining `@font-face` rules in `resources/css/app.css`. While offering more control, it adds complexity to initial setup and asset management. For this initial implementation, Google Fonts CDN is preferred due to its simplicity.

### 2.2. Tailwind CSS Configuration
After importing the font, Tailwind CSS needs to be configured to use Inter as the default font. This is achieved by extending the `fontFamily.sans` configuration in `tailwind.config.js`.

*   **`tailwind.config.js` Modification:**
    ```javascript
    // tailwind.config.js
    const defaultTheme = require('tailwindcss/defaultTheme');

    module.exports = {
      content: [
        // ... your other content paths
      ],
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', ...defaultTheme.fontFamily.sans],
          },
        },
      },
      plugins: [
        // ... your other plugins
      ],
    };
    ```
    This configuration tells Tailwind to prioritize 'Inter' for any element that uses the `font-sans` utility class, falling back to Tailwind's default sans-serif stack if Inter is unavailable.

### 2.3. Global Application
The most effective way to apply Inter as the global font is to set it on the base HTML elements. In the primary Blade layout file, the `font-sans` class (provided by Tailwind CSS) will be applied to the `<body>` or `<html>` tag.

*   **Blade Layout Modification (e.g., `resources/views/app.blade.php`):**
    ```html
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="font-sans">
    <head>
        <!-- ... font import link ... -->
    </head>
    <body>
        <!-- ... page content ... -->
    </body>
    </html>
    ```
    Or, apply `font-sans` to the `<body>` tag.

## 3. Architectural Reasoning

This solution is straightforward and leverages existing tools (Tailwind CSS, Google Fonts) to achieve a consistent global typographic style. By configuring Inter through Tailwind CSS, it integrates seamlessly into the utility-first framework, making it easy to override or extend for specific elements if needed. The use of a CDN for font delivery ensures high availability and optimized loading performance, contributing to a better user experience. This approach aligns with the project's tech stack and design principles by providing a modern and elegant default font.

## 4. Acceptance Criteria (Technical)
*   The Inter font MUST be imported into the project (preferably via Google Fonts CDN).
*   `tailwind.config.js` MUST be configured to include 'Inter' as the primary font in the `fontFamily.sans` stack.
*   The `font-sans` Tailwind CSS class (or equivalent CSS) MUST be applied to the global `<body>` or `<html>` element in the main Blade layout file.
*   The website MUST render all text using the Inter font (unless explicitly overridden by component-specific styles).
*   Font loading MUST be optimized to prevent FOUC (Flash of Unstyled Content) and ensure good performance.
*   The Inter font MUST display correctly across major browsers (Chrome, Firefox, Safari, Edge).
