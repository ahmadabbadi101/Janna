# Janna - Restaurant Management System

A modern Laravel-based restaurant management system featuring customer menu ordering, waiter interface, and admin dashboard.

## Features

- Customer menu browsing and cart functionality
- Waiter interface for order management
- Admin dashboard for managing dishes, employees, and tables
- Modern UI built with Tailwind CSS

## Requirements

- **PHP >= 8.2** with required extensions (BCMath, Ctype, cURL, DOM, Fileinfo, JSON, Mbstring, OpenSSL, PCRE, PDO, Tokenizer, XML)
- **Composer** (PHP dependency manager)
- **Node.js & npm** (for frontend assets)

## Installation

### Step 1: Clone the Repository

```bash
git clone https://github.com/yourusername/janna.git
cd janna
```

### Step 2: Install Dependencies

Install PHP dependencies:
```bash
composer install
```

Install Node.js dependencies:
```bash
npm install
```

### Step 3: Environment Configuration

Create a `.env` file in the root directory:

```bash
cp .env.example .env
```

If `.env.example` doesn't exist, create a `.env` file with these contents:

```env
APP_NAME=Janna
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=sqlite
DB_DATABASE=

SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

Generate the application key:
```bash
php artisan key:generate
```

### Step 4: Database Setup

Create the SQLite database file:
```bash
touch database/database.sqlite
```

Run migrations and seed the database:
```bash
php artisan migrate
php artisan db:seed
```

### Step 5: Build Frontend Assets

For production:
```bash
npm run build
```

For development (with hot reload):
```bash
npm run dev
```

### Step 6: Start the Server

```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## Default Login Credentials

After running the seeders, use these credentials to log in:

- **Username:** `admin`
- **Password:** `password`

## Application Routes

- **Customer:** `/` (welcome), `/menu`, `/cart`
- **Waiter:** `/waiter`
- **Admin:** `/admin`, `/admin/dishes`, `/admin/employees`, `/admin/tables`

## Development Commands

Start development server with auto-reload:
```bash
composer run dev
```

Run tests:
```bash
composer run test
```

## Technical Details

### 🏗️ Architecture & Design Patterns
- **MVC Architecture**: Clean separation of concerns with dedicated controllers, models, and views
- **RESTful API Design**: Well-structured routes following REST conventions
- **Repository Pattern**: Organized business logic with service layers
- **Middleware Implementation**: Custom middleware for authorization and route protection

### 🔐 Security & Authentication
- **Multi-Guard Authentication**: Three distinct authentication guards (users, employees, tables) with separate user providers
- **Role-Based Access Control**: Admin, Waiter, and Customer roles with appropriate permissions
- **Custom Middleware**: Route protection with `AdminOnly` middleware
- **Security Best Practices**: Password hashing, input validation, CSRF protection, and SQL injection prevention

### 💾 Database & Data Management
- **Eloquent ORM**: Leveraged Laravel's powerful ORM for type-safe database interactions
- **Many-to-Many Relationships**: Complex pivot table relationships with additional metadata (quantity, confirmed status)
- **Model Factories & Seeders**: Automated test data generation for development and testing
- **Query Optimization**: Efficient eager loading and relationship queries

### 🎨 Frontend Development
- **Modern UI with Tailwind CSS**: Responsive, utility-first styling approach
- **Component-Based Views**: Reusable Blade components for consistent UI
- **Client-Side Interactivity**: JavaScript integration with Vite for modern asset bundling
- **Responsive Design**: Mobile-first approach ensuring cross-device compatibility

### 📊 Business Logic Implementation
- **Shopping Cart System**: Complete cart functionality with add, remove, and confirm operations
- **Order Management**: Real-time order tracking for waiters
- **CRUD Operations**: Full create, read, update, delete functionality for dishes, employees, and tables
- **State Management**: Pivot table tracking order confirmation status

### 🛠️ Development Practices
- **Modern PHP 8.2+**: Leveraging latest PHP features and type hints
- **Version Control**: Git-based workflow with structured project organization
- **Asset Compilation**: Vite integration for modern frontend tooling
- **Testing Infrastructure**: PHPUnit integration with organized test structure

## Technical Stack

- **Backend:** Laravel 12 (PHP 8.2+)
- **Frontend:** Blade Templates, Tailwind CSS, JavaScript
- **Database:** SQLite (easily configurable for MySQL/PostgreSQL)
- **Build Tool:** Vite
- **Package Manager:** Composer, npm

## License

MIT License
