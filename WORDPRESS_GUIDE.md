# Cube27 WordPress Implementation Guide

This guide helps your team recreate the HTML prototype in WordPress. The prototype serves as a pixel-perfect reference—open it in a browser alongside WordPress as you build.

---

## Quick Start

### Recommended Themes
#### Premium Options (Highly Recommended for Enterprise Look)
- **Astra Pro** - Use with "Enterprise" or "Tech" starter templates. Excellent performance and deep header customization.
- **Kadence Pro** - Ideal for building the "Bento Grid" layouts and modern headers.
- **Avada** - A powerful all-in-one builder that makes the "3D Glass" effects and complex grids very easy to implement without code.
- **Enfold** - Very clean, professional, and stable—perfect for a GCC partner brand.

#### Lightweight Options
- **GeneratePress Premium** - For maximum speed and developer control.
- **Blockbase** - If you want to use the latest WordPress Full Site Editing (FSE).

> **Tip:** All three themes support full-site editing and work well with the default Block Editor.

### Required Plugins
| Plugin | Purpose |
|--------|---------|
| **AOS - Animation on Scroll** | Scroll-triggered animations |
| **WPForms Lite** (or Gravity Forms) | Contact form |
| **Safe SVG** | SVG logo upload support |
| **Custom CSS/JS** | Add custom styles |

### Optional Plugins
| Plugin | Purpose |
|--------|---------|
| **MetaSlider** or **Carousel Slider** | Employee photo carousel |
| **Yoast SEO** | SEO optimization |
| **WP Fastest Cache** | Performance |

---

## Design System Setup

### 1. Add Custom CSS
Go to **Appearance > Customize > Additional CSS** and paste:

```css
/* ==========================================================================
   Cube27 Design Tokens (WordPress)
   ========================================================================== */

:root {
  /* Colors */
  --color-primary: #2563EB;
  --color-primary-hover: #1D4ED8;
  --color-primary-light: #DBEAFE;
  --color-secondary: #0EA5E9;
  --color-secondary-light: #E0F2FE;
  
  /* Text */
  --color-text-primary: #1E293B;
  --color-text-secondary: #64748B;
  --color-text-tertiary: #94A3B8;
  
  /* Backgrounds */
  --color-bg-secondary: #F8FAFC;
  --color-border: #E2E8F0;
}

/* Typography */
body {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
  color: var(--color-text-primary);
}

/* Primary Button Style */
.wp-block-button .wp-block-button__link,
.btn-primary {
  background-color: var(--color-primary) !important;
  color: white !important;
  border-radius: 8px !important;
  padding: 12px 24px !important;
  font-weight: 500 !important;
  transition: background-color 0.2s ease !important;
}

.wp-block-button .wp-block-button__link:hover {
  background-color: var(--color-primary-hover) !important;
}

/* Secondary Button */
.btn-secondary,
.is-style-outline .wp-block-button__link {
  background-color: var(--color-bg-secondary) !important;
  color: var(--color-text-primary) !important;
  border: 1px solid var(--color-border) !important;
}

/* Section Spacing */
.wp-block-group.section {
  padding: 80px 0;
}

.wp-block-group.section-alt {
  background-color: var(--color-bg-secondary);
}

/* Cards */
.service-card {
  padding: 32px;
  background: white;
  border: 1px solid var(--color-border);
  border-radius: 12px;
  transition: all 0.3s ease;
}

.service-card:hover {
  border-color: var(--color-primary);
  box-shadow: 0 10px 40px rgba(0,0,0,0.1);
  transform: translateY(-4px);
}

/* Tags */
.tag {
  display: inline-block;
  padding: 4px 12px;
  background-color: var(--color-bg-secondary);
  border-radius: 100px;
  font-size: 12px;
  color: var(--color-text-secondary);
}

/* Stats */
.stat-value {
  font-size: 36px;
  font-weight: 700;
  color: var(--color-primary);
}

/* Feature List */
.feature-item {
  display: flex;
  gap: 16px;
  margin-bottom: 24px;
}

.feature-icon {
  width: 24px;
  height: 24px;
  background-color: var(--color-primary-light);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  flex-shrink: 0;
}
```

### 2. Add Google Font
Go to **Appearance > Customize > Typography** (or use a plugin like "Fonts Plugin") and add:
```
Font Family: Inter
Weights: 400, 500, 600, 700
```

Or add this in the Additional CSS or header:
```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
```

---

## Page-by-Page Instructions

### Homepage (index.html → Front Page)

#### Hero Section
1. Add a **Cover** block or **Group** block
2. Inside, add:
   - **Paragraph** with class `hero-badge`: "Global Capability Center Partner"
   - **Heading H1**: "Powered by People. Enabled by Tech."
   - **Paragraph**: Subheadline text
   - **Buttons** block: Two buttons side by side

#### Trust Bar
1. Add a **Group** block with class `trust-bar`
2. Add **Paragraph** (centered, uppercase): "TRUSTED BY GLOBAL LEADERS"
3. Add **Columns** block (5 columns) for logo placeholders

#### Core Offerings Grid
1. Add a **Group** block with class `section section-alt`
2. Add section header with title and "View All Services →" link
3. Use **Columns** block (3 columns) for service cards
4. Each card is a **Group** block with:
   - Emoji or icon
   - **Heading H3**: Service name
   - **Paragraph**: Description
   - Tags (use **Paragraph** with inline spans)

#### Advantages Section
1. Add **Columns** block (4 columns)
2. Each column:
   - **Heading H2** for stat (e.g., "Top 1%")
   - **Heading H4** for title
   - **Paragraph** for description

### Services Page (services.html)

#### Page Header
1. **Group** block with background color `#F8FAFC`
2. Label, H1, and description paragraph

#### Service Pillars
Each pillar uses a **Columns** block (2 columns):
- Left: Content (subtitle, title, description, feature list, CTA button)
- Right: Stats grid or related visual

#### Feature Lists
Use a **List** block styled with custom CSS, or create custom blocks:
```html
<div class="feature-item">
  <div class="feature-icon">✓</div>
  <div>
    <strong>Feature Title</strong>
    <p>Feature description goes here.</p>
  </div>
</div>
```

### Case Studies Page (case-studies.html)

Each case study is a **Group** block with two **Columns**:
- Left column: Label, title, challenge, solution
- Right column: Results grid (4 stats), key outcomes list, tags

### About Page (about.html)

#### Leadership Section
Use **Columns** block (2 columns) with team member cards.

#### Employee Carousel
Use a carousel plugin like **MetaSlider** or **Carousel Slider**:
1. Create a slider with 10 team photos
2. Set to auto-play, no captions
3. Configure responsive breakpoints

### Contact Page (contact.html)

Use **WPForms** or **Gravity Forms**:
1. Create form with fields:
   - Full Name (required)
   - Work Email (required)
   - Company Name (required)
   - Area of Interest (dropdown)
   - Budget Range (dropdown, optional)
   - Message (textarea, optional)
2. Configure email notifications

### Privacy Policy Page (privacy-policy.html)

1. Create a new page with long-form content
2. Use **Heading H2** for main sections
3. Use **Heading H3** for subsections
4. Use **List** blocks for bullet points

---

## Animation Setup (AOS Plugin)

After installing the AOS plugin:

1. Add `data-aos="fade-up"` to elements you want to animate
2. For delayed animations: `data-aos-delay="100"`

In WordPress, you can add these via:
- Block editor: Advanced > Additional CSS Class
- Custom HTML blocks
- Using a custom block pattern

---

## Navigation Setup

1. Go to **Appearance > Menus**
2. Create Primary Menu with items:
   - Services (link to /services/)
   - Success Stories (link to /case-studies/)
   - About Us (link to /about/)
   - Contact (link to /contact/)
   - Privacy (link to /privacy-policy/)
3. Add "Partner with Us" as a custom link styled as button

---

## Footer Setup

Most themes have footer widget areas. Set up:
- **Column 1:** Logo + tagline
- **Column 2:** Services links
- **Column 3:** Company links
- **Column 4:** Contact info

Add bottom bar with copyright and legal links.

---

## File Checklist

| HTML File | WordPress Page |
|-----------|----------------|
| index.html | Front Page (Settings > Reading) |
| services.html | /services/ |
| case-studies.html | /case-studies/ |
| about.html | /about/ |
| contact.html | /contact/ |
| privacy-policy.html | /privacy-policy/ |

---

## Testing Checklist

- [ ] All navigation links work
- [ ] Mobile responsive (test on phone)
- [ ] Contact form submits correctly
- [ ] Employee carousel navigates
- [ ] Scroll animations trigger
- [ ] Footer links work
- [ ] Privacy policy accessible from footer
- [ ] Page load time < 3 seconds

---

## Resources

- [HTML Prototype Files](../cube27/) - Open in browser for reference
- [Inter Font](https://fonts.google.com/specimen/Inter)
- [AOS Animation Library](https://michalsnik.github.io/aos/)
- [Kadence Theme Docs](https://developer.theme.dev/)

---

## Support

Questions during implementation? Refer to:
1. The HTML prototype files for exact styling
2. The `css/styles.css` file for CSS variable values
3. Browser DevTools to inspect specific element styles
