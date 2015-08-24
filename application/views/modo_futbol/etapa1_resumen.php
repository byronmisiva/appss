<div id="pantalla1fin">
    <div id="puntos1"><?= $puntaje ?></div>
    <div id="amigospatalla1fin"><?= $amigos ?></div>
    <div id="amigospatalla2fin"><?= $compartidoefectivo ?></div>
    <div id="invitar2"></div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#invitar2").click(function () {
            compartir('<?=$id_user?>', "liker");
        });
    });
</script>
