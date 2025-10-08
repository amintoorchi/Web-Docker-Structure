<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Server</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        :root {
            --bg-color: #0f172a; /* Tailwind CSS dark blue */
            --text-color: #e2e8f0; /* Tailwind CSS slate-200 */
            --primary-color: #0ea5e9; /* Tailwind CSS sky-500 */
            --secondary-color: #64748b; /* Tailwind CSS slate-500 */
            --border-color: #334155; /* Tailwind CSS slate-700 */
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            position: relative;
        }

        .container {
            max-width: 800px;
            padding: 2rem;
            text-align: center;
            background-color: #1e293b; /* Tailwind CSS slate-800 */
            border-radius: 0.75rem; /* rounded-xl */
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04); /* shadow-xl */
            border: 1px solid var(--border-color);
            position: relative;
            z-index: 10;
        }

        h1 {
            font-size: 3rem; /* text-5xl */
            font-weight: 700; /* font-extrabold */
            color: var(--primary-color);
            margin-bottom: 1rem;
            line-height: 1.2;
            letter-spacing: -0.025em; /* tracking-tight */
        }

        p {
            font-size: 1.25rem; /* text-xl */
            font-weight: 400; /* font-normal */
            color: var(--secondary-color);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            background-color: var(--primary-color);
            color: var(--bg-color);
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem; /* rounded-lg */
            text-decoration: none;
            font-weight: 600; /* font-semibold */
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .btn:hover {
            background-color: #0284c7; /* Tailwind CSS sky-600 */
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
            margin-left: 1rem;
        }

        .btn-secondary:hover {
            background-color: rgba(14, 165, 233, 0.1); /* sky-500 with opacity */
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        .grid-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to right, var(--border-color) 1px, transparent 1px),
                              linear-gradient(to bottom, var(--border-color) 1px, transparent 1px);
            background-size: 40px 40px;
            opacity: 0.1;
            z-index: 1;
        }

        .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top left, rgba(14, 165, 233, 0.1), transparent 50%),
                        radial-gradient(circle at bottom right, rgba(100, 116, 139, 0.1), transparent 50%);
            z-index: 5;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2.5rem;
            }
            p {
                font-size: 1rem;
            }
            .btn {
                padding: 0.6rem 1.2rem;
                font-size: 0.9rem;
            }
            .btn-secondary {
                margin-left: 0;
                margin-top: 1rem;
                display: block;
                width: fit-content;
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>
</head>
<body>
    <div class="grid-background"></div>
    <div class="gradient-overlay"></div>
    <div class="container">
        <h1>XdevTeam</h1>
        <p>This is the default page for your server. Everything is up and running smoothly!</p>
        <a href="https://xdevteam.ir" target="_blank" class="btn">Explore Our Services</a>
        <a href="https://github.com/amintoorchi/Web-Docker-Structure" target="_blank" class="btn btn-secondary">Stars us on github</a>
    </div>
</body>
</html>