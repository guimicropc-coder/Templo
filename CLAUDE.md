# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project overview

This repo contains a custom WordPress theme called "Templo do Churrasco" (business: churrasqueiro/BBQ chef service in Rio de Janeiro, see `README.txt` and the business profile in the user's global `CLAUDE.md`). The theme is plain PHP + CSS + vanilla JS — there is no build tool, package manager, bundler, linter, or automated test suite (no `package.json`, `composer.json`, or npm scripts). Editing is direct file editing.

## Canonical source vs. duplicate folders — read this first

The repo root has accumulated multiple snapshots of the same theme from different editing sessions. **`deltaforce/` is the current, most up-to-date copy of the theme** (confirmed by newest `style.css` timestamp and matching the loose root-level `page-calculadora.php` / `page-sobre.php` files). When asked to change theme behavior or styling, edit files in `deltaforce/` (and mirror the same edit to the loose root copies of `page-calculadora.php` / `page-sobre.php` if those are still meant to stay in sync).

The following are **older duplicate snapshots**, kept as backups, not actively developed — do not edit these unless the user specifically asks to reconcile/clean them up:
- `corrigido_extraido/`, `template_extraido/`, `templo_preview_temp/` — identical to each other, one step behind `deltaforce/`
- `templodochurrasco/templodochurrasco/templo-do-churrasco/` and `templodochurrasco_preview/templodochurrasco/templo-do-churrasco/` — oldest snapshot (smaller `style.css`, no calculator CSS)
- `*.zip` files at the root (`deltaforce.zip`, `tema 1.zip`, `templodochurrasco.zip`, `templodochurrasco_CORRIGIDO.zip`, `templodochurrasco_atualizado.zip`) — packaged exports of various snapshots above, not source of truth
- `PREVIA_*.html`, `TEMPLO_DO_CHURRASCO_OFICIAL.html`, `previa_*.html`, `preview_blog.html`, `post-churrasco-vs-parrilla.html` — standalone static HTML mockups used to preview design in a browser without a WordPress install; not wired into the theme
- `style_embedded.css`, `mobile-fixes-templo.css`, `templo-mobile-final.css` — supplementary CSS meant to be pasted into WP Admin > Aparência > Personalizar > CSS Adicional, not part of the theme package itself

## Deploying/packaging the theme

There is no CLI deploy step. Per `README.txt`:
1. ZIP the `deltaforce/` folder so the zip contains a top-level `templo-do-churrasco/` (or theme-named) folder wrapping the files — NOT the files loose at the zip root, or WordPress upload will fail.
2. In WP Admin: Aparência > Temas > Adicionar Novo > Fazer Upload do Tema > upload the zip > Instalar Agora > Ativar.
3. Import `conteudo-wordpress.xml` via Ferramentas > Importar > WordPress (this seeds blog posts and pages).
4. Permalinks must be set to "Nome do Post" (Configurações > Links Permanentes) before pages are created, or pages 404.

## Theme architecture (inside `deltaforce/`)

- `style.css` — theme header (name/version/description) plus **all** theme CSS; custom properties (colors, spacing) are declared in a `:root` block near the top.
- `functions.php` — theme bootstrap, organized by function:
  - `tdc_theme_setup()` — theme supports, textdomain
  - `tdc_enqueue_assets()` — enqueues Google Fonts, `style.css`, `assets/js/main.js`
  - `tdc_register_sidebars()` — widget areas
  - `tdc_register_cpt_depoimentos()` — registers custom post type `depoimento` (client testimonials)
  - `tdc_schema_local_business()` — outputs JSON-LD LocalBusiness schema for SEO
  - `tdc_meta_tags()` — meta description/OG tags
  - `tdc_whatsapp_url()` / `tdc_whatsapp_formatted()` / `tdc_whatsapp_button()` — helpers that build the WhatsApp CTA links from the `TDC_WHATSAPP` constant (business phone number)
  - `tdc_customize_register()` — Customizer settings (contact info, etc.)
  - `tdc_excerpt_length()`, `tdc_reading_time()`, `tdc_pagination()` — blog helpers
- `header.php` / `footer.php` — site chrome (topbar, nav, footer columns)
- `front-page.php` — homepage, built as long-form hardcoded sections (hero, stats, about, services, gallery, testimonials, etc.) rather than block-editor content
- `page-sobre.php`, `page-servicos.php`, `page-galeria.php`, `page-contato.php`, `page-calculadora.php`, `page-privacidade.php` — page templates with content hardcoded directly in PHP (per `README.txt`, editing page text means editing the PHP template, not the WP block editor)
- `single.php`, `archive.php`, `page.php`, `index.php`, `404.php` — standard WP template-hierarchy fallbacks
- `assets/js/main.js` — single vanilla-JS file covering: mobile hamburger menu, sticky/scroll header effects, smooth-scroll anchors, the meat calculator (`#calc-form` — computes quantities from guests/duration/profile and builds a WhatsApp message with the results), FAQ accordion, testimonial hover interactions
- `assets/images/` — `hero-bg.jpg`, `og-image.jpg`
- `conteudo-wordpress.xml` — WXR export bundling blog posts + all pages for import via Tools > Import
