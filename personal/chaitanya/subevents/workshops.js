$(document).ready(function() {
    
   $("#workshops_button").click(function() {
        $("#workshops_div").css("display","initial"); 
    setInterval(function() {
        $("#spanner").toggleClass("rotate");
        $("#nut").toggleClass("rotate_nut");   

    }, 1000);

   });
        
});


