Ada Lovelace — Tribute Site

Simple, lightweight PHP site presenting a short tribute to Ada Lovelace. Originally built as a static HTML/CSS project during The Odin Project curriculum, it has since been refactored to use PHP for modular templates, basic routing, and easier maintainability.

** What you'll find here **

- Small PHP codebase (no framework)
- Semantic HTML and responsive CSS
- Modular views and partials under `views/`
- Simple controller files under `controllers/`
- A basic router (`router.php`) and front controller (`index.php`)

** Features **

- Biography, sources, and recognition pages
- Reusable header/footer partials
- Clean, easy-to-follow project structure for learning

** Requirements **

- PHP 8.0 or newer
- A local web server (Laragon, XAMPP, or PHP built-in server)


** Project structure (high level) **

- config.php — site configuration
- router.php — simple router for development server
- index.php — front controller / entry point
- controllers/ — page controllers (biografie, bronnen, erkenning, index)
- views/ — page templates and partials (`views/partials/`)
- resources/ — CSS and images

** Personal note **

This repository is my personal work-in-progress: it mostly exists to show what I'm currently building and learning. It's not necessarily intended for wide public distribution. That said, I appreciate suggestions and help.

** Contribution workflow **

- Clone the repository locally.
- Create a new branch for your change (use a descriptive name, for example `feature/add-biography` or `fix/nav-translation`).
- Commit your changes to that branch.
- Open a pull request against the `main` branch so I can review the changes.
- Alternatively, you can send me a message before making changes if you'd prefer to coordinate first.

Please do not push directly to `main` — always use a branch and a PR.


