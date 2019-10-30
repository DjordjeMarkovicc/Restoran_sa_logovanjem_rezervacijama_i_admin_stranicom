<?php

session_start();
include('php/header.php') ?>
<div class="container">
    <h1 class="font_shadows_into_light text2">Kontaktirajte nas</h1>
</div>

<div class="container" style="padding-top: 50px;">
    <div class="col-sm-6">
        <form method="post" action="mailto:restourant@rest.com?subject=ime&body=tekst">
            <fieldset>
                <legend>Posaljite nam poruku</legend>
            
                    <label>Ime i prezime<br><input type="text" name="ime" size="20"/></label>
                    <br><br>
                    <label>e-mail<br><input type=email name="email" size="20"/></label>
                    <br><br>
                    <textarea cols="30" rows="10" placeholder="Napisite nam poruku" name="tekst"></textarea>
                    <br><br>
                    <button type="reset">Reset</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit">Posalji</button>
            </fieldset>     
        </form>
  
  
    </div>
    
    <div class="col-sm-6">

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1415.0339506068071!2d20.404059511318128!3d44.82018131674929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd19c66e83b10446e!2z0JPQtdC90LXQutGB!5e0!3m2!1ssr!2srs!4v1556204295298!5m2!1ssr!2srs" 
        width="100%" height="400" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
        <br><br>
        <p class="text4" style="color: black;">e-mail: restourant@rest.com</p>
        <p class="text4" style="color: black;">tel: 011/555-555</p>
    </div>
</div>
<?php include('php/footer.php')?>