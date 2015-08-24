<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>    
    <link href='<?=base_url()?>css/ahorcado/app.css?fbrefresh=<?= $cache ?>' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?=base_url()?>css/ahorcado/specimen_stylesheet.css" type="text/css" charset="utf-8">	
	 <style type="text/css">
				@font-face {
			    font-family: 'kg_turning_tablesregular';
			    src: url('<?=base_url()?>css/ahorcado/kgturningtables-webfont.eot');
			    src: url('<?=base_url()?>css/ahorcado/kgturningtables-webfont.eot?#iefix') format('embedded-opentype'),
			         url('<?=base_url()?>css/ahorcado/kgturningtables-webfont.woff') format('woff'),
			         url('<?=base_url()?>css/ahorcado/kgturningtables-webfont.ttf') format('truetype'),
			         url('kgturningtables-webfont.svg#kg_turning_tablesregular') format('svg');
			    font-weight: normal;
			    font-style: normal;
			}				
			
			body{
			background-color:#ffffff;
			font-family: 'kg_turning_tablesregular';}
							
		</style>
    <script>
        var accion = "<?=base_url()?>";    		      
    </script>   
</head>
<body style="margin: 0px; padding: 0px;">
<div id="fb-root"></div>
<div id="fondo">
    <div id='content'></div>
</div>
<div id="condiciones" style='color:#777777;font-family:Arial,sans-serif;font-size:10px;width:800px;text-align:justify; margin-top: 10px;'>
    <strong>T&eacute;rminos y Condiciones:</strong><br/>
    <?= $condiciones; ?>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="<?=base_url()?>js/ahorcado/easytabs.js" type="text/javascript" charset="utf-8"></script>	
<script type="text/javascript" src="<?= base_url() ?>js/ahorcado/ahorcado.js?fbrefresh=<?= $cache ?>"></script> 
<script type="text/javascript" src="<?=base_url()?>js/general/library_facebook.js?fbrefresh=<?=$cache?>"></script>	
<!-- Add slidebox -->	
<script type="text/javascript">
	window.fbAsyncInit = function () {
	    FB.init({
	        appId: '<?=$appId?>',
	        status: true,
	        cookie: false,
	        xfbml: false,
	        oauth: true
	    });
	    FB.Canvas.setSize({ width: 810, height: 1000 });
	
	    $(document).ready(function () {
	        var tabLibrary;
	
	        LibraryFacebook.init({
	            appId: '<?=$appId?>',
	            signedRequest: '<?=$signedRequest?>',
	            base: '<?=$base?>',
	            controler: '<?=$controler?>',
	            namespace: '<?=$namespace?>',
	            permission: '<?=$permission?>',
	            debug: '<?=$debug?>',
	            tabLiker: '<?=$tabLiker?>',
	            tabNoLiker: '<?=$tabNoLiker?>',
	            doesNtCare: '<?=$doesNtCare?>',
	            content: '<?=$content?>',
	            isPageTab: '<?=$isPageTab?>',
	            data: '<?=$data?>'
	
	        });
	        tabLibrary = LibraryFacebook.newInstance();
	    });
	};
	
	(function () {
	    var e = document.createElement('script');
	    e.async = true;
	    e.src = document.location.protocol + '//connect.facebook.net/es_ES/all.js';
	    document.getElementById('fb-root').appendChild(e);
	}());
</script>
</body>
</html>
