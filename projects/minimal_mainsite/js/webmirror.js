// webmirror.js


var LocalCluster = function( clusterID, serviceURL ){

	this.id = clusterID
	this.data = undefined
	this.serviceURL = serviceURL
	this.waitingList = [];

	this.update = function( callback ){

		var self = this

		xhr = new XMLHttpRequest();
		xhr.open('GET',this.serviceURL+'cluster/get/'+this.id+'/');
		xhr.onload = function(data){
			obj = JSON.parse(data.currentTarget.response);

			self._setData( obj.data )

			if(callback)
				callback();
		}
		xhr.send();
	}

	this._setData = function( data ){
		this.data = data;
		this._releaseWaitingList();
	}

	this._releaseWaitingList = function(){
		for(var i = 0;i < this.waitingList.length;i++){
			waitingListEntry = this.waitingList[i]
			waitingListEntry.callback( this._getKeyFromData(waitingListEntry.key) )
		}
	}

	this.getKey = function( key, callback ){
		if(this.data != undefined)
			callback(this._getKeyFromData(key))
		else
			this.addRequestToWaitingList(key, callback);
	}

	this._getKeyFromData = function( key, callback ){
		return this.data[key]
	}

	this.addRequestToWaitingList = function( key, callback ){
		this.waitingList.push( {key:key, callback:callback} )
	}

	

	/*
	this.setKey = function( key, value, token, callback ){
		xhr = new XMLHttpRequest();
		xhr.open('POST',this.service_url+'/set/'+key+'/');
		xhr.onload = function(data){
			this.data[key] = value;
			if(callback)
				callback();
		}
		xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xhr.send('token='+encodeURIComponent(token)+'&data='+encodeURIComponent(value));
	}
	*/

	return this

}

var LocalObject = function(){

}

var DocumentMirror = function( service_url ){

	this.enable_uplink = false;
	this.token = null
	this.service_url = service_url
	this.documentClusterList = [];

	this.setToken = function( token ){
		this.enable_uplink = true;
		this.token = token;
		return this
	}

	this.removeToken = function(){
		this.token = undefined;
		this.enable_uplink = false;
		return this
	}

	this.setServiceURL = function( url ){
		this.service_url = url;
	}

	this.setKey = function ( pk, cluster, value, callback ){
		if(!this.enable_uplink){
			console.log('Uplink disabled. aborting uplink')
			return
		}

		xhr = new XMLHttpRequest();
		xhr.open('POST',this.service_url+'/set/'+pk+'/');
		xhr.onload = function(data){

		}
		xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xhr.send('token='+encodeURIComponent(this.token)+'&data='+encodeURIComponent(value)+'&cluster='+encodeURIComponent(cluster));
		callback();
	}
	this.getKey = function( pk, cluster, callback ){

		if( cluster )
			this._getKeyFromCluster( pk, cluster, callback )
		else
			this._getKeyNoCluster( pk, cluster, callback )
	}

	// An underscore depicts the private-nes of this function.
	this._getKeyFromCluster = function( pk, cluster, callback ){

		var self = this

		if( this.documentClusterList[cluster] ){

			console.log('Cluster specified.Loaded')
			this.documentClusterList[cluster].getKey(pk, callback);

		}
		else{

			console.log('Cluster specified.Not loaded. Cluster GET')
			this.documentClusterList[cluster] = new LocalCluster(cluster, this.service_url);
			this.documentClusterList[cluster].update(function(){
				self.documentClusterList[cluster].getKey(pk, callback);
			});

		}
	}

	this._getKeyNoCluster = function( pk, cluster, callback ){
		console.log('No cluster specified. Standard GET')
		xhr = new XMLHttpRequest();
		xhr.open('GET',this.service_url+'/get/'+pk+'/');
		xhr.onload = function(data){
			obj = JSON.parse(data.currentTarget.response);
			callback(obj.content)
		}
		xhr.send();
	}

}

var UIMirror = function(){

	// Specify inheritance.
	DocumentMirror.call(this, WEB_MIRROR_SERVICE_URL)

	this.pk_key = 'mirror'
	this.cluster_key = 'cluster'

	// Return a self-reference to enable currying.
	this.setPKKey = function( val ){
		this.pk_key = val;
		return this
	}

	this.setClusterKey = function( val ){
		this.cluster_key = val;
		return this
	}

	this.make = function( el ){

		var $el = $(el)
		var pk = $el.data(this.pk_key)
		var cluster = $el.data(this.cluster_key)

		var self = this

		$el.on('blur',function(){
			console.log('focus lost. setting state')	
			self.setKey( pk, cluster, $el.html(), function(){

			})
		});

		$el.on('ready',function(){
			console.log('element ready. getting state')
			self.getKey( pk, cluster, function( value ){
				$el.html( value );
			});
		});

		$el.trigger('ready');
	}
	this.autoDiscover = function( selector ){

		var self = this

		$(selector).each(
			function( index, el ){
				self.make(el)
			}
		);

	}
}

// Inherit UIMirror from DocumentMirror
UIMirror.prototype = DocumentMirror.prototype;
UM = new UIMirror()

// End Document. Rubbish follows



/* call this function to update the initial data.
function updateData( el, callback ){
	var $el = $(el);
	var pk = $el.data('mirror');
	var cluster = $el.data('cluster');

	// Set cluster to null if it's undefined(in order to not mess up the function invocation)
	if(!cluster)
		cluster = null;

	// DocumentMirror GET
	if( DM ){
		DM.get(pk, cluster, function( value ){
			$el.html( value );
		});
	}

}*/




