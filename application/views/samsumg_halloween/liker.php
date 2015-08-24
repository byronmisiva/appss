<div class="lista">
	<div class="item-premios">
		<div>
			<?php foreach ( $data['premios'] as $premio ){?>
				<a class="premio <?php echo  ( $premio->id == 1 ) ? 'active' : '';?>" href="<?php echo base_url('samsung_santa/accesorios/'.$premio->id)?>" >
					<img alt="" src="<?php echo $data['img_path'].$premio->image;?>">
				</a>
			<?php }?>
		</div>
		<a id="enviar" class="btn-enviar"></a>
	</div>
</div>
<script type="text/javascript">
	Tab.setEventPremios();
	$('#enviar').click( function(event){
		event.preventDefault();			
		$.ajax({		
			type : 'get',
			url : $('.active').attr('href'),			
			success: function( response ) {			    					
				$("#content").html( response );						
			}
		});
	});
</script>
