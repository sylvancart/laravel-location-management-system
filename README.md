# Laravel Location Management System

## Introduction

This Laravel 11 application authenticates users via phone number and OTP (One-Time Password) and provides a dashboard to manage location data. Users can perform CRUD operations on States, Cities, and Pincodes associated with their accounts.

## Requirements

- **Laravel Framework:** ^11.9
- **PHP:** ^8.2
- **Composer:** 2.6.5

## Setup Instructions

1. **Extract the Project:**
   - Unzip the project zip file to your desired directory.

2. **Environment Configuration:**
   - Ensure the `.env` file is present in the project root directory.
   - Check and update the database configuration in the `.env` file:

     ```dotenv
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=location_management_system
     DB_USERNAME=root
     DB_PASSWORD=
     ```

3. **Database Setup:**
   - **Option 1: Use the Provided Database File:**
     - Import the `location_management_system.sql` file into your MySQL database

   - **Option 2: Migrate the Database:**
     - Run the following command in the project root directory:
       ```bash
       php artisan migrate
       ```

4. **Serve the Application:**
   - Start the Laravel development server:
     ```bash
     php artisan serve
     ```
   - Open your web browser and visit `http://localhost:8000` or `http://127.0.0.1:8000/`.

## Usage

- **User Authentication:**
  - Register and log in using your phone number.
  - OTP will be generated and displayed in the console for verification.

- **Dashboard:**
  - After logging in, access the dashboard to manage location data.
  - Perform CRUD operations on States, Cities, and Pincodes.

---