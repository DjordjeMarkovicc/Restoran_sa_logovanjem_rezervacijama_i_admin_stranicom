<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    
        if($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['id']) && (int)$_GET['id'] > 0 &&
        !empty($_GET['name']) && strlen($_GET['name']) == 5 && !empty($_GET['value']) && strlen($_GET['value']) == 3){
    
            require_once "db.php";

            $_id = (int)$_GET['id'];
            $_name = $_GET['name'];
            $_value = $_GET['value'];

            $sql = "UPDATE `$_value` SET `$_name` = '' WHERE `$_value`.`id` = '$_id'";
        
                if($conn->query($sql) === true){
                    header("Refresh: 2; URL=../moje_rezervacije.php");
                    die("Rezervacija izbrisana");
                }else {
                    echo 'Error';
                }
            $conn->close();
        }
}
?>