## Library Management System
This is a web-based Library Management System developed to efficiently manage library resources. The project is designed to handle book inventories and user authentication.

## 🚀 Features
User Authentication: Secure login and logout functionality for administrators.

Book Management: Add new books to the inventory.

Data Listing: View the complete list of available books in the library.

Database Integration: Built using PHP and MySQL for dynamic data handling.

## 🚀 Future Improvements
* Adding **input validation** to prevent malicious data injection.
* Implementing a **search filter** to find books by title or author.
* Improving the UI/UX using a CSS framework like **Bootstrap**.
* Enhancing security by implementing **password hashing** (BCrypt).


## 🛠 Tech Stack
Backend: PHP

Database: MySQL

Frontend: HTML, CSS

Development Environment: XAMPP

## 📂 Project Structure
connexion.php: Handles user login authentication.

deconnexion.php: Manages secure session termination.

config.php: Configuration file for database connection.

AjoutLivre.php: Interface and logic for adding new books.

ListeLivres.php: Fetches and displays the library book inventory.

## 💡 Key Learnings
This project helped me understand the full lifecycle of a web application:

Implementing CRUD operations (Create, Read, Update, Delete).

Managing user sessions securely.

Connecting PHP scripts with MySQL databases.

Applying object-oriented principles in a real-world web context.
connectivity using PHP and MySQL.

## 💻 How to Run
1. Clone this repository: `git clone https://github.com/rihamghoudi-bit/Library-Management-System.git`
2. Move the project folder to your `htdocs` directory in **XAMPP**.
3. Create a database in **phpMyAdmin** and import the SQL file.
4. Update the `config.php` file with your database credentials.
5. Open your browser and navigate to `http://localhost/Library-Management-System/`.
