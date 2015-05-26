/* DÉBUT - Code pour dupliquer les participants */
function rajoutParti() {
    $("#bouton-rajout").click(function(){
        $( "#participants-uniques" ).clone().appendTo( ".participants" );   
});
}
/* FIN - Code pour dupliquer les participants */



/* DÉBUT - Code pour faire disparaitre la zone atelier */
function sectionDis() {
 $(".ateliervend").click(function(){
 $( ".wrapper-atelier" ).addClass( 'disp' );
});

 $(".autres").click(function(){
 $( ".wrapper-atelier" ).removeClass( 'disp' );
 });
}
/* FIN - Code pour faire disparaitre la zone atelier */

/*         cakeform

function ajouterId() {
        var formulaire = document.getElementById("cakeform");
        var option = document.createElement("option");
        option.text = "Kiwi";
        formulaire.add(option);
}*/



/* EVENT




*/



//function ajouterId() {
    //console.log('hello');

    /*var testmm = document.getElementById("cakeform");
    
    for (var i = 1; i <= 6; i += 1) {
     testmm += i;   
    }*/
    
  /*
    
    bouton = document.getElementById("bouton-rajout");
    formulaire = document.getElementById("cakeform");
      
      
      */



//}

/* DÉBUT - Code pour dupliquer les participants  */
/*
function rajoutParti() {
    
    var clickini = 0;
    
    $("#bouton-rajout").click(function(){

          if ($("this").click = 1) {
        console.log('hello1');
         } else if ($("this").click = 2) {
        console.log('hello2');
         }
    
            else {
        console.log('hello');
        }
    


        //$( "#participants-uniques" ).clone().appendTo( ".participants" );
        
        //ajouterId();
        
        //sectionDis(); 
     
          
});
}
/* FIN - Code pour dupliquer les participants */






/* DÉBUT - Code pour dupliquer les participants */

function rajoutParti() {
    
    var clickini = 0;
    
    $("#bouton-rajout").click(function(){

        $( "#participants-uniques" ).clone().appendTo( ".participants" );
        
        ajouterId();
        
        sectionDis(); 
     
          
});
}
/*FIN - Code pour dupliquer les participants */



/*DÉBUT Test MM FONCTIONNEL GÉNÈRE DU CODE */

function randomNumber(upper) {
    return Math.floor( Math.random() * upper ) +1 ;
    }
    
    var counter = 0;
    while (counter < 10) {
        var randNum = randomNumber(6);
        document.write(randNum + ' ');
        counter +=1 ; 
    }

/*FIN Test MM*/










 var cake_prices = new Array();
 cake_prices["Round6"]=20;
 cake_prices["Round8"]=105;
 cake_prices["Round10"]=90;
 cake_prices["Round12"]=95;
 cake_prices["Round13"]=80;
 
 
 
function getCakeSizePrice()
{  
    var cakeSizePrice=0;
    var theForm = document.forms["cakeform"];
    var selectedCake = theForm.elements["selectedcake"];

    for(var i = 0; i < selectedCake.length; i++)
    {
        if(selectedCake[i].checked)
        {
            cakeSizePrice = cake_prices[selectedCake[i].value];
 
            break;
        }
    }
    return cakeSizePrice;
}


       
function calculateTotal()
{
    
    
   var cakePrice = getCakeSizePrice();
   var divobj = document.getElementById('totalPrice');
   divobj.style.display='block';
   divobj.innerHTML = "$"+cakePrice;
   
   
  //return sectionDis();
   
}


function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
    
    
}