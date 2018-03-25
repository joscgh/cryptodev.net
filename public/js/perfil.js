displayInf();
$('.sub-inf').hide();
var si = 0;
function displayInf(){
    $('.head-inf').click(function(){
        $('.sub-inf').slideToggle();
        if (si == 0) {
		    $('#spin-i').css({'transform': 'rotate(180deg)'});
		    si=1;
		} else {
		    $('#spin-i').css({'transform': 'rotate(0deg)'});
		    si=0;    		
		}
    });
}

displayDat();
$('.sub-dat').hide();
var sd = 0;
function displayDat(){
    $('.head-dat').click(function(){
        $('.sub-dat').slideToggle();
        if (sd == 0) {
		    $('#spin-d').css({'transform': 'rotate(180deg)'});
		    sd=1;
		} else {
		    $('#spin-d').css({'transform': 'rotate(0deg)'});
		    sd=0;    		
		}
    });
}

displaySeg();
$('.sub-seg').hide();
var ss = 0;
function displaySeg(){
    $('.head-seg').click(function(){
        $('.sub-seg').slideToggle();
        if (ss == 0) {
		    $('#spin-s').css({'transform': 'rotate(180deg)'});
		    ss=1;
		} else {
		    $('#spin-s').css({'transform': 'rotate(0deg)'});
		    ss=0;    		
		}
    });
}
