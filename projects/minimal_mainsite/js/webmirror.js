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

	

	
	this.setKey = function( key, value ){
		this.data[key] = value;
	}
	

	return this

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

		var self = this


		if(!this.enable_uplink){
			console.log('Uplink disabled. aborting uplink')
			return
		}

		xhr = new XMLHttpRequest();
		xhr.open('POST',this.service_url+'/set/'+pk+'/');


		xhr.onload = function(data){
			self._setKeyIntoCluster( pk, cluster, value )
			callback();
		}
		xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		xhr.send('token='+encodeURIComponent(this.token)+'&data='+encodeURIComponent(value)+'&cluster='+encodeURIComponent(cluster));
		
	}
	this._setKeyIntoCluster = function( pk, cluster, value ){
		console.log('setting value')
		if(this.documentClusterList[cluster])
			this.documentClusterList[cluster].setKey( pk, value )
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

	this.transform = function( text ){
		return text
	}

	// Return a self-reference to enable currying.
	this.setPKKey = function( val ){
		this.pk_key = val;
		return this
	}

	this.setClusterKey = function( val ){
		this.cluster_key = val;
		return this
	}

	this.setTransform = function( func ){
		this.transform = func
	}

	
	this.autoDiscover = function( selector ){

		var self = this

		$(selector).each(
			function( index, el ){
				self.make(el)
			}
		);

	}

	this.make = function( el ){

		var $el = $(el)
		var self = this

		$el.on('blur',function(evt){
			console.log('focus lost. setting state')

			// we do variable retrival in here so that the function changes if the data values change.
			var pk = $el.attr('data-'+self.pk_key)
			var cluster = $el.attr('data-'+self.cluster_key)

			
			if(!!parseInt($el.data('transform')))
				return

			self.setKey( pk, cluster, $el.html(), function(){
				self.refreshAllWithKey( pk, cluster );
			})

			// prevent multiple instances of this event from making a difference.
			evt.stopPropagation();
		});


		$el.on('ready',function(){
			console.log('element ready. getting state')

			var pk = $el.attr('data-'+self.pk_key)
			var cluster = $el.attr('data-'+self.cluster_key)

			self.getKey( pk, cluster, function( value ){

				if( !!parseInt($el.data('transform')) && value )
					value = self.transform( value )

				$el.html( value );
				$(window).resize()

			});
		});

		$el.trigger('ready');
	}

	this.refreshAllWithKey = function( pk, cluster ){
		this.refresh('[data-'+this.pk_key+'='+pk+'][data-'+this.cluster_key+'='+cluster+']');
	}
	
	this.refresh = function( selector ){
		$(selector).trigger('ready');
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

var TextProcessor = function(){

	this.maxLength = 100;
	this.setMaxLength = function( maxLength ){
		this.maxLength = maxLength
	}

	this.process = function( text ){
		if(text.length>this.maxLength)
			return this._shortenWithEllipsis( text )
	}

	this._shortenWithEllipsis = function( text ){
		return text.substring(0,this.maxLength) + '...'
	}

}

var ModalMirrorHandler = function( modal ){
	this.$modal = $(modal)

	this.$head = null
	this.$body = null
	this.$foot = null

	this.setHead = function( head ){
		this.$head = $(head)
		return this;
	}

	this.setBody = function( body ){
		this.$body = $(body)
		return this;
	}

	this.process = function( headString, bodyMirror, bodyCluster ){
		this._copyHeadString( headString )
		this._copyBodyMirror( bodyMirror, bodyCluster )
	}

	this._copyBodyMirror = function( bodyMirror, bodyCluster ){
		this.$body.attr('data-mirror',bodyMirror);
		this.$body.attr('data-cluster',bodyCluster);
	}

	this._copyHeadString = function( headString ){
		this.$head.html(headString);
	}

}

var EventWriteupHandler = function( modal ){
	this.modalHandler = new ModalMirrorHandler( modal )

	this.modalHandler.setHead($(modal).find('.modal-header')).setBody($(modal).find('.modal-body'));

	this.processText = function( text, maxLength ){
		processor = new TextProcessor()
		if( maxLength )
			processor.setMaxLength( maxLength )

		return processor.process( text )
	}

	this.processOnClick = function( el ){
		var $event = $(el).closest('.event-info')
		var $body = $event.find('p[data-mirror]')
		var $head = $event.find('h2')

		var bodyMirror = $body.data('mirror')
		var bodyCluster = $body.data('cluster')

		var headString = '<h3>' + $head.html() + '</h3>';

		this.modalHandler.process( headString, bodyMirror, bodyCluster )

	}

}

