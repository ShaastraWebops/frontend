$(document).ready(function(){
   $(".col-sm-2").hover(function(){
      $(this).css("background-color","rgba(14, 99, 133, 1)");
    },function(){
      $(this).css("background-color","");        
   });   
    
    $("#contacts_facebook").click(function(){
       $(location).attr('href', 'https://www.facebook.com/Shaastra'); 
    });
    $("#contacts_youtube").click(function(){
       $(location).attr('href', 'https://www.youtube.com/user/iitmshaastra'); 
    });
    $("#contacts_twitter").click(function(){
       $(location).attr('href', 'https://twitter.com/ShaastraIITM'); 
    });
    
    $("#contacts_facebook, #contacts_twitter, #contacts_youtube, #co-curricular_affairs, #pr_spons_networking, #sr, #events").hover(function(){
       $(this).css("cursor","pointer");   
    });
    
});  













