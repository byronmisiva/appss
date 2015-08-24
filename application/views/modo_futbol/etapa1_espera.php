<div id="pantalla1espera">
    <div id="puntos1"><?= $puntaje ?></div>
    <div id="invitar3"></div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#invitar3").click(function () {
            compartir('<?=$id_user?>', "liker");
        });
    });
</script>
