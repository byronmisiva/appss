<!DOCTYPE html>
<html>
<head>
	<title><?php echo $app_name;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<link href="<?php echo base_url('css/samsung_kpop/app.css?refresh='.rand(10, 1000))?>" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url()?>fonts/regular/specimen_stylesheet.css" type="text/css" charset="utf-8">	
	<style type="text/css">
			@font-face {
			    font-family: 'samsung_imagination_condensRg';
			    src: url('<?=base_url()?>fonts/regular/samsungimaginationcondensedregular-webfont.eot');
			    src: url('<?=base_url()?>fonts/regular/samsungimaginationcondensedregular-webfont.eot?#iefix') format('embedded-opentype'),
			         url('<?=base_url()?>fonts/regular/samsungimaginationcondensedregular-webfont.woff') format('woff'),
			         url('<?=base_url()?>fonts/regular/samsungimaginationcondensedregular-webfont.ttf') format('truetype'),
			         url('samsungimaginationcondensedregular-webfont.svg#samsung_imagination_condensRg') format('svg');
			    font-weight: normal;
			    font-style: normal;
			}
		
		
		
			
			body{
			background-color:#ffffff;
			font-family: 'samsung_imagination_condensRg';
			color:#024F9F;
			font-size: 18px;
			}
			
			.imagenRegistrar{
				background-image: url('<?=base_url('imagenes/samsung_kpop/registrarme-home-of.png')?>');
				background-repeat:no-repeat;
				width: 173px;
				height:79px;
				margin: 0 auto;
				cursor:pointer;
			}
			
			.imagenRegistrar:hover{
				background-image: url('<?=base_url('imagenes/samsung_kpop/registrarme-home-on.png')?>');
			}
			
			.inputClase1{				
				background-color:#034DA2;							
			}
			
			
			.selector{
			background-color:#034DA2;
			width:100%;
			border:none;
			color:#ffffff;	
			height: 25px;		
			}
			
			option{
			background-color:#034DA2;
			width:100%;
			border:none;
			color:#ffffff;
			}
			
			input{
			border:none;
			color:#ffffff;
			font-size: 14px;
			height: 25px;
			}
			
			.inputClase2{
				background-color:#00B5F1;
				
			}
			
			.formularioimagen{
				width:522px;
				height:278px;
				background-image: url('<?=base_url('imagenes/samsung_kpop/formulario.jpg')?>');
				background-repeat:no-repeat;
				margin-left:30px;
				margin-top:25px ;
				
			}
			
			.btn-sumbit{			
				width:159px;
				height:64px;
				background-image: url('<?=base_url('imagenes/samsung_kpop/boton-registro-enviar-of.png')?>');
				background-repeat: no-repeat;
				border: none;
				background-color: transparent;
				cursor:pointer;
				margin-left: 150px;
				margin-top: 35px;
				display: inline-block; 
			
			}
			
			.btn-sumbit:hover{
			background-image: url('<?=base_url('imagenes/samsung_kpop/boton-registro-enviar- on.png')?>');
			}
			
			#gracias{
				margin-top:26%;margin-left:17%;
				font-size:35px;
				font-weight: bold;
				display:none;
			}
			
			input::-moz-placeholder, textarea::-moz-placeholder {
			    opacity: 0.7 !important;
			}
			
			input[placeholder], [placeholder], *[placeholder] {
			   color:#fff !important;
			   opacity: 0.7 !important;
			}
			
			::-webkit-input-placeholder { /* WebKit browsers */
				    color:    #fff;
				    opacity: 0.7 !important;
				}
				:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
				    color:    #fff;
				    opacity: 0.7 !important;
				}
				::-moz-placeholder { /* Mozilla Firefox 19+ */
				    color:    #fff;
				    opacity: 0.7 !important;
				}
				:-ms-input-placeholder { /* Internet Explorer 10+ */
				    color:    #fff;
				    opacity: 0.7 !important;
				}
			
			#introMensaje{
			 	display: inline-table;
			    height: 250px;
			    margin-left: 1%;
			    margin-top: 2%;
			    text-align: left;
			    width: 100%;
			}	
			
			.linkCondiciones{
				position:absolute;
				top:720px;;
				left: 120px;
				color:#ffffff;
				font-size: 18px;
			}
			
			.linkCondiciones:hover{
			color: #DC2784;
			}						
		</style>
		
</head>
<body>
	<div id="fb-root"></div>
	<div id="content" class="container"></div>
	<div id="condiciones">
		<!-- <strong>T&eacute;rminos y Condiciones:</strong><br/> 
		<?=$condiciones;?> -->
	</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?=base_url()?>js/fonts/bold/easytabs.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?=base_url()?>js/fonts/regular/easytabs.js" type="text/javascript" charset="utf-8"></script>
	
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
			FB.Canvas.setSize({ width: 810, height: 800 });	

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


