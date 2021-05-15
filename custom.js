$(document).ready(function() {
    setInterval(ajaxd, 10000);
});

function ajaxd() { 
  $.ajax({
   type: "GET",
   url: "index.php",   
 });
}