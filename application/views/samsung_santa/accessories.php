<?php if( $data['accesorios'][0]->premio_id == 1 ){?>
	<div class="accesorios-<?php echo $data['accesorios'][0]->premio_id?>">
		<div class="item-accesorios">
			<div class="premio-main">
				<img alt="" src="<?php echo $data['img_path'].$data['accesorios'][0]->image_principal?>">
			</div>	
			<?php $num = 0;?>	
			<?php foreach ( $data['accesorios'] as $accesorio ){?>
				<a class="accesorio-<?php echo $accesorio->id?> <?php echo ( $num == 0 ) ? 'active' : ''?> accessories" href="<?php echo base_url('samsung_santa/register_app/'.$data['accesorios'][0]->premio_id.'/'.$accesorio->id)?>" >
					<img alt="<?php echo $accesorio->nombre?>" src="<?php echo $data['img_path'].$accesorio->image;?>">
				</a>
				<?php $num++;?>
			<?php }?>		
			<a id="enviar" class="accesorio-enviar"></a>
		</div>
	</div>
<?php }
elseif ( $data['accesorios'][0]->premio_id == 2 ){?>
	<div class="accesorios-<?php echo $data['accesorios'][0]->premio_id?>">
		<div class="item-accesorios">
			<div class="premio-main">
				<img alt="" src="<?php echo $data['img_path'].$data['accesorios'][0]->image_principal?>">
			</div>
			<?php $num = 0;?>			
			<?php foreach ( $data['accesorios'] as $accesorio ){?>
				<a class="accesorio-<?php echo $accesorio->id?> <?php echo ( $num == 0 ) ? 'active-bottom' : ''?> accessories" href="<?php echo base_url('samsung_santa/register_app/'.$data['accesorios'][0]->premio_id.'/'.$accesorio->id)?>" >
					<img alt="<?php echo $accesorio->nombre?>" src="<?php echo $data['img_path'].$accesorio->image;?>">
				</a>
				<?php $num++;?>
			<?php }?>		
			<a id="enviar" class="accesorio-enviar"></a>
		</div>
	</div>	
<?php }
elseif ( $data['accesorios'][0]->premio_id == 3 ){?>
	<div class="accesorios-<?php echo $data['accesorios'][0]->premio_id?>">
		<div class="item-accesorios">
			<div class="premio-main">
				<img alt="" src="<?php echo $data['img_path'].$data['accesorios'][0]->image_principal?>">
			</div>		
			<?php $num = 0;?>	
			<?php foreach ( $data['accesorios'] as $accesorio ){?>
				<a class="accesorio-<?php echo $accesorio->id?> <?php echo ( $num == 0 ) ? 'active' : ''?> accessories" href="<?php echo base_url('samsung_santa/register_app/'.$data['accesorios'][0]->premio_id.'/'.$accesorio->id)?>" >
					<img alt="<?php echo $accesorio->nombre?>" src="<?php echo $data['img_path'].$accesorio->image;?>">
				</a>
				<?php $num++;?>
			<?php }?>		
			<a id="enviar" class="accesorio-enviar"></a>
		</div>
	</div>	
<?php }?>
<?php $class = ( $data['accesorios'][0]->premio_id == 1 || $data['accesorios'][0]->premio_id == 3 ) ? 'active' : 'active-bottom' ?>
<script type="text/javascript">
Tab.setEventAccessories('<?php echo $class?>');
$('#enviar').click( function(event){
	event.preventDefault();			
	$.ajax({		
		type : 'post',
		data : { 'user' : JSON.stringify( LibraryFacebook.getUserFbData() ), 'fb_page' : JSON.stringify( LibraryFacebook.getSignedRequest() ) },
		url : $('.<?php echo $class?>').attr('href'),			
		success: function( response ) {			    					
			$("#content").html( response );						
		}
	});
});
	
</script>