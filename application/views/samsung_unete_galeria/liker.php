<div class="fondoIntro" >
	<div class="btn-intro"></div>
</div>
<script type="text/javascript">	
	$('.btn-intro').click(function(){		
		$('#content').load(
				accionPath + "samsung_unete_galeria/ingresoActividad", 
				{'user': JSON.stringify(LibraryFacebook.getUserFbData()), 
				 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) 
		 });
	});
</script>


