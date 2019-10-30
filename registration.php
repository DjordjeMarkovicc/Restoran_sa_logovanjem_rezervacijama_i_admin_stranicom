<?php

session_start();

require_once "php/db.php";

$name = $lastname = $username = $password = $confirm_password = $phone_number = $radio = "";
$name_err = $lastname_err = $username_err = $password_err = $confirm_password_err = $phone_number_err = $radio_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   
   
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


    if (empty(trim($_POST["username"]))){
        $username_err = "Morate popuniti username";
    } else if (strlen($_POST["username"]) < 3 ){
        $username_err = "Username mora imati vise od 2 karaktera";
    } else {

        $sql = "SELECT id FROM users WHERE username = ?";
        
        if ($stmt = $conn->prepare($sql)){

            $stmt->bind_param("s", $param_username);
            $param_username = trim($_POST["username"]);

            if ($stmt->execute()) {
                $stmt->store_result();

                if ($stmt->num_rows == 1){
                    $username_err = "Ovaj username se vec koristi!";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops!";
            }
        } 

        $stmt->close();
    }


    if (empty(trim($_POST["password"]))){
        $password_err = "Morate popuniti sifru";
    } elseif (strlen(trim($_POST["password"])) < 6 ){
        $password_err = "Sifra mora imati vise od 5 karaktera";
    } else {
        $password = trim($_POST["password"]);
    }


    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Molim vas potvrdite sifru";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Sifre nisu iste.";
        }
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

    if (empty($name_err) && empty($lastname_err) && empty($username_err)
    && empty($password_err) && empty($confirm_password_err) 
    && empty($phone_number_err) && empty($radio_err)){

        $sql = "INSERT INTO users (ime, prezime, username,
        password, br_tel, admin) VALUES (?, ?, ?, ?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {

            $stmt->bind_param("ssssii", $param_name, $param_lastname,
            $param_username, $param_password, $param_phone_number, $param_admin);

            $param_name = $name;
            $param_lastname = $lastname;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_phone_number = $phone_number;
            $param_admin = $radio;

            if($stmt->execute()){
                header("location: login.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }

        $stmt->close();
    }

    $conn->close();
}

include('php/header.php') ?>

<div class = "container">
    <h1 class = "font_shadows_into_light text2">Registracija</h1>
    <p class = "font_shadows_into_light text3"> <br>Popunite obrazac da bi ste se registrovali:</p>
</div>

<div class = "container" style = "margin-top: 30px;">
<div class = "col-sm-2"></div>
<div class = "col-sm-8">
<form action = "<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST">
    
    <div class = "form-group <?= (!empty($name_err)) ? 'has-error' : '' ; ?>">
        <label>Ime: </label>
        <input type="text" name="name" class= "form-control" value="<?= $name?>">
        <span class="help-block"><?= $name_err;?></span>
    </div>

    <div class = "form-group <?= (!empty($lastname_err)) ? 'has-error' : '' ; ?>">
        <label>Prezime: </label>
        <input type="text" name="lastname" class= "form-control" value="<?= $lastname?>">
        <span class="help-block"><?= $lastname_err;?></span>
    </div>

    <div class = "form-group <?= (!empty($username_err)) ? 'has-error' : '' ; ?>">
        <label>Username:</label>
        <input type="text" name="username" class= "form-control" value="<?= $username?>">
        <span class="help-block"><?= $username_err;?></span>
    </div>

    <div class = "form-group <?= (!empty($password_err)) ? 'has-error' : '' ; ?>">
        <label>Password:</label>
        <input type="password" name="password" class= "form-control">
        <span class="help-block"><?= $password_err;?></span>
    </div>

    <div class = "form-group <?= (!empty($confirm_password_err)) ? 'has-error' : '' ; ?>">
        <label>Confirm password:</label>
        <input type="password" name="confirm_password" class= "form-control">
        <span class="help-block"><?= $confirm_password_err;?></span>
    </div>
    
    <div class = "form-group <?= (!empty($phone_number_err)) ? 'has-error' : '' ; ?>">
        <label>Broj telefona:</label>
        <input type="number" name="phone_number" class= "form-control" value="<?= $phone_number?>">
        <span class="help-block"><?= $phone_number_err;?></span>
    </div>

    <div class="form-group <?php echo (!empty($radio_err)) ? 'has-error' : ''; ?>">
            <input type="radio" name="radio" value="1"> Admin <br>
            <input type="radio" name="radio" value="2"> User 
            <span class="help-block"><?php echo $radio_err; ?></span>
    </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit"> &nbsp; &nbsp; 
            <input type="reset" class="btn btn-default" value="Reset">
        </div>
        <p>Vec imate nalog? <a href="login.php">Login ovde</a>.</p>

</form>
</div>
<div class = "col-sm-2"></div>
</div>

<?php include('php/footer.php')?>