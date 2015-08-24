<table>
<tr>
	<td>id</td>
	<td>Completos</td>
	<td>Imagen</td>	
</tr>
<?php
	foreach( $registro  as $row){
		echo "<tr>
				<td>".$row->id_user."</td>
				<td>".$row->completo."</td>
				<td><img src='".base_url($row->imagen)."' width='200' /></td>				
			";
	}
?>

</table>
