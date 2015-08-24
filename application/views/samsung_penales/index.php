<!DOCTYPE html>
<html>
<head>
	<title><?php echo $app_name;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css" />
	<link href="<?=base_url('css/primax_bigpromo/app.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<link href="<?=base_url('css/primax_bigpromo/animate.min.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	
	<script src="<?=base_url()?>js/primax_bigpromo/app.js?refresh=<?php echo rand(10, 1000)?>" type="text/javascript" charset="utf-8"></script>
	 
	<style type="text/css">	
			body{
				background-color:#ffffff;
				color:#024F9F;
				font-size: 24px;
			}			
		</style>
</head>
<body>
	<div id="fb-root"></div>
	<div id="content" class="container" style="overflow: hidden;position:absolute;left:0;top:0;height: 800px;width:810px;"></div>
	<div id="condiciones">
		 <strong style="color:#000;;">
		 <?=$condiciones;?>
		 </strong><br/> 
		 <!-- T&eacute;rminos y Condiciones: -->
	</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?=base_url()?>js/bootstrap.min.js" type="text/javascript"></script>	
	<script type="text/javascript" src="<?=base_url('js/general/library_facebook.js?refresh=19898797915')?>"></script>
	<script type="text/javascript" src="<?=base_url('js/general/validate.js?refresh=198926546568797915')?>"></script>
		
	<script type="text/javascript" charset="utf-8">
		window.fbAsyncInit = function() {	
			FB.init({
				appId : '<?=$appId?>',
				status : true,
				cookie : false,
				xfbml : false,
				oauth : true
			});
			FB.Canvas.setSize({ width: 810, height: 850 });	

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

		var accion="<?=base_url()?>";
	</script>
</body>
</html>


