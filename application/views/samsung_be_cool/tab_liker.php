<link href='<?=base_url()?>css/general/tdfriendselector.css?fb_refresh=1234565456' rel='stylesheet' type='text/css' />
<script type="text/javascript" src="<?=base_url()?>js/general/validate.js"></script>
<style type="text/css">
		input.input_form {
			margin: 0;
			padding: 0;
			border: none;
			/*height: 35px;*/			
			padding-left: 8px;
			width: 100px;
			background-color: transparent;
			color: white;
			line-height: 20px;
		}
		a.nina{
			width: 77px;
			height: 80px;
			float: left;
			background-image: url("<?=$nina_off?>");
			cursor: pointer;
		}
		a.nina:hover{
			width: 77px;
			height: 80px;
			float: left;
			background-image: url("<?=$nina_on?>");
			cursor: pointer;
		}
		a.nino{
			width: 77px;
			height: 80px;
			float: left;
			background-image: url("<?=$nino_off?>");
			cursor: pointer;
		}
		a.nino:hover{
			width: 77px;
			height: 80px;
			float: left;
			background-image: url("<?=$nino_on?>");
			cursor: pointer;
		}
		.nino_selected{
			width: 77px;
			height: 80px;
			float: left;
			background-image: url("<?=$nino_on?>");
			cursor: pointer;
		}
		.nina_selected{
			width: 77px;
			height: 80px;
			float: left;
			background-image: url("<?=$nina_on?>");
			cursor: pointer;
		}
		.recuadro_foto{
			width: 50px;
			height: 50px;
			cursor: pointer;
			overflow: hidden;
			background-image: url('<?=$img_path?>03_amigo.jpg');
		}
		.mas{
			width: 22px;
			height: 22px;
			cursor: pointer;
			overflow: hidden;
			background-image: url('<?=$img_path?>04_mas.png');
		}
		</style>
<div id="content_tab" style='position: absolute; width: 600px; height: <?=$height?>px; overflow: hidden; left: 0px; top: <?=$top?>px;'>
	<!-- DIV INSTRUCCIONES -->
	<div id="instrucciones" style='float: left; width: 600px; height: 370px; overflow: hidden; background-image: url("<?=$fondo_like?>");background-repeat: no-repeat;'>		
		<div style="position: relative; width: 299px; height: 253px; left: 250px; top: 40px; background-image: url('<?=$texto?>');"></div>
		<div id="instrucciones_siguiente" style="position: relative; width: 87px; height: 22px; top: 94px; background-image: url('<?=$btn_siguiente?>'); cursor: pointer;"></div>		
	</div>
	<!-- DIV REGISTRO -->
	<div id="registro" class="page_tab" style='float: left; width: 600px; height: 370px; overflow: hidden; background-image: url("<?=$fondo_registro?>"); <?=$show_registro?> background-repeat: no-repeat;'>
		<form id="samsung_be_cool_registro" name="samsung_be_cool_registro" action="<?=base_url()?>samsung_be_cool/vista_registro" method="post">
			<div style='position: relative; width: 410px; height: 175px; overflow: hidden; background-image: url("<?=$fondo_formulario?>"); top: 120px; left: 60px;'>
				<div style="position: absolute; top: 13px; left: 70px;">
					<input class="input_form" type="text" name="completo" id="completo" value="<?=$user->first_name?>" readonly="readonly">			
				</div>	
				<div style="position: absolute; top: 54px; left: 70px;">
					<input class="input_form" type="text" name="apellido" id="apellido" value="<?=$user->last_name?>" readonly="readonly">			
				</div>	
				<div style="position: absolute; top: 99px; left: 70px;">
					<input class="input_form" style="color: #777777;" type="text" name="ciudad" id="ciudad" maxlength="15" >								
				</div>	
				<div style="position: absolute; top: 143px; left: 70px;">
					<input class="input_form" style="color: #777777;" type="text" name="telefono" id="telefono" maxlength="10">			
				</div>
				<div style="position: absolute; top: 13px; left: 270px;">
					<input class="input_form" style="color: #777777;" type="text" name="cedula" id="cedula" maxlength="10">			
				</div>
				<!-- <div style="position: absolute; top: 207px; left: 280px;">
					<input type="text" name="mail" id="mail" value="<?=$user->email?>" readonly="readonly">			
				</div> -->
				<div style="position: absolute; top: 80px; left: 215px; width: 174px; height: 80px;">
					<a id="gen_nina" class="nina"></a>
					<a id="gen_nino" class="nino"></a>
				</div>				 		
			</div>	
			<input  type="hidden" name="fb_page" id="fb_page" value="<?=$fb_page->page->id?>">			
			<input  type="hidden" name="fbid" id="fbid" value="<?=$user->id?>">
			<input  type="hidden" name="genero" id="genero" value="">
			<div style="position: relative; width: 87px; height: 22px; top: 172px; cursor: pointer;">		
				<input style="background-image: url('<?=$btn_siguiente?>'); background-repeat: no-repeat; width: 87px; height: 22px; background-color: transparent; border: none; cursor: pointer;" type="submit" value=" " >
			</div>	
		</form>		
	</div>
	<!-- DIV LISTA COOL -->
	<div id="lista_cool" style='float: left;  width: 600px; height: 370px; overflow: hidden; background-image: url("<?=$fondo_lista?>"); background-repeat: no-repeat;'>
		<form id="samsung_be_cool_lista" name="samsung_be_cool_lista" action="<?=base_url()?>samsung_be_cool/vista_registro" method="post">
			<div style="position: relative; width: 600px; height: 370px; top: 0px; left: 0px;">
				<div style="position: absolute; width: 476px; height: 314px; background-image: url('<?=$items_lista?>'); top: 5px; left: 50px;">
					<div style="position: absolute; top: 150px; left: 10px;">
						<input class="input_check" type="checkbox" name="id_item_lista[]" id="id_item_lista[]" value="1">
					</div>
					<div style="position: absolute; top: 170px; left: 10px;">
						<input class="input_check" type="checkbox" name="id_item_lista[]" id="id_item_lista[]" value="2">
					</div>
					<div style="position: absolute; top: 193px; left: 10px;">
						<input class="input_check" type="checkbox" name="id_item_lista[]" id="id_item_lista[]" value="3">
					</div>
					<div style="position: absolute; top: 235px; left: 10px;">
						<input class="input_check" type="checkbox" name="id_item_lista[]" id="id_item_lista[]" value="4">
					</div>
					<div style="position: absolute; top: 258px; left: 10px;">
						<input class="input_check" type="checkbox" name="id_item_lista[]" id="id_item_lista[]" value="5">
					</div>
					<div style="position: absolute; top: 280px; left: 10px;">
						<input class="input_check" type="checkbox" name="id_item_lista[]" id="id_item_lista[]" value="6">
					</div>
				</div>
				<div style="position: absolute; width: 87px; height: 22px; top: 348px; cursor: pointer;">		
					<input style="background-image: url('<?=$img_path?>04_botonenviar.png'); background-repeat: no-repeat; width: 87px; height: 22px; background-color: transparent; border: none; cursor: pointer;" type="submit" value=" " >
				</div>
			</div>
			<input  type="hidden" name="fb_page" id="fb_page" value="<?=$fb_page->page->id?>">			
			<input  type="hidden" name="fbid" id="fbid" value="<?=$user->id?>">						
			<input  type="hidden" name="nombre_participa" id="nombre_participa" value="<?=$user->name?>">
			<input  type="hidden" name="id_user" id="id_user" value="<?=$user_db->id?>">
		</form>
	</div>
	<!-- DIV COMPARTIR -->
	<div id="compartir" style='float: left;  width: 600px; height: 370px; overflow: hidden; background-image: url("<?=$fondo_compartir?>"); background-repeat: no-repeat;'>
		<div style="position: relative; width: 600px; height: 370px;">
			<div style="position: absolute; left: 55px; top: 15px; width: 456px; height: 173px; background-image: url('<?=$texto_compartir?>'); background-repeat: no-repeat;">
			</div>
			<div style="position: absolute; width: 350px; height: 70px; overflow: hidden; top: 200px; left: 65px;">		
				<div id="amigo_1" class="amigo recuadro_foto" style="position: absolute; top: 0px; left: 0px; width: 50px; height: 50px;">					
					<?if( $amigos[1] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[1];?>/picture?type=square" alt="" width="50" height="50"/>
					<?}?>					
				</div>
				<div id="amigo_2" class="amigo recuadro_foto" style="position: absolute; top: 0px; left: 70px; width: 50px; height: 50px;">
					<?if( $amigos[2] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[2];?>/picture?type=square" alt="" width="50" height="50"/>
					<?}?>					
				</div>
				<div id="amigo_3" class="amigo recuadro_foto" style="position: absolute; top: 0px; left: 140px; width: 50px; height: 50px;">
					<?if( $amigos[3] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[3];?>/picture?type=square" alt="" width="50" height="50"/>
					<?}?>					
				</div>
				<div id="amigo_4" class="amigo recuadro_foto" style="position: absolute; top: 0px; left: 210px; width: 50px; height: 50px;">					
					<?if( $amigos[4] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[4];?>/picture?type=square" alt="" width="50" height="50"/>
					<?}?>					
				</div>
				<div id="amigo_5" class="amigo recuadro_foto" style="position: absolute; top: 0x; left: 280px; width: 50px; height: 50px;">					
					<?if( $amigos[5] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[5];?>/picture?type=square" alt="" width="50" height="50"/>
					<?}?>					
				</div>	
				<div style="position: absolute; width: 350px; height: 22px; top: 39px;">
					<div id="mas_1" class="mas" style="position: absolute; top: 0px; left: 39px;"></div>
					<div id="mas_2" class="mas" style="position: absolute; top: 0px; left: 109px;"></div>
					<div id="mas_3" class="mas" style="position: absolute; top: 0px; left: 179px;"></div>
					<div id="mas_4" class="mas" style="position: absolute; top: 0px; left: 249px;"></div>
					<div id="mas_5" class="mas" style="position: absolute; top: 0x; left: 319px;"></div>					
				</div>	
			</div>
		</div>		
	</div>
	<!-- DIV COMPLETO -->
	<div id="completo" style='float: left;  width: 600px; height: 370px; overflow: hidden; background-image: url("<?=$fondo_compartir?>"); background-repeat: no-repeat;'>
		<div style="position: relative; width: 600px; height: 370px; color: white;">		
			<div style="position: absolute; width: 409px; height: 201px; background-image: url('<?=$texto_final?>'); left: 55px; top: 20px;">			
			</div>	
		</div>		
	</div>	
	
</div>

<script type='text/javascript' src='<?=base_url()?>js/general/tdfriendselector.js'></script>
<script type='text/javascript'>
$(document).ready(function () {
	var selectorFbFriends,
	bindEvent,
	unbindEvent, 
	amigos,
	rules,
	validatorRegistro,
	validatorLista, 
	ArraySelectedFriends, 
	friend_selected, 
	logActivity,
	callbackSubmit,
	updatePicture,
	BaseUrl = document.location.protocol + "//appss.misiva.com.ec/";
		
			
	
	$.ajax({
		type: "POST",
		url: BaseUrl + "samsung_be_cool/init_selected_friend",
		data: { 'user' :  JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) },			
		success: function(data) {					
			SelectedFriends = $.parseJSON(data);			
			ArraySelectedFriends = new Array();				
			$.each( SelectedFriends, function( key, value ) {								
				ArraySelectedFriends.push(value);
			});			
			selector.setDisabledFriendIds( ArraySelectedFriends );
			bindEvent();
		}
	});

	// When the user clicks OK, log a message
	callbackSubmit = function( selectedFriendIds ) {		
		var friend;
		friend =  ($.inArray(selectedFriendIds[0], ArraySelectedFriends) >=0 ) ?  null : TDFriendSelector.getFriendById(selectedFriendIds);				
		if ( friend != null ){			
			var obj = {
					method: 'feed',
					link: 'https://apps.facebook.com/samsung_be_cool/index/',
					picture: 'http://appss.misiva.com.ec/imagenes/samsung_be_cool/icon75.jpg',
					name: 'Be Cool Back to School',
					caption: 'Tu amigo te ha invitado para que armes tu lista cool de regreso a clases y participes para ganar productos Samsung GALAXY.',
					description: 'Dale clic y ent&eacute;rate como participar.',
					to : friend.id						
			};
			function callback(response) {				
				if ( response != undefined ){
					ArraySelectedFriends[ friend_selected ] = friend.id;					
					selector.setDisabledFriendIds(ArraySelectedFriends);					
					friend.posicion = friend_selected;
					updatePicture( friend );					
			    	$.ajax({
			    		type: "GET",
			    		url: BaseUrl + "samsung_be_cool/registrar_amigo",
			    		data: { 'data' :  friend, 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) },
			    		success: function(data) {			    				    		
			    			if( parseInt(data) >= 5 ){			    								
			    				$("#content_tab").animate({"top": "-=370px"}, 1500, function() {
				    				unbindEvent();
				    				var obj = {
				    						method: 'feed',
				    						link: 'https://apps.facebook.com/samsung_be_cool/index/',
				    						picture: 'http://appss.misiva.com.ec/imagenes/samsung_be_cool/icon75.jpg',
				    						name: 'Be Cool Back to School',
				    						caption: 'Arme mi lista cool de regreso a clases y estoy participando por productos Samsung GALAXY.',
				    						description: 'T&uacute; tambi&eacute;n puedes ganar ingresando aqu&iacute;.'				    									
				    				};
				    				FB.ui(obj, null);		
			    				});		
			    			}
			    		}
					});	
				}							
			}
			FB.ui(obj, callback);							
		}
	};
	
	updatePicture = function( friend ){		
		$("#amigo_"+friend.posicion ).html("<img src='//graph.facebook.com/" + friend.id + "/picture?type=square' width='50' height='50' alt='" + friend.name + "'  />");
	};
	
	callbackShowFriendSelector = function ( id ) {		
		friend_selected = id;
	};

	// Initialise the Friend Selector with options that will apply to all instances
	TDFriendSelector.init({backgroundSelector       : '.TDFriendSelectorBackgroud'});

	// Create some Friend Selector instances
	selector = TDFriendSelector.newInstance({		
		callbackSubmit           : callbackSubmit,
		maxSelection             : 1,
		friendsPerPage           : 5,
		autoDeselection          : true 
	});

	unbindEvent = function(){
		amigos = $("div.amigo");				
		$.each( amigos, function( key, value ) {				
			$('#'+value.id).unbind( 'click' ); 
		});
		
		$('#instrucciones_siguiente ').unbind( 'click' );

		$('#gen_nina').unbind( 'click' );

		$('#gen_nino').unbind( 'click' );
	};	
		
	bindEvent = function(){
		amigos = $("div.amigo");				
		$.each( amigos, function( key, value ) {				
			$('#'+value.id).bind( 'click', function (e) {				
				e.preventDefault();
				selector.showFriendSelector( callbackShowFriendSelector( ( key + 1 ) ) );	
			}); 
		});

		mases = $("div.mas");				
		$.each( mases, function( key, value ) {				
			$('#'+value.id).bind( 'click', function (e) {				
				e.preventDefault();
				selector.showFriendSelector( callbackShowFriendSelector( ( key + 1 ) ) );	
			}); 
		});
		
		$('#instrucciones_siguiente ').bind( 'click', function (e) {			
			e.preventDefault();			
			$("#content_tab").animate({"top": "-=370px"}, 1500, function() {
				//bindEvent();
			});							
		});

		$('#gen_nina').bind( 'click', function (e) {			
			e.preventDefault();
			$("#gen_nina").removeClass("nina").addClass("nina_selected");
			$("#gen_nino").removeClass("nino_selected").addClass("nino");
			$('#genero').val("female");					
		});

		$('#gen_nino').bind( 'click', function (e) {			
			e.preventDefault();
			$("#gen_nino").removeClass("nino").addClass("nino_selected");
			$("#gen_nina").removeClass("nina_selected").addClass("nina");
			$('#genero').val("male");					
		});
	};

	rules = [ { name: 'telefono', display: 'Telefono', rules: 'required|numeric|min_length[7]'},
	      	{ name: 'cedula', display: 'Cedula', rules: 'required|numeric|min_length[10]'},
            { name: 'ciudad', display: 'Ciudad', rules: 'required'},
            { name: 'completo', display: 'Completo', rules: 'required'},
            { name: 'genero', display: 'Genero', rules: 'required'} ];
	
	validatorRegistro = new FormValidator('samsung_be_cool_registro',rules, function(errors, event) {				
		for (var i = 0 , rulesLength = rules.length; i < rulesLength; i++) {		
	        $('#'+rules[i].name).css( { 'background-color': 'transparent', 'color': 'white' } );
	    }
	    if ( errors.length > 0 ) {        
	        for (var i = 0 , errorLength = errors.length; i < errorLength; i++) {
	            $('#'+errors[i].id).css( { 'color': 'red' } );
	        }
	    }
	    else{		    	    	
	    	$.ajax({					
	    		type: "POST",
	    		url: "<?=base_url()?>samsung_be_cool/registro_user",
	    		data: $('#samsung_be_cool_registro').serialize(),
	    		success: function( response ) {			    					
	    			$("#content_tab").animate({"top": "-=370px"}, 1500);		
	    		}
			});	
	   } 
	});

	validatorLista = new FormValidator('samsung_be_cool_lista',[], function(errors, event) {		
		if($( "input.input_check:checked" ).length >= 3){
			$.ajax({					
	    		type: "POST",
	    		url: "<?=base_url()?>samsung_be_cool/registrar_items",
	    		data: $('#samsung_be_cool_lista').serialize(),
	    		success: function( response ) {			    					
	    			$("#content_tab").animate({"top": "-=370px"}, 1500);		
	    		}
			});			
		}
	});	
	
});

</script>
