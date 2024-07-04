SEED3
====

WordPress starter theme optimized for modern development with Tailwind CSS, Tailwind Typography and the WordPress editor.

Developed by [Seed Web](https://seedwebs.com/). Forked form [\_tw](https://github.com/gregsullivan/_tw).

---

## Added by Seed Webs

- SCSS Support
- Header/Footer Template
- Dark mode Support
- Frontend Member System
- Admin - Disable Comments

---

## Quickstart

### Installation

1. Move this folder to `wp-content/themes` in your local development environment
2. Run `npm install && npm run dev` in this folder
3. Activate this theme in WordPress
4. Open `package.json` and replace `seed3.local` with your local url such as `website.test`, replace `seed3.zip` to your theme name dot zip.

### Setup Theme

5. Open `tailwind/custom/file-header.css` and change Theme information.
6. Choose header/footer layout on `theme/parts/layout/` by renaming file to header.php / footer.php.

### Development

7. Run `npm run watch`
8. Edit template files in `theme` folder, JS in `javascript` folder and CSS/SCSS in `tailwind/custom` folder.
9. For more custom colors, you can edit `theme/theme.json` and add more palette.

### Deployment

10. Run `npm run bundle`
11. Upload the resulting zip file to your site using the “Upload Theme” button on the “Add Themes” administration page
12. Or setup workflow such as [sFTP GitHub Actions](https://mennwebs.com/stories/github-action-push-deploy-sftp/)
