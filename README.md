# 🚀 Advanced WordPress Starter Framework (Docker & SCSS)

A professional boilerplate for developing high-performance WordPress themes and plugins. Optimized for **Windows 11 (WSL2)** and **macOS**.

---

## 🏗️ Quick Setup Guide

### 1. Prerequisites

Before starting, ensure you have these installed:

- **Docker Desktop** (With WSL2 backend enabled for Windows).
- **Node.js & NPM** (To compile SCSS).

### 2. Project Initialization

Follow these steps to get your environment running:

1.  **Configure Environment:**

    ```bash
    cp .env.example .env
    ```

    _Update `PROJECT_NAME` and `HOST_PORT` in `.env` to avoid conflicts._

2.  **Launch Docker:**

    ```bash
    docker-compose up -d
    ```

    - Access Website: `http://localhost:8080`
    - Access phpMyAdmin: `http://localhost:8081`

3.  **Setup Theme Assets:**
    ```bash
    cd wp-content/themes/[your-theme-folder]
    npm install
    ```

---

## 🎨 Development Workflow

### SCSS Compilation

To watch for changes and compile styles in real-time, run:

```bash
npm run dev
```

Global Styles: Edit assets/scss/main.scss.
Page Styles: Add files to assets/scss/pages/ (e.g., home-page.scss).
Variables: Edit assets/scss/abstracts/\_variables.scss.

## Directory Overview

.
├── .env # Environment config
├── docker-compose.yml # Container orchestration
└── wp-content/  
 └── themes/  
 └── [your-theme]/
├── assets/ # SCSS/JS Source & Compiled CSS
├── inc/ # PHP Modules (REST API, etc.)
├── package.json
└── functions.php

🐳 Essential Docker Commands

-- Start project (Background)
docker-compose up -d

-- Stop services (Keep data)
docker-compose stop

-- Remove containers
docker-compose down

-- Danger: Wipe all Database data
docker-compose down -v

Happy Coding! Built for professional WordPress developers.
