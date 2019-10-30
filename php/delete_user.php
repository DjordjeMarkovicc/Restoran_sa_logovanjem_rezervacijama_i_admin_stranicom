<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["admin"] == 1){
    
    if($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['id']) && (int)$_GET['id'] > 0){
    
        require_once "db.php";

        $_id = (int)$_GET['id'];
        
        $sql= "DELETE FROM users WHERE id=$_id"; 

        if($conn->query($sql) == true){
            header("Refresh: 2; URL=../_admin____.php");
            die("User izbrisan");
        } else {
            echo 'Nije izbrisan';
        }
        $conn->close();
    }
} else {
    header("location: index.php");
    exit;
}
?>