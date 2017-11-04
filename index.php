<!DOCTYPE html>
<html>
<meta charset="UTF-8">
</html>

<?php
session_start();
require_once ("config.php");

//echo "<pre>";
//print_r(DatabaseManager::getConnection());
//print_r(DatabaseManager::selectBySql("Select * From users"));
//print_r(DatabaseManager::selectData("users", Array("username", "id"), Array('id'=>'2'),">","OR"));
//print_r(DatabaseManager::updateTable("users",Array('username'=>'Zenek'),Array('username'=>'zenek')));
//print_r(DatabaseManager::deleteFrom("users", array("id"=>"5")));
//print_r(DatabaseManager::insertInto("users", array("username"=>"Macius2", "password"=>"macius20172", "mail"=>"macius@mail.pl")));
//$conn = DatabaseManager::getConnection();
//$conn->query("BEGIN");
//$res = $conn->query("SELECT username FROM users WHERE username = 'Zenek' FOR UPDATE");
//$res = $conn->query("UPDATE users SET password = '".md5("macius2017")."' WHERE username = 'Macius'");

//print_r("<br />CONN 1 - Przed COMMIT ".$conn->affected_rows."<br />");
//$conn->query("COMMiT");
//$conn->query("ROLLBACK");
//print_r("CONN 1 - Po wywołaniu COMMIT: ".$conn->affected_rows);

//echo "</pre>";

if(!(isset($_GET['page']))) {
    
    header("Location: ".SERVER_ADDRESS."start");
    
} else {
    
    $mp = new MainPage($_GET['page']);
    
}


