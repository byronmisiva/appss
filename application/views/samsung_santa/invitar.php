<div class="invitar">
	<div class="item-premios">
		<span id="num-inviatdos">
			<?php echo $data['num']?>
		</span>
		<img class="premio-selected-<?php echo $data['premio']->id?>" alt="<?php echo $data['premio']->nombre?>" src="<?php echo $data['img_path'].$data['premio']->invitar?>">
		<img class="accesorio-selected-<?php echo $data['accesorio']->id?>" alt="<?php echo $data['premio']->nombre?>" src="<?php echo $data['img_path'].$data['accesorio']->invitar?>">		
		 <button id="invitar" class="btn-invitar"></button>		 
	 </div>	
</div>
<script type="text/javascript">
	$('#invitar').click( function(event){
	    $.ajax({		
			type : "post",
			url: '<?php echo base_url('samsung_santa/init_friend')?>',
			data : { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ), 'register_id' : '<?php echo $data['register_id']?>' },
			success: function( response ) {				
					var obj = {
						method: 'apprequests',
						title: '<?php echo SANTA_TITLE?>',
			    	    message: '<?php echo SANTA_MESSAGE?>',
			    	    exclude_ids : response
					};	
				    function callback(fbResponse) {	
					    if( fbResponse != null ){						    				    
					    	$.ajax({		
								type : "post",
								url: '<?php echo base_url('samsung_santa/insert_amigo')?>',
								data : { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ), 'to' : JSON.stringify(fbResponse.to), 'register_id' : '<?php echo $data['register_id']?>' },
								success: function( responseNum ) {
									if( parseInt(responseNum) >= 5  ){
										$( '#content' ).load( "<?php echo base_url('samsung_santa/finalApp')?>", { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ), 'register_id' : '<?php echo $data['register_id']?>', 'premio' : '<?php echo $data['premio']->nombre?>' });
									}
									else{
										$('#num-inviatdos').html( 5 - responseNum);	
									}							
								}
							});	
					    }						
				  	}
				    FB.ui(obj, callback);
			}
		});	
	});
</script>