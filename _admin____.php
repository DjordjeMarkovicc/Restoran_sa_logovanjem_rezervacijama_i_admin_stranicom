<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["admin"] == 1){
    
    require_once "php/db.php";


    function CatchValue( $typee = 'bla'){
        
        $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. " . $conn->connect_error);
        }

        $sql = "SELECT * FROM `$typee`";
        $result = $conn->query($sql);
        $bla = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $bla [] = $row;
            }
        } 
        
        return $bla;
    };


    $users = $mon = $tue = $wed = $the = $fri = $sat = $sun = [];
    
    $users = CatchValue($typee = 'users');
    $mon = CatchValue($typee = 'mon');
    $tue = CatchValue($typee = 'tue');
    $wed = CatchValue($typee = 'wed');
    $the = CatchValue($typee = 'the');
    $fri = CatchValue($typee = 'fri');
    $sat = CatchValue($typee = 'sat');
    $sun = CatchValue($typee = 'sun');
    
    $conn->close();
    
    function TableConstruct($mon, $type = 'bla'){
        echo("
        <table class='table table-bordered table-dark' style='background-color: black; color: white; border-color: white; text-align: center;'>
        <thead>
            <tr>
                <th scope='col'>Broj stola</th>
                <th scope='col'>14-16</th>
                <th scope='col'>16-18</th>
                <th scope='col'>18-20</th>
                <th scope='col'>20-22</th>
                <th scope='col'>22-24</th>
            </tr>
        </thead>
        <tbody>");
        foreach ($mon as $monn){
            echo("<tr>
                <td>Sto " . $monn['id'] . "</td>
                    <td>");
                    if (empty($monn['14-16'])){
                        echo("<a href='update_rez.php?id=" . $monn['id'] . " &amp;name=14-16&amp;value=" . $type . "'>
                            <button> <span class='glyphicon glyphicon-pencil'> </span> </button>
                        </a>");
                    }else {
                        echo($monn['14-16'] . 
                        "&nbsp; &nbsp;
                            <a href='php/delete_rez.php?id=" . $monn['id'] . " &amp;name=14-16&amp;value=" . $type . "'>
                                <button>   <span class='glyphicon glyphicon-trash'></span> </button>
                            </a>");
                    }
                echo("</td>
                
                <td>");
                if (empty($monn['16-18'])){
                    echo("<a href='update_rez.php?id=" . $monn['id'] . " &amp;name=16-18&amp;value=" . $type . "'>
                        <button> <span class='glyphicon glyphicon-pencil'> </span> </button>
                    </a>");
                }else {
                    echo($monn['16-18'] . 
                    "&nbsp; &nbsp;
                        <a href='php/delete_rez.php?id=" . $monn['id'] . " &amp;name=16-18&amp;value=" . $type . "'>
                            <button>   <span class='glyphicon glyphicon-trash'></span> </button>
                        </a>");
                }
                echo("</td>

                <td>");
                if (empty($monn['18-20'])){
                    echo("<a href='update_rez.php?id=" . $monn['id'] . " &amp;name=18-20&amp;value=" . $type . "'>
                        <button> <span class='glyphicon glyphicon-pencil'> </span> </button>
                    </a>");
                }else {
                    echo($monn['18-20'] . 
                    "&nbsp; &nbsp;
                        <a href='php/delete_rez.php?id=" . $monn['id'] . " &amp;name=18-20&amp;value=" . $type . "'>
                            <button>   <span class='glyphicon glyphicon-trash'></span> </button>
                        </a>");
                }
                echo("</td>

                <td>");
                if (empty($monn['20-22'])){
                    echo("<a href='update_rez.php?id=" . $monn['id'] . " &amp;name=20-22&amp;value=" . $type . "'>
                        <button> <span class='glyphicon glyphicon-pencil'> </span> </button>
                    </a>");
                }else {
                    echo($monn['20-22'] . 
                    "&nbsp; &nbsp;
                        <a href='php/delete_rez.php?id=" . $monn['id'] . " &amp;name=20-22&amp;value=" . $type . "'>
                            <button>   <span class='glyphicon glyphicon-trash'></span> </button>
                        </a>");
                }
                echo("</td>

                <td>");
                if (empty($monn['22-24'])){
                    echo("<a href='update_rez.php?id=" . $monn['id'] . " &amp;name=22-24&amp;value=" . $type . "'>
                        <button> <span class='glyphicon glyphicon-pencil'> </span> </button>
                    </a>");
                }else {
                    echo($monn['22-24'] . 
                    "&nbsp; &nbsp;
                        <a href='php/delete_rez.php?id=" . $monn['id'] . " &amp;name=22-24&amp;value=" . $type . "'>
                            <button>   <span class='glyphicon glyphicon-trash'></span> </button>
                        </a>");
                }
                echo("</td>
            </tr>");
        }
       echo(" </tbody>
    </table>");

    echo("<a href='php/delete_all.php?id=" . $type . "'><button type='button' class='btn btn-danger'
    style='float: right;'>Izbrisi sve</button></a>");
    };
    
    
} else{
    header("location: index.php");
    exit;
}
include('php/header.php') ?>

<div class="container">
    <h1 class="font_shadows_into_light text2">ADMIN</h1>
</div>

<div class="container" >
<h1 class="font_shadows_into_light text3">Ponedeljak</h1>
<?php TableConstruct($mon, $type = 'mon')?>  
</div>

<div class="container" >
<h1 class="font_shadows_into_light text3">Utorak</h1>
<?php TableConstruct($tue, $type = 'tue')?>
</div>

<div class="container" >
<h1 class="font_shadows_into_light text3">Sreda</h1>
<?php TableConstruct($wed, $type = 'wed')?>
</div>

<div class="container" >
<h1 class="font_shadows_into_light text3">Cetvrtak</h1>
<?php TableConstruct($the, $type = 'the')?>
</div>

<div class="container" >
<h1 class="font_shadows_into_light text3">Petak</h1>
<?php TableConstruct($fri, $type = 'fri')?>
</div>

<div class="container" >
<h1 class="font_shadows_into_light text3">Subota</h1>
<?php TableConstruct($sat, $type = 'sat')?>
</div>

<div class="container" >
<h1 class="font_shadows_into_light text3">Nedelja</h1>
<?php TableConstruct($sun, $type = 'sun')?>
</div>

<div class="container">
<h1 class="font_shadows_into_light text3">Korisnici</h1>
    <table class="table table-bordered table-dark" style="background-color: black; color: white; border-color: white; text-align: center;">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Ime</th>
                <th scope="col">Prezime</th>
                <th scope="col">Username</th>
                <th scope="col">Broj telefona</th>
                <th scope="col">Created at</th>
                <th scope="col">Admin</th>
                <th scope="col">Update Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?=$user['id']?></td>
                <td><?=$user['ime']?></td>
                <td><?=$user['prezime']?></td>
                <td><?=$user['username']?></td>
                <td>0<?=$user['br_tel']?></td>
                <td><?=$user['created_at']?></td>
                <td><?=$user['admin']?></td>
                <td>
                    <a href="update_user.php?id=<?= $user['id'] ?>">
                        <button> <span class="glyphicon glyphicon-pencil"></span> </button>
                    </a>
                    <a href="php/delete_user.php?id=<?= $user['id'] ?>">
                        <button>   <span class="glyphicon glyphicon-trash"></span> </button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class='container'>
<p class="font_shadows_into_light text3">Na kraju radnog dana izbrisite rezervacije za taj dan 
i unesite nove rezervacije!!!</p>
</div>

<?php include('php/footer.php')?>