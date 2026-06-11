                                                                                                                                      Attendance Management System

 Introduction

This project is an Attendance Management System developed using PHP and MySQL. 

The main objective of this project is to maintain student attendance records in a digital format. 
In many schools and colleges, attendance is still maintained manually,
 which can be time-consuming and difficult to manage. This system helps simplify that process.

 About the Project

The system allows an administrator to manage students and their attendance records. 
The admin can add new students, view student details, mark attendance, generate
attendance reports, and check attendance percentages.

The project was developed as a learning project to understand web development 
concepts such as database connectivity, form handling, data storage, and report 
generation using PHP and MySQL.


Features

- Admin Login
- Student Registration
- View Student Records
- Mark Attendance
- Attendance Report Generation
- Attendance Percentage Calculation
- MySQL Database Integration

Technologies Used

- HTML
- CSS
- PHP
- MySQL
- XAMPP
- VS Code

## Project Files

### index.php
The home page of the project. It provides access to the login page.

### login.php
Used for administrator login. The admin enters username and password to access the dashboard.

### register.php
Allows a new administrator account to be created and stored in the database.

### dashboard.php
Acts as the main control panel of the system.

### add_student.php
Used to add new student information such as name, roll number, course, and semester.

### view_students.php
Displays all student records stored in the database.

### mark_attendance.php
Allows the administrator to mark students as Present or Absent.

### report.php
Displays attendance reports with student name, date, and attendance status.

### percentage.php
Calculates and displays the attendance percentage of each student.

### db.php
Contains the database connection code used throughout the project.

### style.css
Provides styling and improves the appearance of the web pages.

## Database Structure

### admin table

Fields:
- id
- username
- password

### students table

Fields:
- id
- name
- roll_no
- course
- semester

### attendance table

Fields:
- id
- student_id
- attendance_date
- status

## How the System Works

1. Admin registers an account.
2. Admin logs into the system.
3. Students are added to the database.
4. Attendance is marked daily.
5. Attendance reports are generated.
6. Attendance percentages are calculated automatically.

## Installation Steps

1. Install XAMPP.
2. Start Apache and MySQL.
3. Copy the project folder into the htdocs directory.
4. Create a database named attendance_db.
5. Import the SQL file into phpMyAdmin.
6. Open the browser and run:

http://localhost/attendance_management_system

## Challenges Faced During Development

While developing this project, I faced several challenges:
- Connecting PHP with MySQL.
- Handling form submissions properly.
- Displaying attendance reports dynamically.
- Calculating attendance percentage correctly.
- Managing database relationships between students and attendance records.

These challenges helped me improve my understanding of web development and database management.

## Future Improvements

In future versions, I would like to add:
- Student Login
- Teacher Login
- Password Encryption
- PDF Report Download
- QR Code Attendance
- Face Recognition Attendance
- Mobile Responsive Design

## Conclusion

This Attendance Management System is a simple web-based application that helps manage student attendance efficiently. Through this project, I gained practical experience in PHP, MySQL, HTML, and CSS and learned how to build a complete database-driven web application.