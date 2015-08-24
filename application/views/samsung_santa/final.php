<div class="final"></div>
<script type="text/javascript">	
FB.api('/me/feed', 'post', 
		{ 
		message : LibraryFacebook.getUserFbData().name + '<?php echo SANTA_MESSAGE?>' + '<?php echo ( $data['premio'] == 'GALAXY tab 2 7.0' ) ? 'a ' : ' '?>' + '<?php echo $data['premio']?>', 
		link : '<?php echo SANTA_LINK?>', 
        picture : '<?php echo SANTA_PICTURE?>',
		name : '<?php echo SANTA_NAME?>', 
		description : '<?php echo str_replace ( '%', $data['premio'], SANTA_DESCRIPTION)?>'},
		function(response) {
		 
		});
</script>