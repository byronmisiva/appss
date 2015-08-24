<div id="pantalla0">
    <div id="empezar0"></div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#empezar0").click(function () {
            $('#content').load(accion + "samsung_modo_futbol/liker", { 'user': JSON.stringify(LibraryFacebook.getUserFbData()), 'fb_page': JSON.stringify(LibraryFacebook.getSignedRequest()) });
        });
    });

</script>
