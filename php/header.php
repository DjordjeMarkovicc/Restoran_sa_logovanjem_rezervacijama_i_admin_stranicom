<?php

$type = "";
function Active ($type = "bla"){
    
    if($_SERVER['PHP_SELF'] == "/cet/Restoran/" . $type){
        return 'active';
    
    }else{return '';}

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RESTOURANT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    <style type="text/css">
       
        /* include Google Web fonts: */
        @import url('https://fonts.googleapis.com/css?family=Meie+Script|Shadows+Into+Light|Arvo|Monda');
        
        .font_shadows_into_light {
           
            font-family: 'Shadows Into Light', cursive;
        }

        .text1 {
            font-size: 22pt;
            font-weight: 600;
        }

        .text2 {
            font-size: 50pt;
            font-weight: bolder;
            text-align: center;
            color: black;
        }

        .text3 {
            font-size: 22pt;
            font-weight: bolder;
            text-align: center;
            color: black;
        }

        .text4 {
            font-size: 14pt;
            font-weight: 500;
            
        }

        body {
            
            background-image: url(img/background3.jpg);
        }

        .videowrapper{

            position: relative;
            padding-bottom: 56.25%;
            padding-top: 25px;
            height: 0px;
        }

        .videowrapper iframe {
            position: absolute;
            left: 0px;
            top: 0px;
            right: 0px;
            bottom: 0px;
            height: 100%;
            width: 100%;
            
        }


        #foot{
            clear: both;
            border-top: 1px solid black;
            font-size: 12px;
            background-color: gray;
            padding-bottom: 10px;
            margin-top: 30px;
        }

        .images{

            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 93%;
            margin-top: 30px;
        }

        .help-block{
            color: red;
        }

        input[type='number'] {
            -moz-appearance:textfield;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }


        .sto{
            position: relative;
        }


        .sto1{
            position: absolute;
            width: 25%;
            bottom: 14%;
            left: 9%;
        }

        .sto2{
            position: absolute;
            width: 10%;
            bottom: 47%;
            left: 13%;
        }

        .sto3{
            position: absolute;
            width: 17%;
            bottom: 40%;
            left: 35%;
        }

        .sto4{
            position: absolute;
            width: 17%;
            bottom: 20%;
            right: 22%;
        }

        .sto5{
            position: absolute;
            width: 18%;
            bottom: 45%;
            right: 22%;
        }

        .sto6{
            position: absolute;
            width: 10%;
            top: 8%;
            right: 28%;
        }

    </style>
</head>
<body>

<div class="container">
    <img src='img/prva3.jpg' width='100%'>
</div>
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src='img/logo4.jpg'height='25px' width='100px'></a>
        </div>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class="<?= Active($type = "index.php");?>"><a href="index.php">Pocetna</a></li>
                <li class="<?= Active($type = "O_nama.php");?>"><a href="O_nama.php">O nama</a></li>
                <li class="<?= Active($type = "meni.php");?>"><a href="meni.php">Meni</a></li>
                <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) : ?>
                    <li class="<?= Active($type = "rezervacija.php");?>"><a href="rezervacija.php">Rezervacija</a></li>
                    <li class="<?= Active($type = "moje_rezervacije.php");?>"><a href="moje_rezervacije.php">Moje rezervacije</a></li>
                    <li><a href="php/logout.php">Logout</a></li>
                <?php else : ?>
                    <li class="<?= Active($type = "login.php");?>"><a href="login.php" >Login</a></li>
                    <li class="<?= Active($type = "registration.php");?>"><a href="registration.php" >Registracija</a></li>
                <?php endif; ?>
                    <li class="<?= Active($type = "contact.php");?>"><a href="contact.php">Kontakt</a></li>
                <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["admin"] == 1) : ?>
                    <li class="<?= Active($type = "_admin____.php");?>"><a href ="_admin____.php">ADMIN</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div> 
    </nav>
