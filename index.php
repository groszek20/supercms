<!DOCTYPE html>
<html>
<meta charset='UTF-8'>
</html>

<?php
session_start();
require_once 'config.php';//niepotrzebne nawiasy, cudzysłów

if (!isset($_GET['page'])) { //spacje, zbędne nawiasy, niepotrzebna nowa linia (PSR)
    header('Location: ' . SERVER_ADDRESS . 'start');
} else {
    new MainPage($_GET['page']);//jeli tylko tworzysz obiekt to nie musisz go zapisywa do zmiennej
}
