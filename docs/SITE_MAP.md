# COCO Island Holidays — Site Map & Technical Map

This document describes the site structure, templates, controllers, assets and recommended edit points for the repository.

## Quick site map (public URLs)
- `/` — Homepage (hero, collection intro, popular tours carousel, sections)
- `/about` — About
- `/contact` — Contact
- `/packages` — Packages overview
- `/style-guide` — Style guide (file: `stle.blade.php`)
- `/privacy-policy` — Privacy policy
- `/terms-conditions` — Terms & Conditions
- `/tours/{slug}` — Tour detail pages (dynamic)
- Legacy/compatibility routes:
  - `/tours/tropical-shores`
  - `/tours/emerald-isle`
  - `/tours/ramayana`

## Where pages live (key files)
- Routes: `routes/web.php`
- Homepage
  - Controller: `app/Http/Controllers/HomeController.php` (method `index()`)
  - View: `resources/views/index.blade.php`
  - Partial hero: `resources/views/components/hero.blade.php`
- Tour detail
  - Controller: `app/Http/Controllers/TourController.php` (method `show()`)
  - Views: `resources/views/tours/*.blade.php` (e.g. `ramayana.blade.php`, `show.blade.php`)
- Static pages
  - `resources/views/about.blade.php`
  - `resources/views/contact.blade.php`
  - `resources/views/packages.blade.php`
  - `resources/views/privacy-policy.blade.php`
  - `resources/views/terms-conditions.blade.php`
  - `resources/views/stle.blade.php` (style guide)

## Shared components
- Header: `resources/views/components/header.blade.php`
- Footer: `resources/views/components/footer.blade.php`
- Hero: `resources/views/components/hero.blade.php` (video background + CTAs)
- Other components: check `resources/views/components/` for smaller partials

## Data & models
- Tour model: `app/Models/Tour.php`
- Seeders: `database/seeders/TourSeeder.php` and `DatabaseSeeder.php`
- Migrations: `database/migrations/*` (tours table and others)

## Assets
- CSS (legacy/theme): `public/frontend/assets/css/style.css`, `responsive.css`, `preloader.css`
- JS: `public/frontend/assets/js/main.js` and vendor plugins (slick, owl, meanmenu, nice-select)
- Images & video: `public/frontend/assets/img/` and `public/frontend/assets/video/` (hero files)
- Favicons: `public/favicon.ico` and `public/frontend/assets/img/fav-icon.png`

## Build & Dev Notes
- `package.json` and `package-lock.json` exist (Vite listed). Tailwind was experimented with and largely removed—avoid re-adding without a migration plan.
- Local dev site environment in this repo: served by Herd at `coco-island.test` (use for smoke tests).

## Important edit points (safe, low-risk areas to change)
- Hero copy and CTAs: `resources/views/components/hero.blade.php` (keep `.btn`/`.btn-border` classes to avoid breaking JS or legacy styles)
- Primary styles: update `public/frontend/assets/css/style.css` for site-wide visual changes
- JavaScript behaviors: `public/frontend/assets/js/main.js` (preloader, slider, menu, accordions)
- Tours content: model + seeders + `resources/views/tours/*` for data-driven pages

## Recommended immediate tasks
1. Verify preloader does not block pointer events (preloader CSS: `public/frontend/assets/css/preloader.css`, JS hiding it in `main.js`).
2. Replace heavy hero video with a lightweight poster/LQ fallback and lazy-load the full video (edit `hero.blade.php` and add small JS).
3. Optimize tour images and regenerate thumbnails (reduce page weight).
4. Add a small `docs/SITE_MAP.md` (this file) and a `README.md` summary if desired.

## Longer-term recommendations
- Decide CSS migration strategy (keep legacy CSS or adopt Tailwind component-by-component).
- Add automated smoke tests (Pest/PHPUnit + a simple Playwright/Cypress check for hero CTA clickability).
- Introduce Lighthouse CI for performance monitoring in CI.

## How to run locally (quick)
1. Ensure Herd or your local environment serves `coco-island.test` to the project root.
2. If using Laravel dev server: `php artisan serve --host=127.0.0.1 --port=8000` (for quick smoke testing).
3. Visit the site at `http://coco-island.test` (or `http://127.0.0.1:8000` if using artisan serve).

## Contacts & notes
- WhatsApp contact used in CTAs: `https://wa.me/94776605054`
- Keep `.btn` classes unchanged unless carefully testing for JS/plugin compatibility.

---
Generated: 25 September 2025
