<?php
function register($email, $password, $age, $surname, $name, $education)
{
    if(!email_exists($email)){
        $db_name = "db.txt";
        $ff = fopen($db_name, "a+");
        $str = $email . ";" . $password . ";" . $age . ";" . $surname . ";" . $name . ";" . $education . "\n";
        fwrite($ff, $str);
        fclose($ff);

        $_SESSION['email'] = $email;
        $_SESSION['logged_in'] = True;
        header("Location: index.php?page=user_info");
    } else {
        header("Location: index.php?page=register&error=true");
    }
    die();

}

function get_user_info()
{
    $email = $_SESSION['email'];
    $d = [];
    $db_name = "db.txt";
    $a = file($db_name);
    foreach ($a as $kk => $vv) {
        $c = explode(";", $vv);
        if (
            ($c[0] == $email)
        ) {
            $d['email'] = $c[0];
            $d['password'] = $c[1];
            $d['age'] = $c[2];
            $d['surname'] = $c[3];
            $d['name'] = $c[4];
            $d['education'] = $c[5];
        }
    }
    return $d;
}

function email_exists($email)
{
    $db_name = "db.txt";
    $a = file($db_name);
    foreach ($a as $kk => $vv) {
        $c = explode(";", $vv);
        if (
            ($c[0] == $email)
        ) {
            return True;
        }
    }
    return False;
}

function correct_email_password($email, $password)
{
    $db_name = "db.txt";
    $a = file($db_name);
    foreach ($a as $kk => $vv) {
        $c = explode(";", $vv);
        if (
            ($c[0] == $email && $c[1] == $password)
        ) {
            return True;
        }
    }
    return False;
}

function login($email, $password)
{
    if (correct_email_password($email, $password)) {
        $_SESSION['email'] = $email;
        $_SESSION['logged_in'] = True;
        header("Location: index.php?page=user_info");

    } else {
        header("Location: index.php?page=login&error=true");
    }
    die();
}

function logout()
{
    session_unset();
    header("Location: index.php?page=login");
    die();
}

function show_content(){
    if(isset($_GET['page'])){
        if ($_GET['page'] == 'register'){
            include('./includes/registration_form.php');
        }
        if ($_GET['page'] == 'login'){
            include('./includes/login_form.php');
        }

        if($_GET['page'] == 'user_info'){
            if (isset($_SESSION['logged_in'])) {
                if ($_SESSION['logged_in'] == 'True') {
                    include('includes/user_info.php');
                }
            } else {
                header("Location: index.php?page=login");
                die();
            }
        }

        if ($_GET['page'] == 'logout'){
            logout();
        }
    } else {
        include('./includes/login_form.php');
    }
}

function form_action(){
    if (isset($_POST['action'])) {
        if ($_POST['action'] == "register") {
            register($_POST['email'], $_POST['password'], $_POST['age'], $_POST['surname'], $_POST['name'], $_POST['education']);
        }

        if ($_POST['action'] == "login") {
            login($_POST['email'], $_POST['password']);
        }
    }
}