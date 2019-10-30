<?php

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

require_once "php/db.php";

$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["username"]))){
        $username_err = "Molim vas unesite username";
    } else{
        $username = trim($_POST["username"]);
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "Molim vas unesite password";
    } else{
        $password = trim($_POST["password"]);
    }

    if(empty($username_err) && empty($password_err)) {
        
        $sql = "SELECT id, username, password, admin FROM users WHERE username = ?";

            if ($stmt = $conn->prepare($sql)){
                $stmt->bind_param("s", $param_username);
                $param_username = $username;

                if($stmt->execute()){
                    $stmt->store_result();
                    
                    if ($stmt->num_rows == 1) {
                        $stmt->bind_result($id, $username, $hashed_password, $admin);  
                        if($stmt->fetch()){
                            if(password_verify($password, $hashed_password)){
                                session_start();

                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;
                                $_SESSION["admin"] = $admin;

                                header("location: index.php");
                            }else {
                                
                                $password_err = "Sifra koju ste uneli nije validna.";
                            }   
                        }
                    }else {
                       
                        $username_err = "Nema naloga sa tim username-om.";
                    }
                }else {
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
            $stmt->close();
    }
    $conn->close();
}


include('php/header.php') 
?>

<div class="container">
    <h1 class="font_shadows_into_light text2">Login</h1>
</div>

<div class = "container" style="margin-top: 30px;">
<div class = "col-sm-2"></div>
<div class = "col-sm-8">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    
    <div class="form-group <?= (!empty($username_err)) ? 'has-error' : ''; ?>">
        <label>Username</label>
        <input type="text" name="username" class="form-control" value="<?= $username; ?>">
        <span class="help-block"><?= $username_err; ?></span>
    </div>

    <div class="form-group <?= (!empty($password_err)) ? 'has-error' : ''; ?>">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
        <span class="help-block"><?= $password_err; ?></span>
    </div>

    <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
    </div>

    <div class="form-group" style = "margin-top: 30px;">
        <p>Nemate nalog? Registrujte se <a href="registration.php">OVDE</a>.</p>
    </div>
</form>
</div>
<div class = "col-sm-2"></div>
</div>
<?php include('php/footer.php')?>