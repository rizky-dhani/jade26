# Tasks: Implement RBAC with Spatie Laravel-Permission and Super Admin Role

This document outlines the tasks required to implement RBAC using `spatie/laravel-permission` and define a "Super Admin" role.

## Phase 1: Package Installation and Configuration

- [x] Task: Install `spatie/laravel-permission`
    - [x] Run `composer require spatie/laravel-permission`.
- [x] Task: Publish migrations and configuration
    - [x] Run `php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="permission-migrations"`.
    - [x] Run `php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="permission-config"`.
- [x] Task: Run migrations
    - [x] Run `php artisan migrate`.
- [x] Task: Update `App\Models\User` model
    - [x] Add `use Spatie\Permission\Traits\HasRoles;` trait to `App\Models\User`.
    - [x] Implement `protected $guard_name = 'web';` if needed (check package documentation).
- [x] Task: Configure `config/permission.php` (optional initial review)
    - [x] Review the published configuration file for any initial setup or changes.
- [x] Task: Conductor - User Manual Verification 'Package Installation and Configuration' (Protocol in workflow.md)

## Phase 2: Role and Permission Definition

- [x] Task: Create "Super Admin" role
    - [x] Create a new seeder (e.g., `php artisan make:seeder RolesAndPermissionsSeeder`).
    - [x] In the seeder, use `Role::create(['name' => 'Super Admin']);` to create the role.
    - [x] Run the seeder (`php artisan db:seed --class=RolesAndPermissionsSeeder`).
- [x] Task: Assign "Super Admin" role to a user
    - [x] Either manually assign via Tinker `App\Models\User::find(1)->assignRole('Super Admin');` or extend the seeder to assign it to an existing user.
- [x] Task: Verify "Super Admin" capabilities
    - [x] Use Tinker (`php artisan tinker`) to confirm a user with 'Super Admin' role has permissions (e.g., `User::find(1)->hasRole('Super Admin')` should be true).
    - [x] Confirm a Super Admin effectively bypasses other permission checks.
- [x] Task: Conductor - User Manual Verification 'Role and Permission Definition' (Protocol in workflow.md)
