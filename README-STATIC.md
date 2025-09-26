# COCO Island Holidays - Modern Static Website

A modern, responsive website for COCO Island Holidays built with **Tailwind CSS** and vanilla JavaScript.

## 🚀 Features

- **Modern Design**: Clean, responsive design using Tailwind CSS
- **Performance Optimized**: Static HTML with minimal JavaScript
- **Mobile First**: Fully responsive across all devices
- **Interactive Elements**: 
  - Smooth scroll animations
  - Carousel sliders for tours and testimonials
  - Accordion-style FAQ section
  - Countdown timer for special offers
  - Mobile navigation menu
- **SEO Friendly**: Clean HTML structure with proper meta tags
- **Fast Loading**: Optimized images and minimal dependencies

## 🛠️ Technologies Used

- **HTML5**: Semantic markup
- **Tailwind CSS**: Utility-first CSS framework (via CDN)
- **JavaScript**: Vanilla JS for interactions
- **jQuery**: For carousel functionality
- **Owl Carousel**: Tour and testimonial sliders
- **Font Awesome**: Icons

## 📁 Project Structure

```
public/
├── index.html                 # Main website file
├── frontend/
│   └── assets/
│       ├── css/
│       │   ├── owl.carousel.min.css
│       │   └── slick.css
│       ├── js/
│       │   ├── vendor/
│       │   │   └── jquery-1.12.4.min.js
│       │   ├── owl.carousel.min.js
│       │   ├── countdown.js
│       │   └── main.js
│       ├── img/
│       │   ├── testimonial/      # Customer photos
│       │   ├── chooseus/         # Gallery images
│       │   ├── best_things/      # Experience images
│       │   └── video/           # Hero background video
│       └── video/
│           ├── 0914.mp4         # Hero background video
│           └── 0914.webm        # Hero background video (WebM)
server.php                     # Simple PHP server for local development
```

## 🚀 Getting Started

### Option 1: Simple HTTP Server (Recommended)

1. **Using PHP** (if you have PHP installed):
   ```bash
   php -S localhost:8000 -t public
   ```

2. **Using Python 3**:
   ```bash
   cd public
   python -m http.server 8000
   ```

3. **Using Node.js** (if you have Node installed):
   ```bash
   npx serve public -p 8000
   ```

4. **Using Live Server** (VS Code extension):
   - Install the "Live Server" extension
   - Right-click on `public/index.html`
   - Select "Open with Live Server"

### Option 2: Open Directly

Simply open `public/index.html` in your web browser. However, some features may not work due to CORS restrictions.

## 📱 Sections

1. **Hero Section**: Video background with call-to-action buttons
2. **About**: Company introduction with background image
3. **Why Choose Us**: Interactive accordion with image gallery
4. **Popular Tours**: Carousel slider showcasing tour packages
5. **Special Offer**: Countdown timer for limited-time offers
6. **Top Experiences**: Grid layout of Sri Lankan attractions
7. **Testimonials**: Customer reviews in carousel format
8. **Footer**: Contact information and social links

## 🎨 Customization

### Colors
The website uses a custom orange color scheme defined in the Tailwind config:
- Primary: `#f97316` (Orange 500)
- Primary variants: `50` to `900` shades

### Content
Edit the `public/index.html` file to update:
- Text content
- Images (update `src` attributes)
- Links and contact information
- Social media links

### Styling
The website uses Tailwind CSS classes. Common customizations:
- Change colors by updating the `primary` color palette
- Modify spacing using Tailwind spacing classes (`p-4`, `m-8`, etc.)
- Update typography with Tailwind font classes

## 📞 Contact Integration

The website includes multiple contact methods:
- **WhatsApp**: Floating button and footer links to `+94 77 660 5054`
- **Email**: Contact information in footer
- **Social Media**: Facebook, Instagram, Twitter, YouTube links

## 🌐 Deployment

### GitHub Pages
1. Push code to GitHub repository
2. Go to Settings > Pages
3. Select source branch (usually `main`)
4. Set folder to `/public` or root depending on structure

### Netlify
1. Connect your GitHub repository
2. Set build command: (none needed for static site)
3. Set publish directory: `public`

### Vercel
1. Import project from GitHub
2. Set output directory: `public`
3. Deploy

## 📈 Performance

- **Fast Loading**: Minimal CSS and JavaScript
- **Optimized Images**: Use WebP format where supported
- **CDN Assets**: Tailwind CSS and Font Awesome loaded from CDN
- **Lazy Loading**: Consider implementing for images below the fold

## 🔧 Browser Support

- **Modern Browsers**: Chrome, Firefox, Safari, Edge (latest versions)
- **Mobile**: iOS Safari, Chrome Mobile, Samsung Internet
- **Features Used**: CSS Grid, Flexbox, Intersection Observer, CSS Animations

## 📝 License

This project is created for COCO Island Holidays. All rights reserved.

---

**Built with ❤️ for Sri Lankan tourism**
