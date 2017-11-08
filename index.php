<!DOCTYPE html>
<html>
<meta charset="UTF-8">
</html>

<?php
session_start();
require_once ("config.php");

if(!(isset($_GET['page']))) {
    
    header("Location: ".SERVER_ADDRESS."start");
    
} else {
    
    $mp = new MainPage($_GET['page']);
    
}


