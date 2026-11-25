Student Management System

A simple Student Management System developed using PHP and MySQL. This project allows students to register, log in securely, and view their personal details in a digital Student ID Card.

Features

- Student Registration
- Student Login Authentication
- Password Hashing for Security
- MySQL Database Connectivity
- Session-Based Login
- Student ID Card Generation
- Display Student Personal Details

Technologies Used

- Frontend: HTML, CSS
- Backend: PHP
- Database: MySQL
- Local Server: XAMPP
- Code Editor: Visual Studio Code

Database Structure

Database Table: "students"

Column Name| Description
ID| Student ID (Auto Increment)
NAME| Student Name
Email| Student Email
USER_NAME| Student Username
PASSWORD| Hashed Password

Project Workflow

1. A student creates an account using the registration page.
2. Student information is stored in the MySQL database.
3. The student enters their email and password on the login page.
4. PHP verifies the login credentials.
5. If authentication is successful, the student is redirected to the ID Card page.
6. The ID Card page displays the student's personal details.

Installation and Setup

1. Install "XAMPP" (https://www.apachefriends.org/).

2. Start Apache and MySQL from the XAMPP Control Panel.

3. Copy the project folder into:
   
   "C:\xampp\htdocs\"

4. Open phpMyAdmin:
   
   "http://localhost/phpmyadmin"

5. Create the database and the "students" table.

6. Configure the database connection in "db.php".

7. Open the project in your browser:
   
   "http://localhost/Student_management/"

Project Structure

Student_management/
│
├── db.php
├── index1.html
├── login.php
├── signup.php
├── processlogin.php
├── process-signup.php
└── idcard.php

Note: File names should match the actual names in your project folder.

Security

- Passwords are stored using PHP's "password_hash()".
- Password verification uses "password_verify()".
- Prepared statements are used for database queries.
- PHP sessions maintain the authenticated student's information.

Future Improvements

- Student profile photo
- Downloadable ID Card
- Student information editing
- Logout functionality
- Admin dashboard

Author

Student Management System Project

Developed as a learning project using PHP and MySQL.

---

⭐ If you find this project useful, consider giving it a star!
