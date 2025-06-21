
# 📚 Student Log & Feedback Management System

A PHP-based web application designed to manage student feedback and activity logs. The system supports multiple user roles (Admin, Student, Technical Staff) and includes features like registration, login, feedback submission, viewing records, and user management.

## 🚀 Features

- 🔐 Login and Logout functionality
- 🧑‍💼 Admin dashboard for managing users and feedback
- 📝 Student feedback submission
- 🔍 Search and view student logs
- ✏️ Edit, update, and delete records
- 📁 Organized user roles (Admin, Student, Technical Staff)
- 💾 Connected to a backend database using `configASL.php`

## 📁 Folder/File Structure Overview

```

/ProjectRoot
├── Admin/                 # Admin-related scripts
│   ├── delete.php
│   ├── delete1.php
│   ├── deletef.php
│   ├── editadmin.php
│   ├── feedback.php
│   ├── home.php
│   ├── reg.php
│   ├── search.php
│   ├── update.php
│   ├── user.php
│   ├── viewst.php
│   └── tech.php
│
├── Student/               # Student-related pages
│   ├── student\_view\.php
│   ├── feeds.php
│   ├── stlog.php
│   └── dum.php
│
├── CSS/                   # CSS files
│   ├── admin.css
│   ├── drop.css
│   ├── log.css
│   ├── sty.css
│   ├── styler.css
│   ├── styler1.css
│   ├── tech1.css
│   └── index.css
│
├── Authentication/
│   ├── Login.php
│   ├── logout.php
│   ├── Change\_password.php
│   └── exit1.php
│
├── Database/
│   └── configASL.php      # DB connection file
│
├── index.html             # Entry point (can redirect to login)
├── 403.php                # Access denied page
├── README.md              # This file

````

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL (via `configASL.php`)

## 🧪 How to Run the Project

1. **Clone the Repository**

```bash
git clone https://github.com/Omkar-733/logger.git
cd logger
````

2. **Setup with XAMPP/WAMP/LAMP**

* Place the project in the `htdocs` (XAMPP) or `www` (WAMP) directory.
* Start **Apache** and **MySQL** services.

3. **Configure the Database**

* Create a MySQL database (e.g., `feedback_system`)
* Import the SQL file if available.
* Update DB credentials in `configASL.php`:

```php
<?php
$conn = mysqli_connect("localhost", "root", "", "feedback_system");
?>
```

4. **Access the Application**

```
http://localhost/logger/index.html
```

5. **Login Credentials (Default)**

* **Admin**

  * Username: `admin`
  * Password: `admin123`
* (You can change this in your database.)

## 📌 Pages Overview

| File/Script           | Description                        |
| --------------------- | ---------------------------------- |
| `Login.php`           | User login form                    |
| `logout.php`          | Logout and session destroy         |
| `reg.php`             | Admin adds a new user              |
| `feedback.php`        | Feedback management page           |
| `search.php`          | Search for students or logs        |
| `update.php`          | Update user or log info            |
| `delete.php`          | Delete a user or log               |
| `tech.php`            | Technical staff interface          |
| `student_view.php`    | Student’s submitted feedback       |
| `Change_password.php` | Change password for logged in user |
| `403.php`             | Access denied page                 |

## ✅ To-Do / Improvements

* Add validation and security (e.g., SQL injection protection)
* Add role-based routing
* Implement user-friendly error handling
* UI improvements using Bootstrap or modern frameworks

## 📄 License

This project is licensed under the MIT License.

---

> Developed by **Omkar Venkat Gogula**
> 🔗 [GitHub Profile](https://github.com/Omkar-733)

```

---

Let me know if you want:
- Screenshots and badges added
- A sample SQL database dump
- Security enhancements or UI suggestions

Would you also like a `.gitignore` or `.htaccess` for basic protection?
```
