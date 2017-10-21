<?php

class DatabaseManager {

    static public function getConnection() {
        $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PW, DB_DB);
        if (mysqli_connect_errno()) {
            $conn_errno = mysqli_connect_errno();
            $conn_error = mysqli_connect_error();
            echo "Wystąpił błąd połączenia z bazą danych. [".$conn_error."] $conn_error";
            exit();
        } else {
            $conn->query("SET NAMES 'utf8'");
            return $conn;
        }
    }

    static public function selectBySql($SQL) {
        $conn = self::getConnection();
        $SQL = $conn->real_escape_string($SQL);
        $result = $conn->query($SQL);

        if (!$result) {
            echo "Wystąpił błąd połączenia";
            echo __LINE__;
            echo __FILE__;
            return false;
        } else {
            $resultArray = Array();
            while (($row = $result->fetch_array(MYSQLI_ASSOC)) != NULL) {
                $resultArray[] = $row;
            }
        }

        if (count($resultArray) > 0) {
            return $resultArray;
        } else {
            echo "pusty wynik";
            return false;
        }

        mysqli_close($conn);
    }

    static public function selectData($TABLE, $COLUMNS = Array("*"), $WHERE = Array(), $LOGIC_OPER = "=", $OPER = "AND") {

        $conn = self::getConnection();
        $SQL = "SELECT ";
        if (count($COLUMNS) == 1) {
            $SQL .= $COLUMNS[0];
        } else {
            foreach ($COLUMNS as $column) {
                $SQL .= $column.",";
            }
        }

        $SQL = rtrim($SQL, ',');
        $SQL .= " From {$TABLE}";

        if (count($WHERE) > 0) {
            $SQL .= " WHERE ";
            foreach ($WHERE as $key => $val) {
                $SQL .= $key.$LOGIC_OPER."'".$val."' ".$OPER." ";
            }
            $SQL = substr($SQL, 0, strlen($SQL) - (strlen($OPER) + 2));
        }

        $result = $conn->query($SQL);

        if (!$result) {
            echo "Wystąpił błąd połączenia ";
            echo ": ".__LINE__;
            echo " : ".__FILE__;
            return false;
        } else {
            $resultArray = Array();
            while (($row = $result->fetch_array(MYSQLI_ASSOC)) != NULL) {
                $resultArray[] = $row;
            }
        }

        if (count($resultArray) > 0) {
            return $resultArray;
        } else {
            echo "pusty wynik";
            return false;
        }

        mysqli_close($conn);
    }

    static public function updateTable($TABLE, $SET, $WHERE = Array(), $OPER = "AND") {
        $conn = self::getConnection();
        $SQL = "UPDATE {$TABLE} SET ";

        foreach ($SET as $key => $val) {
            $SQL .= $key."='".$val."',";
        }

        $SQL = rtrim($SQL, ',');

        if (count($WHERE) > 0) {
            $SQL .= " WHERE ";
            foreach ($WHERE as $key => $val) {
                $SQL .= $key."='".$val."' ".$OPER." ";
            }
            $SQL = substr($SQL, 0, strlen($SQL) - (strlen($OPER) + 2));
        }

        $result = $conn->query($SQL);

        if ($result) {
            return TRUE;
        } else {
            echo "update nie wykonał się";
            return false;
        }
        mysqli_close($conn);
    }

    static public function deleteFrom($TABLE, $WHERE = Array(), $OPER = "AMD") {
        $conn = self::getConnection();
        $SQL = "DELETE FROM {$TABLE}";

        if (count($WHERE) > 0) {
            $SQL .= " WHERE ";

            foreach ($WHERE as $key => $val) {
                $SQL .= $key."='".$val."' ".$OPER." ";
            }
            $SQL = substr($SQL, 0, strlen($SQL) - (strlen($OPER) + 2));
        }

        $result = $conn->query($SQL);

        if (!($result)) {
            echo "Usunięcie nie jest możliwe ".__LINE__." ".__FILE__;
            return false;
        } else {
            return true;
        }

        mysqli_close($conn);
    }

    static public function insertInto($TABLE, $DATA) {
        $conn = self::getConnection();
        $SQL = "INSERT INTO {$TABLE}";
        $SQL .= " (";

        foreach ($DATA as $key => $val) {
            $SQL .= $key.",";
        }

        $SQL = rtrim($SQL, ',');
        $SQL .= ") ";
        $SQL .= "VALUES";
        $SQL .= " (";

        foreach ($DATA as $val) {
            $SQL .= "'".$val."',";
        }
        $SQL = rtrim($SQL, ',');
        $SQL .= ")";

        $result = $conn->query($SQL);
        if (!($result)) {
            echo "Wstawienie nowego elementu nie powiodło się", __LINE__, " ", __FILE__;
        } else {
            return true;
        }
        mysqli_close($conn);
    }

}
