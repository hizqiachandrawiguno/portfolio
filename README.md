# hizqiachandra.site

Personal portfolio of Hizqia Chandra Wiguno, a graphic designer and multimedia engineer. Built with Laravel 12, Bootstrap and GSAP.

## Structure

| Path | What it is |
|------|-----------|
| `routes/web.php` | `/` welcome screen, `/portfolio` main page, `/cv` PDF download, sitemap and Search Console file |
| `app/Http/Controllers/PortfolioController.php` | All page content (bio, skills, experience, certificates, projects) as plain arrays |
| `resources/views/portfolio/index.blade.php` | Main page and project modals |
| `resources/views/portfolio/partials/case-study.blade.php` | Context / Problem / Solution / Result block used in gallery modals |
| `public/css/custom-designer.css`, `public/js/portfolio-interactive.js` | Styles and modal/gallery behaviour |

To edit content, change the arrays in the controller. No database is needed.

## Local development

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

## Deployment

The site runs on Hostinger shared hosting where the document root is the repository root, not `public/`. That is why `index.php`, `.htaccess`, `sitemap.xml` and the Google verification file exist both at the root and in `public/`. Keep both copies in sync when changing them.

## Images

Gallery images are served as WebP at 1024 × 1024 px (feed 1:1). Source PNG/JPG exports sit next to them in `public/images` and are not loaded by the site.
