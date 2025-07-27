# PHP CRUD with MySQLi

This is a simple **PHP CRUD (Create, Read, Update, Delete)** showcase that uses **MySQLi** (procedural style) to interact with a MySQL database.

# Folder Structure
CRUD-php/
├── connect.php
├── create.php
├── read.php
├── update.php
└── delete.php


## 🛠 Features
- Add new users
- View all users
- Edit user details
- Delete users

## 💾 Requirements
- PHP 7.x or higher
- MySQL
- A local server like XAMPP

## 🚀 Setup Instructions
1. Clone or download this repository.
2. Place the folder inside your web server root (`htdocs` for XAMPP).
3. Start Apache and MySQL from your server control panel.
4. Create a database named `testdb` in phpMyAdmin.
5. Run the SQL script to create the `users` table:

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100)
);
