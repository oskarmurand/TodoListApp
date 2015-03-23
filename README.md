# TodoListApp 0.4
TodoListApplication

---
## Features

* Registration
* Authentication
* Task adding, removing and displaying
* Responsive design

---

## Requirements

* PHP server
* MySQL server

---

## Installation

* Place TodoListApp on your PHP server
* Configure *app/config/database.php* -> MySQL array to match your MySQL server/user
* IF you already have a database with a migrations table:
    * Run *php artisan migrate:refresh --seed*
  * Else
    * Run *php artisan migrate --seed*
