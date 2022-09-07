<nav class="navbar navbar-expand-lg bg-light mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Тестовое задание</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <?php
                if (isset($_SESSION['logged_in'])) {
                    if ($_SESSION['logged_in'] == 'True') {
                        echo ('
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../index.php?page=logout">Выйти</a>
                        </li>
                        '
                        );
                    }
                } else {
                    echo ('
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php?page=register">Регистрация</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php?page=login">Войти</a>
                    </li>');
                }
                ?>


            </ul>
        </div>
    </div>
</nav>