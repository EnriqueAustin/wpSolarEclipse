# Solar Eclipse WordPress Theme

A premium, high-performance, conversion-focused WordPress theme designed for a fictional solar energy and renewable solutions company.

## Features

- **Modern Solar & Tech Aesthetic**: Deep charcoal base, bright solar yellow, electric cyan, and soft green highlights.
- **Glassmorphism & Glow Effects**: Subtle depth, layered UI, and floating orbs.
- **Micro-Interactions**: Scroll reveals, hover effects, and parallax-like elements.
- **Fully Responsive**: Mobile-first design with a slide-out menu and floating CTA.
- **Conversion Optimized**: Lead generation form, sticky CTAs, and a mock Energy Savings Calculator.
- **Built with Tailwind CSS**: Utility-first styling for rapid development and clean code.
- **Vanilla JS**: No heavy frameworks like jQuery. Intersection Observers used for scroll reveal animations.
- **Gutenberg Compatibility**: Included `theme.json` to manage typography and colors in the Block Editor gracefully.

## Installation

1. Upload the `solar-eclipse-theme` folder to your WordPress `wp-content/themes/` directory, or zip the folder and upload it via the WordPress Admin interface (Appearance > Themes > Add New > Upload Theme).
2. Activate the theme via the WordPress Admin.
3. Your site will immediately apply the new styles. The custom homepage is integrated into `front-page.php`.

## How to Customize and Build

This theme uses Tailwind CSS to compile the styles based on the PHP templates.

### Prerequisites
- Node.js installed on your machine.

### Build Steps

1. Open your terminal and navigate to the theme directory:
   ```bash
   cd wp-content/themes/solar-eclipse-theme
   ```

2. Install the necessary dependencies (Tailwind CSS):
   ```bash
   npm install
   ```

3. To build the CSS file for production (minified):
   ```bash
   npm run build
   ```

4. During development, you can run the watcher to automatically rebuild the CSS file when you save changes:
   ```bash
   npm run watch
   ```

## Image Credits

Images used in this mock theme are remotely sourced (e.g., Unsplash, Pexels) inside the `front-page.php` file exclusively for demonstration purposes.
- **Note in footer**: "Images via Unsplash Source / Pexels" is included as per requirements.

## File Structure Highlights

- `style.css`: WordPress theme declaration.
- `index.php`: Fallback template.
- `front-page.php`: The custom landing page containing Hero, Solutions, Projects, Calculator, Lead Form, etc.
- `header.php`: Glassmorphism sticky navbar and head structure.
- `footer.php`: Footer layout.
- `functions.php`: Theme setup, enqueuing styles (`assets/css/theme.css`) and scripts.
- `theme.json`: Configuration for the Gutenberg editor.
- `assets/js/main.js`: Scroll animations and mobile menu interactions.
- `src/input.css`: Source file with Tailwind `@tailwind` directives and custom component classes.

Enjoy building the future of energy!
