<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pop it MVC</title>
</head>
<body>
<header>

    <nav>
        <header class="p-3 bg-dark text-white">
            <div class="container" bis_skin_checked="1">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a class="nav-link px-2 text-white"
                               href="<?= app()->route->getUrl('/') ?>">PERSONAL</a></li>
                        <li><a class="nav-link px-2 text-white" href="<?= app()->route->getUrl('/employees') ?>">Сотрудники</a>
                        </li>
                        <?php
                        if (app()->auth::check() && app()->auth::user()->name ==='admin'):
                        ?>
                        <li><a class="nav-link px-2 text-white" href="<?= app()->route->getUrl('/add_employees') ?>">Добавление
                                сотрудников</a></li>
                        <?php
                        endif;
                        ?>
                    </ul>

                    <div class="text-end" bis_skin_checked="1">
                        <?php
                        if (!app()->auth::check()):
                            ?>
                            <a class="btn btn-outline-light me-2" href="<?= app()->route->getUrl('/login') ?>">Вход</a>
                            <a class="btn btn-warning" href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
                        <?php
                        else:
                            ?>
                            <div class="d-flex flex-wrap align-items-center justify-content-center">
                                <p class="card-title h4"><?= app()->auth::user()->name ?></p>

                                <a class="btn btn-outline-danger"
                                   href="<?= app()->route->getUrl('/logout') ?>">Выход </a>
                            </div>

                        <?php
                        endif;
                        ?>

                    </div>
                </div>
            </div>
        </header>
    </nav>
</header>
<main class="p-3 ">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center ">

            <?= $content ?? '' ?>
        </div>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">© 2021 Company, Inc</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        </a>

    </footer>
</main>

</body>
</html>
