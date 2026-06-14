# EventBook — Premium Event Booking & Management System

EventBook is a high-fidelity web application built with **Laravel 12**, **Blade templates**, **Tailwind CSS**, and **Vite**. The application features a luxury Obsidian Black & Champagne Gold aesthetic and includes a complete booking flow, seat-limit validation logic, and a full-featured admin management panel.

---

## 🌟 Key Features

* **Premium Visual Design**: Custom-designed Obsidian and Champagne Gold user interface with glassmorphic floating navigations and responsive grid layouts.
* **Live Events Directory**: Real-time listing grid with dynamic category pills, price tags, and search/filter queries (search term, pricing categories, and date brackets).
* **Interactive Seat Booking**: Instant ticket reservations with capacity validations that prevent double-booking or over-booking.
* **My Bookings Space**: Dashboard for users to track confirmed/cancelled tickets with automatic seat release routines.
* **Admin Dashboard & Management**:
  * Real-time metrics widgets (Total Revenue, Active Users, Booking Counts).
  * CRUD interface for managing events (Banner URL uploads, capacities, locations, and pricing).
  * User Accounts Directory displaying details and booking tallies.
* **REST API Endpoints**: Stateless JSON API endpoints for querying available events.

---

## 🛠️ Technology Stack

* **Core Framework**: PHP 8.2+ / Laravel 12
* **Frontend Engine**: Blade Template Engine
* **Asset Bundler**: Vite 6+ & PostCSS
* **Styling**: Tailwind CSS 4+
* **Database**: SQLite (local and production compatible)

---

## 🚀 Local Installation & Setup

Get EventBook running locally in a few simple steps:

### 1. Clone & Configure Environment
Clone the repository to your local machine and copy the configuration file:
```bash
cp .env.example .env
```

### 2. Install Dependencies
Install PHP and Node packages:
```bash
composer install
npm install
```

### 3. Initialize SQLite Database
Create a local SQLite database file:
```bash
# On Unix/macOS
touch database/database.sqlite

# On Windows (PowerShell)
New-Item -Path "database/database.sqlite" -ItemType "File"
```

Run migrations and seed the database with initial demo events:
```bash
php artisan migrate:fresh --seed
```

### 4. Build Assets & Start Servers
Generate the initial Vite build:
```bash
npm run build
```

Run the local development servers:
```bash
# To run both the Laravel server and Vite hot reloading simultaneously:
composer dev
```

Your app will be live at `http://127.0.0.1:8000`.

---

## ☁️ Railway Production Deployment

This project is optimized for deployment on **Railway** using a stateless container architecture.

### Environment Variables
Configure the following variables in your Railway Service dashboard:
* `APP_ENV`: `production`
* `APP_DEBUG`: `false`
* `APP_KEY`: `base64:YOUR_GENERATED_KEY...` (generate via `php artisan key:generate --show`)
* `DB_CONNECTION`: `sqlite`
* `DB_DATABASE`: `/app/database/database.sqlite`
* `SESSION_DRIVER`: `file`

### Custom Build & Start Commands
Since `/public/build` is excluded from git tracking, compile the assets and bootstrap directories during Railway builds:

* **Build Command**:
  ```bash
  npm install && npm run build && composer install --no-dev --optimize-autoloader
  ```
* **Start Command**:
  ```bash
  php artisan migrate --force && php artisan view:clear && php artisan config:cache && php artisan serve --host=0.0.0.0 --port=${PORT}
  ```

---

## 📡 API Endpoints

### Get All Events
Retrieve a list of active events in JSON format:

* **Endpoint**: `/api/events`
* **Method**: `GET`
* **Response Preview**:
  ```json
  [
    {
      "id": 1,
      "title": "Global AI & Agentic Systems Summit 2026",
      "description": "Deep dive into active agent networks...",
      "event_date": "2026-11-08 09:00:00",
      "location": "Moscone Center, SF",
      "price": "299.00",
      "available_seats": 150,
      "image": "https://images.unsplash.com/photo-1540575467063-178a50c2df87",
      "created_at": "2026-06-13T12:00:00.000000Z",
      "updated_at": "2026-06-13T12:00:00.000000Z"
    }
  ]
  ```
