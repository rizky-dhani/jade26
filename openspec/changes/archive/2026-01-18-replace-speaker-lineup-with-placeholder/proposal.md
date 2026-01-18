# Proposal: Replace Speaker Lineup Grid with Image Placeholder

## Why
The current "Speaker Lineup" section is likely displaying placeholder content or is incomplete. Replacing it with a high-quality static image placeholder provides a better visual experience and maintains the aesthetic integrity of the website while the actual scientific program is finalized.

## What Changes
- Locate the "Speaker Lineup" section in the homepage.
- Replace the existing speaker grid HTML with an `<img>` tag pointing to a static placeholder image.
- Style the placeholder image to integrate well with the surrounding layout.

## Impact
- Affected specs: `speaker-lineup-placeholder`.
- Affected code: `resources/views/livewire/home.blade.php`.

## 1. Overview
This proposal outlines the replacement of the existing "Speaker Lineup" grid on the JADE 2026 website with a static image placeholder. This is an interim solution to temporarily address the display of the speaker section without requiring immediate backend integration or dynamic data.

## 2. Rationale
The current "Speaker Lineup" section is likely displaying placeholder content or is incomplete. Replacing it with a clear image placeholder will provide a better visual experience for users, communicate that this section is under development, and maintain the aesthetic integrity of the website without requiring full dynamic implementation at this stage. This aligns with a minimal implementation approach and favors straightforward solutions.

## 3. Scope
This change specifically targets the "Speaker Lineup" section within `resources/views/livewire/home.blade.php`. The existing HTML structure and content for the speaker grid will be replaced with an `<img>` tag pointing to a placeholder image. No changes to backend logic, data retrieval, or dynamic rendering are included in this scope.

## 4. Dependencies
This implementation depends on the `resources/views/livewire/home.blade.php` file and the availability of a suitable image placeholder.

## 5. High-Level Plan
1.  Locate the existing "Speaker Lineup" section in `resources/views/livewire/home.blade.php`.
2.  Select or create an appropriate placeholder image.
3.  Replace the existing speaker grid HTML with an `<img>` tag referencing the placeholder image.
4.  Apply necessary Tailwind CSS classes to style and position the placeholder image appropriately, ensuring it integrates well with the surrounding layout.

## 6. Future Considerations
*   Full implementation of a dynamic "Speaker Lineup" section with data fetched from the backend.
*   Integration with Filament for managing speaker data.

## 7. Acceptance Criteria
*   The "Speaker Lineup" section in `resources/views/livewire/home.blade.php` no longer displays a grid of speakers.
*   An image placeholder is displayed in place of the speaker grid.
*   The placeholder image is styled to fit within the website's design.
*   No broken image links or console errors related to this change.
