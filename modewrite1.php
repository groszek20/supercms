<!DOCTYPE html>
<html>
<meta charset="UTF-8">
</html>
<?php

if(isset($_GET['page'])){
    $app = (isset($_GET['app'])) ? $_GET['app'] : NULL;
    $id = (isset($_GET['id'])) ? $_GET['id'] : NULL;
    
    switch ($_GET['page']){
        case "main";
            echo "<h1>Strona główna ";
            echo "<a href=\"www.google.pl\">Przejdź dalej</a><br/>";
            break;
        case "subpage";
            echo "<h2>Podstrona ";
            echo "<a href=\"www.wp.pl\">Przejdź dalej</a><br/>";
            break;
    }
} else {
    echo "<h1>To jest strona główna";    
}

if (isset($app) && $app !=null) echo "Wczytany moduł ".$app."<br />";
if (isset($app) && $id != null) echo "Identyfikator ".$id;


