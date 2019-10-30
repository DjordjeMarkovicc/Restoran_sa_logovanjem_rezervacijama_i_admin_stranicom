<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["admin"] == 1){
    
    $name_err = $lastname_err = $phone_number_err = $radio_err = "";
    $name = $lastname = $phone_number = $radio = $Radio1 = $Radio2 = "";

    if($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['id']) && (int)$_GET['id'] > 0){
        
        require_once 'php/db.php';
        $ID = (int)$_GET['id'];
        $sql = "SELECT * FROM users WHERE id=$ID";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $personData = $result->fetch_assoc();
        } else {
            die("Strana nije pronadjena");
        } 
        $conn->close();
        if($personData['admin'] == 1){
            $Radio1 = 'checked';
        }else if ($personData['admin'] == 2){
            $Radio2 = 'checked';
        }else {
            exit();
        }
    }

    
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        require_once "php/db.php";

        $id=(int)$_POST['idd'];

        if (empty(trim($_POST["name"]))){
            $name_err = "Morate popuniti ime";
        } else if (strlen($_POST["name"]) < 3 ){
            $name_err = "Ime mora imati vise od 2 karaktera";
        } else {
            $name = $_POST["name"];
        }

        if(empty(trim($_POST["lastname"]))){
            $lastname_err = "Morate popuniti prezime";
        } else if (strlen($_POST["lastname"]) < 3 ){
            $lastname_err = "Prezime mora imati vise od 2 karaktera";
        } else {
            $lastname = $_POST["lastname"];
        }

        if(empty(trim($_POST["phone_number"]))){
            $phone_number_err = "Morate popuniti broj telefona";
        } else if (!is_numeric(trim($_POST["phone_number"]))){
            $phone_number_err = "Invalid input";
        } else if (trim($_POST["phone_number"]) < 0 ){
            $phone_number_err = "Invalid input";
        // } else if ( strlen((string)trim($_POST("phone_number"))) < 9){
        //     $phone_number_err = "Broj telefona mora imati vise od 8 cifara";
        } else {
            $phone_number =intval(trim($_POST["phone_number"]));
        }

        if (!isset($_POST["radio"])){
            $radio_err = "Morate izabrati ulogu";
        } else if ($_POST["radio"] < 1 && $_POST["radio"] > 2) {
            $radio_err = "Invalid input";
        } else {
            $radio = intval($_POST["radio"]);
        }
        

        if(empty($name_err) && empty($lastname_err) && empty($phone_number_err) && empty($radio_err)){

            $sql = "UPDATE `users` SET `ime` = '$name', `prezime` = '$lastname', `br_tel` = '$phone_number',
            `admin` = '$radio' WHERE `users`.`id` = '$id'";

            if($conn->query($sql) === true){
                header("Refresh: 2; URL=_admin____.php");
                die("Korisnik azuriran");
            }else {
                echo 'Error';
            }

        }
        $conn->close();
    }
}

include('php/header.php') ?>

<div class="container">
    <h1 class="font_shadows_into_light text2">Izmeni korisnika:</h1>
</div>

<div class="container" style="text-align: center; margin-top: 30px;">
<div class="col-sm-4"></div>
<div class="col-sm-4">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <div class="form-group" >
            <input type="hidden" name="idd" value="<?=$ID?>">
            <label>Ime:</label>
            <input type="text" name="name" class= "form-control" value="<?= !empty($personData) ? $personData['ime'] : '' ?>">
            <span class="help-block"><?= $name_err;?></span>
        </div>

        <div class="form-group" >
            <label>Prezime:</label>
            <input type="text" name="lastname" class= "form-control" value="<?= !empty($personData) ? $personData['prezime'] : '' ?>">
            <span class="help-block"><?= $lastname_err;?></span>
        </div>

        <div class="form-group">
            <label>Broj telefona:</label>
            <input type="text" name="phone_number" class= "form-control" value="0<?= !empty($personData) ? $personData['br_tel'] : '' ?>">
            <span class="help-block"><?= $phone_number_err;?></span>
        </div>

        <div class="form-group <?php echo (!empty($radio_err)) ? 'has-error' : ''; ?>">
            <input type="radio" name="radio" value="1" <?=$Radio1?>> Admin <br>
            <input type="radio" name="radio" value="2" <?=$Radio2?>> User 
            <span class="help-block"><?php echo $radio_err; ?></span>
        </div>

        <div class="form-group">
            <button type="submint" class="btn btn-primary">Unesi</button>
        </div>

    </form>
</div>
<div class="col-sm-4"></div>
</div>

<?php include('php/footer.php')?>