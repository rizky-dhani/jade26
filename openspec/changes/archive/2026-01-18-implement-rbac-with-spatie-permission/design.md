# Design: Implement RBAC with Spatie Laravel-Permission and Super Admin Role

## 1. Context and Problem
The JADE 2026 application requires a robust security model to control access to various administrative functionalities, particularly those exposed through the Filament admin panel. A Role-Based Access Control (RBAC) system is necessary to define user permissions and manage who can perform what actions. A top-tier "Super Admin" role is also essential for overall system administration.

## 2. Proposed Solution: Spatie Laravel-Permission Integration

The solution involves integrating the popular `spatie/laravel-permission` package, which provides a flexible and well-tested RBAC system for Laravel applications. This package allows for the definition of roles and permissions and their assignment to users.

### 2.1. Package Installation and Setup
The `spatie/laravel-permission` package will be installed via Composer. Its migrations will be published and executed to create the necessary tables in the database:
*   `roles`: Stores defined roles (e.g., 'Super Admin', 'Editor').
*   `permissions`: Stores granular permissions (e.g., 'edit posts', 'manage users').
*   `model_has_roles`: Pivot table for assigning roles to models (e.g., `User`).
*   `model_has_permissions`: Pivot table for assigning direct permissions to models.
*   `role_has_permissions`: Pivot table for assigning permissions to roles.

The package's configuration file (`config/permission.php`) will also be published for customization.

### 2.2. User Model Integration (`App\Models\User`)
The `App\Models\User` Eloquent model will be updated to include the `Spatie\Permission\Traits\HasRoles` trait. This trait provides convenient methods for assigning roles, checking permissions, and managing role/permission relationships directly on user instances.

### 2.3. "Super Admin" Role Definition
A "Super Admin" role will be created. By default, users assigned the `Super Admin` role in `spatie/laravel-permission` can bypass all permission checks, effectively having full access to the system. This behavior can be controlled via the package's configuration.

*   **Role Creation:** The "Super Admin" role will be created programmatically, preferably via a database seeder for consistency across environments.
    ```php
    use Spatie\Permission\Models\Role;
    // ...
    Role::create(['name' => 'Super Admin']);
    ```
*   **Role Assignment:** The "Super Admin" role will be assigned to specific users. This can be done via a seeder for initial setup or through an administrative interface (e.g., Filament) in subsequent development phases.
    ```php
    $user = User::find(1); // or create a new user
    $user->assignRole('Super Admin');
    ```

### 2.4. Architectural Reasoning

Integrating `spatie/laravel-permission` introduces a robust and industry-standard RBAC system. This is a critical security enhancement, allowing for precise control over who can access what functionality within the application. By centralizing permission management, the system becomes more secure, easier to audit, and scalable as new administrative features are added. The "Super Admin" role provides an essential, unrestricted entry point for full system control and initial setup, ensuring that there is always an account with full capabilities. This approach aligns perfectly with the Laravel ecosystem and enhances the project's overall security posture.

## 3. Acceptance Criteria (Technical)
*   The `spatie/laravel-permission` package MUST be successfully installed and its migrations run, resulting in the creation of all necessary database tables (`roles`, `permissions`, `model_has_roles`, `model_has_permissions`, `role_has_permissions`).
*   The `App\Models\User` model MUST incorporate the `Spatie\Permission\Traits\HasRoles` trait.
*   A "Super Admin" role MUST be programmatically defined (e.g., via seeder) and exist in the `roles` table.
*   It MUST be possible to assign the "Super Admin" role to a `User`.
*   A user with the "Super Admin" role MUST effectively bypass all permission checks, as per `spatie/laravel-permission`'s default behavior for super_admin roles (if configured).
*   No breaking changes to existing user authentication or data models.
*   No errors during package installation or initial setup.
