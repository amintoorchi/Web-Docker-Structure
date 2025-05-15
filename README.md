# 🐳 Dockerized Web Development Environment

A clean, ready-to-use Docker-based setup for quickly spinning up a modern web development environment with minimal effort.

## 🚀 About This Project

This repository provides a fully dockerized stack tailored for PHP web development. With a single command, it launches a complete environment including:

- ⚙️ Latest **NGINX** web server
- 🐘 **PHP-FPM** runtime for PHP applications
- 🐬 Two powerful database GUI tools:
  - **phpMyAdmin**
  - **Adminer**
- 💻 **Code Server** – a browser-based version of Visual Studio Code (**optional**)

The goal is to help developers build, test, and debug their PHP-based projects in an isolated and reproducible environment without the hassle of manual server configuration.

---

## 🔧 Quick Start

To launch the environment, simply run:

```bash
docker-compose up -d


---

## Domain Configuration

  To access services using your own domain names, edit the corresponding NGINX config files located in:
  nginx/conf.d/ adminer phpmyadmin lab site1
  Update the server_name directive to match your actual domain or server IP.

---

## Code Server (Optional)

  This stack includes Code Server, an open-source project that lets you run VS Code directly in your browser.
  If you don’t want or need Code Server, simply remove or comment out the code-server service in docker-compose.yml.

---

## Features
	•	Instant web environment for PHP development
	•	Preconfigured services for faster workflow
	•	Fully dockerized and portable
	•	Minimal setup — just clone and run
	•	Easy to customize and expand

---

## Support

  Encountered an issue or have a suggestion? Feel free to open an issue or contribute to improve this project.

---

## 📌 Default Ports

  | Service        | Port |
  |----------------|------|
  | NGINX          | 80   |
  | phpMyAdmin     | 8080 |
  | Adminer        | 8081 |
  | Code Server    | 8443 |

---

## 📄 License
  This project is licensed under the [MIT License](LICENSE).

......
