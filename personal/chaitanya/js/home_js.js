            $(document).ready(function(){
               $("#menu_icon").click(function(){
                  $("#menu_popup").animate({
                      left: '0%',
                      opacity: '1'                  
                  },"slow");  
                 $("#menu_rhs").animate({
                      right: '0%',
                      opacity: '1',
                      width: '70%'
                  },"slow");  
               });  
               $(".menu_options").hover(function(){
                  
                  font_size_em = parseFloat($(this).css("font-size"));   
                  xyz = (font_size_em) * (1.5/1.3);
                  act = xyz + 'px';   
                   console.log(act);
                   
                  $(this).css("background-color","#EBF4FA");
                  $(this).css("color","black");
                  $("#you_tube").css("color","#F62217");
                  $("#facebook").css("color","#0020C2");    
                  $("#twitter").css("color","#38ACEC"); 
                  $("#close_menu").css("color","#99C68E"); 
                  $(this).css("font-size",""); 
                  $(this).css("font-weight","bolder"); 
                },function(){
                    console.log(act);
                  $(this).css("background-color","black"); 
                  $(this).css("color","white"); 
                  $("#you_tube").css("color","#F62217");
                  $("#facebook").css("color","#0020C2");
                  $("#twitter").css("color","#38ACEC"); 
                  $("#close_menu").css("color","#99C68E");    
//                  $(this).css("font-size",font_size_em + "px"); 
//                  $(this).css("font-size","act");    
                  $(this).css("font-weight","initial");    
                    console.log(act);
               });
               $("#close_menu").click(function(){
                    $("#menu_rhs").animate({
                      right: '-70%',
                      opacity: '0',
                      width: '0%'
                    },"slow");  
                    $("#menu_popup").animate({
                      left: '-30%',
                      opacity: '0'                  
                    },"slow");                      
                });
                $("#spons").hover(function(){
                    $("#spons_img").css("opacity","1");
                },function(){
                    $("#spons_img").css("opacity","0");
                });
                $("#lectures").hover(function(){
                    $("#lectures_img").css("opacity","1");
                },function(){
                    $("#lectures_img").css("opacity","0");
                });
                $("#events").hover(function(){
                    $("#events_img").css("opacity","1");
                },function(){
                    $("#events_img").css("opacity","0");
                });                
                $("#contacts").hover(function(){
                    $("#contacts_img").css("opacity","1");
                },function(){
                    $("#contacts_img").css("opacity","0");
                });   
                
                $("#contacts").click(function(){
                    window.location.href = "contacts.html";
                });
                $("#menu_contacts").click(function(){
                    window.location.href = "contacts.html";
                });
				$("#menu_envisage").click(function(){
                    window.location.href = "envisage.htm";
                });
                $("#menu_home").click(function(){
                    window.location.href = "home.html";
                });
                
                
                $("#events, #spons, #shows, #lectures, #contacts, #about_us, #close_menu, .menu_options").hover(function(){
                    $(this).css("cursor","pointer");
                });
                
                $("#facebook").click(function(){
                    $(location).attr('href', 'https://www.facebook.com/Shaastra');                        
                });
                $("#twitter").click(function(){
                    $(location).attr('href', 'https://twitter.com/ShaastraIITM');                        
                });
                $("#you_tube").click(function(){
                    $(location).attr('href', 'https://www.youtube.com/user/iitmshaastra');                        
                });
                
            });   