# ClearBooks Bookkeeping Website (PHP)

A responsive multi-page PHP marketing website starter based on the supplied business story and founder biographies.

## Pages
- `index.php` — Home
- `services.php` — Services
- `pricing.php` — Packages (prices intentionally not invented)
- `about.php` — Story, mission and co-founders
- `contact.php` — Enquiry form

## Run locally on macOS
1. Install PHP if it is not already installed: `php -v`
2. Open Terminal and go into the project folder:
   `cd /path/to/brightledger_bookkeeping`
3. Start PHP's built-in development server:
   `php -S localhost:8000`
4. Open `http://localhost:8000`

You can also put this folder inside your XAMPP `htdocs` directory and open it through localhost.

## Before publishing
1. Open `config.php` and replace the demo business name, email, phone, location and site URL.
2. Replace the text logo `ClearBooks` with the actual business/brand name.
3. Confirm the final list of services and package names with the business.
4. Add real monthly prices, inclusions, transaction limits and any setup fees only after the client approves them.
5. Replace the initials-based founder artwork with approved founder photos.
6. Configure PHP `mail()` on the hosting server or connect a transactional email service. The contact form will not send successfully until `BUSINESS_EMAIL` and server email delivery are configured.
7. Add the business's real privacy policy, terms, social links and any required legal disclosures.
8. Test the contact form on the actual hosting environment.

## Notes
- This is a marketing website, not bookkeeping/accounting software.
- No admin dashboard, client login, payment processing or appointment calendar is included.
- Pricing is shown as "Let's discuss" because no approved prices were supplied.
- The founder profile text has been shortened for web readability while preserving the supplied facts.
- The sample brand name is a placeholder and should be replaced.

## Design update
The refreshed version includes subtle scroll-reveal transitions, floating hero artwork, animated chart bars, refined hover states, and a compact sticky header. Motion automatically reduces for visitors who have enabled reduced motion in their device settings.
