# Zunik Energies Website
A custom-developed, high-performance, responsive corporate website built without any CMS (like WordPress). Designed with an institutional aesthetic for the renewable energy sector.

## Technology Stack
- **Frontend**: HTML5, CSS3, Bootstrap 5, Vanilla JavaScript.
- **Backend**: PHP 8+
- **Database**: MySQL / MariaDB

## Installation & Deployment Guide

### 1. Database Setup
1. Log into your hosting control panel (e.g., cPanel).
2. Open **phpMyAdmin** or your preferred MySQL client.
3. Create a new database named `zunik_energies` (or a name of your choice).
4. Import the `database.sql` file provided in the root directory into the newly created database.
5. Create a MySQL user, grant all privileges to the database, and note the username and password.

### 2. Configuration
1. Open `config/db.php`.
2. Update the database credentials to match your live server:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'your_database_name');
   define('DB_USER', 'your_database_user');
   define('DB_PASS', 'your_database_password');
   ```
3. Open `includes/header.php`.
4. Update `BASE_URL` if your website is not hosted on the root domain (e.g., inside a subfolder, change `/` to `/subfolder/`).

### 3. File Upload
1. Upload all files from the `files/` directory into your `public_html` or document root on your server.
2. Ensure `.htaccess` is uploaded (it might be hidden on some systems) to maintain security and URL rewriting.

### 4. Admin Access
- The `database.sql` script creates a default administrator account.
- **URL**: `https://yourdomain.com/admin/login.php`
- **Username**: `admin`
- **Password**: `admin123`
- *Note: Please change the admin password immediately upon your first login or update the hash in `database.sql` before importing.*

## Folder Overview
- **`/assets/`**: Contains CSS, JS, and image dependencies.
- **`/config/`**: Contains the database bridge variables.
- **`/includes/`**: Reusable modular parts like the Header, Navigation, and Footer.
- **`/pages/`**: All the front-facing standard pages.
- **`/admin/`**: Secured admin ecosystem for backend tracking.

## Note on Scalability
Everything is structured using PDO prepared statements to aggressively prevent SQL injections. The Bootstrap 5 framework guarantees mobile-first rendering, ensuring perfect layout displays across all breakpoints.
