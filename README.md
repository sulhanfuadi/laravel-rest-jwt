# Laravel REST JWT

A step-by-step guide to implementing JSON Web Token (JWT) for authentication in Laravel RESTful APIs. This project is based on the Laravel JWT tutorial series by Santri Koding.

---

## Features

-   Secure authentication using JSON Web Tokens (JWT)
-   RESTful API development with Laravel
-   Step-by-step implementation for learning and reference

---

## Prerequisites

Before starting, ensure you have the following:

-   **PHP** (>= 8.0 recommended)
-   **Composer** (dependency manager for PHP)
-   **Laravel** (>= 9.x)
-   A web server (e.g., Apache, Nginx) or Laravel Sail/Docker for local development
-   Database (e.g., MySQL, PostgreSQL, or SQLite)

---

## Installation

Follow these steps to set up the project:

1. **Clone the repository**:

    ```bash
    git clone https://github.com/your-username/laravel-rest-jwt.git
    cd laravel-rest-jwt
    ```

2. **Install dependencies**:

    ```bash
    composer install
    ```

3. **Set up environment file**:

    ```bash
    cp .env.example .env
    ```

    Configure your `.env` file with the necessary database and JWT settings.

4. **Generate the application key**:

    ```bash
    php artisan key:generate
    ```

5. **Generate the JWT secret key**:

    ```bash
    php artisan jwt:secret
    ```

6. **Run migrations**:

    ```bash
    php artisan migrate
    ```

7. **Start the development server**:
    ```bash
    php artisan serve
    ```

---

## Getting Started

### Learn the Basics

-   **What is JWT?**
    JSON Web Tokens (JWT) are used to securely transmit information between parties. Learn more at [JWT.io](https://jwt.io/introduction/).

-   **Why Laravel with JWT?**
    Laravel provides a robust framework for building APIs, and JWT ensures secure authentication for your application.

### Practical Examples

-   Implementing user authentication with JWT.
-   Building protected routes that require token validation.
-   Ensuring secure data exchange in RESTful APIs.

---

## Key Concepts

### Token Structure

JWT consists of three parts:

1. **Header**: Specifies the type of token and signing algorithm.
2. **Payload**: Contains claims or user data (non-sensitive).
3. **Signature**: Verifies the integrity of the token.

Example:

```
xxxxx.yyyyy.zzzzz
```

### Security Best Practices

-   Use HTTPS to prevent token interception.
-   Store tokens securely (e.g., HTTP-only cookies).
-   Set token expiration and implement refresh tokens.

---

## References

-   [Santri Koding - Laravel JWT Series](https://santrikoding.com/apa-itu-jwt)
-   [JWT.io](https://jwt.io/)

---

## License

This project is licensed under the [MIT License](LICENSE).

---

## Contributions

Feel free to fork this repository, submit pull requests, or create issues for any improvements or bugs you find.

---

## Acknowledgments

Special thanks to Fika Ridaul Maulayya for the Laravel JWT tutorial series.
