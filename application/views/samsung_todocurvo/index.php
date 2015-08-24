<!DOCTYPE html>
<html>
<head>
	<title><?php echo $app_name;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/bootstrap.min.css" />
	<link href="<?php echo base_url('css/samsung_todocurvo/app.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<link href="<?php echo base_url('css/samsung_todocurvo/animate.min.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()?>css/samsung_todocurvo/stylesheet.css" type="text/css" charset="utf-8" />
	<script src="<?php echo base_url()?>js/samsung_todocurvo/app.js?refresh=<?php echo rand(10, 1000)?>" type="text/javascript" charset="utf-8"></script>
	<script>		
		var accion="<?php echo base_url()?>";
		var controladorApp="samsung_ahorcado";
	</script>
</head>
<body>
	<div id="fb-root"></div>
	<div id="content" class="container"></div>
	<div id="condiciones">
		 <strong> <?php echo $condiciones;?></strong>
	</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?php echo base_url()?>js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>js/samsung_todocurvo/animateSprite.min.js" type="text/javascript"></script>	
	<script src="<?php echo base_url('js/general/library_facebook.js?refresh=19898797915')?>" type="text/javascript"></script>
	<script src="<?php echo base_url('js/general/validate.js?refresh=198926546568797915')?>" type="text/javascript"></script>
		
	<script type="text/javascript" charset="utf-8">
		window.fbAsyncInit = function() {	
			FB.init({
				appId : '<?php echo $appId?>',
				status : true,
				cookie : false,
				xfbml : false,
				oauth : true
			});		 
			
			FB.Canvas.setSize({ width: 810, height: 850 });	

			$(document).ready( function() {	
				var tabLibrary;
			
				LibraryFacebook.init({
					appId					 : '<?php echo $appId?>',
					signedRequest			 : '<?php echo $signedRequest?>',
					base                     : '<?php echo $base?>',
					controler			     : '<?php echo $controler?>',
					namespace   	   	     : '<?php echo $namespace?>',
					permission				 : '<?php echo $permission?>',
					debug                    : '<?php echo $debug?>',
					tabLiker                 : '<?php echo $tabLiker?>',
					tabNoLiker               : '<?php echo $tabNoLiker?>',
					doesNtCare				 : '<?php echo $doesNtCare?>',
					content					 : '<?php echo $content?>',	
					isPageTab				 : '<?php echo $isPageTab?>',
					data     				 : '<?php echo $data?>'			
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





























