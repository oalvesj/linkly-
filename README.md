# 🔗 Linkly

A Linktree-inspired link manager built with **Laravel**, **Breeze** & **Tailwind CSS**.

Each user gets a personal public page with all their links — like `yoursite.com/username`.

![PHP](https://img.shields.io/badge/PHP-8.1-777BB4?style=flat&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-10-FF2D20?style=flat&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3-06B6D4?style=flat&logo=tailwindcss&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8-4479A1?style=flat&logo=mysql&logoColor=white)

---

## ✨ Features

- 🔐 Full authentication (register, login, logout) via Laravel Breeze
- ➕ Add, edit and delete personal links
- 🌐 Public profile page accessible at `/{username}`
- 🎨 Font Awesome icons support
- 🛡️ Policy-based authorization (only owners can edit/delete their links)
- 📱 Responsive design with Tailwind CSS

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| Backend | Laravel 10 |
| Frontend | Blade + Tailwind CSS |
| Auth | Laravel Breeze |
| Database | MySQL |
| Icons | Font Awesome 6 |

---

## 🚀 Getting Started

### Requirements

- PHP >= 8.1
- Composer
- MySQL
- Node.js & NPM

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/oalvesj/linkly-.git
cd linkly-

# 2. Install PHP dependencies
composer install

# 3. Install Node dependencies
npm install

# 4. Copy environment file
cp .env.example .env

# 5. Generate application key
php artisan key:generate

# 6. Configure your database in .env
DB_DATABASE=linkly
DB_USERNAME=root
DB_PASSWORD=

# 7. Run migrations
php artisan migrate

# 8. Build assets
npm run build

# 9. Start the server
php artisan serve
```

Visit `http://127.0.0.1:8000` and register your account.

---

## 📸 Screenshots

### Public Profile Page
> Each user has a beautiful public page at `/{username}`

### Dashboard
> Manage your links with add, edit and delete functionality

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

---

Made with ❤️ by [Osni Alves](https://github.com/oalvesj)
