$(document).ready(function() {

jQuery(function(){
 var $header2 = $('#header2')
 $header2.lettering() // wrap <span class="charx"/ > around each character within header
 var $spans = $header2.find('span')
 var delay = 0
 var transitionsfired = 0
 var transitionisrunning = false
 $header2.on('transitionend webkitTransitionEnd', function(e){
  var $target = $(e.target) // target letter transitionend fired on
  if (/transform/i.test(e.originalEvent.propertyName)){ // check event fired on "transform" prop
   transitionsfired += 1
   $target.css({transitionDelay:'0ms'}) // set transition delay to 0 so when 'dropped' class is removed, letter appears instantly
   if (transitionsfired == $spans.length){ // all transitions on characters have completed?
    transitionsfired = 0 // reset number of transitions fired
    delay = 0
    $header2.removeClass('dropped')
    transitionisrunning = false // indicate transition has stopped
   }
  }
 })
 $('#coding_button').on('click', function(){
  if (transitionisrunning === false){
   $spans.each(function(){
    $(this).css({transitionDelay: delay+'s'}) // apply sequential trans delay to each character
    delay += 0.1
   })
   $header2.addClass('dropped') // Add "dropped" class to header to apply transition
   transitionisrunning = true // indicate transition is running
  }
 })
})

});