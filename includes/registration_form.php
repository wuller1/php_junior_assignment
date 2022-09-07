<form class="mt-5" method='post'>
    <div class="mb-3">
        <label for="email" class="form-label">Адрес электронной почты</label>
        <input id="email" type="email" name="email" class="form-control">
        <?php
        if(isset($_GET['error'])){
            echo('<div id="message" class="form-text">Пользователь с таким адресом электронной почты уже зарегестрирован</div>');
        }
         ?>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Пароль</label>
        <input id="password" name='password' type="password" class="form-control">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Возраст</label>
        <input type="text" name="age" id="age" class="form-control">
    </div>
    <div class="mb-3">
        <label for="surname" class="form-label">Фамилия</label>
        <input type="text" name="surname" id="surname" class="form-control">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Имя</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="education" class="form-label">Уровень образования</label>
        <input type="text" name="education" id="education" class="form-control">
    </div>
    <input type=hidden name="action" value="register">

    <button type="submit" class="btn btn-primary">Регистрация</button>
    <a href="../index.php?page=login">Войти</a>
</form>