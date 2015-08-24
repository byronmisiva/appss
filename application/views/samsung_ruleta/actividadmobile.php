<script src="<?= base_url() ?>js/samsung_ruleta/app.js" type="text/javascript"></script>
<div class="contendor-actividad">
    <div class="logo"></div>
    <div class="btn-acepta"></div>
    <div class="telefono"></div>
</div>

<div class="actividad-0">
    <div class="logo2"></div>
    <div class="telefono posactividad-0"></div>
    <div class="textocontent colorgris">
        <div class = "textoact0">Escoje el equipo que actualmente tienes</div>
        <div class="smartphone"></div>
        <div class="smartphone-list  "></div>
        <div class="tablet-list"></div>
        <div class="tablet"></div>
    </div>


</div>
<div class="actividad-1">
    <div id="ruleta" style="display: none">
        <img id="flecha" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/flecha.png" width="160" height="20"
             alt="Bee">
        <img id="ruletamesa" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/ruleta.png" width="532" height="532"
             alt="MesaRuleta">
        <img id="botonjugar" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/bt_jugar.png" width="160" height="160"
             alt="botonjugar">
        <img id="flechasderecha" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/flechas-derecha.png" width="213"
             height="90" alt="flechasDerecha">
        <img id="logojuego" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/logojuego.png" width="523" height="212"
             alt="logojuego">
    </div>

    <div id="gana" class="ocultar">
        <div class="logo2"></div>
        <div class="telefono posactividad-0"></div>
        <div class="imagengano"></div>
        <div class="tgana colorgris">Para poder recibir tu accesorio debes registrar tus datos.</div>

        <img id="bt-continuar" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/bt-continuar.png" width="125"
             height="125" alt="Bee">


    </div>

    <div class="mensajesalida  colorgris ocultar salidasinganar">
        <div class="logo2"></div>
        <div class="telefono posactividad-0"></div>
        <div class="imagencierre"></div>
        <div class="textocierre colorgris">
            Recuerda estar atento para la activación de más oportunidades de participar por premios Samsung.
        </div>
    </div>

    <div id="pierde" class="ocultar">
        <div class="logo2"></div>
        <div class="telefono posactividad-0"></div>

        <div class="imagensigueparticipando"></div>

        <div id="colorgris" class="tpierde colorgris"> No lograste ganarte un accesorio. Si quieres dar una vuelta más a la ruleta, debes
            invitar a <span class="amigostotal">tres </span> amigos.
        </div>
        <img id="bt-invitar" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/sigue_participando/bt-invitar.png"
             width="125" height="125" alt="">
         <img id="bt-continuar2" src="<?= base_url() ?>imagenes/samsung_ruleta/ruleta/bt-continuar.png" width="125"
              height="125" alt="Bee">
    </div>
</div>

<script>
    <?php
    if ($data["participante"]=="0"){?>
    var idParticipante = "<?php echo $data["user"]->id?>";
    <?php } else {?>
    var idParticipante = "<?php echo $data["participante"]->id?>";
    <?php }?>
    var tipoganador = "<?php echo $data["participanteGana"]; ?>";
    var cuentacompartidos = "<?php echo $data["cuentacompartidos"]; ?>";

    var base_url = "<?=base_url()?>";
     <?php if ($data["participanteRegistrado"]=="1")
        echo "$('.btn-acepta').click();";
        ?>
</script>
