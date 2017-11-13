<?php
if(isset($_POST['login']) && isset($_POST['password'])){
    $um = new UserManager;
    if($um->LogIn($_POST['login'], $_POST('password'))) {
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }else{
        die("Wystąpił błąd");
    }
} else {
    die("Dostęp zablokowany przez administratora");
}

