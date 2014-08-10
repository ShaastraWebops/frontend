$(document).ready(function() {  
   i = 1; 
   $('#workshops_button').click(function() {
/*        $('#workshops_load').animate({'width': '100%'}, 1800);   */
        time1 = setInterval(function() {
                $('#spanner').toggleClass('rotate');
            }, 1000);
        time2 = setInterval(function() {
                t = 60*i;           
                $('#nut').css({
                    '-webkit-transform': 'rotate(' + t + 'deg)',
                    '-webkit-transition-duration': '1s',
                    '-webkit-transition-delay': '1s',
                    '-webkit-animation-timing-function': 'linear',
                    '-webkit-transform-origin': '50% 50% 0'
                }); 
                i += 1;   
            }, 2000);
        $('#spanner')
            .queue( function(next){ 
            $(this).css('display','initial'); 
            next(); 
        });          
        $('#nut')
            .queue( function(next){ 
            $(this).css('display','initial'); 
            next(); 
        });          
   });
});
