BYsoft PHP E-commerce (Simple)

Requirements
- PHP 8.1+
- MySQL 5.7+ / MariaDB 10.4+
- Apache/Nginx with PHP enabled
- File uploads enabled (for product images)

Setup
1) Create database and tables:
   - Import db.sql into your MySQL server.
   - This creates `bysoft_shop` DB and an admin user:
     Email: admin@bysoft.local
     Password: admin123  (change after first login)

2) Configure DB credentials:
   - Edit config.php and set $DB_USER, $DB_PASS as per your server.

3) Deploy files:
   - Copy all files to your web root (e.g., htdocs/bysoft or /var/www/html).
   - Ensure the `uploads/` folder is writable by the webserver user.

4) Use the app:
   - Open http://your-domain/index.php to see the storefront.
   - Open http://your-domain/admin/login.php to login to admin panel.
   - Add products from Admin > Add Product. They appear on Home.
   - Customers can add to cart and place a demo order (no payment gateway).

Notes
- This is a minimal secure baseline using PDO prepared statements & CSRF tokens.
- For production add:
  * HTTPS
  * Stronger auth & session hardening
  * Pagination/search on products
  * Payment gateway integration (Razorpay/Stripe)
  * Order management (status updates)
  * Email notifications
