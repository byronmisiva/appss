
<div class="galeria">
<?php
 if (is_array($registro)){

	foreach ($registro as $row){?>
		<a title="" href="<?php echo base_url().$row->imagen; ?>" class="img-galeria" >
		<img src="<?php echo base_url().$row->thumb?>" width="100%" height="100%"/>
		</a>	
	<?php }
}	
	?>			
</div>	
	

<script>
var pinicio=<?php echo $inicio?>;
var pfin=<?php echo $fin?>;;
	
$(document).ready(function() {
	$(".img-galeria").colorbox({rel:'img-galeria'});
	/*$(".galeria").carouFredSel({		
	    items       : 12,	    
	    direction   : "left",
	    auto		: false,
	    scroll      : {
	        duration        : 1000,
	        fx: "crossfade",
	        timeoutDuration : 1500
	    }
	});
	
	$("#anterior").click(function() {
		$(".galeriaa").trigger("prev", 1);		
		});
	
	$("#siguiente").click(function() {		 
		$(".galeria").trigger("next", 1);		
	});*/
});

function anterior(){	
	$('.contenedor-galeria').load("<?php echo base_url()?>"+"samsung_unete_galeria/jsGaleria/"+pinicio+"/"+pfin+"/"+0);
	return false;
};

function siguiente(){	
	$('.contenedor-galeria').load("<?php echo base_url()?>"+"samsung_unete_galeria/jsGaleria/"+pinicio+"/"+pfin+"/"+1);
	return false;
};
</script>
			