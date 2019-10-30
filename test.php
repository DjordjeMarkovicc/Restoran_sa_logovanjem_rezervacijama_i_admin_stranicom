<?php

if (isset($_POST['action'])) {
    echo '<br />The ' . $_POST['submit'] . ' submit button was pressed<br />';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>

    <!-- <style type="text/css">
    
    body{
    background-image: linear-gradient(to bottom right, orange, lightyellow, lightblue);
    }</style> -->
</head>
<body>
<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="hidden" name="action" value="submit" />
    <select name="name">
        <option>John</option>
        <option>Henry</option>
    <select>
<!-- 
make sure all html elements that have an ID are unique and name the buttons submit 
-->
    <input id="tea-submit" type="submit" name="submit" value="Tea">
    <input id="coffee-submit" type="submit" name="submit" value="Coffee">
</form>

</body>
</html>


<?php foreach ($mon as $monn): ?>
            <?php if(!empty($monn['14-16']) && $monn['14-16'] == $korisnik):?>
                <tr>
                    <td>Bla ime</td>
                    <td>Bla prezime</td>
                    <td>Ponedeljak</td>
                    <td><?=$monn['id']?></td>
                    <td>14-16</td>
                    <td>
                        <a href='php/izbrisi.php.php?id=<?= $monn['id'] ?> &amp;name=14-16&amp;value=bla'>
                            <button> <span class='glyphicon glyphicon-trash'></span> </button>
                        </a>
                    </td>
                </tr>
    	    <?php endif; ?>
            <?php if(!empty($monn['16-18']) && $monn['16-18'] == $korisnik):?>
                <tr>
                    <td>Bla ime</td>
                    <td>Bla prezime</td>
                    <td>Ponedeljak</td>
                    <td><?=$monn['id']?></td>
                    <td>16-18</td>
                    <td>
                        <a href='php/izbrisi.php.php?id=<?= $monn['id'] ?> &amp;name=16-18&amp;value=bla'>
                            <button> <span class='glyphicon glyphicon-trash'></span> </button>
                        </a>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(!empty($monn['18-20']) && $monn['18-20'] == $korisnik):?>
                <tr>
                    <td>Bla ime</td>
                    <td>Bla prezime</td>
                    <td>Ponedeljak</td>
                    <td><?=$monn['id']?></td>
                    <td>18-20</td>
                    <td>
                        <a href='php/izbrisi.php.php?id=<?= $monn['id'] ?> &amp;name=18-20&amp;value=bla'>
                            <button> <span class='glyphicon glyphicon-trash'></span> </button>
                        </a>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(!empty($monn['20-22']) && $monn['20-22'] == $korisnik):?>
                <tr>
                    <td>Bla ime</td>
                    <td>Bla prezime</td>
                    <td>Ponedeljak</td>
                    <td><?=$monn['id']?></td>
                    <td>20-22</td>
                    <td>
                        <a href='php/izbrisi.php.php?id=<?= $monn['id'] ?> &amp;name=20-22&amp;value=bla'>
                            <button> <span class='glyphicon glyphicon-trash'></span> </button>
                        </a>
                    </td>
                </tr>
            <?php endif; ?>
            <?php if(!empty($monn['22-24']) && $monn['22-24'] == $korisnik):?>
                <tr>
                    <td>Bla ime</td>
                    <td>Bla prezime</td>
                    <td>Ponedeljak</td>
                    <td><?=$monn['id']?></td>
                    <td>22-24</td>
                    <td>
                        <a href='php/izbrisi.php.php?id=<?= $monn['id'] ?> &amp;name=22-24&amp;value=bla'>
                            <button> <span class='glyphicon glyphicon-trash'></span> </button>
                        </a>
                    </td>
                </tr>
            <?php endif;?>
        <?php endforeach;?>