function Click(sto){
    
    const Div = document.getElementById("head");
    const div1 = document.getElementById("Sto");
    const div2 = document.getElementById("Dan");


    if (Div.getAttribute("name") == ""){

    Div.innerHTML = 'Odaberite dan i vreme rezervacije';
    Div.setAttribute('name', "1");
    Div.setAttribute('style', "padding-bottom: 50px; margin-top: 100px;");
    
    var br_sto_l = document.createElement("label");
    br_sto_l.innerHTML= 'Odabrali ste sto:';
    var br_sto = document.createElement("input");
   
    br_sto.setAttribute('align', 'right');
    br_sto.setAttribute('style', 'text-align: center;');
    br_sto.setAttribute('class', "form-control");
    br_sto.setAttribute('id', "BrSto");
    br_sto.setAttribute('name', 'BrSto');
    br_sto.setAttribute('value', sto);
    br_sto.setAttribute('disabled', true);
    //br_sto.setAttribute('readonly', true);

    var br_sto_h = document.createElement("input")
    br_sto_h.setAttribute('type', 'hidden');
    br_sto_h.setAttribute('name', 'BrStoH');
    br_sto_h.setAttribute('value', sto);
    
    div1.appendChild(br_sto_h);
    div1.appendChild(br_sto_l);
    div1.appendChild(br_sto);

    var dan_l = document.createElement("label");
    dan_l.innerHTML= 'Odaberite dan rezervacije:';
    var dan = document.createElement("select");
    dan.setAttribute('class', "form-control");
    dan.setAttribute('id', "_dan");
    dan.setAttribute('name', "_dan");
    dan.setAttribute('onchange', "val()");
    
    var x1 = document.createElement("option");
    x1.setAttribute('value', "0");
    x1.setAttribute('selected', true);
    x1.setAttribute('disabled', true);

    var x2 = document.createElement("option");
    x2.innerHTML = "Ponedeljak";
    x2.setAttribute('value', "mon");

    var x3 = document.createElement("option");
    x3.innerHTML = "Utorak";
    x3.setAttribute('value', "tue");

    var x4 = document.createElement("option");
    x4.innerHTML = "Sreda";
    x4.setAttribute('value', "wed");

    var x5 = document.createElement("option");
    x5.innerHTML = "Cetvrtak";
    x5.setAttribute('value', "the");

    var x6 = document.createElement("option");
    x6.innerHTML = "Petak";
    x6.setAttribute('value', "fri");

    var x7 = document.createElement("option");
    x7.innerHTML = "Subota";
    x7.setAttribute('value', "sat");

    var x8 = document.createElement("option");
    x8.innerHTML = "Nedelja";
    x8.setAttribute('value', "sun");



    div2.appendChild(dan_l);
    div2.appendChild(dan);
    dan.appendChild(x1);
    dan.appendChild(x2);
    dan.appendChild(x3);
    dan.appendChild(x4);
    dan.appendChild(x5);
    dan.appendChild(x6);
    dan.appendChild(x7);
    dan.appendChild(x8);
    
    }else{
    
        document.getElementById("BrSto").setAttribute('value', sto);
        document.getElementById("_dan").value = "";

    }
}



function val(){

    d = document.getElementById("_dan").value;
    const div3 = document.getElementById("Buttons");

    if (div3.getAttribute("name") == "0"){
            
           div3.setAttribute('name', "1");

            var b1 = document.createElement("input");
            b1.setAttribute('value', "14-16");
            b1.setAttribute('id', 'b1');
            b1.setAttribute('type', 'submit');
            b1.setAttribute('name', 'submit');
            b1.setAttribute('style', 'margin-top: 20px;');
            b1.setAttribute('class', 'btn btn-primary btn-lg btn-block form-control');

            var b2 = document.createElement("input");
            b2.setAttribute('value', "16-18");
            b2.setAttribute('id', 'b2');
            b2.setAttribute('type', 'submit');
            b2.setAttribute('name', 'submit');
            b2.setAttribute('style', 'margin-top: 20px;');
            b2.setAttribute('class', 'btn btn-primary btn-lg btn-block form-control');

            var b3 = document.createElement("input");
            b3.setAttribute('value', "18-20");
            b3.setAttribute('id', 'b3');
            b3.setAttribute('type', 'submit');
            b3.setAttribute('name', 'submit');
            b3.setAttribute('style', 'margin-top: 20px;');
            b3.setAttribute('class', 'btn btn-primary btn-lg btn-block form-control');

            var b4 = document.createElement("input");
            b4.setAttribute('value', "20-22");
            b4.setAttribute('id', 'b4');
            b4.setAttribute('type', 'submit');
            b4.setAttribute('name', 'submit');
            b4.setAttribute('style', 'margin-top: 20px;');
            b4.setAttribute('class', 'btn btn-primary btn-lg btn-block form-control');

            var b5 = document.createElement("input");
            b5.setAttribute('value', "22-24");
            b5.setAttribute('id', 'b5');
            b5.setAttribute('type', 'submit');
            b5.setAttribute('name', 'submit');
            b5.setAttribute('style', 'margin-top: 20px;');
            b5.setAttribute('class', 'btn btn-primary btn-lg btn-block form-control');


            div3.appendChild(b1);
            div3.appendChild(b2);
            div3.appendChild(b3);
            div3.appendChild(b4);
            div3.appendChild(b5);
    

        // } else{alert('invalid input')
    }
    
    
    //  else if (div3.getAttribute("name") == "1"){
    //     div3.setAttribute('name', "0");
    //     element.parentNode.removeChild(b1);
    // }

}