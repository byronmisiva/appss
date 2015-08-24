<link href='<?=base_url()?>css/general/tdfriendselector.css?fb_refresh=1234565456' rel='stylesheet' type='text/css' />

<div style='position: absolute; width: 787px; height: 399px; overflow: hidden; background-image: url("<?=$palco?>"); background-repeat: no-repeat; top: 180px; left: 10px;'>
	
	<div style="position: absolute; width: 496px; height: 278px; overflow: hidden; background-repeat: no-repeat; background-image: url('<?=$sillas?>'); background-repeat: no-repeat; top: 70px; left: 160px;">		
		<div id="amigo_1" class="amigo" style="position: absolute; width: 80px; height: 80px; top: 0px; left: 51px; cursor: pointer; overflow: hidden;" >
			<div id="foto_1" style="position: absolute; width: 80px; height: 80px;">
				<?if( $amigos[1] != '' ){?>
					<img src="//graph.facebook.com/<?=$amigos[1];?>/picture?type=normal" alt="" width="101%" />
				<?}?>
			</div>
		</div>
		<div id="amigo_2" class="amigo" style="position: absolute; width: 80px; height: 80px; top: 1px; left: 207px; cursor: pointer; overflow: hidden;" >
			<div id="foto_2" style="position: absolute; width: 80px; height: 80px;">
				<?if( $amigos[2] != '' ){?>
					<img src="//graph.facebook.com/<?=$amigos[2];?>/picture?type=normal" alt="" width="100%" />
				<?}?>
			</div>
		</div>
		<div id="amigo_3" class="amigo" style="position: absolute; width: 80px; height: 80px; top: 0px; left: 369px; cursor: pointer; overflow: hidden;" >
			<div id="foto_3" style="position: absolute; width: 80px; height: 80px;">
				<?if( $amigos[3] != '' ){?>
					<img src="//graph.facebook.com/<?=$amigos[3];?>/picture?type=normal" alt="" width="100%" />
				<?}?>
			</div>
		</div>
		<div id="amigo_4" class="amigo" style="position: absolute; width: 80px; height: 80px; top: 147px; left: 0px; cursor: pointer; overflow: hidden;" >
			<div id="foto_4" style="position: absolute; width: 80px; height: 80px;">
				<?if( $amigos[4] != '' ){?>
					<img src="//graph.facebook.com/<?=$amigos[4];?>/picture?type=normal" alt="" width="100%" />
				<?}?>
			</div>
		</div>
		<div id="amigo_5" style="position: absolute; width: 80px; height: 80px; top: 146px; left: 194px;" >
			<div id="foto_5" style="position: absolute; width: 80px; height: 80px;">
				<?if( $amigos[5] != '' ){?>
					<img src="//graph.facebook.com/<?=$amigos[5];?>/picture?type=normal" alt="" width="80" height="80"/>
				<?}?>
			</div>
		</div>		
	</div>

</div>
<div style='position: absolute; width: 419px; height: 109px; overflow: hidden; background-image: url("<?=$info?>"); background-repeat: no-repeat; top: 650px; left: 60px;'></div>
<div style='position: absolute; width: 123px; height: 290px; overflow: hidden; background-image: url("<?=$celu?>"); background-repeat: no-repeat; top: 650px; left: 590px;'></div>


<div id="TDFriendSelector" style="display: none; top: 150px; left: 200px;"> 
	<div class="TDFriendSelectorBackgroud"></div>
	<div class="TDFriendSelector_dialog">
		<a href="#" id="TDFriendSelector_buttonClose">x</a>
		<div class="TDFriendSelector_form">
			<div class="TDFriendSelector_header">
				<p>Select your friends</p>
			</div>
			<div class="TDFriendSelector_content">
				<p>Then you can invite them to join you in the app.</p>
				<div class="TDFriendSelector_searchContainer TDFriendSelector_clearfix">
					<div class="TDFriendSelector_selectedCountContainer"><span class="TDFriendSelector_selectedCount">0</span> / <span class="TDFriendSelector_selectedCountMax">0</span> friends selected</div>
					<input type="text" placeholder="Search friends" id="TDFriendSelector_searchField" />
				</div>
				<div class="TDFriendSelector_friendsContainer"></div>
			</div>
			<div class="TDFriendSelector_footer TDFriendSelector_clearfix">
				<a href="#" id="TDFriendSelector_pagePrev" class="TDFriendSelector_disabled">Previous</a>
				<a href="#" id="TDFriendSelector_pageNext">Next</a>
				<div class="TDFriendSelector_pageNumberContainer">
					Page <span id="TDFriendSelector_pageNumber">1</span> / <span id="TDFriendSelector_pageNumberTotal">1</span>
				</div>
				<a href="#" id="TDFriendSelector_buttonOK">OK</a>
			</div>
		</div>
	</div>
</div>	
	
<script type='text/javascript' src='<?=base_url()?>js/general/tdfriendselector.js'></script>
<script type='text/javascript'>
$(document).ready(function () {
	var selector1, bombillos, ArraySelectedFriends, friend_selected, logActivity, callbackFriendSelected, callbackFriendUnselected, callbackMaxSelection, callbackSubmit,
		updatePicture,
		BaseUrl = document.location.protocol + "//appss.misiva.com.ec/";			
	
	$.ajax({
		type: "POST",
		url: BaseUrl + "welcome/init_selected_friend",
		data: { 'user' :  JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) },			
		success: function(data) {					
			SelectedFriends = $.parseJSON(data);			
			ArraySelectedFriends = new Array();				
			$.each( SelectedFriends, function( key, value ) {								
				ArraySelectedFriends.push(value);
			});			
			selector1.setDisabledFriendIds( ArraySelectedFriends );
			setEventosAmigos();
		}
	});

	// When the user clicks OK, log a message
	callbackSubmit = function( selectedFriendIds ) {		
		var friend;
		friend =  ($.inArray(selectedFriendIds[0], ArraySelectedFriends) >=0 ) ?  null : TDFriendSelector.getFriendById(selectedFriendIds);				
		if ( friend != null ){			
			var obj = {
					method: 'feed',
					link: 'https://apps.facebook.com/namespacepruebas/index/',
					picture: 'https://appss.misiva.com.ec/imagenes/samsung_mobile_palco/addicono75x75.jpg?fbrefresh=123456',
					name: 'En Primera Fila',
					caption: '&#161;Vive los partidos de Eliminatorias Sudamericanas!',
					description: 'Te han elegido para asistir a la Primera Fila, puedes participar ingresando aqu&iacute; y ganar entradas para el partido de Ecuador vs. Paraguay.',
					to : friend.id						
			};
			function callback(response) {				
				if ( response != undefined ){
					ArraySelectedFriends[ friend_selected ] = friend.id;					
					selector1.setDisabledFriendIds(ArraySelectedFriends);
					updatePicture( friend );
					friend.posicion = friend_selected;	
			    	$.ajax({
			    		type: "GET",
			    		url: BaseUrl + "welcome/registrar_amigo",
			    		data: { 'data' :  friend, 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) },
			    		success: function(data) {			    				    		
			    			if( parseInt(data) >= 5 ){
			    				var obj = {
			    						method: 'feed',
			    						link: 'https://apps.facebook.com/namespacepruebas/index/',
			    						picture: 'https://appss.misiva.com.ec/imagenes/samsung_mobile_palco/addicono75x75.jpg?fbrefresh=123456',
			    						name: 'En Primera Fila',
			    						caption: '&#161;ÁM&aacute;s cerca de asistir al partido de Ecuador vs. Paraguay!',
			    						description: 'Estoy participando en el sorteo de entradas al partido de las Eliminatorias Sudamericanas.'			    											
			    				};
			    				FB.ui(obj, null);				
			    				$( '#content' ).load( BaseUrl + "welcome/vista_completo", { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) }  );
			    			}
			    		}
					});	
				}							
			}
			FB.ui(obj, callback);							
		}
	};
	
	updatePicture = function( friend ){			
		$("#foto_"+friend_selected ).html("<img src='//graph.facebook.com/" + friend.id + "/picture?type=normal' width='80' height='80' alt='" + friend.name + "'  />");
	};

	
	callbackShowFriendSelector = function ( id ) {
		friend_selected = id;
	};

	// Initialise the Friend Selector with options that will apply to all instances
	TDFriendSelector.init({backgroundSelector       : '.TDFriendSelectorBackgroud'});
	//TDFriendSelector.init();

	// Create some Friend Selector instances
	selector1 = TDFriendSelector.newInstance({
		callbackFriendSelected   : callbackFriendSelected,
		callbackFriendUnselected : callbackFriendUnselected,
		callbackMaxSelection     : callbackMaxSelection,
		callbackSubmit           : callbackSubmit,
		maxSelection             : 1,
		friendsPerPage           : 5,
		autoDeselection          : true 
	});
	
	//A–ado los eventos a los div q quiero
	setEventosAmigos = function(){
		amigos = $("div.amigo");		
		$.each( amigos, function( key, value ) {			
			$('#'+value.id).click(function (e) {	
				if( key <= 4 ){
					e.preventDefault();					
					selector1.showFriendSelector( callbackShowFriendSelector( ( key + 1 ) ) );							
				}
			}); 
		});
	};
});

</script>
 