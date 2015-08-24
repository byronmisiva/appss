<script type="text/javascript" src="<?=base_url()?>js/general/validate.js"></script>
<?php
$alfabeto=array('0'=>'A','1'=>'B','2'=>'C','3'=>'D','4'=>'E','5'=>'F','6'=>'G','7'=>'H','8'=>'I','9'=>'J','10'=>'K',
				'11'=>'L','12'=>'M','13'=>'N','14'=>"Ñ",'15'=>'O','16'=>'P','17'=>'Q','18'=>'R','19'=>'S','20'=>'T',
				'21'=>'U','22'=>'V','23'=>'W','24'=>'X','25'=>'Y','26'=>'Z','27'=>'1','28'=>'2','29'=>'3','30'=>'4',
				'31'=>'5','32'=>'6','33'=>'7','34'=>'8','35'=>'9','36'=>'0');
?>
<div id="juego" >
<?php $semanas=array("44"=>" 1","45"=>" 2","46"=>" 3","47"=>" 4");?>
   	<img src="<?=$juego?>" />
   <div id="contenedor-elementos">
   <div class="lineas"></div>
   			<div id="semana">Semana : &nbsp; <?=$semanas[$semana]?></div>	
	   	<div id="ahorcado" >	   		
	   		<div id="contenedor-piezas">
		   		<div class="pieza1"></div>
		   		<div class="pieza2"></div>
		   		<div class="pieza3"></div>
		   		<div class="pieza4"></div>
		   		<div class="pieza5"></div>
		   		<!-- <div class="pieza6"></div> -->
		   	</div>	   	
	   	</div>	   	
	  
	  <!-- BLOQUE FRASE -->	
	   	<div id="frase">
	   		<div class="titulo-frase">COMPLETA LA FRASE DE LA SEMANA</div>
		   	<div class="texto-frase">		   	
			   	<?php			  
			   //	$arr1 = explode(" ",$nuevaFrase);
			   	$total=count($nuevaFrase);	
			   	$letra="";		   		   	
			   	for($x=0;$x<$total;$x++){			   		
			   		if ($nuevaFrase[$x]==" "){			   			
			   			$clase="campo";
			   		}else 
			   			$clase="campoBorder";
			   		
			   		if ($nuevaFrase[$x]=="/")
			   			$letra="";
			   		else 
			   			$letra=$nuevaFrase[$x];
			   		echo "<input type='text' value='".$letra."' class='".$clase."' readonly='readonly' />";
				}?>   	
		   	</div>
		  </div>
	   	<!-- BOTONES DE DESCRIFRA FRASE E INVITAR AMIGO -->
	   	<div id="botones">	   		
	   		<div id="ingreso-frase"  onclick="ingresoFrase();"></div>
	   		<div id="compartir"  onclick="compartir('<?=$user->id?>')"></div>   	
	   	</div>
	   	<!-- INGRESO DE LETRA DEL DIA -->
	   	<div id="formulario">
	   		<div class="titulo-formulario">INGRESA UNA LETRA</div>   
	   		<form id="formaLetra" action="">
	   			<input type="text" id="letra" name="letra" value="" class="letra" maxlength="1" onKeyup="$('#letra').val($('#letra').val().toUpperCase());"/>
	   			<input type="hidden" id="id_user" name="id_user" value="<?=$user->id?>" />
	   			<input type="hidden" id="semana" name="semana" value="<?=$semana?>" />
	   			<input type="submit" id="enviar" value=""  />
	   		</form>	   			
	   	</div>
	  
   	</div>
   	 	<!-- LETRAS -->
	   	<div id="letras" >
	   		<div id="contTachado">
		   		<div class="alfabeto">
				   	<?php 	
				   	$total2=count($alfabeto);
				   	for($x=0;$x<$total2;$x++){
				   		$clase="alfa";
				   		echo "<div class='".$clase."' >".$alfabeto[$x]."</div>";
				   	}?>
			   	</div> 		
		   		<div class="alfabeto" >
				   	<?php 	
				   	$total2=count($alfabeto);		   	
				   	$totalAlfa=count($ingresada);
				   	for($x=0;$x<$total2;$x++){
				   		$clase="";
				   		for($y=0;$y<$totalAlfa;){			   			
				   			if($ingresada[$y]==$alfabeto[$x]){				   				
				   				$clase="alfaTachado";
				   				$y=$totalAlfa; 
				   			}else
				   				$y++;	 				
				   		}		
				   		if($clase=="")
				   			$clase="alfa2";				   		
				   				
				   		echo "<div class='".$clase."' ></div>";				   		
				   	}?>
			   	</div>
		   	</div> 	
	   	</div>
   	
   	<!-- BOTON INSTRUCCIONES -->
   	<div class="btnAyuda" onclick="$('#ayuda').show();$('#letras').hide();" ></div>
   	
   	<div class="ganador1"  >
   		La frase de la semana fue descifrada por <?=$user->completo?>
   	</div>
   	
   	<div class="ganador2"  >
   		La frase de la semana ya fue descifrada por otro usuario
   	</div>
   	  	
   	<!-- MENSAJES DE FALLASTE, GANASTE 1, GANASTE 2 -->
	<div id="contenedorMensaje"  >
		<div class="sombra"></div>	   	
	   	<div id="mensaje-estado" >	   		
	   		<div class="fallaste" onclick="$('#contenedorMensaje').hide();" >
	   			<div class="cerrar-pop3" onclick="$('#contenedorMensaje').hide();"></div>
	   		</div>
	   		
	   		<div class="fallaste2" onclick="$('#contenedorMensaje').hide();" >
	   			<div class="cerrar-pop3" onclick="$('#contenedorMensaje').hide();"></div>
	   		</div>	   		
	   		
	   		<div class="correcto1" >
	   			<div class="cerrar-pop1" onclick="$('#contenedorMensaje').hide();"></div>	   			 
	   			 <div class="btnContinuar2" onclick="$('#contenedorMensaje').hide();"></div>
	   		</div>
	   		<div class="correcto2"  >
	   			<div class="cerrar-pop1" onclick="$('#contenedorMensaje').hide();"></div>
	   			<div class="btnContinuar" onclick="$('#contenedorMensaje').hide();"></div>
	   		</div>
	   			   		   	
	   	</div>
   	</div>
</div>
<!-- INSTRUCIONES -->
	<div id="ayuda" onclick="$('#ayuda').hide();$('#letras').show();" >
		<div class="sombra"></div>	
		<div class="informacion" >
			<div class="texto-ayuda" >
				<div class="btnJugar"></div>
			</div>
			<div class="personaje" ></div>
			<div class="cerrar-pop" ></div>
		</div>
	</div>
<!-- DECIFRAR LA FRASE -->
	<div class="contenedor-pop">
		<div class="sombra"></div>
		<div class="pop" >
			<div class="tituloDescifrar" >
				<div style="line-height:25px;">
					¿Descifraste la frase?, escríbe y sálvate de ser ahorcado. Podrías ser el ganador de la semana.
				</div>
				<div style="margin-top:15px;">
					<img src="<?=base_url()?>imagenes/ahorcado/linea2.png" />
				</div>	
			</div>
		<div class="cerrar" onclick="$('.contenedor-pop').hide();" ></div>		
			<div class="contenedorFrase">		
				<form id="formaDecifrar">
					<div id="descifrar">
					<?php			
					   	$total=count($nuevaFrase);			   		   	
			   			for($x=0;$x<$total;$x++){			   		
					   		if ($nuevaFrase[$x]==" "){
					   			$clase="campo1";
					   			$read2="onclick='limpiar2(this.id);' onkeyup='pasaSiguiente(\"letra-\",".$total.",event,".$x.");'";					   			
					   		}else {
					   			$clase="campoBorder1";
					   			$read2="readonly='readonly'";
					   		}						   		
					   		
					   		if ($nuevaFrase[$x]=="/" ){
					   			$letra="-";					   			
					   			$read="disabled";
					   			$estilo="color:#2F2F2F;";
					   		}else{
					   			$letra=$nuevaFrase[$x];
					   			$read="";				
					   			$estilo="color:#ffffff;";
					   		}						   		
					   		echo "<input type='text' value='".$letra."' id='letra-".$x."' name='letra-".$x."' class='".$clase."'  
					   					maxlength='1'  ".$read." style='".$estilo."' ".$read2." />";
					   	}?>
					   	</div>				  			  
				 </form> 
		   </div>
			   <div id="envioFrase" onclick="enviarDescripcion('formaDecifrar');"></div>
			   <div class="textoFrase2">Si la frase no es la correcta te ahorcarás automáticamente por esta semana.</div>  
		</div>
	</div>
	<!-- RESULTADO DE INVITAR AMIGOS -->
	<div id="resultadoAmigo"  onclick="$('#resultadoAmigo').hide();if(bloqueo>=3){$('#resultadoVida').show();$('.contenedorVida').show();bloquear(0,bloqueo);}">
		<div class="sombra"></div>	
		<div class="contenedorMensaje" >
			<div class="textoAmigo" style="background-image: url(<?=base_url()?>imagenes/ahorcado/globoinvitaste.png);">
				<div id="letraBono"></div>
				<div id="botonIngresar" style="background-image: url(<?=base_url()?>imagenes/ahorcado/buttoningresarletra.png);"></div>
			</div>
			<div class="personajeAmigo" style="background-image: url(<?=base_url()?>imagenes/ahorcado/chaton.png);"></div>
		</div>
	</div>
	<!-- RESULTADO DE LETRA -->
	<div id="resultadoLetra"   >
		<div class="sombra"></div>	
			<div class="contenedorResultado" style="display:none;">
			<div class="cerrar-pop" onclick="$('#resultadoLetra').hide();$('.contenedorResultado').hide();if(bloqueo>=3){$('#resultadoVida').show();$('.contenedorVida').show();bloquear(0,bloqueo);}"></div>
				<div class="botonIngresarLetra" onclick="$('#resultadoLetra').hide();if(bloqueo>=3){$('#resultadoVida').show();$('.contenedorVida').show();bloquear(0,bloqueo);}">
				</div>
				<div class="botonInvitar" onclick="$('#resultadoLetra').hide();compartir('<?=$user->id?>');if(bloqueo>=3){$('#resultadoVida').show();$('.contenedorVida').show();bloquear(0,bloqueo);}">
				</div>
				<div class="botonDescifrar" onclick="$('#resultadoLetra').hide();ingresoFrase();if(bloqueo>=3){$('#resultadoVida').show();$('.contenedorVida').show();bloquear(0,bloqueo);}">
				</div>
				<div class="botonSalir" onclick="$('#resultadoLetra').hide();if(bloqueo>=3){$('#resultadoVida').show();$('.contenedorVida').show();bloquear(0,bloqueo);}"></div>		
			</div>
			
			<div class="contenedorFallaste"  style="display:none;">
			<div class="cerrar-pop" onclick="$('#resultadoLetra').hide();$('.contenedorResultado').hide();if(bloqueo>=3){$('#resultadoVida').show();$('.contenedorVida').show();bloquear(0,bloqueo);}"></div>
				<div class="mensajeLosiento"></div>
				<div class="ahorcado2">
					<div class="contenedor-piezas2">
				   		<div class="pieza1"></div>
				   		<div class="pieza2"></div>
				   		<div class="pieza3"></div>
				   		<div class="pieza4"></div>
				   		<div class="pieza5"></div>
				   		<!-- <div class="pieza6"></div> -->
				   	</div>
				</div>	
				<div class="textoVida">Te quedan <span class="vida"> </span> oportunidades</div>
				
				<div style="position: inherit;left:150px;">
					<div class="botonIngresarLetra" onclick="$('#resultadoLetra').hide();if(bloqueo>=3){$('#resultadoVida').show();$('.contenedorVida').show();bloquear(0,bloqueo);}">
					</div>
					<div class="botonInvitar" onclick="$('#resultadoLetra').hide();compartir('<?=$user->id?>');if(bloqueo>=3){$('#resultadoVida').show();$('.contenedorVida').show();bloquear(0,bloqueo);}">
					</div>
					<div class="botonDescifrar" onclick="$('#resultadoLetra').hide();ingresoFrase();if(bloqueo>=3){$('#resultadoVida').show();$('.contenedorVida').show();bloquear(0,bloqueo);}"></div>
					<div class="botonSalir" onclick="$('#resultadoLetra').hide();if(bloqueo>=3){$('#resultadoVida').show();$('.contenedorVida').show();bloquear(0,bloqueo);}"></div>
				</div>		
			</div>
	</div>
	
	<!-- MENSAJE BLOQUEAR -->
	<div id="resultadoVida"   >
		<div class="sombra"></div>
		<div class="contenedorVida"  style="display:none;">
			<div class="cerrar-pop" onclick="$('#resultadoVida').hide();$('.contenedorVida').hide();"></div>								
				<div style="position: inherit;left:0">
					<div class="botonDescifrar" onclick="$('#resultadoVida').hide();"></div>
				</div>		
			</div>
	</div>
	
<script type="text/javascript">
	var rules = [ 
				   { name: 'letra', display: 'letra', rules: 'required'},
	               { name: 'id_user', display: 'id_user', rules: 'required'},
	               { name: 'semana', display: 'semana', rules: 'required'}
	            ];   
	var validator = new FormValidator('formaLetra',rules, function(errors, event) {				
		 if (errors.length > 0) {			
		        var errorString = '';		        
		        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
		        	//console.log(errors[i].id);		        
		        }		        
		        
		    }else{		
		    	$('#enviar').hide();
		    	var id=$('#id_user').val();	
		    	$.ajax({  
					  type: "POST",  
					  url:"<?=base_url().'samsung_ahorcado/insertarLetra/'?>",
					  data: $('#formaLetra').serialize(),
					  success: function( response ) {	
						  $('#letra').val("");					  
						  $('#enviar').show();						  
						  var n=response.split("-");
						  var vida_ingresada=parseInt(n[2]);						  			  					
						  if (n[0]=="E"){
							  estado(n[1]);
							  error(n[1],id,n[2]);
						  }
						  if(n[0]=="A")
							  correcto(n[1],n[2]);
						  if(n[0]=="B")
							  bloquear(n[1],n[2]);	   						  
					  }
					});     
			 }  
	});
	
	bloquear('<?=$user->id?>',<?=$vida?>);
	
	var ahorcado=parseInt(<?=$ahorcado?>);
	if(ahorcado>=5){
		 $('#enviar').hide();
		 $('#ingreso-frase').hide();
		 $("#contenedorMensaje").show();
		 $(".fallaste").show();		 
		 $(".contenedor-elementos").hide();	
		 $("#letra").hide();
		for (var x=1;x<=total;x++)
			$(".pieza"+x).css("display","block");
	}
			
	if (ahorcado>0)
		estado(ahorcado);

<?php 
	$posicion=(int)$posicion;	
	if ($posicion==1 && $lleno=="1")
		echo "$('.ganador1').show();";
	
	if ($posicion > 1 && $lleno=="1")
		echo "$('.ganador2').show();";
?>
	
</script>
