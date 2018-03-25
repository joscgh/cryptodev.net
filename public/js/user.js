/*----------------------------------------------------------------------------*/
//                                 USER
/*----------------------------------------------------------------------------*/
displaySub();
function displaySub(){
    $('.submenu').click(function(){
        $('.submenu-h').slideToggle();
    });
}

$('#i-menu-u').click(showMenu);
function showMenu() {
    if(document.getElementById('btn-menu-u').checked){
    	$('#menu-l').css({'transform': 'translateX(0%)'});
    }else{
    	$('#menu-l').css({'transform': 'translateX(-100%)'});
	}
}

$( window ).resize(function() {
    if(jQuery(window).width() > 860){
    	document.getElementById("btn-menu-u").checked = false;
    	$('#menu-l').css({'transform': 'translateX(0%)'});
    }
});

$('#send-u').click(showEnviar);
function showEnviar() {
    $('.enviar-u').css({'display': 'flex'});
    if(jQuery(window).width() < 860){
        $('#header-cont-u').css({'display': 'none'});
        $('.cont-bg').css({'display': 'none'});
        $('#triangle-f').css({'display': 'none'});
        $('footer').css({'display': 'none'});
    }
}

$('#enviar-x').click(closeEnviar);
$('#send-enviar').click(closeEnviar);
function closeEnviar() {
    $('.enviar-u').css({'display': 'none'});

    $('#header-cont-u').css({'display': 'block'});
    $('.cont-bg').css({'display': 'grid'});
    $('#triangle-f').css({'display': 'initial'});
    $('footer').css({'display': 'block'});
}

function show5()
{
    if(!document.layers&&!document.all&&!document.getElementById)
        return

        var Digital=new Date()
        var hours=Digital.getHours()
        var minutes=Digital.getMinutes()
        var seconds=Digital.getSeconds()

        var dn="p.m."
        if (hours<12)
            dn="a.m."
        if (hours>12)
            hours=hours-12
        if (hours==0)
            hours=12

        if(minutes <= 9)
            minutes = "0"+minutes
        if(seconds <= 9)
            seconds ="0"+seconds
        //change font size here to your desire
        myclock="<font>"+hours+":"+minutes+":"
         +seconds+" "+dn+"</font>"
        
        if(document.layers)
        {
            document.layers.liveclock.document.write(myclock)
            document.layers.liveclock.document.close()
        }
        else if(document.all)
            liveclock.innerHTML=myclock
        else if(document.getElementById)
            document.getElementById("liveclock").innerHTML=myclock
        
        setTimeout("show5()",1000)
}


        window.onload=show5