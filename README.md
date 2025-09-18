<div align="center">
  
# Carwash Backend

Backend application for Carwash System.  
This system is designed to manage online vehicle wash bookings for customers and streamline order management for admins/operators.

</div>

## Prerequisites

1. PHP (^8.2)
2. Composer (package manager)
3. MySQL/MariaDB (DBMS)
4. Laravel ^12.x (Framework)

## Installation

1. Clone this repository

    ```sh
    git clone https://github.com/brilliahib/carwash-backend
    ```

2. Install dependencies

    ```sh
    composer install
    ```

3. Run app

    ```sh
    php artisan serve
    ```

## Workflow

1. Git

    We will use git for version control system, please use branching workflow if you want to make the new feature or
    others works.

2. Branch

    We will use 2 important branch for the workflow development

    - main (the main or production branch)
    - development (all the development process)

    There is not limited to only use 2 branch above, again if we want make a new feature please make the **new branch**
    from the source **development branch**.

3. Commit

    This project is already setup the checking commit message, so the commit message must follow the best practice commit
    message convention.

    The convention is follow this rules https://www.conventionalcommits.org/

4. Github

    All the source code will be saved on the remote repository (in this case Github), so after make changes in local,
    make sure to push the changes code to the Github.

5. Pull Request

    The changes of merging from the **2 important branch** (main, and development) must be from the Pull Request flow,
    don't be directly push or merge the code when it's in the **2 important branch**.

## Folder Structure

```
├── app
│   ├── Http
│   │   ├── Controllers
│   │   ├── Requests
│   │   └── Resources
│   ├── Models
│   ├── Providers
│   └── Services
├── artisan
├── bootstrap
├── config
├── database
│   ├── factories
│   ├── migrations
│   └── seeders
├── public
├── resources
├── routes
│   ├── api.php
│   ├── console.php
│   └── web.php
├── storage
└── tests
```

-   app : application folder for laravel, contain all of main code for the system
    -   Http : folder for handle incoming Http request
        -   Controller : folder for controller
        -   Requests : folder for requests validation
        -   Resources : folder for resource of response data
    -   Models : contains Eloquent ORM for interact with database
    -   Providers: contains service providers for configuring application services.
    -   Service: contains all of business logic for application
-   artisan : laravel cli
-   bootstrap : directory for bootstrapping the framework, including caching configurations and application startup scripts.
-   config : contains all of application configuration file
-   database : holds all database-related files
    -   factories : contains factory definitions for generating test data.
    -   migrations : contains database migration scripts for modifying database schema.
    -   seeders : contains seed classes for populating the database with sample data.
-   public : contains publicly accessible files, including the index.php entry point, JavaScript, CSS, images, and other assets.
-   resources : contains all resources including views, language files, and frontend assets
-   routes : holds all route-related files
    -   api.php : route for api endpoint, prefixed with `/api`
    -   console.php : defines console commands accessible via Artisan
    -   web.php : contains web routes
-   storage : stores logs, compiled views, cached files, and user uploads.
-   tests : contains unit and feature test files for automated testing.

## Commit Convention

This project uses **commitlint** to enforce commit message rules.  
We follow the [Conventional Commits](https://www.conventionalcommits.org/) specification.

### Examples

-   `feat: add booking service logic`
-   `fix(order): correct total price calculation`
-   `docs: update installation guide in README`
-   `refactor(controller): simplify order creation flow`
-   `test: add unit test for carwash service`
