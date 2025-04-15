# TPC FSE Core 🌴

A custom WordPress Full Site Editing (FSE) starter theme built by [Two Palms Creative](https://twopalmscreative.co). This theme serves as the foundational base for all premium themes developed by TPC.

It’s not meant to be used as a standalone product — instead, it's where all shared functionality, structure, and styling begin.

---

## ⚡ Why This Exists

Creating multiple branded WordPress themes means starting from a strong, consistent foundation. `TPC FSE Core` provides:

- A clean, customizable starting point
- Shared design tokens, layout structure, and accessible templates
- A reliable way to push updates across all TPC themes

All custom themes like [`verve-theme`](https://github.com/twopalmscreative/verve-theme) are built on top of this base and inherit its structure, performance practices, and developer tooling.

---

## 🧱 Based On WDS-BT

This theme is a customized fork of [WDS-BT](https://github.com/WebDevStudios/WDS-BT) — a foundational block theme by WebDevStudios.

We've extended WDS-BT with TPC-specific customizations including:

- Custom branding + theme structure
- Simplified setup for faster dev flow
- Tailored color palettes and layout defaults
- Opinionated block style overrides

Credit to WebDevStudios for their thoughtful work — this theme stays in sync with their updates and honors the GPLv3 license.

---

## ✨ Features

- ✅ Native Full Site Editing support
- 🎨 Shared design tokens + global styles
- 🧑‍💻 Developer-first tooling (linting, formatting, a11y tests)
- ♿ WCAG 2.2-compliant templates
- 🧰 Block scaffolding + reusable patterns
- 🚫 Strict Lefthook pre-commit hooks to enforce quality standards

---

## 🔧 Setup Instructions

This theme is not meant to be installed directly. It’s a base for other theme repos (like `verve-theme`) which clone and extend it.

### Clone + initialize a new theme from this base:

```bash
git clone https://github.com/twopalmscreative/tpc-fse-core.git your-theme-name
cd your-theme-name
git remote remove origin
git remote add origin https://github.com/twopalmscreative/your-theme-name.git
git push -u origin main 
```

### To pull in base updates later:

```bash
git remote add base https://github.com/twopalmscreative/tpc-fse-core.git
git fetch base
git merge base/main
```

## 📁 Development Workflow

```bash
npm install
npm run setup       # Install dependencies + build assets
npm run start       # Start the dev server
npm run build       # Build for production
npm run create-block
```

## Code Quality Checks

```bash
npm run lint:php
npm run lint:css
npm run lint:js
npm run a11y
```

## 👋 Maintained by

Ashley Stanley
---
[Two Palms Creative](https://twopalmscreative.co)
---
[Instagram → @twopalmscreative.co](https://instagram.com/twopalmscreative.co)