# Technology Stack: JADE 2026 Website

## 1. Core Technologies

*   **Backend Framework:** Laravel (PHP)
*   **Admin Panel:** Filament 4 (latest)
*   **Frontend Framework:** Livewire (PHP/JavaScript)
*   **Styling Framework:** Tailwind CSS 4.1
*   **Frontend UI Library:** HyperUI (hyperui.dev)
*   **Build Tool:** Vite (JavaScript)
*   **Database:** MariaDB

## 2. Rationale and Usage

*   **Laravel (PHP):** As the foundational backend framework, Laravel will provide a robust, scalable, and maintainable structure for the application, leveraging its powerful features for routing, ORM (Eloquent), authentication, and more.
*   **Filament 4 (latest):** Chosen as the Admin Panel, Filament will enable rapid development of the administrative interfaces for managing exhibition details, the exhibitor directory, speaker lineup, and registrations, offering a sleek and intuitive user experience for administrators.
*   **Livewire (PHP/JavaScript):** Livewire will facilitate dynamic and interactive frontend components using PHP, minimizing the need for extensive JavaScript and streamlining development by keeping state on the server.
*   **Tailwind CSS 4.1:** This utility-first CSS framework will be used for all styling, allowing for highly customizable and responsive designs. Its efficient class-based approach integrates well with Livewire and Blade templates.
*   **HyperUI (hyperui.dev):** To accelerate frontend development and ensure a modern, aesthetically pleasing user interface, HyperUI components will be utilized. This library, built with Tailwind CSS, will provide pre-designed sections and elements that align with the "Elegant and Sophisticated" visual aesthetic.
*   **Vite (JavaScript):** As the build tool, Vite will provide a fast and efficient development experience for frontend assets, including JavaScript and CSS, with features like hot module replacement.
*   **MariaDB:** This relational database management system will serve as the primary data store, offering high performance, reliability, and compatibility with Laravel's Eloquent ORM.

## 3. Development Environment

*   **PHP:** Version 8.4.15 (as detected)
*   **Node.js/npm:** For frontend tooling and dependencies (Vite, Tailwind CSS).

This comprehensive stack is designed to create a performant, scalable, and easy-to-manage website for JADE 2026.
