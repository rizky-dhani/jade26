## ADDED Requirements

### Requirement: Super Admin Role Creation and Assignment
A "Super Admin" role MUST be defined and assignable to users, granting the highest level of administrative access.

#### Scenario: "Super Admin" role exists
  Given `spatie/laravel-permission` is configured,
  When roles are initialized,
  Then a role named "Super Admin" MUST be created in the `roles` table.

#### Scenario: User can be assigned "Super Admin" role
  Given a user exists in the system,
  When an administrative action is performed (e.g., via seeder, Tinker),
  Then the "Super Admin" role MUST be assignable to that user.

#### Scenario: "Super Admin" role grants full access
  Given a user has been assigned the "Super Admin" role,
  When attempting to access any protected resource or perform any action,
  Then the "Super Admin" user MUST implicitly bypass all permission checks, as per `spatie/laravel-permission`'s default behavior for super_admin roles.
