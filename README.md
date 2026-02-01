# User Authentication Laravel

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

A complete user authentication system built with Laravel 11, featuring user registration, login, email verification, password reset, profile management, and a blog post management system.

## About This Project

This project is a full-featured authentication application demonstrating Laravel's powerful authentication capabilities using Laravel Breeze. It includes a complete CRUD system for managing blog posts with image uploads, making it perfect for learning Laravel authentication patterns or as a starting point for your own projects.

## Features

### Authentication
- **User Registration** - Create new user accounts with validation
- **User Login** - Secure login with session management
- **Email Verification** - Email verification system with resend functionality
- **Password Reset** - Forgot password functionality with email-based reset links
- **Remember Me** - Stay logged in across sessions
- **Logout** - Secure session termination

### Profile Management
- **View Profile** - Display user profile information
- **Edit Profile** - Update name and email address
- **Update Password** - Change account password
- **Delete Account** - Permanently delete user account

### Post Management (CRUD)
- **Create Posts** - Write new blog posts with titles, content, and optional images
- **View Posts** - Browse all posts or view individual post details
- **Edit Posts** - Update existing posts
- **Delete Posts** - Remove posts from the system
- **Image Upload** - Attach images to blog posts with validation

### Security Features
- Password confirmation for sensitive actions
- CSRF protection on all forms
- Email verification middleware
- Throttling on login and password reset attempts
- Sanctum API tokens for API authentication

## Technology Stack

- **Framework**: Laravel 11.x
- **PHP**: 8.2+
- **Frontend**: 
  - Tailwind CSS 3.x for styling
  - Alpine.js 3.x for interactivity
  - Vite for asset compilation
- **Database**: SQLite (easily configurable for MySQL, PostgreSQL, etc.)
- **Authentication**: Laravel Breeze
- **API**: Laravel Sanctum for API token authentication
- **Testing**: Pest PHP

## Requirements

- PHP >= 8.2
- Composer
- Node.js and NPM
- SQLite (or other database of your choice)

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/jithmapv/User-Authentication-Laravel.git
   cd User-Authentication-Laravel
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database**
   
   The project is configured to use SQLite by default. The database file will be created automatically, or you can configure a different database in the `.env` file:
   
   ```env
   DB_CONNECTION=sqlite
   # For MySQL, use:
   # DB_CONNECTION=mysql
   # DB_HOST=127.0.0.1
   # DB_PORT=3306
   # DB_DATABASE=your_database
   # DB_USERNAME=your_username
   # DB_PASSWORD=your_password
   ```

6. **Create database and run migrations**
   ```bash
   touch database/database.sqlite  # Only for SQLite
   php artisan migrate
   ```

7. **Create storage link**
   ```bash
   php artisan storage:link
   ```

8. **Build frontend assets**
   ```bash
   npm run build
   ```
   
   Or for development with hot reload:
   ```bash
   npm run dev
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

10. **Access the application**
    
    Open your browser and navigate to `http://localhost:8000`

## Usage

### Getting Started

1. **Register a new account** at `/register`
2. **Verify your email** (check your logs in `storage/logs/laravel.log` for the verification link when using log mail driver)
3. **Login** at `/login`
4. **Access the dashboard** at `/dashboard`
5. **Manage your profile** at `/profile`
6. **Create and manage posts** at `/posts`

### Email Configuration

By default, emails are logged to `storage/logs/laravel.log`. To send actual emails, update your `.env` file with your mail server credentials:

```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-username
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@example.com
MAIL_FROM_NAME="${APP_NAME}"
```

### API Usage

The application includes API endpoints for posts management using Laravel Sanctum. To use the API:

1. Generate an API token from your user account
2. Include the token in your requests:
   ```bash
   curl -H "Authorization: Bearer YOUR_TOKEN" http://localhost:8000/api/posts
   ```

## Testing

Run the test suite using Pest:

```bash
php artisan test
```

Or with coverage:

```bash
php artisan test --coverage
```

## Project Structure

```
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/          # Authentication controllers
│   │   │   ├── PostController.php
│   │   │   └── ProfileController.php
│   │   └── Requests/          # Form requests
│   └── Models/
│       ├── Post.php
│       └── User.php
├── database/
│   ├── migrations/            # Database migrations
│   └── seeders/              # Database seeders
├── resources/
│   ├── views/
│   │   ├── auth/             # Authentication views
│   │   ├── posts/            # Post management views
│   │   ├── profile/          # Profile views
│   │   └── components/       # Reusable Blade components
│   ├── css/                  # Stylesheets
│   └── js/                   # JavaScript files
└── routes/
    ├── web.php               # Web routes
    └── auth.php              # Authentication routes
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Acknowledgments

- Built with [Laravel](https://laravel.com)
- Authentication scaffolding by [Laravel Breeze](https://laravel.com/docs/starter-kits#laravel-breeze)
- Styled with [Tailwind CSS](https://tailwindcss.com)
