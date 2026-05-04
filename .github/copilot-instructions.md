# Copilot Instructions for this Repository

This is a minimal Laravel 13 application scaffold with one resource route for `products`.

## Key project facts
- `routes/web.php` defines a single resource route: `Route::resource('products', ProductController::class)`.
- `app/Http/Controllers/ProductController.php` is a generated CRUD controller stub; all methods are currently empty.
- The only application migration is `database/migrations/2026_05_04_142535_products.php`, which creates `products` with `id` and timestamps.
- There is no `Product` model in the current codebase yet, so any product-related domain logic should be added consistently with Laravel conventions.
- Frontend asset handling is done with Vite/Tailwind via `package.json`.

## Build and developer workflows
- Install dependencies: `composer install` and `npm install --ignore-scripts`.
- Local frontend dev: `npm run dev`.
- Production bundle: `npm run build`.
- Common composer helpers:
  - `composer run dev` (runs Vite, server, and queue listener via `concurrently`)
  - `composer test` (clears config and executes `php artisan test`)
  - `composer setup` (installs dependencies, copies `.env.example`, generates app key, migrates, installs npm packages, builds assets)
- Use `php artisan test --compact` for quick validation; tests are powered by Pest and `phpunit.xml` uses in-memory SQLite for the test environment.

## Project-specific conventions
- Follow existing Laravel structure exactly: `app/Models`, `app/Http/Controllers`, `routes/web.php`, `database/migrations`, `resources/views`.
- Prefer `php artisan make:` commands when adding new classes, controllers, models, or tests.
- When editing code, inspect sibling files for naming and formatting conventions.
- If the user is expecting UI changes, check whether a Vite rebuild is needed: `npm run build`, `npm run dev`, or `composer run dev`.
- Apply formatting with Pint after PHP edits: `vendor/bin/pint --dirty --format agent`.

## Important integration points
- Environment config is seeded from `.env.example`; the repo expects `.env` to be generated locally.
- Default runtime DB is configured by `.env` (MySQL in the example), but tests use `DB_CONNECTION=sqlite` and `DB_DATABASE=:memory:`.
- `laravel/boost` is installed in this project; if agent tools are available, consult Boost/CLAUDE guidance before making changes.
- Do not invent new top-level folders; keep additions within the standard Laravel structure.

## What to look at first
- `routes/web.php` for available routes and route types.
- `app/Http/Controllers/ProductController.php` for the current controller shape.
- `database/migrations/2026_05_04_142535_products.php` for the existing database schema.
- `composer.json` / `package.json` for build/test commands and installed dev tooling.

## Notes for agent behavior
- This repo is small and scaffolded; avoid over-engineering new features.
- The most accurate project-specific style guide is `CLAUDE.md`; use it as a reference for Laravel Boost, Artisan, PHP, and testing conventions.
- Keep instructions concise and actionable, and ask the user for missing domain details before adding business logic.
