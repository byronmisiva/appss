<div style="max-width: 480px; width: 100%; margin: 0 auto">

    <div class="col-md-6 col-sm-6 col-xs-6 " style="margin-bottom: 15px">
        <div class=" center-block btn_compartir botontexto" idvideo="<?php echo $id; ?>">
            Compartir
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 15px">
        <div class=" btn_votar center-block botontexto" idvideo="<?php echo $id; ?>">
            Votar
        </div>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
        <p style="text-align: center">

        <div class="mensajevotar"></div>
        </p>
    </div>


    <video width="100%" controls autoplay>
        <source src="<?php echo base_url() ?>videos/<?php echo $video; ?>.mp4" type="video/mp4">
        Su navegador no soporta video HTML5.
    </video>

</div>

<script type="text/javascript">
    var idvideo;
    $(".btn_compartir").click(function () {
        idvideo = $(this).attr('idvideo')
        FB.ui({
            method: 'feed', /***metodo facebook compartir en el muro**/
            picture: "https://appss.misiva.com.ec/imagenes/karaokegalaxya/icono/190x190.png", /*carga de icono*/
           // link: 'https://apps.facebook.com/samsung_karaoke_galaxia/' +  idvideo, /******link que se comparte*******/
            link: 'https://appss.misiva.com.ec/samsung_karaoke_galaxia/vervideo/' +  idvideo , /******link que se comparte*******/
            caption: 'Galaxy Karaoke A',
            description:'Mira mi video en Samsung Karaoke Galaxi A, y dame tu voto'}, function(response){
            if (response != undefined){
                $.ajax({
                    type: "GET",
                    url: accion+controladorApp+"/sumarCompartida/"+idvideo, /*contador suma de compartidos*/
                    success: function(valor) {
                        $(".btn_compartir").hide();
                    }
                });
            }
        });
    });
    $(".btn_votar").click(function () {
        idvideo = $(this).attr('idvideo')
        $.post("samsung_karaoke_galaxia/votar", {id : idvideo, fbid: "fbid123123"})
            .done(function (data) {
                $(".btn_votar").hide();
                $(".mensajevotar").html(data);
            });
    });
</script>
