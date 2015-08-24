<!DOCTYPE html>
<html>
<head>
	<title><?php echo $app_name;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<link href="<?php echo base_url('css/samsung_santa.css?refresh='.rand(10, 1000))?>" rel="stylesheet">	
</head>
<body>
	<div id="fb-root"></div>
	<div id="content" class="container"></div>
	<div id="condiciones">
		<strong>T&eacute;rminos y Condiciones:</strong><br/> 
		<?=$condiciones;?>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url('js/samsung_santa.js?refresh=123456')?>"></script>
	<script type="text/javascript" src="<?=base_url('js/general/library_facebook.js?refresh=123456789101112131415')?>"></script>
	<script type="text/javascript" charset="utf-8">
		window.fbAsyncInit = function() {	
			FB.init({
				appId : '<?=$appId?>',
				status : true,
				cookie : false,
				xfbml : false,
				oauth : true
			});
			FB.Canvas.setSize({ width: 810, height: 810 });	

			$(document).ready( function() {	
				var tabLibrary;
			
				LibraryFacebook.init({
					appId					 : '<?=$appId?>',
					signedRequest			 : '<?=$signedRequest?>',
					base                     : '<?=$base?>',
					controler			     : '<?=$controler?>',
					namespace   	   	     : '<?=$namespace?>',
					permission				 : '<?=$permission?>',
					debug                    : '<?=$debug?>',
					tabLiker                 : '<?=$tabLiker?>',
					tabNoLiker               : '<?=$tabNoLiker?>',
					doesNtCare				 : '<?=$doesNtCare?>',
					content					 : '<?=$content?>',	
					isPageTab				 : '<?=$isPageTab?>',
					data     				 : '<?=$data?>'			
				});					
				tabLibrary = LibraryFacebook.newInstance();
			});
		};

		(function() {
			var e = document.createElement('script');
			e.async = true;
			e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
			document.getElementById('fb-root').appendChild(e);
		}());
	</script>
</body>
</html>


