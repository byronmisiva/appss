<div id="pantalla3">
    <div id="puntos1"><?= $puntaje ?>
    </div>
    <div id="declaracion">
        <textarea class="cajaetapa3 caja1" name="declaracion" rows="2" cols="36"> </textarea>
    </div>
    <div id="concurso">
        <textarea class="cajaetapa3 caja2" name="concurso" rows="2" cols="36">
        </textarea>
    </div>
    <div id="siguiente3"></div>
    <div id="temporizador"></div>
</div>

<script type="text/javascript">
var nombreArchivoSalida1;

    $(document).ready(function () {

        //luego de un tiempo se muestra las preguntas
        $("#siguiente3").click(function () {

            $("#siguiente3").hide();
            $("#temporizador").show();

            declaracion = $('.caja1').val();
            concurso = $('.caja2').val();

            nombreCompleto = LibraryFacebook.getUserFbData().name;
            nombreArchivoSalida1 = "modo-futbol-" + <?=$id_user?>;
            contenido = '<img id="imagenfinal"  src="/usuarios/modo_futbol/'+ nombreArchivoSalida1 +'.jpg"><div id="invitarfin2"></div>';

            $("#pantalla3fin").html (contenido);

            $("#invitarfin2").click(function () {
                $("#invitarfin2").hide();
                /////////
                var imgURL = 'https://appss.misiva.com.ec/usuarios/modo_futbol/' + nombreArchivoSalida1 + '.jpg';

                FB.api('/photos', 'post', {
                    message:  'Yo ya estoy en Modo Fútbol y esta es mi declaración futbolera, para ganar un Samsung SMART TV de 40", http://goo.gl/GBs9jw',
                    url:imgURL
                }, function(response){
                    if (!response || response.error) {

                    } else {
                        $.fancybox.close ();
//                        $('#content').load(accion + "samsung_modo_futbol/liker", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });

                    }

                });

            });

            $.post("<?=base_url()?>imagen/generaModoFutbol.php", {nombre: nombreCompleto,
                declaracion: declaracion,
                yoQueHaria: concurso,
                nombreArchivoSalida: nombreArchivoSalida1});
                setTimeout( abreventana, 8000);
			// se valida que la imagen exista para abrir el popup


			$('img #imagenfinal').load(function() {
                console.log ("existe");
				abreventana ();
			});
            //mostar mensaje iniico

        });

        function abreventana () {
            $("#temporizador").hide();
            $.fancybox.open({
                beforeShow: function(){
                    $(".fancybox-skin").css("backgroundColor","transparent");
                },
                padding: 0,
                openEffect: 'elastic',
                openSpeed: 150,
                closeEffect: 'elastic',
                closeSpeed: 150,
                closeClick: false,
                width: '728px',
                height: '542px',
                autoScale : true,
                helpers: {
                    overlay: {
                    },
                    title: {
                        type: 'float' // 'float', 'inside', 'outside' or 'over'
                    }
                },
                href: '#comparte' ,
                type: 'inline'
            });

            $('#content').load(accion + "samsung_modo_futbol/grabarEtapa3", { 'user': <?=$id_user?>, 'caja1': declaracion, 'caja2': concurso });

        }
        $(".caja1").change(function () {
            $("#siguiente3").show();
        });

        $(".caja2").change(function () {
            $("#siguiente3").show();
        });

        //mostar mensaje iniico
        $.fancybox.open({
            padding: 0,
            openEffect: 'elastic',
            openSpeed: 150,
            closeEffect: 'elastic',
            closeSpeed: 150,
            closeClick: true,
            helpers: {
                overlay: {
                },
                title: {
                    type: 'float' // 'float', 'inside', 'outside' or 'over'
                }
            },
            href: '<?=base_url()?>imagenes/modo_futbol/pop-up-aceptacion.jpg',
            type: 'image'
        });
    });


</script>
<script src="//connect.facebook.net/en_US/all.js"></script>

<div style="display:none">
    <div id="comparte">
        <div id="pantalla3fin">
        </div>
    </div>
</div>

