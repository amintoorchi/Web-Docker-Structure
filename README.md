## 🐳 Dockerized Web Development Environment

A clean, ready-to-use Docker-based setup for quickly spinning up a modern web development environment with minimal effort.




<p align="center">
  <img src="images/screenshot.png" alt="Dashboard Preview" width="600" style="border-radius: 12px;"> 
</p>





-----

### About This Project

This repository provides a fully dockerized stack tailored for **PHP** web development. With a single command, it launches a complete environment including:

  * Latest **NGINX** web server ⚙️
  * **PHP-FPM** runtime for PHP applications 🐘
  * **MySQL/MariaDB** database (with persistent storage) 🐬
  * **phpMyAdmin** GUI for database management 🛠️

The goal is to help developers build, test, and debug their PHP-based projects in an isolated and reproducible environment without the hassle of manual server configuration.

-----

### Requirements

To use this project, ensure you have:

  * **Docker**
  * **Docker Compose** (version 2+)

Install them via [Docker's official documentation](https://docs.docker.com/).

-----

### Quick Start

1.  **Clone the repository:**

    ```bash
    git clone https://github.com/amintoorchi/Web-Docker-Structure.git
    cd Web-Docker-Structure
    ```

2.  **(Optional) Configure base environment variables:**
    Edit the `docker-compose.yml` file (e.g., set the MySQL root password).

3.  **Launch the Containers:**

    ```bash
    docker-compose up -d
    ```

4.  **Access services:**

      * Web app: [http://localhost](https://www.google.com/search?q=http://localhost)
      * phpMyAdmin: [http://localhost:81](https://www.google.com/search?q=http://localhost:81)

    <!-- end list -->

    5.  **Stop the Containers:**

    <!-- end list -->

    ```bash
    docker-compose down
    ```

5.  **To remove volumes (warning: maby deletes database data & ...):**

    ```bash
    docker-compose down -v
    ```

-----

### Project Structure

The project is organized as follows:

| Directory/File | Description |
| :--- | :--- |
| `www/` | Your PHP/HTML/CSS/JS ... files (served by NGINX). |
| `mysql/` | Database configuration and initialization scripts (e.g., `init.sql` for schema). |
| `nginx/` | NGINX configuration files (e.g., `conf.d/` for server blocks). |
| `php/` | PHP-FPM Dockerfile and settings. |
| `docker-compose.yml` | Main configuration for all services. |
| `.env` | Environment variables (e.g., database credentials; ignored in `.gitignore`). |

-----

### Domain Configuration

To use custom domains (e.g., `web.local`), edit NGINX configs in `nginx/conf.d/` and update the `server_name` directive. Add entries to your `/etc/hosts` (e.g., `127.0.0.1 web.local`) for local development.

-----

### Volumes and Persistent Data

  * **Web files (`www/`):** Mounted as read-write for development.
  * **Database data (`mysql/data/`):** Persisted via Docker volumes to retain data across container restarts. **Back up this directory regularly.**
  * **Logs:** Stored in containers (view with `docker logs <container-name>`).

**Note:** Do not commit sensitive data (e.g., database dumps) to Git. See `.gitignore` for exclusions.

-----

### Usage Examples

  * **Adding a PHP file:** Place `index.php` in `www/` and access it at [http://localhost](https://www.google.com/search?q=http://localhost).
  * **Database setup:** Use `mysql/init.sql` to initialize tables. Connect via phpMyAdmin (user: `root`, password: from `docker-compose.yml`) or tools like MySQL Workbench (host: `localhost`, port: `3306`).
  * **Customization:** Modify `docker-compose.yml` to add services (e.g., Redis) or change ports.

-----

### Features

  * Instant PHP development environment
  * Preconfigured NGINX, PHP-FPM, and MySQL
  * Fully dockerized and portable
  * Minimal setup: clone and run
  * Persistent database storage
  * Support for custom domains
  * Easy to extend for additional services

-----

### Default Ports

| Service | Port | Description |
| :--- | :--- | :--- |
| **NGINX** | 80 | Main web server (HTTP) |
| **phpMyAdmin** | 81 | Database GUI |
| **MySQL** | 3306 | Database connection (if exposed) |

-----

### Troubleshooting

| Issue | Solution |
| :--- | :--- |
| **Permission errors** | Run `docker-compose down` and then `sudo chown -R $USER:$USER .` on the project directory. |
| **NGINX 502 error** | Check PHP-FPM container status (`docker ps`) and logs (`docker logs <php-container>`). |
| **Database connection issues** | Verify `docker-compose.yml` variables and `mysql/init.sql` for correct setup. |
| **Port conflicts** | Update ports in `docker-compose.yml` and restart. |
| **View logs** | `docker-compose logs -f` Or `docker logs <CONTAINER_NAME>` |

For more help, check Docker documentation or open an issue.

-----

### Support

Encountered an issue or have a suggestion? Open an [issue](https://www.google.com/search?q=%3Cyour-repo-url%3E/issues) or contribute via [pull request](https://www.google.com/search?q=%3Cyour-repo-url%3E/pulls).

-----

### License

This project is licensed under the **MIT License** - see the `LICENSE` file for details.

Built with ❤️ by [Amin Toorchi](https://github.com/amintoorchi) using Docker for modern web development.









## 🐳 محیط توسعه وب داکریزه‌شده
یک محیط آماده و ساده برای راه‌اندازی سریع محیط توسعه وب مدرن با حداقل تلاش.


### درباره این پروژه

این مخزن یک stack کاملاً داکریزه‌شده برای توسعه وب **PHP** ارائه می‌دهد. با یک دستور، محیطی کامل شامل موارد زیر راه‌اندازی می‌شود:

  * وب‌سرور **NGINX** آخرین نسخه ⚙️
  * محیط اجرایی **PHP-FPM** برای برنامه‌های PHP 🐘
  * دیتابیس **MySQL/MariaDB** (با ذخیره‌سازی پایدار) 🐬
  * ابزار گرافیکی **phpMyAdmin** برای مدیریت دیتابیس 🛠️

هدف، کمک به توسعه‌دهندگان برای ساخت، تست و دیباگ پروژه‌های PHP در محیطی ایزوله و قابل‌تکرار بدون دردسر تنظیمات دستی سرور است.

-----

### پیش‌نیازها

برای استفاده، نیاز دارید:

  * **Docker**
  * **Docker Compose** (نسخه ۲ یا بالاتر)

آن‌ها را از [مستندات رسمی داکر](https://docs.docker.com/) نصب کنید.

-----

### راه‌اندازی سریع

1.  **مخزن را کلون کنید:**

    ```bash
    git clone https://github.com/amintoorchi/Web-Docker-Structure.git
    cd Web-Docker-Structure
    ```

2.  **(اختیاری) متغیرهای محیطی پایه را تنظیم کنید:**
    فایل `docker-compose.yml` را ویرایش کنید (مثل رمز root دیتابیس).

3.  **کانتینرها را راه‌اندازی کنید:**

    ```bash
    docker-compose up -d
    ```

4.  **به سرویس‌ها دسترسی پیدا کنید:**

      * برنامه وب: [http://localhost](https://www.google.com/search?q=http://localhost)
      * phpMyAdmin: [http://localhost:81](https://www.google.com/search?q=http://localhost:81)

    <!-- end list -->

    5.  **برای توقف کانتینرها:**

    <!-- end list -->

    ```bash
    docker-compose down
    ```

5.  **برای حذف volumeها (هشدار: ممکن است داده‌های دیتابیس و ... حذف شود):**

    ```bash
    docker-compose down -v
    ```

-----

### ساختار پروژه

ساختار پروژه به این صورت است:

| Directory/File | Description |
| :--- | :--- |
| `www/` | فایل‌های PHP/HTML/CSS/JS و ... (توسط NGINX سرو می‌شود). |
| `mysql/` | تنظیمات دیتابیس و اسکریپت‌های اولیه‌سازی (مثل `init.sql` برای اسکیما). |
| `nginx/` | فایل‌های تنظیمات NGINX (مثل `conf.d/` برای server blockها). |
| `php/` | فایل Dockerfile و تنظیمات PHP-FPM. |
| `docker-compose.yml` | تنظیمات اصلی همه سرویس‌ها. |
| `.env` | متغیرهای محیطی (مثل اعتبارنامه دیتابیس؛ در `.gitignore` نادیده گرفته شده). |

-----

### تنظیم دامنه

برای استفاده از دامنه‌های سفارشی (مثل `web.local`)، فایل‌های تنظیمات NGINX در `nginx/conf.d/` را ویرایش کنید و دستور `server_name` را به‌روزرسانی کنید. برای توسعه محلی، ورودی‌هایی به `/etc/hosts` اضافه کنید (مثل `127.0.0.1 web.local`).

-----

### Volumeها و داده‌های پایدار

  * **فایل‌های وب (`www/`):** به‌صورت خواندن/نوشتن برای توسعه mount شده.
  * **داده‌های دیتابیس (`mysql/data/`):** با volumeهای داکر برای حفظ داده‌ها در ری‌استارت‌ها ذخیره می‌شود. **از این دایرکتوری مرتباً بک‌آپ بگیرید.**
  * **لاگ‌ها:** در کانتینرها ذخیره می‌شود (با `docker logs <container-name>` ببینید).

**توجه:** داده‌های حساس (مثل دامپ‌های دیتابیس) را به گیت commit نکنید. به `.gitignore` نگاه کنید.

-----

### مثال‌های استفاده

  * **افزودن فایل PHP:** فایل `index.php` را در `www/` قرار دهید و در [http://localhost](https://www.google.com/search?q=http://localhost) ببینید.
  * **تنظیم دیتابیس:** از `mysql/init.sql` برای ساخت جدول‌ها استفاده کنید. با phpMyAdmin (کاربر: `root`، رمز: از `docker-compose.yml`) یا ابزارهایی مثل MySQL Workbench (هاست: `localhost`، پورت: `3306`) متصل شوید.
  * **سفارشی‌سازی:** فایل `docker-compose.yml` را برای افزودن سرویس‌ها (مثل Redis) یا تغییر پورت‌ها ویرایش کنید.

-----

### ویژگی‌ها

  * محیط فوری برای توسعه PHP
  * سرویس‌های از پیش تنظیم‌شده NGINX، PHP-FPM و MySQL
  * کاملاً داکریزه‌شده و قابل‌حمل
  * راه‌اندازی ساده: کلون و اجرا
  * ذخیره‌سازی پایدار دیتابیس
  * پشتیبانی از دامنه‌های سفارشی
  * قابل‌گسترش برای سرویس‌های اضافی

-----

### پورت‌های پیش‌فرض

| سرویس | پورت | توضیحات |
| :--- | :--- | :--- |
| **NGINX** | 80 | وب‌سرور اصلی (HTTP) |
| **phpMyAdmin** | 81 | رابط گرافیکی دیتابیس |
| **MySQL** | 3306 | اتصال دیتابیس (اگر expose شده) |

-----

### عیب‌یابی

| مشکل | راه‌حل |
| :--- | :--- |
| **خطاهای Permission** | دستور `docker-compose down` و سپس `sudo chown -R $USER:$USER .` را اجرا کنید. |
| **خطای 502 NGINX** | وضعیت کانتینر PHP-FPM را چک کنید (`docker ps`) و لاگ‌ها را ببینید (`docker logs <php-container>`). |
| **مشکل اتصال دیتابیس** | متغیرهای `docker-compose.yml` و فایل `mysql/init.sql` را بررسی کنید. |
| **تداخل پورت** | پورت‌ها را در `docker-compose.yml` تغییر دهید و ری‌استارت کنید. |
| **لاگ‌ها** | `docker-compose logs -f` یا `docker logs <CONTAINER_NAME>` |

برای کمک بیشتر، مستندات داکر یا issues مخزن را ببینید.

-----

### پشتیبانی

مشکل یا پیشنهادی دارید؟ یک [issue](https://www.google.com/search?q=%3Cyour-repo-url%3E/issues) باز کنید یا با [pull request](https://www.google.com/search?q=%3Cyour-repo-url%3E/pulls) همکاری کنید.

-----

### لایسنس

این پروژه تحت لایسنس **MIT** منتشر شده است - جزئیات در فایل `LICENSE`.


طراحی و توسعه با ❤️ توسط [Amin Toorchi](https://github.com/amintoorchi) برای توسعه دهندگان و جامعه برنامه نویسان متن باز  