<!DOCTYPE html>
<html>
<meta charset="UTF-8">
</html>
<?php

//nie powinienieś mieszać plików php z html
$id = null;//zmienna jest deklarowana tylko w ifie, może to spowodować bład

if (isset($_GET['page'])) { //PSR, czyli styl kodowania, musiał byś poczytać o PSR-2
    $app = isset($_GET['app']) ? $_GET['app'] : null; //skasowałem zbędne nawiasy, null z małej, dla bezpieczeństwa powineneś sprawdzać co przychodzi w $_GET
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    switch ($_GET['page']) { //spacja między nawiasami (PSR)
        case 'main': //powinien być dwukropek, do stringów bez zmiennych używaj pojedyńczego cudzysłowu, szybciej jest parsowane
            echo '<h1>Strona główna ';
            echo '<a href=\"www.google.pl\">Przejdź dalej</a><br/>';
            break;
        case 'subpage':
            echo '<h2>Podstrona ';
            echo '<a href=\"www.wp.pl\">Przejdź dalej</a><br/>';
            break;
            
            //zawsze dobrze jest dodać default dla case-a
    }
} else {
    echo '<h1>To jest strona główna';//zbędne spacje na końcu linii
}

if (isset($app) && $app !== null) echo "Wczytany moduł $app <br />"; //porównanie ze sprawdzeniem typu (!==), tu można użyć cudzysłowiu i wrzucić zmienną w string bez konkatenacji, nie musisz sprawdzać czy app jest null, bo isset zwraca false jeśli $app będzie nullem
if (isset($app) && $id !== null) echo 'Identyfikator ' . $id;//spacje między znakami konkatenacji
//za dużo pustych linii na końcu pliku, powinna być jedna (PSR)
