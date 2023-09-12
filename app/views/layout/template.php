<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">MVC</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
                <li class="nav-item"><a href="/portfolio" class="nav-link">Портфолио</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">О нас</a></li>
                <li class="nav-item"><a href="/contacts" class="nav-link">Контакты</a></li>
            </ul>
        </header>
        <section class="d-flex flex-wrap justify-content-between align-items-center">
            <main class="main">
                <?php include_once VIEW . $contenView ?>
            </main>

        </section>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">© 2023 Company, Inc</p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">Главная</a></li>
                <li class="nav-item"><a href="/portfolio" class="nav-link px-2 text-body-secondary">Портфолио</a></li>
                <li class="nav-item"><a href="/about" class="nav-link px-2 text-body-secondary">О нас</a></li>
                <li class="nav-item"><a href="/contacts" class="nav-link px-2 text-body-secondary">Контакты</a></li>
            </ul>
        </footer>
    </div>
</body>
</html>
<?php 

