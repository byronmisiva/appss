	<div class="fondoCuadrado">
	  		<div class="texto-mensaje">Sube tu foto</div>
  </div>
 <div class="btn-aceptar"></div>	  	
	<iframe class="recuador-foto" 
			src ="<?php echo base_url().'samsung_unete_galeria/imagenPieza'?>" 
			scrolling="no" frameborder="0"  
			height="311px" marginheight="0" marginwidth="0" >
	</iframe>	  	
	  		
  <form id="forma-imagen">		
   	<input type="hidden" id="archivo" name="archivo" value="" />
   	<input type="hidden" id="id_user" name="id_user" value="<?php echo $id_user?>" />		
  </form>		