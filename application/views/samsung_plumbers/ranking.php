<style>
.ranking{
	background-image: url('<?=$ranking?>');
    background-repeat: no-repeat;
    color: #0F4396;
    font-family: Helvetica;
    height: 800px;
    left: 136px;
    position: absolute;
    top: 190px;
    width: 738px;
    }
    
.btn-volver{
	background-image: url('<?=$img_path?>bot_volverajugar_ON.png?frefresh=65469898546');
 	background-repeat: no-repeat;
    cursor: pointer;
    height: 60px;
    left: 480px;
    position: absolute;
      top: 455px;
    width: 198px;
}    

.mi-score{
    font-size: 30px;
    left: 440px;
    position: absolute;
    top: 30px;
}

.contenedor{
	olor: #FF0000;
    height: 230px;
    left: 70px;
    position: absolute;
    top: 80px;
    width: 440px;
}

.punto{
	font-family: helvetica;
    font-size: 20px;
    left: 80%;
    position: absolute;
}

.registro{	
    height: 28px;
    left: 0;
    position: relative;
    top: 0;
    width: 440px;
}

.nombre{
	height: 30px;
    left: 80px;
    line-height: 30px;
    padding-top: 0;
    position: absolute;
    width: auto;
   }

</style>

<div class="ranking">
	<div class="mi-score" ><?=$mi_score?></div>
	<div  class="contenedor" >
		<?foreach ( $topfive as  $item ){?>
			<div  class="registro">
				<div style="position: absolute; top: 1px;left: 35px">
					<img alt="" src="https://graph.facebook.com/<?=$item->fbid?>/picture?width=35&height=30 ">
				</div>
				<div class="nombre" >
					<?=$item->nombre?>
				</div>
				<div class="punto">
					<?=$item->puntaje?>
				</div>
			</div>		
		<?}?>
	</div>	
</div>
<div id="invitar" class="btn-volver"></div>
<script type="text/javascript" charset="utf-8">
	$('#invitar').bind( 'click', function( event ) {		
		if( parseInt( '<?=$numero?>' ) < 5 ){
			$.ajax({                                    
                type: "POST",  
                url: "<?=base_url()?>samsung_plumbers/amigos_bloqueados",
                dataType:'json',
                data: { "user" : JSON.stringify( LibraryFacebook.getUserFbData() ) },
                success: function( responseId ) {
                	var obj = {
        					method: 'apprequests',
        					title: 'Gana un Samsung LED de 32”',
        			    	message: '¡Aprovecha el primer BLUE FRIDAY de Samsung! Tú puedes ser el ganador de un Samsung LED de 32” con Modo Fútbol. Encuentra las palabras en la sopa de letras y podrás ganar.',
        			    	exclude_ids : responseId
        				    };
        	
        		    function callback( responseFb ) {			    
        		    	if (responseFb != null ){		  	    	
        		    		$.ajax({                                    
                                type: "POST",  
                                url: "<?=base_url()?>samsung_plumbers/registrarInvitacion",
                                dataType:'json',
                                data: { "data" : JSON.stringify( responseFb.to ), "user" : JSON.stringify( LibraryFacebook.getUserFbData() ) },
                                success: function( responseText ) {
                                    if( parseInt ( responseText ) >= 5){
                                		$( '#' + $content ).load( '<?=base_url()?>samsung_plumbers/liker', { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) } );
                                    }
                                }
        					});	
        		    	}							
        		  	}
        			FB.ui(obj, callback);
                }
			});	
		}   
		else{			
			$( '#content' ).load( '<?=base_url()?>samsung_plumbers/liker', { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) } );
		}     
	});
</script>
