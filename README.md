# emergency_waitlist

## Description

This project is a web-based emergency waitlist application built with PHP, HTML, CSS, and JavaScript. It includes functionality for adding patients, viewing waittime, managing patient data, and providing an admin interface.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Patient Management:** Add, view, and manage patient information.
- **Admin Interface:** Secure admin login to manage the waitlist.
- **Database Integration:** Uses a PostgreSQL database to store patient data.
- **Frontend:** User-friendly interface built with HTML, CSS, and JavaScript.

## Installation

1.  **Clone the repository:**

    ```bash
    git clone https://github.com/Reno0213/emergency_waitlist.git
    ```

2.  **Set up the database:**

    *   Create a new database in your MySQL server.
    *   Import the `db.sql` file into your database.

        ```bash
        mysql -u <username> -p <database_name> < db.sql
        ```

3.  **Configure the database connection:**

    *   Edit the `db.php` file and update the database credentials:

        ```php
        <?php
        $host = "your_host";
        $username = "your_username";
        $password = "your_password";
        $database = "your_database";

        $conn = new mysqli($host, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        ?>
        ```

4.  **Set up the web server:**

    *   Place the project files in your web server's document root (e.g., `/var/www/html/`).
    *   Ensure that PHP is installed and configured correctly on your server.

## Usage

1.  **Access the application:**

    Open your web browser and navigate to the project directory on your web server (e.g., `http://localhost/emergency_waitlist/`).

2.  **Patient Interface:**

    Use `index.html` or `patient.html` to access the patient-facing interface.  Here, you should be able to add new patients to the waitlist using the form provided.

3.  **Admin Interface:**

    Access the admin interface by navigating to `admin.html`. Use the admin login form.  After logging in, you can manage the patient waitlist.

## File Structure

```
emergency_waitlist/
├── README.md             # This file
├── add_patient.php       # PHP script to add a patient to the database
├── admin.html            # HTML for the admin interface
├── adminlogin.js         # JavaScript for admin login functionality
├── assets/               # Directory for assets (images, etc.)
├── db.php                # PHP script for database connection
├── db.sql                # SQL file to create the database schema
├── get_patient.php       # PHP script to retrieve patient information
├── index.html            # HTML for the main patient interface
├── patient.html          # HTML for the patient interface
├── script.js             # JavaScript for general functionality
└── styles.css            # CSS for styling
```

## Contributing

Contributions are welcome! Here's how you can contribute:

1.  Fork the repository.
2.  Create a new branch for your feature or bug fix.
3.  Make your changes and commit them with clear, descriptive messages.
4.  Submit a pull request.

## License
This project does not have a license file.
```
