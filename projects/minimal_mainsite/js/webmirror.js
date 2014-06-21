// webmirror.js


// call this func when mirror is 2 way (ie we have a token, edit mode)
function hookMirror( el, webtoken ){
	var $el = $(el)
	var pk = parseInt($el.data('mirror'))
	var token = webtoken
	$el.blur(function(){
		Dajaxice.apps.webmirror.set_data(function(){},{'data':$(this).html(),'pk':pk,'token':token})
	});
}

// call this function anyways.
function updateData( el ){
	var $el = $(el);
	var pk = parseInt($el.data('mirror'));
	/*Dajaxice.apps.webmirror.get_data(function(response){
		$el.html(response.content)
	},{'pk':pk})*/
	$.ajax({
		url:'http://erp.shaastra.org/webmirror/get/',
		type:'POST',
		dataType:'jsonp',
		data:'{"pk":'+pk+'}'
	}).done(function(data){
		console.log(data);
	});
}