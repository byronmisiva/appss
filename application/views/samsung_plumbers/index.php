<!DOCTYPE html>
<html>	
	<head>	
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="//fonts.googleapis.com/css?family=Asap:400italic,400,700italic,700" rel="stylesheet" type="text/css">
				
		<style type="text/css">
			input {
				background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
			    border: medium none;
			    color: #0F4396;
			    font-family: Asap;
			    font-size: 14px;
			    font-weight: bold;
			    height: 25px;
			    padding-left: 5px;
			    width: 210px !important;
			    font-weight:400;
			    font-style: normal; 
			}
			
			body{
			font-family: Asap;
			font-weight:400;
			font-style: normal; 
			}
		</style>		
	</head>
	<body style="margin: 0px; padding: 0px;" >	
    	<div id="fb-root"></div>
    	<div id="fondo" style="position: relative; width: 810px; height: 800px; background-image: url('<?=$fondo?>');" >
    		<div  style="position: absolute; width: 810px; height: 800px;" id='content'>    			
    		</div>
    	</div> 
    	<div id="condiciones" style='color:#777777;font-family:Arial,sans-serif;font-size:10px;width:800px; text-align:justify; margin-top: 10px;'>
			<strong>T&eacute;rminos y Condiciones:</strong><br/> 
			<?=$condiciones;?>
		</div>   	
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/general/library_facebook.js"></script>		
		<script type="text/javascript" charset="utf-8">
			window.fbAsyncInit = function() {	
				FB.init({
					appId : '<?=$appId?>',
					status : true,
					cookie : false,
					xfbml : false,
					oauth : true
				});
				FB.Canvas.setSize({ width: 810, height: 900 });	
	
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
						isPageTab				 : '<?=$isPageTab?>'			
					});					
					tabLibrary = LibraryFacebook.newInstance();
				});
			};
	
			(function() {
				var e = document.createElement('script');
				e.async = true;
				e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js?fb_refresh=<?=rand(10, 100000)?>';
				document.getElementById('fb-root').appendChild(e);
			}());
			Object.defineProperty( Object.prototype, "equals", { 
			    value: function( x ) {
			    	var p;
					for( p in this) {
						if( typeof(x[p]) == 'undefined' ) {
							return false;
						}
					}
					for(p in this) {
						if (this[p]) {
							switch(typeof(this[p])) {
								case 'object':
									if ( !this[p].equals( x[p] ) ){
										return false;
									} 
									break;
								case 'function':
									if ( typeof( x[p] ) == 'undefined' || (p != 'equals' && this[p].toString() != x[p].toString() ) )
										return false;
									break;
								default:
									if (this[p] != x[p]) { 
										return false;
									}
							}	
						} 
						else{
							if (x[p])
								return false;
						}
					}
					for(p in x) {
						if( typeof( this[p] ) == 'undefined' ) {
							return false;
						}
					}
					return true;
			    },
			    
			});
		</script>
		<div style="display: none;">
		 	<img src="<?=$img_path?>amarillo.png" />
		 	<img src="<?=$img_path?>celeste.png" />
		 	<img src="<?=$img_path?>lila.png" />
		 	<img src="<?=$img_path?>morado.png" />
		 	<img src="<?=$img_path?>naranja.png" />
		 	<img src="<?=$img_path?>verde.png" />		 			 	
		</div>		
  </body>
</html>
