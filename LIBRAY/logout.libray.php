<?php

if(isset($_SESSION['logged']) && isset($_SESSION['login'])) {
    $um = new UserManager();
    $um->LogOut();
    if(isset($_SERVER['HTTP_REFERER'])){
        header("Location :".$_SERVER['HTTP_REFERER']);
    } else {
        header("Location: start/");
    }
} else {
      die("Dostęp zablokowany przez administratora");  
}

