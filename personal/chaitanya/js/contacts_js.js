$(document).ready(function(){
   $(".col-sm-2").hover(function(){
      $(this).css("background-color","rgba(14, 99, 133, 1)");
    },function(){
      $(this).css("background-color","");        
   });   
    

    $(function() {  
        var txt = $('#comments'),  
            hiddenDiv = $(document.createElement('div')),  
            content = null;  
  
        txt.addClass('txtstuff');  
        hiddenDiv.addClass('hiddendiv common');  
  
        $('body').append(hiddenDiv);  
  
        txt.on('keyup', function () {  
  
            content = $(this).val();  
  
            content = content.replace(/\n/g, '<br>');  
            hiddenDiv.html(content + '<br class="lbr">');  
  
            $(this).css('height', hiddenDiv.height());  
  
        }); 
    });
    
    
    $("#co-curricular_affairs").click(function(){
       $("#div").load("contacts_click.html #target_logo", function() {
        $("#details").css("background","url('../pics/co-curricular_affairs.png') no-repeat top center");
       }); 
//        $("#div").append($("<div>").load("contacts_click.html #evolve"));        
    });
    $("#pr_spons_networking").click(function(){
       $("#div").load("contacts_click.html #target_logo", function() {
        $("#details").css("background","url('../pics/pr_spons_etc.png') no-repeat top center");
       }); 
    });
    $("#events").click(function(){
       $("#div").load("contacts_click.html #target_logo", function() {
        $("#details").css("background","url('../pics/events.png') no-repeat top center");
       }); 
    });
    $("#sr").click(function(){
       $("#div").load("contacts_click.html #target_logo", function() {
        $("#details").css("background","url('../pics/evolve.png') no-repeat top center");   
       }); 
    });    
});  













