<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    
    require_once "php/db.php";

    if(!empty($_SESSION['id']) && !empty($_SESSION['username'])){
        
        $korisnik = $_SESSION['id'] . '/' . $_SESSION['username'];
        $ID = (int)$_SESSION['id'];
        $sql = "SELECT `ime`, `prezime` FROM `users` WHERE id='$ID'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $personData = $result->fetch_assoc();
            $ime = $personData['ime'];
            $prezime = $personData['prezime'];
        } else {
            die("Strana nije pronadjena");
        }
    }
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

    $mon = CatchValue($typee = 'mon');
    $tue = CatchValue($typee = 'tue');
    $wed = CatchValue($typee = 'wed');
    $the = CatchValue($typee = 'the');
    $fri = CatchValue($typee = 'fri');
    $sat = CatchValue($typee = 'sat');
    $sun = CatchValue($typee = 'sun');

    function trGenerator($dan, $type = 'day', $name = 'ime dan', $Ime, $Prezime, $user){
        foreach ($dan as $dani){
            if(!empty($dani['14-16']) && $dani['14-16'] == $user){
                echo("
                    <tr>
                        <td>". $Ime ."</td>
                        <td>". $Prezime ."</td>
                        <td>". $name ."</td>
                        <td>". $dani['id'] ."</td>
                        <td>14-16</td>
                        <td>
                            <a href='php/delete.php?id=". $dani['id'] ."&amp;name=14-16&amp;value=". $type ."'>
                                <button> <span class='glyphicon glyphicon-trash'></span> </button>
                            </a>
                        </td>
                    </tr>
                ");
            }

            if(!empty($dani['16-18']) && $dani['16-18'] == $user){
                echo("
                    <tr>
                        <td>". $Ime ."</td>
                        <td>". $Prezime ."</td>
                        <td>". $name ."</td>
                        <td>". $dani['id'] ."</td>
                        <td>16-18</td>
                        <td>
                            <a href='php/delete.php?id=". $dani['id'] ."&amp;name=16-18&amp;value=". $type ."'>
                                <button> <span class='glyphicon glyphicon-trash'></span> </button>
                            </a>
                        </td>
                    </tr>
                ");
            }

            if(!empty($dani['18-20']) && $dani['18-20'] == $user){
                echo("
                    <tr>
                        <td>". $Ime ."</td>
                        <td>". $Prezime ."</td>
                        <td>". $name ."</td>
                        <td>". $dani['id'] ."</td>
                        <td>18-20</td>
                        <td>
                            <a href='php/delete.php?id=". $dani['id'] ."&amp;name=18-20&amp;value=". $type ."'>
                                <button> <span class='glyphicon glyphicon-trash'></span> </button>
                            </a>
                        </td>
                    </tr>
                ");
            }

            if(!empty($dani['20-22']) && $dani['20-22'] == $user){
                echo("
                    <tr>
                        <td>". $Ime ."</td>
                        <td>". $Prezime ."</td>
                        <td>". $name ."</td>
                        <td>". $dani['id'] ."</td>
                        <td>20-22</td>
                        <td>
                            <a href='php/delete.php?id=". $dani['id'] ."&amp;name=20-22&amp;value=". $type ."'>
                                <button> <span class='glyphicon glyphicon-trash'></span> </button>
                            </a>
                        </td>
                    </tr>
                ");
            }

            if(!empty($dani['22-24']) && $dani['22-24'] == $user){
                echo("
                    <tr>
                        <td>". $Ime ."</td>
                        <td>". $Prezime ."</td>
                        <td>". $name ."</td>
                        <td>". $dani['id'] ."</td>
                        <td>22-24</td>
                        <td>
                            <a href='php/delete.php?id=". $dani['id'] ."&amp;name=22-24&amp;value=". $type ."'>
                                <button> <span class='glyphicon glyphicon-trash'></span> </button>
                            </a>
                        </td>
                    </tr>
                ");
            }
        }
    };

    $conn->close();
} else{
    header("location: index.php");
    exit;
}

include('php/header.php') ?>

<div class="container" style="margin-bottom: 30px;">
    <h1 class="font_shadows_into_light text2">Moje rezervacije:</h1>
</div>

<div class="container">
<table class='table table-bordered table-dark' style='background-color: black; color: white; border-color: white; text-align: center;'>
<thead>
            <tr>
                <th scope='col'>Ime</th>
                <th scope='col'>Prezime</th>
                <th scope='col'>Dan</th>
                <th scope='col'>Broj stola</th>
                <th scope='col'>Vreme</th>
                <th scope='col'>Izbrisi rezervaciju</th>
            </tr>
        </thead>
        <tbody>
        <?php trGenerator($mon, $type = 'mon', $name = 'Ponedeljak', $ime, $prezime, $korisnik)?>
        <?php trGenerator($tue, $type = 'tue', $name = 'Utorak', $ime, $prezime, $korisnik)?>
        <?php trGenerator($wed, $type = 'wed', $name = 'Sreda', $ime, $prezime, $korisnik)?>
        <?php trGenerator($the, $type = 'the', $name = 'Cetvrtak', $ime, $prezime, $korisnik)?>
        <?php trGenerator($fri, $type = 'fri', $name = 'Petak', $ime, $prezime, $korisnik)?>
        <?php trGenerator($sat, $type = 'sat', $name = 'Subota', $ime, $prezime, $korisnik)?>
        <?php trGenerator($sun, $type = 'sun', $name = 'Nedalja', $ime, $prezime, $korisnik)?>
        </tbody>
</table>
</div>




<?php include('php/footer.php')?>