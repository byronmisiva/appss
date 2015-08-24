<div id="content" style="position:absolute;width:809px;height:758px;left:0px;top:0px;overflow: hidden;margin: 0px; padding: 0px;">
	<img src="<?=$img_fondo?>?fbrefresh=123456" />
	<?php 
		if (isset($partido)){?>
		<div style="position:absolute;width:100%;height:100%;left:0px;top:0px;">
			<img src="<?=base_url().$partido->fondo?>" width="810"/>
			<form id="registro_datos" action="<?=base_url().'pronostico/registro'?>" method="POSTt" >
			<div style="position: absolute;left:180px;top:196px;" class="nombrEquipo"><?=$partido->local?></div>
			<div style="position: absolute;left:449px;top:196px;" class="nombrEquipo"><?=$partido->visitante?></div>
			
				<div style="position: absolute;left:252px;top:270px;width:150px;height:150px;font-size:35px;color:blue;" >
					<input type="text" id="resultado_local" name="resultado_local" maxlength="2" value="0" class="marcador" onclick="limpiar(this.id);" onblur="checkData(this.id);" onkeyup="verificarDato(this.id);"/>
				</div>
				
				<div style="position: absolute;left:519px;top:270px;width:150px;height:150px;font-size:35px;color:blue;" >
					<input type="text" id="resultado_visitante" name="resultado_visitante" maxlength="2" value="0" class="marcador"  onclick="limpiar(this.id);" onblur="checkData(this.id);" onkeyup="verificarDato(this.id);" />
					<input type="hidden" id="id_user" name="id_user" value="<?=$user->id?>" />
					<input type="hidden" id="id_partido" name="id_partido" value="<?=$partido->id?>" />
				</div>
				<div style="position:absolute;left:39%;top:52%;cursor:pointer;width:200px;height:120px;" onclick="enviarForma('registro_datos');" onmouseout="$('#des').hide();$('#act').show();" onmouseover="$('#des').show();$('#act').hide();">
					<div id='act' style="float:left;cursor:pointer;" >
						<img src="<?=$img_path.'botsin.png'?>" />
					</div>
					<div id='des'style="float:left;display:none;cursor:pointer;"  >
						<img src="<?=$img_path.'botcon.png'?>" />
					</div>	
			</div>
			</form>	
		</div>
	
		<script type='text/javascript'>
			function verificarDato(id) {		
				 if (isNaN($('#'+id).val()))
				 	$('#'+id).val("0");
			}
		
		
			function limpiar(id){		
				$("#"+id).val("");	
			}
			
			function checkData(id){
				if( $("#"+id).val()=="")
					$("#"+id).val("0");
			}
		
			function enviarForma(forma,url_envio){			
				var check=0;				
				var error_color='#A2A3A4';
				if( $("#res_local").val() == "" ){
		        	$("#res_local").css('background',error_color);
		            check++;
		          return false;
		       }		
				 if( $("#res_visitante").val() == "" ){
			        	$("#res_visitante").css('background',error_color);
			            check++;
			          return false;
			       }
			        
				if (check==0){			
					$.ajax({  
						  type: "POST",  
						  url: "<?=base_url().'pronostico/registro'?>",  
						  data: $('#'+forma).serialize(),
						  success: function( response ) {			    					
					    		$('#content' ).load( "<?=base_url().'pronostico/gracias/'.$user->id?>", { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) }  );		
				    		} 
						}); 
					return false;
					}	
				}
		</script>
		<?php }?>
</div>