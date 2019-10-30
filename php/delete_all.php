<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["admin"] == 1){
    
    if($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['id'])){
    
        require "db.php";
        
        $dan = $_GET['id'];
        
        for ($i = 1; $i <= 6; $i++) {
            $sql = "UPDATE `$dan` SET `14-16` = '', `16-18` = '', `18-20` = '', `20-22` = '', `22-24` = '' WHERE `$dan`.`id` = '$i'";
            $conn->query($sql);
        }
    
            header("Refresh: 2; URL=../_admin____.php");
            die("Rezervacija za ceo dan izbrisane");
           
        $conn->close();
    }
}
?>