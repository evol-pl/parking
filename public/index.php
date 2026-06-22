<?php

if ($_SERVER['REQUEST_URI'] !== '/' && $_SERVER['REQUEST_URI'] !== '/index.php') {
    header('Location: /', true, 301);
    exit;
}

header('X-Frame-Options: DENY');
header("Content-Security-Policy: frame-ancestors 'none'");

?><!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title><?= htmlspecialchars($_SERVER['HTTP_HOST']) ?> — Under Construction</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-91RY6F3YD8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-91RY6F3YD8');
    </script>
    <script>
        if (window !== window.top) {
            window.top.location.href = window.location.href;
        }
    </script>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            min-height: 100dvh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0f0f0f;
            color: #e5e5e5;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }

        .container {
            text-align: center;
            padding: 2rem;
        }

        .icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            display: block;
        }

        h1 {
            font-size: clamp(1.5rem, 5vw, 2.5rem);
            font-weight: 600;
            letter-spacing: -0.02em;
            margin-bottom: 0.75rem;
            color: #fff;
        }

        .subtitle {
            font-size: 1rem;
            color: #888;
            margin-bottom: 0.5rem;
        }

        p {
            font-size: 0.9rem;
            color: #666;
            max-width: 320px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <span class="icon">🚧</span>
        <h1><?= htmlspecialchars($_SERVER['HTTP_HOST']) ?></h1>
        <p class="subtitle">Under Construction</p>
        <p>Strona jest w trakcie budowy. Wróć wkrótce.</p>
    </div>
</body>
</html>
