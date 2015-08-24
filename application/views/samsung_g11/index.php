<!DOCTYPE html>
<html>
<head>
	<title><?php echo $app_name;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<link href="<?=base_url('css/samsung_g11/app.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<link href="<?=base_url('css/bootstrap.min.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url()?>fonts/antonio_regular/specimen_stylesheet.css" type="text/css" charset="utf-8">	
</head>
<body>
	<div id="fb-root"></div>
	<div id="content" class="container" >
	
	<?php 
	/*
	echo " IDapp: ". $appId;
	echo " signedRequest: ".$signedRequest;
	echo " base: ".$base ;
	echo " controlador: ".$controler; 
	echo " namespace: ".$namespace; 
	echo " permisos: ".$permission;
	 echo " debug: ".$debug; 
	echo " tabliker: ".$tabLiker;
	 echo " tabnoliker: ".$tabNoLiker;
	  echo " doesntcare: ".$doesNtCare;
	   echo " contecnt: ".$content;
	    echo " ispageTab: ".$isPageTab; 
	echo " data: ".$data;
	die;*/
	?>
	</div>
	<div id="condiciones">
		 <strong>
		 <?=$condiciones;?>
		 </strong><br/>
	</div>	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?=base_url()?>js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/samsung_g11/app.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="<?=base_url('js/general/library_facebook.js?refresh=19898797915')?>"></script>
	<script type="text/javascript" src="<?=base_url('js/general/validate.js?refresh=198926546568797915')?>"></script>		
	<script type="text/javascript" charset="utf-8">
		window.fbAsyncInit = function() {	
			FB.init({
				appId : '<?=$appId?>',
				status : true,
				 version    : 'v1.0',
				//cookie : false,
				//xfbml : false,
				oauth : true
			});
			FB.Canvas.setSize({ width: 810, height: 700 });	
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


