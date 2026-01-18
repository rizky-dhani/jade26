# Design: Create "I Want to Visit" Page

## 1. Context and Problem
To effectively convert interested individuals into attendees, the JADE 2026 website needs a compelling page that highlights the benefits of visiting the exhibition and provides a clear path to registration. A dedicated "I Want to Visit" page will serve this purpose by structuring information logically and directly offering a registration option.

## 2. Proposed Solution: Dedicated "I Want to Visit" Page with Informational Sections and Registration Form

A new page will be created with three distinct sections: "Why Visit JADE 2026", "Who Should Visit JADE 2026", and a "Registration Form". This structure is designed to inform, persuade, and facilitate action.

### 2.1. Routing
A new GET route will be defined in `routes/web.php` for `/i-want-to-visit`. This route MUST point to a Livewire component.

### 2.2. Page Layout and Section Structure
The page will be divided into three vertically stacked sections. Each section will have clear headings and content.

*   **Section 1: "Why Visit JADE 2026"**
    *   **Purpose:** To articulate the key benefits and unique selling points of attending JADE 2026.
    *   **Content:** Placeholder text highlighting networking opportunities, access to innovation, educational value, etc. (e.g., "Discover cutting-edge dental technologies, network with industry leaders, and advance your professional knowledge.")
    *   **Styling:** Use a hero-like or prominent section style, potentially from HyperUI or daisyUI, to draw immediate attention.

*   **Section 2: "Who Should Visit JADE 2026"**
    *   **Purpose:** To clearly define the target audience for the exhibition, helping potential attendees self-identify.
    *   **Content:** Placeholder text listing types of visitors who would benefit (e.g., "Dentists, dental specialists, hygienists, students, clinic owners, industry professionals.").
    *   **Styling:** A descriptive section, possibly using bullet points or cards for different visitor types.

*   **Section 3: "Registration Form"**
    *   **Purpose:** To provide a direct and convenient method for interested visitors to register for the event.
    *   **Content:** A basic form with essential fields for initial registration.
        *   Name (Full Name)
        *   Email Address
        *   Phone Number
        *   Profession/Title (e.g., Dentist, Student, Exhibitor)
        *   Submit Button
    *   **Styling:** The form will be structured using standard HTML form elements, heavily styled with Tailwind CSS. Form components from HyperUI or daisyUI (e.g., input fields, buttons, form layouts) will be used to ensure a polished and user-friendly interface.
    *   **Initial State:** For this proposal, the form will be a frontend-only representation. Backend processing and data storage for registration will be considered a future task.

### 2.3. UI Framework Integration
*   **Livewire:** The entire page, including informational sections and the registration form, MUST be managed by a Livewire component. This component will manage the state and (future) submission of the registration form, and any interactive elements within the "Why" and "Who" sections.
*   **Tailwind CSS:** All styling, from layout to individual form elements, will be handled by Tailwind CSS classes, ensuring a cohesive design across the entire page.
*   **HyperUI/daisyUI:** These libraries will be instrumental in creating visually appealing sections (e.g., cards for "Why Visit" points, structured form layouts for registration) and ensuring consistent UI elements.

### 2.4. Responsiveness
The page MUST be designed with a mobile-first approach. All sections and the form will adapt responsively to various screen sizes using Tailwind CSS utilities, providing an optimal user experience on desktops, tablets, and mobile phones.

## 3. Architectural Reasoning

Creating a dedicated "I Want to Visit" page centralizes crucial visitor information and a direct call to action (registration). Structuring it into logical sections guides the user through the benefits and relevance of the event. Utilizing a Livewire component for the entire page ensures consistency with the project's preference for Livewire and allows for a seamless transition to backend form processing in future phases, while leveraging existing UI libraries ensures a rapid and consistent implementation of the user interface. This approach provides immediate value to potential attendees and the event organizers by streamlining the registration entry point.

## 4. Acceptance Criteria (Technical)
*   A new GET route `'/i-want-to-visit'` MUST be defined in `routes/web.php`.
*   A dedicated Livewire component MUST be created for the page.
*   The page MUST display a "Why Visit JADE 2026" section with placeholder content.
*   The page MUST display a "Who Should Visit JADE 2026" section with placeholder content.
*   A "Registration Form" section MUST be present after the informational sections, containing basic input fields (e.g., Name, Email, Phone Number, Profession/Title) and a submit button.
*   The page, including all its sections and the form, MUST be styled using Tailwind CSS, potentially incorporating HyperUI or daisyUI components, to match the website's "Elegant and Sophisticated" design.
*   The page MUST be fully responsive and function correctly across various device sizes.
*   No broken links or console errors MUST be present on the "I Want to Visit" page.
