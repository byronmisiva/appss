<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
		<link href='<?=base_url()?>css/general/tdfriendselector.css?fb_refresh=<?=rand ( 1 , 100 )?>' rel='stylesheet' type='text/css' />	
	</head>
	<body style="margin: 0px; padding: 0px;">
		<div style="display: none;" ><img src="//graph.facebook.com/<?=$amigos[6];?>/picture?type=square" alt="" width="100%" /></div>
		<div id="fb-root"></div>
		<script type="text/javascript">
		      window.fbAsyncInit = function() {
		        FB.init({
			        appId   : '<?=$api_id;?>',
		          	status  : true, // check login status
		          	cookie  : true, // enable cookies to allow the server to access the session
		          	xfbml   : true // parse XFBML
		      	});	
		        FB.Canvas.setSize({ width: 810, height: 900 });	
		      };
		      (function() {
		    	    var e = document.createElement('script');
		    	    e.src = document.location.protocol + '//connect.facebook.net/es_LA/all.js';
		    	    e.async = true;
		    	    document.getElementById('fb-root').appendChild(e);
		   		}());			      
		</script>
		<div id='fondo' style="position: relative; width: 810px; height: 804px; overflow: hidden; background-repeat: no-repeat; background-image: url('<?=$fondo?>'); background-repeat: no-repeat;">		
			<!-- <div id="amigo_1" class="amigo" style="position: absolute; width: 57px; height: 65px; top: 383px; left: 134px; cursor: pointer; border: solid 1px red;" >
				<div id="foto_1" style="position: absolute; top: 4px; left: 4px; width: 50px; height: 50px;">
					<?if( $amigos[1] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[1];?>/picture?type=square" alt="" width="100%" />
					<?}?>
				</div>
			</div> -->
			<div id="amigo_1" class="amigo" style="position: absolute; width: 57px; height: 65px; top: 383px; left: 233px; cursor: pointer;" >
				<div id="foto_1" style="position: absolute; top: 4px; left: 4px; width: 50px; height: 50px;">
					<?if( $amigos[1] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[1];?>/picture?type=square" alt="" width="100%" />
					<?}?>
				</div>
			</div>
			<div id="amigo_2" class="amigo" style="position: absolute; width: 57px; height: 57px; top: 383px; left: 330px; cursor: pointer;" >
				<div id="foto_2" style="position: absolute; top: 4px; left: 4px; width: 50px; height: 50px;">
					<?if( $amigos[2] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[2];?>/picture?type=square" alt="" width="100%" />
					<?}?>
				</div>
			</div>
			<div id="amigo_3" class="amigo" style="position: absolute; width: 57px; height: 57px; top: 382px; left: 429px; cursor: pointer;" >
				<div id="foto_3" style="position: absolute; top: 4px; left: 4px; width: 50px; height: 50px;">
					<?if( $amigos[3] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[3];?>/picture?type=square" alt="" width="100%" />
					<?}?>
				</div>
			</div>
			<div id="amigo_4" class="amigo" style="position: absolute; width: 57px; height: 57px; top: 382px; left: 542px; cursor: pointer;" >
				<div id="foto_4" style="position: absolute; top: 4px; left: 4px; width: 50px; height: 50px;">
					<?if( $amigos[4] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[4];?>/picture?type=square" alt="" width="100%" />
					<?}?>
				</div>
			</div>
			<div id="amigo_5" class="amigo" style="position: absolute; width: 57px; height: 57px; top: 288px; left: 653px;" >
				<div id="foto_5" style="position: absolute; top: 4px; left: 4px; width: 50px; height: 50px;" >
					<?if( $amigos[5] != '' ){?>
						<img src="//graph.facebook.com/<?=$amigos[5];?>/picture?type=square" alt="" width="100%" />
					<?}?>
				</div>
			</div>
		</div>
		<div id="TDFriendSelector" style="display: none;">
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
		<div id="condiciones" style='color:#777777;font-family:Arial,sans-serif;font-size:10px;width:800px; text-align:justify; margin-top: 10px;'>
			<strong>Términos y Condiciones:</strong><br/> 
			<?=$condiciones;?>
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type='text/javascript' src='<?=base_url()?>js/general/tdfriendselector.js?fb_refresh=<?=rand ( 1 , 100 )?>'></script>
		<script type='text/javascript' src='<?=base_url()?>js/samsung_palco.js?fb_refresh=<?=rand ( 1 , 100 )?>'></script>
	</body>
</html>