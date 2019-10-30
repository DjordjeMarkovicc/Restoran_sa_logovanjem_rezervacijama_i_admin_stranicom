<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $sto = $dan = $vreme = "";
        $sto_err = $dan_err = $vreme_err = "";

        if (empty($_POST['BrStoH'])){
            $sto_err = 'error';
        // }else if ($_POST['BrSto'] > 0 && $_POST['BrSto'] < 7){
        //     $sto_err = 'error';
        // }else if (strlen($_POST["BrSto"]) < 2){
        //     $sto_err = 'error';
        }else {
            $sto = $_POST["BrStoH"];
        }

        if (empty($_POST['_dan'])){
            $dan_err = 'error';
        }else {
            $dan = $_POST["_dan"];
        }

        if (isset($_POST['action'])) {
            if($_POST['submit'] == '14-16' && $_POST['submit'] == '16-18' && $_POST['submit'] == '18-20' && 
            $_POST['submit'] == '20-22' && $_POST['submit'] == '22-24'){
                $vreme_err = 'error';
            }else{
                $vreme = $_POST['submit'];
            }
        }

        if(empty($sto_err) && empty($dan_err) && empty($vreme_err)){

            require_once "php/db.php";
            
            $Sql = "SELECT * FROM `$dan` WHERE id='$sto'";
            
            if($rezultat = $conn->query($Sql)){
                if($rezultat && $rezultat->num_rows > 0){
                    
                    $row = $rezultat->fetch_array();
                  
                    if(strlen($row[$vreme]) == 0){
                
                        $unos = $_SESSION['id'] . '/' . $_SESSION['username'];
                        $sql = "UPDATE `$dan` SET `$vreme` = '$unos' WHERE `$dan`.`id` = '$sto'";
        
                        if($conn->query($sql) === true){

                        header("Refresh: 2; URL=index.php");
                        die("Uspesno ste rezervisali termin");

                        } else {echo('error');}
                    } else {

                        header("Refresh: 2; URL=index.php");
                        die("Termin je vec rezervisan");
                    }
                }  
            }$conn->close();
         }    
    }
} else{
    header("location: index.php");
    exit;
}


include('php/header.php') ?>


<div class="container" style="margin-bottom: 50px;">
    <h1 class="font_shadows_into_light text2">Rezervacija:</h1>
    <p class="font_shadows_into_light text3"><br>Ako zelite da rezervisete sto u sledecih 7 dana ukljucujuci i danas, to mozete uraditi ovde.</p>
</div>

<div class="container font_shadows_into_light text3">
    <p>Izaberite sto koji zelite da rezervisete</p>
</div>

<div class="container sto">
    <img src="img/bg_reservation.png" style="width:100%;">

    <div class="sto1" id="1" onclick="Click(this.id)">
    <a href="#rez">
        <img src="img/stolovi/sto1.png" style="width:100%;" 
        onmouseover= "this.src='img/stolovi/sto_1.png'"
        onmouseout= "this.src='img/stolovi/sto1.png'">
    </a>
    </div>

    <div class="sto2" id="2" onclick="Click(this.id)">
    <a href="#rez">
        <img src="img/stolovi/sto2.png" style="width:100%;"
        onmouseover= "this.src='img/stolovi/sto_2.png'"
        onmouseout= "this.src='img/stolovi/sto2.png'" >
    </a>
    </div>

    <div class="sto3" id="3" onclick="Click(this.id)">
    <a href="#rez">
        <img src="img/stolovi/sto3.png" style="width:100%;"
        onmouseover= "this.src='img/stolovi/sto_3.png'"
        onmouseout= "this.src='img/stolovi/sto3.png'">
    </a>
    </div>

    <div class="sto4" id="4" onclick="Click(this.id)">
    <a href="#rez">
        <img src="img/stolovi/sto4.png" style="width:100%;"
        onmouseover= "this.src='img/stolovi/sto_4.png'"
        onmouseout= "this.src='img/stolovi/sto4.png'">
    </a>
    </div>

    <div class="sto5" id="5" onclick="Click(this.id)">
    <a href="#rez">
        <img src="img/stolovi/sto5.png" style="width:100%;"
        onmouseover= "this.src='img/stolovi/sto_5.png'"
        onmouseout= "this.src='img/stolovi/sto5.png'">
    </a>
    </div>

    <div class="sto6" id="6" onclick="Click(this.id)">
    <a href="#rez">
        <img src="img/stolovi/sto6.png" style="width:100%;"
        onmouseover= "this.src='img/stolovi/sto_6.png'"
        onmouseout= "this.src='img/stolovi/sto6.png'">
    </a>
    </div>
</div> 

<div class="container" style = "margin-top: 30px; text-align: center;">
    <p class="font_shadows_into_light text4">Ako zelite da rezervisete nakon 7 dana ili kasnije
    , molim vas obratite nam se na broj telefona 011/555-555 ili nam napisite poruku
     <a href="contact.php"> OVDE</a>.</p>
</div>

<div class="container" style="text-align: center;">

<p id="head" class="font_shadows_into_light text3" name="";></p>
<div class="col-sm-4"></div>
<div class="col-sm-4">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
        <input type="hidden" name="action" value="submit" />

        <div class="form-group" id="Sto">
        </div>

        <div class="form-group" id="Dan">
        </div>

        <div class="form-group" id="Buttons" name="0">
        </div>

    </form>
</div>
<div class="col-sm-4"></div>
</div>

<a id= "rez"></a>
<?php include('php/footer.php')?>