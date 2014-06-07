$(document).ready(function(){
   $(".col-sm-2").hover(function(){
      $(this).css("background-color","rgba(14, 99, 133, 1)");
    },function(){
      $(this).css("background-color","");        
   });   
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