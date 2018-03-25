$('#api-off').click(offApi);
function offApi() {
    $('#swich-btn').css({'left': '-1px'});
    $('#swich-btn').css({'background': '#010943'});
    document.getElementById("estado-api").innerHTML="API DESACTIVADO";
    $('#estado-api').css({'background': '#010943'});
}
$('#api-on').click(onApi);
function onApi() {
    $('#swich-btn').css({'left': '31px'});
    $('#swich-btn').css({'background': '#E8652C'});
    document.getElementById("estado-api").innerHTML="API ACTIVADO";
    $('#estado-api').css({'background': '#E8652C'});
}
/*
$('#btn-key').click(copyKey);
function copyKey() {
  var copyText = document.getElementById("key-text").innerHTML;
  copyText.select();
  document.execCommand("Copy");
 document.getElementById("key-text").select();
}
*/
$('#btn-key').click(copyToClipboard('#key-text'));

function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}