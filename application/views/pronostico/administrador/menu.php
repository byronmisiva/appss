<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?=$titulo?></title>
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/partido/privado.css" />
	
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/partido/modalbox_admin.css" />
	<link type="text/css" rel="stylesheet" href="<?=base_url();?>css/partido/lightbox.css" media="screen" />
		
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.3/scriptaculous.js"></script>
	
	<script type="text/javascript" src="<?=base_url()?>js/partido/privado.js"></script>
	<script type="text/javascript" src="<?=base_url()?>js/partido/modalbox.js"></script>
	<script type="text/javascript" src="<?=base_url();?>js/partido/lightbox.js"></script>
		
	</head>
	<body>
		<center>
			<div id='dmain' style="margin-top:50px;">
				<center>
					<table id='tmain'  cellpadding=0 cellspacing=0>
						<tr>
							<td valign=top>
								<center>
								<div style="position:relative;width:100%;height:550px;top:5px;">
									<div id="admin" style="width:100%;height:350px;text-align:left;margin-left:5px;"></div>			
								</div>
								</center>
							</td>
						</tr>
						<tr>
							<td class="admin" valign=top style="padding:20px;">
								
							</td>
						</tr>						
					</table>
					<script>
 						open_vista('<?=base_url().$controlador."/menu"?>','admin');
					</script>
				</center>
			</div>
		</center>
	</body>
	
</html>