<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["admin"] == 1){
    
    $newrez_err = $newrez = "";

    if($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['id']) && (int)$_GET['id'] > 0 &&
    !empty($_GET['name']) && strlen($_GET['name']) == 5 && !empty($_GET['value']) && strlen($_GET['value']) == 3){
    
        $_id = (int)$_GET['id'];
        $_name = $_GET['name'];
        $_value = $_GET['value'];

    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        require_once "php/db.php";

        $id=(int)$_POST['idd'];
        $dan = $_POST['dan'];
        $vreme = $_POST['vreme'];

        if (empty(trim($_POST["newrez"]))){
            $newrez_err = "Morate uneti novu rezervaciju";
        } else if (strlen($_POST["newrez"]) < 3 ){
            $newrez_err = "Nova rezervacija mora imati vise od 2 karaktera";
        } else {
            $newrez = trim($_POST["newrez"]);
        }
    
        if(empty($newrez_err)){

            $sql = "UPDATE `$dan` SET `$vreme` = '$newrez' WHERE `$dan`.`id` = '$id'";

            if($conn->query($sql) === true){
                header("Refresh: 2; URL=_admin____.php");
                die("Rezervacija uneta");
            }else {
                echo 'Error';
            }

        }
        $conn->close();
    }


}

include('php/header.php') ?>

<div class="container">
    <h1 class="font_shadows_into_light text2">Unesi rezervaciju:</h1>
</div>

<div class="container" style="text-align: center; margin-top: 30px;">
<div class="col-sm-4"></div>
<div class="col-sm-4">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <div class="form-group" >
            <input type="hidden" name="idd" value="<?=$_id?>">
            <input type="hidden" name="dan" value="<?=$_value?>">
            <input type="hidden" name="vreme" value="<?=$_name?>">
            <input type="text" name="newrez" class= "form-control">
            <span class="help-block"><?= $newrez_err;?></span>
        </div>

        <div class="form-group">
            <button type="submint" class="btn btn-primary">Unesi</button>
        </div>

    </form>
</div>
<div class="col-sm-4"></div>
</div>

<?php include('php/footer.php')?>