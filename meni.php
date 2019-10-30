<?php

session_start();
include('php/header.php') ?>

<div class="container">
    <h1 class="font_shadows_into_light text2">Meni:</h1>
</div>
 
<div class="container" style="margin-top: 30px; text-align: center;">    
    <button id="meni1" class="btn btn-primary btn-lg" onclick="Promena(this.id)">Doručak</button> 
    <button id="meni2" class="btn btn-secondary btn-lg" onclick="Promena(this.id)">Pizze</button> 
    <button id="meni3" class="btn btn-success btn-lg" onclick="Promena(this.id)">Italijanska kuhinja</button> 
    <button id="meni4" class="btn btn-danger btn-lg" onclick="Promena(this.id)">Roštilj</button> 
    <button id="meni5" class="btn btn-warning btn-lg" onclick="Promena(this.id)">Salate</button> 
    <button id="meni6" class="btn btn-info btn-lg" onclick="Promena(this.id)">Riba</button> 
    <button id="meni7" class="btn btn-primary btn-lg" onclick="Promena(this.id)">Dezert</button> 
    <button id="meni8" class="btn btn-secondary btn-lg" onclick="Promena(this.id)">Piće</button> 
    <button id="meni9" class="btn btn-success btn-lg" onclick="Promena(this.id)">Žestoka pića</button> 
    <button id="meni10" class="btn btn-danger btn-lg" onclick="Promena(this.id)">Vina</button> 
    <button id="meni11" class="btn btn-warning btn-lg" onclick="Promena(this.id)">Piva</button>   
</div> 


    <div class="container">
        <img src="img/meni1.jpg" id="img" class="images">
    </div>

    
<?php include('php/footer.php')?>