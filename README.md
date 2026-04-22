# Bhavna Roadlines - Website Demo

A modern, responsive website for Bhavna Roadlines Pvt. Ltd. - a leading logistics and transportation company in India.

## Technology Stack

- **Backend:** Laravel 11 (PHP 8.x)
- **Frontend:** Laravel Blade + HTML5 + CSS3 + JavaScript
- **Database:** MySQL / SQLite
- **Styling:** Custom CSS with responsive design
- **Icons:** Font Awesome
- **Fonts:** Google Fonts (Inter)

## Features

### 7 Pages
1. **Home** - Hero banner, stats, services preview, about preview
2. **About Us** - Company journey, founder desk, mission & vision
3. **Services** - Road transport, warehousing, cargo, express delivery
4. **Clients & Gallery** - Photo gallery and client showcase
5. **Investor** - Financial reports, company highlights
6. **Contact Us** - Contact form, Google Maps
7. **Careers** - Job openings, application form

### Key Features
- Fully responsive design (mobile + desktop)
- Modern corporate logistics look
- Blue, Black, White, Gray color theme
- Interactive elements and animations
- SEO-friendly structure

## Deployment

### Railway (Recommended)
1. Push to GitHub
2. Connect Railway to repository
3. Deploy automatically

### Local Development
```bash
# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Start development server
php artisan serve
```

### Docker
```bash
# Build and run
docker build -t bhavna-roadlines .
docker run -p 8000:80 bhavna-roadlines
```

## Project Structure

```
bhavna-roadlines-demo/
├── app/
│   └── Http/
│       └── Controllers/
│           └── HomeController.php
├── bootstrap/
│   └── app.php
├── config/
│   └── app.php
├── database/
├── public/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── app.js
│   ├── images/
│   └── index.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── services.blade.php
│       ├── gallery.blade.php
│       ├── investor.blade.php
│       ├── contact.blade.php
│       └── careers.blade.php
├── routes/
│   └── web.php
├── .env
├── .env.example
├── composer.json
├── Dockerfile
├── railway.json
└── README.md
```

## Color Scheme

- Primary Blue: #0066cc
- Dark Navy: #1a1a2e
- Light Gray: #f8f9fa
- Text Gray: #6c757d

## Client Requirements

- Custom design (Laravel-based)
- SEO-friendly structure
- Fully responsive (web + mobile)
- Admin panel for updating photos & content
- Blue, Black, White, Gray theme
- Clean, professional logistics look

## License

Private project for Bhavna Roadlines Pvt. Ltd.

## Developer

Devanshu Saini  
Email: devanshusaini72@gmail.com  
Portfolio: https://devanshusaini-portfolio.vercel.app/
