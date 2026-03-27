@props([
    'title' => 'Vrouwen in STEM Nederland',
    'heading' => 'Homepage'
])

<!DOCTYPE html>
<html lang="nl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title }}</title>
        <link rel="stylesheet" href={{ asset('css/index.css') }}>
        @vite(['resources/css/index.css'])
        <link href="/dist/styles.css" rel="stylesheet">
        <script src="http://cdn.tailwindcss.com"></script>
        <base href="/">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <script src="resources\js\biografie-sub-nav-header-text.js" defer></script>
    </head>

    <body>

        <nav class="header-logo-navigation">
            <div class="header-logo">
                <p>
                    OG.irls
                </p>
            </div>
            <div class="header-nav">
                <ul>
                    <li>
                        <a href="/">
                            Startpagina
                        </a>
                    </li>
                    <li>
                        <a href="kennisbank">
                            Kennisbank
                        </a>
                    </li>
                    <li>
                        <a href="hall-of-fame">
                            Hall of fame
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <header class="header">
            <h1 class="header-text">
                {{ $heading }}
            </h1>
        </header>
        <main>
            {{ $slot }}
        </main>

    </body>

    <footer class="Copyright-footer">
        <p>
            Copyright &#xA9; Rhodé Visser 2025
        </p>
    </footer>

</html>
