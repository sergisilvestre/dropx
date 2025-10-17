# DropX – Backend API

**Framework:** Laravel 11
**Architecture:** Domain-Driven Design (DDD) + REST + GraphQL
**Database:** PostgreSQL, MongoDB, Redis

DropX Backend API is the server-side of a multi-tenant e-commerce platform. It provides **user management, stores, products, orders, payments, notifications**, and **analytics**, fully designed for **scalability, security, and integration with microservices**.

---

## Table of Contents

* [Features](#features)
* [Architecture](#architecture)
* [Technologies](#technologies)
* [Project Structure](#project-structure)
* [Database](#database)
* [Installation](#installation)
* [Usage](#usage)
* [Testing](#testing)
* [Security](#security)
* [Contributing](#contributing)

---

## Features

### Users

* Authentication (JWT + Refresh Tokens, Laravel Sanctum / Passport)
* Roles: Admin, Seller, Customer

### Stores

* Store configuration, branding, and custom URLs

### Products

* Catalog management, categories, variants

### Orders

* Order lifecycle: Pending → Shipped → Completed

### Suppliers

* Integration with external dropshipping APIs

### Payments

* Stripe and PayPal integration

### Notifications

* Email, WebSockets, and push notifications

### Analytics

* Sales reports and metrics

---

## Architecture

* **Domain Layer:** Entities, Value Objects, Repositories interfaces
* **Application Layer:** Use Cases / Services
* **Infrastructure Layer:** Eloquent Repositories, external API integrations, background jobs
* **HTTP Layer:** Controllers, API routes (REST), GraphQL endpoints (Lighthouse)
* **Event-driven:** Jobs, Queues (Redis), Events, Listeners
* **Logging:** Monolog (JSON), Loki

---

## Technologies

* **Backend:** Laravel 11, Passport/Sanctum, Lighthouse GraphQL, Redis, Pest
* **Databases:** PostgreSQL, MongoDB, Redis
* **DevOps:** Docker, Kubernetes (EKS/GKE), Terraform, CI/CD (GitHub Actions/GitLab CI)
* **Security:** OWASP practices, JWT, Rate limiting, CORS handling, Input sanitization

---

## Project Structure

```
backend-api/
│
├── app/Domain/          # Entities, Value Objects, Repositories interfaces
├── app/Application/     # Use Cases / Services
├── app/Infrastructure/  # Eloquent Repositories, external API integrations, shared repository
├── app/Http/Controllers/
├── app/Jobs/
├── config/              # Passport, Sanctum, Permissions
├── database/
│   ├── migrations/
│   └── seeders/
├── routes/api.php
├── graphql/
└── tests/
```

---

## Database

* **PostgreSQL:** users, stores, products, orders
* **MongoDB:** logs, synchronization history, audit trails
* **Redis:** caching, background jobs queues

---

## Installation

1. Clone the repository:

```bash
git clone https://github.com/your-username/dropx.git
cd dropx/backend-api
```

2. Install dependencies:

```bash
composer install
```

3. Copy and configure environment variables:

```bash
cp .env.example .env
php artisan key:generate
```

4. Configure database connection in `.env`.

5. Run migrations and seeders:

```bash
php artisan migrate --seed
```

6. Run the server:

```bash
php artisan serve
```

---

## Usage

* **REST API:** routes defined in `routes/api.php`
* **GraphQL:** accessible via `/graphql` endpoint (Lighthouse)
* **JWT Auth:** use login endpoint to retrieve token, include in `Authorization: Bearer <token>` header

Example: Create a user via use case:

```php
$userRepo = new EloquentUserRepository(new User());
$createUser = new CreateUserUseCase($userRepo);

$admin = (new UserFactory())->admin([
    'name' => 'Admin User',
    'email' => 'admin@example.com'
]);

$createUser->execute($admin);
```

---

## Testing

* **Unit & Integration:** Pest
* **Background jobs and queues:** Redis
* **Run all tests:**

```bash
./vendor/bin/pest
```

---

## Security

* OWASP best practices applied (XSS, CSRF, SQL Injection prevention)
* JWT authentication with refresh tokens
* Rate limiting via Redis
* Input validation and sanitization through DTOs

---

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/XYZ`)
3. Make changes, run tests
4. Commit with a clear message
5. Submit a pull request