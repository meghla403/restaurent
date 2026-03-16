# 🍽️ Restaurant Management System

A web-based **Restaurant Management System** built using **PHP**, **HTML/CSS**, and **MySQL**. 
This project provides a complete database-driven interface to manage all core operations 
of a restaurant from a single dashboard.

## 📌 Features

The system covers **9 management modules**, each with full **CRUD** (Create, Read, Update/Search, Delete) functionality:

| Module         | Description                                      |
|----------------|--------------------------------------------------|
| **Categories** | Manage food/dish categories                      |
| **Menu**       | Add and manage menu items with rates             |
| **Orders**     | Place and track customer orders with totals      |
| **Customers**  | Store and manage customer information            |
| **Table Booking** | Handle table reservations                    |
| **Manager**    | Manage restaurant manager records                |
| **Chef**       | Maintain chef profiles and details               |
| **Taken By**   | Track which staff member took each order         |
| **Contacts**   | Store contact/inquiry information                |

### Additional Features
- **Bill Generation** — Generates order bills using a MySQL Stored Procedure (`ordersbill.php`)
- **Login Page** — Username/password login form to access the dashboard
- **Search** — Search records across all modules
- **Delete** — Remove records from any module

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS (inline styling)
- **Backend:** PHP (MySQLi)
- **Database:** MySQL
- **Server:** Apache (XAMPP / WAMP / LAMP)

## 🗄️ Database

- Database Name: `restaurant`
- Connection: `localhost` with MySQL root user

## 🚀 How to Run

1. Install [XAMPP](https://www.apachefriends.org/) or any local PHP server
2. Clone or copy the project into the `htdocs` folder
3. Import the `restaurant` database in **phpMyAdmin**
4. Start Apache and MySQL from XAMPP Control Panel
5. Open your browser and go to:
