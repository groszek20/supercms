<!DOCTYPE html>
<html>
<meta charset="UTF-8">
</html>

<?php
require_once ("config.php");
include ("DatabaseManager.php");

echo "<pre>";
//print_r(DatabaseManager::getConnection());
print_r(DatabaseManager::selectBySql("Select * From users"));
//print_r(DatabaseManager::selectData("users", Array("username", "id"), Array('id'=>'2'),">","OR"));
//print_r(DatabaseManager::updateTable("users",Array('username'=>'Zenek'),Array('username'=>'zenek')));
//print_r(DatabaseManager::deleteFrom("users", array("id"=>"5")));
//print_r(DatabaseManager::insertInto("users", array("username"=>"Macius2", "password"=>"macius20172", "mail"=>"macius@mail.pl")));
echo "</pra>";
