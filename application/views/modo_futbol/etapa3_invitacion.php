<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
<link href='/css/modo_futbol/app.css' rel='stylesheet' type='text/css'>


<div id="pantalla3fin">
    <img id= "imagenfinal"  src="/usuarios/modo_futbol/<?=$nombreArchivo?>.jpg">
    <div id="invitarfin2"></div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#invitarfin2").click(function () {
            $("#invitarfin2").hide();
            /////////
            var imgURL = 'https://appss.misiva.com.ec/usuarios/modo_futbol/' + '<?=$nombreArchivo?>.jpg';
            console.log (imgURL);
            FB.api('/photos', 'post', {
                message:  'Yo ya estoy en Modo Futból y  ésta es mi declaración futbolera, para ganar un Samsung SMART TV de 40"',
                url:imgURL
            }, function(response){
                if (!response || response.error) {
//                alert('Error occured');
                } else {
                    $('#content').load(accion + "samsung_modo_futbol/ranking", { 'user': <?=$nombreArchivo?>  });

                }

            });

        });
    });
</script>

<script src="//connect.facebook.net/en_US/all.js"></script>


<script type="text/javascript">
    window.fbAsyncInit = function () {
        FB.init({
            appId: '<?=$api_id?>',
            status: true,
            cookie: false,
            xfbml: false,
            oauth: true
        });



    };


</script>

