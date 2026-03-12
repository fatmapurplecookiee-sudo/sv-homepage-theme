# SV Homepage — WordPress Theme

Custom WordPress theme for the Stan Ventures homepage assessment. Built with dynamic PHP data handling, full responsiveness across all screen sizes, and smooth scroll animations.

> **Live Site:** The homepage is already hosted and live — no local setup needed to preview it.

---

## 🗂 File Structure

```
sv-homepage-theme/
├── assets/
│   ├── css/
│   │   └── main.css          # All styles — CSS Variables, Grid, Flexbox
│   ├── js/
│   │   └── main.js           # Mobile nav, scroll reveal, email validation
│   └── images/               # Case study images, logo
│
├── data/
│   └── content.json          # Single source of truth for all dynamic content
│
├── inc/
│   └── options.php           # WordPress admin settings page (SV Settings)
│
├── template-parts/
│   ├── hero.php              # Hero section (WP options-driven)
│   ├── clients.php           # Client logos ticker
│   ├── services.php          # Services grid (JSON-driven)
│   ├── stats.php             # Stats bar (JSON-driven)
│   ├── testimonials.php      # Testimonial cards (JSON-driven)
│   ├── case-studies.php      # Case study cards (JSON-driven)
│   ├── process.php           # 3-step process section
│   └── comparison.php        # Comparison table (JSON-driven)
│
├── functions.php             # Theme setup, enqueue, sv_data(), sv_section()
├── header.php                # Fixed pill-style header + mobile nav
├── footer.php                # CTA banner + footer + wp_footer()
├── index.php                 # Homepage template — orchestrates all sections
├── page.php                  # Fallback page template
├── style.css                 # WordPress theme header (metadata only)
└── README.md                 # This file
```

---

## 🏗 Architectural Decisions

### 1. Data Layer → `data/content.json`
All repeatable content — Services, Testimonials, Stats, Case Studies, and the Comparison Table — lives in one JSON file. The `sv_section()` helper checks the WordPress database first (so it's ready for an ACF upgrade later), then falls back to JSON. This means you can swap the data source without touching a single template.

### 2. Template Parts
Every homepage section is its own isolated file under `template-parts/`. The `index.php` is just a thin orchestrator that calls `get_template_part()` with a visibility check (`sv_show()`). Each section can be edited, hidden, or reordered independently without touching anything else.

### 3. CSS Architecture
CSS Custom Properties handle all colours, fonts, radii, and shadows — one change propagates everywhere. Layout is entirely Grid and Flexbox, no floats or position hacks anywhere. Breakpoints cover 480px, 600px, 640px, 768px, and 1024px, with a dedicated tablet range (769–1024px) for the header, service grid, and process section.

### 4. WordPress Options for Hero
Hero copy — pill text, headline, description, CTA button labels — is stored in `wp_options` and editable from the custom **SV Settings** admin panel. The client can update it without touching any code.

### 5. No Build Step
Plain CSS and vanilla JS, no Webpack or npm required. Drop the folder into `wp-content/themes/` and it works.

---

## ⏱ Time Taken

| Phase | Time |
|---|---|
| Theme architecture & setup | ~1 hr |
| Header + Hero section | ~1.5 hrs |
| All page sections (Services, Stats, Testimonials, Cases, Process, Comparison) | ~3 hrs |
| Tablet & mobile responsiveness | ~1 hr |
| Admin settings panel | ~45 min |
| JS (animations, validation, smooth scroll) | ~30 min |
| Review & polish | ~45 min |
| **Total** | **~8.5 hrs** |

---

## ✅ Assessment Checklist

| Requirement | Status |
|---|---|
| PHP 8.0+ | ✅ |
| Dynamic data from JSON | ✅ Services, Stats, Testimonials, Case Studies, Comparison |
| Modular template parts | ✅ header, footer, 7 section components |
| WordPress theme | ✅ |
| CSS Variables + Grid/Flexbox | ✅ |
| Fully responsive (Desktop / Tablet / Mobile) | ✅ |
| Hover states on buttons & cards | ✅ |
| Email input frontend validation | ✅ |
| Scroll entrance animations | ✅ IntersectionObserver-based reveal |
| Admin settings panel | ✅ Hero text + section visibility toggles |
| Semantic HTML5 | ✅ |
| Clean, commented code | ✅ |

---

## 💬 A Note on Further Improvements

I want to be upfront — this theme is a solid foundation, but there's definitely room to take it further. Given more time, I'd look at things like compiling SCSS for better style organisation, adding AJAX-powered form submission, integrating ACF for richer content management, and running Lighthouse audits to push Core Web Vitals scores higher.

What's here is my honest best effort within the time constraints of the assessment — built to show how I think about architecture, code quality, and attention to detail rather than to be the final production version. I'm very much aware of where it could grow, and I'd be glad to discuss or act on any of that if given the opportunity.
