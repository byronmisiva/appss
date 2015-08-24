<!DOCTYPE html>
<html>	
	<head>		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />		
		<link href='//fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
		<script>
			var accion ="<?=base_url()?>";
		</script>
		<style>
			.input{
				background-color: transparent;
				border:none;
				width:300px;
				height:39px;
				line-height:39px;				
				font-family: 'Average Sans', sans-serif;
				font-size: 18pt;
				color:#ffffff;
			}
		
			.combo{
				background-color: transparent;
				border:none;
				width:155px;
				height:28px ;
				font-family: 'Average Sans', sans-serif;
				font-size: 12pt;
				color:#4C1407;
			}
			.areas{
				background-color: transparent;
				border:none;
				width:45px;
				height:39px ;
				text-align: center;				
			}
			
			.campos{
				background-color: transparent;
				border:none;
				width:30px;
				height:29px;
				line-height:33px;				
				font-family: 'Average Sans', sans-serif;
				font-size: 20pt;
				color:#4C1407;
			}
			
			input[type=checkbox].css-checkbox {
							display:block;
				}

					.css-checkbox {							
							height:15px; 
							margin-top:4px;
							margin-left:4px;
							display:block;
							line-height:15px;
							background-repeat:no-repeat;
							background-position: 0 0;
							font-size:25px;
							vertical-align:middle;
							cursor:pointer;	
							border:1px solid red;						
						}			
		</style>		
	</head>
<body style="margin: 0px; padding: 0px;" >	
    	<div id="fb-root"></div>
    	<div id="fondo" style="position: relative; width: 810px;left:0px;top:0px;height:870px;overflow:hidden;background-image:url('<?=$fondo?>');background-repeat: no-repeat;" >
    		<div  style="position: absolute;" id='content'></div>
    	</div>
    	<div id="condiciones" style='color:#777777;font-family:Arial,sans-serif;font-size:10px;width:810px; text-align:justify; margin-top: 10px;overflow:hidden;'>
			<strong>T&eacute;rminos y Condiciones:</strong><br/> 
			<?=$condiciones;?>
		</div>
		 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script> 
		<!--<script src="<?=base_url().'js/general/jquery-1.10.1.js'?>" ></script>-->
		<script type="text/javascript" src="<?=base_url()?>js/chato/ajax.js?fbrefresh=21654646546466878"></script>
		<script type="text/javascript" src="<?=base_url()?>js/general/library_facebook.js?fbrefresh=<?=$cache?>"></script>						
		<script type="text/javascript">
			window.fbAsyncInit = function() {	
				FB.init({
					appId : '<?=$appId?>',
					status : true,
					cookie : false,
					xfbml : false,
					oauth : true
				});
				FB.Canvas.setSize({ width: 810, height:1100 });	
	
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
						data					 : '<?=$data?>'
															
					});					
					tabLibrary = LibraryFacebook.newInstance();
				});
			};
	
			(function() {
				var e = document.createElement('script');
				e.async = true;
				e.src = document.location.protocol + '//connect.facebook.net/es_ES/all.js';
				document.getElementById('fb-root').appendChild(e);
			}());
				
								
		</script>
  </body>
</html>
