<div id="pantalla1">
    <div id="puntos1"><?= $puntaje ?>

    </div>
    <div id="invitar1"></div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#invitar1").click(function () {
            compartir('<?=$id_user?>', "etapa1");
        });
    });

</script>
