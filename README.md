# ‘USERS AUTH SYSTEM README

This README file provides an overview of the routes available in this Laravel application.

## Routes Overview

### Web Routes

-   **/profile**

    -   Description: User profile edit route.
    -   Methods: GET, PATCH, DELETE
    -   Middleware: auth

        **GET /api/notes**

    -   Description: Retrieve all notes for the authenticated user.
    -   Middleware: auth:sanctum

-   **POST /notes**

    -   Description: Create a new note for the authenticated user.
    -   Request Body: `title`, `body`
    -   Middleware: auth:sanctum

-   **GET /notes/{note}**

    -   Description: Retrieve a specific note for the authenticated user.
    -   Middleware: auth:sanctum

-   **PUT /notes/{note}**

    -   Description: Update a specific note for the authenticated user.
    -   Request Body: `title`, `body`
    -   Middleware: auth:sanctum

-   **DELETE /notes/{note}**
    -   Description: Delete a specific note for the authenticated user.
    -   Middleware: auth:sanctum

### API Routes

-   **POST /api/login**

    -   Description: User login endpoint.
    -   Request Body: `email`, `password`

-   **POST /api/register**

    -   Description: User registration endpoint.
    -   Request Body: `name`, `email`, `password`

-   **GET /api/profile**

    -   Description: Retrieve the authenticated user's profile information.
    -   Middleware: auth:sanctum

-   **PATCH /api/profile**

    -   Description: Update the authenticated user's profile information.
    -   Request Body: `name`, `email`, `password`
    -   Middleware: auth:sanctum

-   **GET /api/notes**

    -   Description: Retrieve all notes for the authenticated user.
    -   Middleware: auth:sanctum

-   **POST /api/notes**

    -   Description: Create a new note for the authenticated user.
    -   Request Body: `title`, `content`
    -   Middleware: auth:sanctum

-   **GET /api/notes/{note}**

    -   Description: Retrieve a specific note for the authenticated user.
    -   Middleware: auth:sanctum

-   **PUT /api/notes/{note}**

    -   Description: Update a specific note for the authenticated user.
    -   Request Body: `title`, `content`
    -   Middleware: auth:sanctum

-   **DELETE /api/notes/{note}**
    -   Description: Delete a specific note for the authenticated user.
    -   Middleware: auth:sanctum

## Installation and Setup

To set up this Laravel application locally, follow these steps:

1. Clone the repository.
2. Install dependencies with `composer install`.
3. Copy `.env.example` to `.env` and configure your environment variables.
4. Generate application key with `php artisan key:generate`.
5. Run migrations and seed data with `php artisan migrate --seed`.
6. Serve the application with `php artisan serve`.
