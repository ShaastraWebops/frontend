$(document).ready(function() {
    $(".eventDetail_Aerofest").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        // $("body").fadeOut(1000, redirectPage);      
        $("#aeroplane").css("display", "inline");
        $("#aeroplane").animate({left:"100%"},"slow",redirectPage);
    });
         
    function redirectPage() {
        window.location = linkLocation;
    }
});