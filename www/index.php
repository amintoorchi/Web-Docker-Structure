<?php
// Optional: Add PHP logic here (e.g., session handling, dynamic content)
// For now, it's just rendering the HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to XdevTeam</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom styles and animations -->
    <style>
        /* Smooth fade-in animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
        /* Subtle hover scale effect */
        .hover-scale {
            transition: transform 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
        /* Clean, minimal background */
        body {
            background-color: #1a1a1a; /* Dark charcoal */
            color: #e5e7eb; /* Light gray for text */
            font-family: 'Inter', sans-serif;
        }
    </style>
    <!-- Google Fonts for modern typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen flex items-center justify-center">
    <div class="text-center space-y-8 p-8 max-w-md mx-auto">
        <h1 class="text-4xl mx-auto font-extrabold tracking-tight fade-in bg-red-500 w-fit p-4 rounded-bl-xl rounded-tr-xl"><a href="https://xdevteam.ir">XdevTeam</a></h1>
        <p class="text-lg fade-in" style="animation-delay: 0.2s;">
            Your modern web development server
            <br>
             Build fast, deploy faster 
        </p>
        <a href="https://github.com/amintoorchi/Web-Docker-Structure" target="_blank"
           class="inline-block bg-gray-800 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-700 transition duration-300 fade-in hover-scale"
           style="animation-delay: 0.4s;">
            Star Us on GitHub :)
        </a>
    </div>
    <script>
        // Optional: Add interactivity if needed
        document.querySelector('a').addEventListener('click', (e) => {
            if (!e.target.href.includes('github.com')) {
                e.preventDefault();
                alert('Redirecting to GitHub...');
            }
        });
    </script>
</body>
</html>