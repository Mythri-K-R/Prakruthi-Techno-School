# Prakruthi Techno School – PHP Website (Running Manual)

A multi-page PHP website: Home, About, Academics, Facilities, Activities, Gallery, Admissions, Contact.
The contact form saves enquiries to a file, and a password-protected admin page lists them. **No database is needed.**

## 1. Requirements
- PHP 7.4 or newer (PHP 8.x recommended)
- Any one of: XAMPP / WAMP / MAMP / Laragon, or plain PHP CLI, or any PHP web hosting
- A web browser and an internet connection (for Google Fonts only)

## 2. Run it on your computer

### Option A – XAMPP / WAMP (easiest on Windows)
1. Install XAMPP (https://www.apachefriends.org) and start **Apache** from the XAMPP Control Panel.
2. Unzip this project and copy the folder `prakruthi-techno-school` into `C:\xampp\htdocs\`.
3. Open http://localhost/prakruthi-techno-school/ in your browser.

### Option B – PHP built-in server (no Apache needed)
1. Install PHP and check it with `php -v`.
2. Open a terminal inside the project folder and run:
   ```
   php -S localhost:8000
   ```
3. Open http://localhost:8000/ in your browser. Press `Ctrl + C` in the terminal to stop.

## 3. Put it online (hosting / cPanel)
1. Zip is not needed. Upload everything inside `prakruthi-techno-school` to `public_html` (or a sub-folder) using File Manager or FTP.
2. Make sure the `data/` folder is **writable** (permission 755 or 775; use 777 only if nothing else works).
3. Edit `includes/config.php` (see section 5) and change the admin password.
4. Open your domain. Use HTTPS if your host provides it.

## 4. Folder structure
```
index.php, about.php, academics.php, facilities.php,
activities.php, gallery.php, admissions.php, contact.php   <- the pages
includes/config.php     <- school details, admin password, helper functions
includes/header.php     <- top menu (shown on every page)
includes/footer.php     <- admissions band + footer
includes/ui.php         <- line icons, wordmark + inner-page banner helper
includes/sections.php   <- enquiry form, FAQ accordion, milestone counters
assets/css/style.css    <- all colours and styles (logo colours at the top, :root)
assets/js/main.js       <- mobile menu, scroll effects, gallery filter and viewer
assets/images/          <- logo.png and img-0.jpg ... img-20.jpg
admin/enquiries.php     <- admin login and enquiry list
data/                   <- enquiries are saved here (must be writable)
```

## 5. Customise
- **Phone, address, email, hours:** edit `includes/config.php`.
- **Text of a page:** open that page's `.php` file and edit the text between the HTML tags.
- **WhatsApp:** set `SCHOOL_WHATSAPP` (country code + number, digits only) and the pre-filled `WHATSAPP_TEXT` in `includes/config.php`.
- **Milestone counters (home page):** hidden until you fill `SCHOOL_STATS` in `includes/config.php` with real figures (an example is in the comment above it).
- **Social icons (footer):** set `SOCIAL_FACEBOOK`, `SOCIAL_INSTAGRAM`, `SOCIAL_YOUTUBE`; empty ones are hidden.
- **Founder & Principal messages (DUMMY – replace before going live):** edit names, roles and messages in `leaders()` in `includes/sections.php`. Add portraits as `assets/images/founder.jpg` and `assets/images/principal.jpg`; until then initials are shown.
- **FAQs:** edit the questions in `faq_items()` in `includes/sections.php`.
- **Home slider:** edit the `$slides` list at the top of `index.php`.
- **Colours:** edit the variables at the top of `assets/css/style.css` (`--ink`, `--brand`, `--leaf`, `--sun`).
- **Photos:** replace files in `assets/images/` keeping the same names (e.g. `img-3.jpg`). To add gallery photos, add the file and a new entry in the `$gallery` list at the top of `gallery.php` (c = Classroom, a = Activities, s = Sports, k = Campus).
- **Placeholders to replace before going live:** email address, school hours, the mission/vision text, and the statistics/testimonials (not included until you have real figures and feedback).

## 6. Enquiry form and admin
- Visitors submit the form on **Contact**. Each enquiry is saved in `data/enquiries.php` (the file blocks direct viewing).
- View enquiries at `/admin/enquiries.php`. Default password: `ChangeMe@123`. **Change `ADMIN_PASSWORD` in `includes/config.php` before going live.**
- Optional email alerts: set `NOTIFY_EMAIL` in `includes/config.php`. This only works if your host's PHP `mail()` is configured.
- Spam protection: hidden honeypot field plus a session token. Back up `data/enquiries.php` regularly.

## 7. Troubleshooting
| Problem | Fix |
|---|---|
| Blank page or PHP code is shown as text | Open it through `http://localhost/...`, not by double-clicking the file. PHP must be running. |
| "Could not save your enquiry" | Make the `data/` folder writable. |
| Images missing | Keep the `assets/images/` folder and file names unchanged. |
| Fonts look different offline | Google Fonts need internet; the site falls back to system fonts. |
| `php` command not found | Add PHP to your PATH or use XAMPP (Option A). |
| Port already in use | Run `php -S localhost:8080` and open that port. |
