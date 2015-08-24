<!DOCTYPE html>
<html>	
	<head>			
	</head>
	<body style="margin: 0px; padding: 0px;" >	
    	<div id="fb-root"></div>
    	<div id="fondo" style="position: relative; width: 810px; height: 715px; background-image: url('<?=$fondo?>');" >
    		<div style="position: absolute; top: 160px; left: 32px; width: 746px; height: 496px; background-image: url('<?=$tablet?>');">
	    		<div id='<?=$content?>' style="position: absolute; top: 63px; left: 75px; width: 599px; height: 367px; overflow: hidden;">
	    		
	    		</div>	    		
	    	</div>
	    	<div id="reloj" style="position: absolute; width: 80px; height: 20px; text-align: right; top: 570px; line-height: 25px; left: 620px; color: #949494; font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; "></div>
    	</div> 
    	<div id="condiciones" style='color:#777777;font-family:Arial,sans-serif;font-size:10px;width:800px; text-align:justify; margin-top: 10px;'>
			<strong>T&eacute;rminos y Condiciones:</strong><br/> 
			<?=$condiciones;?>
		</div> 
		<div id="TDFriendSelector" style="display: none; top: 80px;"> 
			<div class="TDFriendSelectorBackgroud"></div>
			<div class="TDFriendSelector_dialog">
				<a href="#" id="TDFriendSelector_buttonClose">x</a>
				<div class="TDFriendSelector_form">
					<div class="TDFriendSelector_header">
						<p>Select your friends</p>
					</div>
					<div class="TDFriendSelector_content">
						<p>Then you can invite them to join you in the app.</p>
						<div class="TDFriendSelector_searchContainer TDFriendSelector_clearfix">
							<div class="TDFriendSelector_selectedCountContainer"><span class="TDFriendSelector_selectedCount">0</span> / <span class="TDFriendSelector_selectedCountMax">0</span> friends selected</div>
							<input type="text" placeholder="Search friends" id="TDFriendSelector_searchField" />
						</div>
						<div class="TDFriendSelector_friendsContainer"></div>
					</div>
					<div class="TDFriendSelector_footer TDFriendSelector_clearfix">
						<a href="#" id="TDFriendSelector_pagePrev" class="TDFriendSelector_disabled">Previous</a>
						<a href="#" id="TDFriendSelector_pageNext">Next</a>
						<div class="TDFriendSelector_pageNumberContainer">
							Page <span id="TDFriendSelector_pageNumber">1</span> / <span id="TDFriendSelector_pageNumberTotal">1</span>
						</div>
						<a href="#" id="TDFriendSelector_buttonOK">OK</a>
					</div>
				</div>
			</div>
		</div>	
		  	
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/general/library_facebook.js"></script>		
		<script type="text/javascript">
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
						isPageTab				 : '<?=$isPageTab?>'															
					});					
					tabLibrary = LibraryFacebook.newInstance();

					var muestraReloj = function() {
						var fechaHora = new Date();
						var horas = fechaHora.getHours();
						var minutos = fechaHora.getMinutes();
						var segundos = fechaHora.getSeconds();
						 
						if(horas < 10) { horas = '0' + horas; }
						if(minutos < 10) { minutos = '0' + minutos; }
						if(segundos < 10) { segundos = '0' + segundos; }						 
						$("#reloj").html( horas+':'+minutos+':'+segundos );						
					};
					setInterval(muestraReloj, 1000);
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
