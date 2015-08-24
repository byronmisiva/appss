<div class="registro">

	<form id ="register" method="post" role="form" class="form-horizontal formulario" action="<?php echo base_url('samsung_santa/register')?>">
		<div class="form-group">		
			<div class="form-control" style="margin-top: 42px;">
				<input type="text" id="nombre"	name="nombre" placeholder="Nombre" value="<?php echo $data['user']->name;?>">				
			</div>
		</div>
		<div class="form-group">			
			<div class="form-control" style="margin-top: 27px;">			
				<input type="text"  id="ciudad" name="ciudad" placeholder="Ciudad" value="<?php echo (isset( $data['user']->location )) ? $data['user']->location->name : '';?>">
			</div>
		</div>
		<div class="form-group" style="margin-top: 28px;">			
			<div class="form-control" >
				<input type="text" id="mail" name="mail" placeholder="E-mail" value="<?php echo $data['user']->email?>">
			</div>
		</div>
		<div class="form-group" style="margin-top: 27px;">			
			<div class="form-control">
				<input type="text" id="telefono" name="telefono" placeholder="Teléfono" value="<?php echo $data['user']->telefono?>">
			</div>
		</div>
		<div class="form-group" style="margin-top: 25px;">			
			<div class="form-control">
				<input type="text" id="cedula" name="cedula" placeholder="Cédula" value="<?php echo $data['user']->cedula?>">
			</div>
		</div>	
		<input type="hidden" name="user" id="user" value='<?php echo json_encode($data['user'])?>'>
		<input type="hidden" name="fb_page" id="fb_page" value='<?php echo json_encode($data['fb_page'])?>'>
		<input id="submit" name="submit" type="submit" value="" class="btn-sumbit" style="margin-left: 150px; display: inline-block; margin-top: 32px;">
	</form>
	<?php foreach ( $data['errors'] as $key => $value ){?>
		<?php if( $value ){?>
			<script type="text/javascript">
				Tab.showErrors('<?php echo $key;?>');
			</script>		
		<?php }?>		
	<?php }?>
	<script type="text/javascript">
		Tab.register();
	</script>

</div>