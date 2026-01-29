# ODM Comrades Chapter (OCC) System

A comprehensive platform for finding, registering, and managing members of the ODM Comrades Chapter. This system is designed to empower youth and comrades by providing a digital space for engagement, leadership, and community organization.

## Features

-   **User Registration**: Membership registration with details including Institution and Polling Station.
-   **Authentication**: Secure login and logout functionality.
-   **Administrative Data**: Management of Regions, Counties, Subcounties, Wards, Polling Stations, and Institutions.
-   **Dashboard**: User dashboard for members (Work In Progress).

## Requirements

-   PHP >= 8.2
-   Composer
-   MySQL / MariaDB
-   Node.js & NPM (Optional, as Tailwind CDN is currently used)

## Installation & Setup

1.  **Clone the Repository**
    ```bash
    git clone https://github.com/osumba404/occ.git
    cd occ
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    ```

3.  **Environment Configuration**
    -   Copy the example environment file:
        ```bash
        cp .env.example .env
        ```
    -   Update the `.env` file with your database credentials:
        ```ini
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=occ
        DB_USERNAME=root
        DB_PASSWORD=
        ```

4.  **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

5.  **Run Migrations**
    Create the database tables:
    ```bash
    php artisan migrate
    ```

6.  **Serve the Application**
    Start the local development server:
    ```bash
    php artisan serve
    ```
    The application will be accessible at `http://127.0.0.1:8000`.

## Tech Stack

-   **Backend**: Laravel 12
-   **Frontend**: Blade Templates, Tailwind CSS (CDN)
-   **Database**: MySQL

## Contributing

1.  Fork the repository.
2.  Create a feature branch (`git checkout -b feature-name`).
3.  Commit your changes (`git commit -m 'Add new feature'`).
4.  Push to the branch (`git push origin feature-name`).
5.  Open a Pull Request.

## License

The ODM Comrades Chapter system is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
