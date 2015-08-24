<div id="pantalla2">


    <div id="puntos1"><?= $puntaje ?>

    </div>
    <div id="videoEtapa2">
        <div id="videomostrar">
            <iframe src="https://player.vimeo.com/video/73650953" width="653" height="370" frameborder="0"
                    webkitallowfullscreen
                    mozallowfullscreen allowfullscreen></iframe>
        </div>

        <div id="resultadopregunta">
            <div id="espaciorespuesta">
                <div id="mal">

                </div>
                <div id="bien">

                </div>
            </div>
            <div id="totalestapa">

            </div>
            <div id="totalpuntos">

            </div>

        </div>

    </div>

    <div id="pregunta-contenedor">
        <div id="pregunta">
        </div>
        <div id="pregunta-respuestas">
            <div id="respuesta1"></div>
            <div id="respuesta2"></div>
            <div id="respuesta3"></div>

        </div>


    </div>


    <div id="siguiente2"></div>
</div>

<script type="text/javascript">
    var puntos = 0;

    $(document).ready(function () {
        $("#videomostrar").show();
        $("#pregunta-contenedor").show();
        $("#resultadopregunta").hide();


        $('#pregunta-contenedor').hide();
        //luego de un tiempo se muestra las preguntas
        setTimeout(mostrarPreguntas, 50000);
        var preguntas = new Array();
        preguntas[0] = ["¿Quién es el autor del primer gol que se ven en el vídeo? ", "Fernando Torres.", "Nicolás Anelka.", "Didier Drogba.", "1"];
        preguntas[1] = ["Cuando se muestra la función de Redes Sociales, ¿qué es lo que se escribe en el recuadro blanco?", "Gooooaaaal!!!", "Perfect Shot!!!", "Vamos Chelsea.", "2"];
        preguntas[2] = ["Cuando se muestra la función Replay, ¿cuál es el equipo que está enfrentando Chelsea?", "Arsenal", "Liverpool", "Manchester United", "3"];
        preguntas[3] = ["¿Qué botón está a lado derecho del botón de Modo Fútbol en el control remoto? ", "E-Manual ", "Status", "CC", "2"];
        preguntas[4] = ["Cuando se muestra la función de Calidad de Imagen tipo Estadio, ¿qué número lleva en su espalda el jugador de Chelsea? ", "23 ", "7 ", "21", "1"];

        preguntaNumber = Math.floor((Math.random() * 5));
        pregunta = preguntas[preguntaNumber][0];
        respuesta1 = preguntas[preguntaNumber][1];
        respuesta2 = preguntas[preguntaNumber][2];
        respuesta3 = preguntas[preguntaNumber][3];
        respuestaCorrecta = preguntas[preguntaNumber][4];

        $("#pregunta").text(pregunta);
        $("#respuesta1").text(respuesta1);
        $("#respuesta2").text(respuesta2);
        $("#respuesta3").text(respuesta3);


        $("#siguiente2").click(function () {
            $('#content').load(accion + "samsung_modo_futbol/grabarEtapa2", { 'user': <?=$id_user?>, 'puntos': puntos });
        });

        $("#respuesta1").click(function () {
            bien = 0;
            if (1 == respuestaCorrecta) {
                bien = 1;
            }
            mostrarResultados(bien, 1)
        })

        $("#respuesta2").click(function () {
            bien = 0;
            if (2 == respuestaCorrecta) {
                bien = 1;
            }
            mostrarResultados(bien, 2)
        })

        $("#respuesta3").click(function () {
            bien = 0;
            if (3 == respuestaCorrecta) {
                bien = 1;
            }
            mostrarResultados(bien, 3)
        })


        function mostrarResultados(bien, resultado) {
            //mostar mensaje iniico
            $("#videomostrar").hide();
            $("#pregunta-contenedor").hide();
            $("#resultadopregunta").show();
            $("#siguiente2").show();
            if (bien == 1) {
                $("#bien").show();
                puntos = 5;
            } else {
                $("#mal").show();
                puntos = 0
            }

            $("#totalestapa").text(puntos);
            totalpuntajefinal = parseInt ( $("#puntos1").text()) + puntos;
            $("#totalpuntos").text(totalpuntajefinal  );


        }

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
            href: '<?=base_url()?>imagenes/modo_futbol/pop-up-experiencia.jpg',
            type: 'image'
        });
    });

    function mostrarPreguntas() {
        $('#pregunta-contenedor').show('slow');
    }


</script>

