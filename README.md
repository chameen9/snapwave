
# Snapwave

## Description
[Snapwave](https://snapwave.lk) is a Laravel-based application designed for snapwave.lk.

## Features
- Mobile Responsive
- Admin Dashboard
- Real-Time Changing

## Requirements
- PHP 8.0+
- Laravel 9.x+
- Composer
- MySQL

## Installation

1. Clone the repository:
```bash
git clone https://github.com/chameen9/snapwave
cd Snapwave
```

2. Install dependencies:
```bash
composer install
```

3. Copy environment file:
```bash
cp .env.example .env
```

4. Generate application key:
```bash
php artisan key:generate
```

5. Configure database in `.env` and run migrations:
```bash
php artisan migrate
```

## Usage

Start the development server:
```bash
php artisan serve
```

## Project Structure
```
├── app/
├── config/
├── database/
├── routes/
├── resources/
└── public/
```

## License
This project is licensed under the MIT License.

## Support
For issues or questions, please create an issue in the repository.
