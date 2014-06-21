// webmirror.js


// call this func when mirror is 2 way (ie we have a token, edit mode)
function hookMirror( el, webtoken ){
	var $el = $(el)
	var pk = parseInt($el.data('mirror'))
	var token = webtoken
	$el.blur(function(){
		xhr = new XMLHttpRequest();
		xhr.open('POST','http://erp.shaastra.org/webmirror/set/'+pk+'/');
		xhr.onload = function(data){

		}
		xhr.send('pk='+pk+'&token='+token+'&data='+$el.html());
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