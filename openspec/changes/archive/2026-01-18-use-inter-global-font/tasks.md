# Tasks: Use Inter as Global Font

This document outlines the tasks required to integrate "Inter" as the global font for the JADE 2026 website.

## Phase 1: Font Integration and Tailwind Configuration

- [x] Task: Choose font import method
    - [x] Decide between Google Fonts CDN or self-hosting the Inter font. Given ease of use, Google Fonts CDN is generally preferred for initial setup.
- [x] Task: Import Inter font into project
    - [x] If using Google Fonts CDN, add the `<link>` tag to the primary Blade layout file (`resources/views/app.blade.php` or similar) or `@import` rule to `resources/css/app.css`.
- [x] Task: Configure Tailwind CSS to use Inter
    - [x] Modify `tailwind.config.js` (or `app.css` in v4) to extend the `fontFamily.sans` configuration to include 'Inter' as the first font in the stack, followed by a generic sans-serif fallback.
- [x] Task: Apply Inter to the global body element
    - [x] Ensure the `font-sans` class (or equivalent) is applied to the `<body>` or root `<html>` element in the main Blade layout file to set Inter as the default.
- [x] Task: Conductor - User Manual Verification 'Font Integration and Tailwind Configuration' (Protocol in workflow.md)

## Phase 2: Verification and Optimization

- [x] Task: Verify font application across the website
    - [x] Run the application locally and visually inspect various pages and components to confirm that Inter is the active font.
- [x] Task: Optimize font loading (if necessary)
    - [x] Implement `font-display: swap` in `@font-face` rules or add `rel="preload"` to CDN links to prevent FOUC and improve perceived performance.
- [x] Task: Cross-browser compatibility check
    - [x] Verify font rendering across major browsers (Chrome, Firefox, Safari, Edge).
- [x] Task: Conductor - User Manual Verification 'Verification and Optimization' (Protocol in workflow.md)