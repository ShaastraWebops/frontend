$(document).ready(function() {  
   $('#quizzes_button').click(function() {
        $('#man').fadeIn();     
        $('#score').fadeIn(200)
        $('#speech')
            .queue( function(next){
            $(this).delay(500).fadeIn();
            next();
        });
        $('#score')
            .delay(1000)
            .queue( function(next){
            $(this).text("20");
        });
   });
})
