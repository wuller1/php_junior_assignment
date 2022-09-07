<form method='post' class="mt-5">
    <div class="mb-3">
        <label for="email" class="form-label">Адрес электронной почты</label>
        <input name='email' type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Пароль</label>
        <input name='password' type="password" class="form-control" id="password">
    </div>
    <input type=hidden name="action" value="login">

    <button type="submit" class="btn btn-primary">Войти</button>
    <a href="../index.php?page=register">Регистрация</a>
    <?php
    if(isset($_GET['error'])){
        echo('<div id="message" class="form-text">Неверный адрес электронной почты или email</div>');
        }
    ?>
</form>