# Laravel-Based Login Form

A simple Laravel application that provides a user registration and login system. This project demonstrates basic authentication functionality using Laravel's built-in authentication scaffolding.

## 🚀 Features

- User Registration
- User Login and Logout
- Basic form validation
- Password hashing
- Laravel Blade templates for views

## 🛠️ Built With

- [Laravel](https://laravel.com/) (PHP framework)
- [Bootstrap](https://getbootstrap.com/) (for styling)
- MySQL (or any Laravel-supported database)

## 📂 Project Structure

- `routes/web.php`: Defines web routes for registration, login, logout.
- `resources/views/`: Contains Blade templates for forms and layouts.
- `app/Http/Controllers/`: Controllers handling authentication logic.
- `database/migrations/`: Migrations for creating the users table.

## ⚙️ Installation

Follow these steps to set up the project locally:

1. **Clone the repository**
   ```bash
   git clone https://github.com/AbhishekMehta07/Laravel-Based-login-form.git
   cd Laravel-Based-login-form
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Copy `.env` file**
   ```bash
   cp .env.example .env
   ```

4. **Generate the application key**
   ```bash
   php artisan key:generate
   ```

5. **Configure database**
   - Open `.env` and set your database credentials:
     ```
     DB_DATABASE=your_database
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Serve the application**
   ```bash
   php artisan serve
   ```

8. Visit `http://127.0.0.1:8000` in your browser.

## 📝 Usage

- **Register** a new user account.
- **Login** using the registered credentials.
- **Logout** via the logout link.

## 🙌 Contributing

Contributions are welcome! Feel free to fork this repo and submit pull requests.

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

## ✨ Acknowledgements

- Laravel documentation: https://laravel.com/docs
- Bootstrap documentation: https://getbootstrap.com/docs
