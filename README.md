## 🐳  Dockerized Web Development Environment

<!-- This project builds upon the initial Docker setup created by my instructor, **Mahdi Abbaspour Shahmarasi**. The PHP Dockerfile and part of the `docker-compose` configuration were originally written by him. I have extended and customized this base setup to suit the needs of this project. -->

A clean, ready-to-use Docker-based setup for quickly spinning up a modern web development environment with minimal effort.

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

      * Web app: [http://localhost](http://localhost)
      * phpMyAdmin: [http://localhost:81](http://localhost:81)
      <!-- * MySQL: `localhost:3306` (if exposed!) -->

5.  **Stop the Containers:**

    ```bash
    docker-compose down
    ```

6.  **To remove volumes (warning: maby deletes database data & ...):**

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

Built with ❤️ by [Amin Toorchi](https://github.com/amintoorchi) using Docker for modern web development .