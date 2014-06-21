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
	
	xhr = new XMLHttpRequest();
	xhr.open('GET','http://erp.shaastra.org/webmirror/get/'+pk+'/');
	xhr.onload = function(data){
		obj = JSON.parse(data.currentTarget.response);
		$el.html(obj.content);
	}
	xhr.send();
}