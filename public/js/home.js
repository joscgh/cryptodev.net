var flagp = 0;
showPrice();
function showPrice() {
    var i;
    var price = document.getElementsByClassName("d-p");
    var cripto = document.getElementsByClassName("box-p");
    for (i = 0; i < price.length; i++) {
       price[i].style.display = "none";
       cripto[i].style.display = "none";  
    }
    flagp++;
    if (flagp > price.length) {flagp = 1}

    price[flagp-1].style.display = "block";
    cripto[flagp-1].style.display = "flex";  
    setTimeout(showPrice, 5000); // Change image every 5 seconds
}


/*-------------------------------------*/
//            Text Show
/*-------------------------------------*/

/*-------------------------------------*/
    //FUNCION ANIMACION
function stepAnimateText(element, animation, delay){

  var text = $(element).text();
  var curr = '';

  for (var i=0; i < text.length; i++){
    var character = text.charAt(i);
    $(element).html(curr+'<span class="'+animation+'" style="-webkit-animation-delay: '+i*delay+'s; animation-delay: '+i*delay+'s">'+character +"</span>");
    curr = $(element).html();
  }
}

// LLAMADA A FUNCION
/*stepAnimateText('.text-s','bounceInDown', 0.1);*/

/*-------------------------------------*/
//            Nuevo Slider
/*-------------------------------------*/
$( document ).ready( showSlides );
function showSlides(){
/*-------------------------------------*/
    var imgItems = $('.box-s').length;
    var imgPos = 1;
    for(j = 0; j < imgItems; j++){
        $('#nav-s').append('<div class="button-s"></div>');
    }
/*-------------------------------------*/
    $('.box-s').hide();//Ocultamos todos los Slides
    $('.box-s:first').show();//Ocultamos todos los Slides
    $('.button-s:first').css({'background': '#CD6E2E'});//Damos estilos al primer item de la paginacion
/*-------------------------------------*/
    //Ejecutamos todas las funciones
    $('.button-s').click(pagination);

    setInterval(function(){
        nextSlider();
    }, 5000);
/*-------------------------------------*/
    //FUNCIONES
    function pagination(){
        var paginationPos = $(this).index() +1; //Retorna el numero del item al que le dimos click
        $('.box-s').hide();//Oculta todos los Slide 
        $('.box-s:nth-child('+ paginationPos +')').fadeIn();//Muestra el slide del numero del item al que le dimos click
        $('.button-s').css({'background': '#ffffff'});//Coloca el color base a todos los botones
        $(this).css({'background': '#CD6E2E'});//Cambia el color del boton seleccionado

        imgPos = paginationPos;//Esta linea indica que se le dara la posicion de los botones circulares a la posicion existente en los botones laterales
    }

    function nextSlider(){
        if(imgPos >= imgItems){
            imgPos = 1;
        }else{
            imgPos++;
        }

        $('.button-s').css({'background': '#ffffff'});//Coloca el color base a todos los botones
        $('.button-s:nth-child('+ imgPos +')').css({'background': '#CD6E2E'});//Cambia el color del boton seleccionado

        $('.box-s').hide();//Oculta todos los Slide 
        $('.box-s:nth-child('+ imgPos +')').fadeIn();//Muestra el slide del numero del item al que le dimos click
    }
}

/*-------------------------------------*/
//            Slider CODE
/*-------------------------------------*/

showCode();
function showCode(){
/*-------------------------------------*/
    $('.language-int').hide();//Ocultamos todos los Codigos
    $('.language-int:first').show();//Ocultamos todos los Codigos
    $('.lenguaje:first').css({'background': '#E8652C'});//Damos estilos al primer item del codigo
    $('.lenguaje:first').css({'border-radius': '14px 14px 0px 0px'});
    $('.lenguaje:first').css({'box-shadow': '0px 0px 10px 2px #000000'});
/*-------------------------------------*/
    //Ejecutamos todas las funciones
    $('.lenguaje').click(codesel);
/*-------------------------------------*/
    //FUNCIONES
    function codesel(){
        var paginationCode = $(this).index() +1; //Retorna el numero del item al que le dimos click
        $('.language-int').hide();//Oculta todos los Codigo 
        $('.language-int:nth-child('+ paginationCode +')').fadeIn();//Muestra el Codigo del numero del item al que le dimos click
        $('.lenguaje').css({'background': '#003E86'});//Coloca el color base a todos los botones
        $('.lenguaje').css({'border-radius': '0px 0px 0px 0px'});
        $('.lenguaje').css({'box-shadow': '0px 0px 0px 0px #000000'});
        $('.lenguaje').css({'z-index': '0'});

        $(this).css({'background': '#E8652C'});//Cambia el color del boton seleccionado
        $(this).css({'border-radius': '14px 14px 0px 0px'});
        $(this).css({'box-shadow': '0px 0px 10px 2px #000000'});
        $(this).css({'z-index': '1'});
    }
}