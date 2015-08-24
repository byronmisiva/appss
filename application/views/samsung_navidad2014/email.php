<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	</head>	
	<body style="background-color:#ffffff;width:620px;">
		<div style="position:absolute;left:0px;top:0px;width:820px;">			
			<table cellpadding="5" cellspacing="5"  style="font-family:Arial; font-size:15px;text-align:left;color:#000000;">
				<tr>
					<td colsan="2">Datos Contacto | Piaggio Ecuador</td>
				</tr>
					<tr>
						<td style="font-weight:bold;">Nombres :</td>
						<td><?=$informacion->completo?></td>
					</tr>								
					<tr>
						<td style="font-weight:bold;">Tel&eacute;fono:</td>
						<td><?=$informacion->telefono?></td>						
					</tr>
					<tr>
						<td style="font-weight:bold;">E-mail:</td>
						<td><?=$informacion->mail?></td>
					</tr>
					<tr>
						<td style="font-weight:bold;">Ciudad:</td>
						<td><?=$informacion->ciudad?></td>
					</tr>
					<tr>
						<td style="font-weight:bold;" valign="top">Fecha:</td>
						<td><?=$informacion->nacimiento?></td>				
					</tr>
				</table> 						
		</div>
	</body>
</html>

