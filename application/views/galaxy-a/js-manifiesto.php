	<?php 				
				foreach($data["manifiesto"] as $row){
					if( $row->id_user != "8"){?>
						<div class="posteo usuario">
							<?php echo '" '.$row->mensaje.'" <br> <span class="nom-usuario">'. $row->completo.'<span>'?>
						</div>
				<?php }else{?>
					<div class="posteo">
							<?php echo $row->mensaje?>
					</div>
				<?php }
				}
				?>
	
	<script>
		$(".espera").hide();
	</script>

