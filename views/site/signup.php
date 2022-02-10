


<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <body class="text-center"">

    <main class="form-login">
        <form method="post">
            <h1 class="h2 mb-3 fw-normal">Регистрация нового пользователя</h1>
            <div class="form-floating" >
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Имя</label>
            </div><br>
            <div class="form-floating" >
                <input type="text" name="login" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Логин</label>
            </div><br>
            <div class="form-floating" >
                <input type="password" name="password" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Пароль</label>
            </div><br>
            <h4><?= $message ?? ''; ?></h4>
            <hr>

            <button class="w-100 btn btn-lg btn-warning" type="submit">Зарегестрироваться</button>
        </form>

    </main>
    </body>
<?php
endif;
?>

