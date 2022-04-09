<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>MVC</title>
</head>

<body>
    <section>
        <div class="navbar">
            <ul class="nav_ul">
                <li class="nav_li">
                    <a href="/main" class="nav">Главная</a>
                </li>
                <li class="nav_li">
                    <a href="/contacts" class="nav">Контакты</a>
                </li>
                <li class="nav_li">
                    <a href="/portfolio" class="nav">Портфолио</a>
                </li>
            </ul>
        </div>

    <main>
        <?php include 'application/views/' . $content_view; ?>
    </main>

    <footer>
        <span class="info">Работу по созданию и использованию MVC фреймворка на php выполнил: Науман Сергей</sp>
    </footer>

</body>

</html>