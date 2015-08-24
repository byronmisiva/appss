<div class="lista">
	
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
