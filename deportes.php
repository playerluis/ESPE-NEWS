<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="estilos.css">
    <script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="node_modules/jquery-color/dist/jquery.color.min.js"></script>
    
    <title>Deportes</title>

</head>
<style>
 .text{
    color:white;
    font-family: Arial, sans-serif;
    font-size: 25px; /* Cambiar el tamaño de fuente a 16px */
  font-weight: bold; /* Cambiar la negrita del texto */
  line-height: 1.5; /* Cambiar la altura de línea a 1.5 veces el tamaño de fuente */
  display: inline-block;
  transition: transform 0.3s ease-in-out; 
}

 


.text:hover {
  transform: scale(1.2);
}


</style>

<script>
    $(() => {
        $(".btn").on(
            {
                mouseenter: function () {
                    $(this).animate({ transform: 0.5 },
                        {
                            duration: 300, easing: 'linear',
                            step: function (now, fx) {
                                $(this).css('transform', 'scale(' + (1 + now) + ')')
                            }
                        })

                },
                mouseleave: function () {
                    $(this).finish().animate({ transform: 0.5 },
                        {
                            duration: 300, easing: 'linear',
                            step: function (now, fx) {
                                $(this).css('transform', 'scale(' + (1.5 - now) + ')')
                            }
                        })

                }
            }
        )
    })
    var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});
</script>

<body>
    <div class=" container ">
        <div class="content text-center">

            <div class="container-fluid">



                <div class="row">
                    <hr style="border:0px; border-top: 5px double #000;">

                    <h2 class="text-bg-dark text-center" id="demo">LO ÚLTIMO EN DEPORTES</h2>
                    <hr style="border:0px; border-top: 5px double #000;">

                    <div class="col-sm-4">

                        <!--SERVICIO 1-->
                        <div class="fakeimg">
                            <img src="https://www.eluniverso.com/resizer/J8tstwEZbm3KTkRbsdPKThCdSgs=/1005x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/7EIL6EAD3JGINA6CYTLLTLQ4O4.jpg"
                                class="mx-auto d-block fade-element" style="width:100%">
                        </div>
                        <br>
                        <h6 style="text-align: justify;">¡Canta y no llores! México, eliminado del Mundial 2022 pese a vencer 2-1 a Arabia
                        </h6>
                        <p style="text-align: justify;">La victoria del equipo de Gerardo Martino acabó siendo insuficiente por el lastre de la mayor
                            sequía goleadora.</p>
                        <button type="button" class="btn btn-primary"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Más información
                            <a href="#"></a>
                        </button>
                        <br>
                        <br>

                        <!--SERVICIO 2-->
                        <div class="fakeimg">
                            <img src="https://www.eluniverso.com/resizer/YvsYgpaprSE7r09o8zH7BRGKEUQ=/1005x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/MKUW3UI3MJETHKG6BGQTD45LUE.jpg"
                                class="mx-auto d-block fade-element" style="width:100%">
                        </div>
                        <br>
                        <h6 style="text-align: justify;">Borró a Polonia y volvió a ser Argentina eliminado del Mundial 2022 </h6>
                        <p style="text-align: justify;">El promocionado duelo Messi-Lewandowski, azuzado por declaraciones fuertes del polaco en
                            ocasión del Balón de Oro, no tuvo lugar como uno de los mejores.</p>
                        <button type="button" class="btn btn-primary"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Más información
                            <a href="#"></a>
                        </button>
                        <br>
                        <br>


                        <!--SERVICIO 3-->
                        <div class="fakeimg">
                            <img src="https://www.eluniverso.com/resizer/1gqwtwIRfgamxObypFtGoUYA9ho=/1005x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/WNSP6IYYC5FZVFBCREJ2HRK4CE.jpg"
                                class="mx-auto d-block fade-element" style="width:100%">
                        </div>
                        <br>
                        <h6 style="text-align: justify;">‘Ecuador y sus jóvenes rompieron récord, y alertaron al mundo’, el análisis de EFE tras la
                            partida de la Tricolor.</h6>
                        <p style="text-align: justify;">El propio técnico Gustavo Alfaro reconoció que la falta de experiencia terminó apagando el
                            sueño de sus intrépidos futbolistas.

                        </p>
                        <button type="button" class="btn btn-primary"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Más información
                            <a href="#"></a>
                        </button>
                        <br>
                        <br>

                    </div>

                    <div class="col-sm-4">
                        <!--SERVICIO 4-->
                        <div class="fakeimg">
                            <img src="https://www.eluniverso.com/resizer/22xuRi7ajGhJPKgS89tVCaIPvt8=/1005x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/H2KMGLREUQKQHNAHNBRJQVZOYE.jpg"
                                class="mx-auto d-block fade-element" style="width:100%">
                        </div>
                        <br>
                        <h6 style="text-align: justify;">En Europa advierten que en enero habrá una ‘feroz competencia’ por Gonzalo Plata</h6>
                        <p style="text-align: justify;">Según medios europeos, clubes ingleses e italianos han mostrado interés por el futbolista
                            ecuatoriano.

                        </p>
                        <button type="button" class="btn btn-primary"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Más información
                            <a href="#"></a>
                        </button>
                        <br>
                        <br>


                        <!--SERVICIO 5-->
                        <div class="fakeimg">
                            <img src="https://www.eluniverso.com/resizer/IXPqP1D_A6dxjkCf5k1amhvuFqg=/1005x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/R6ZDG7P37NAG2MACSXWRACABXI.jpg"
                                class="mx-auto d-block fade-element" style="width:100%">
                        </div>
                        <br>
                        <h6 style="text-align: justify;">Hernán Galíndez aclara que no se retira de la Tricolor</h6>
                        <p style="text-align: justify;">El arquero se disculpó por la eliminación en el Mundial 2022. El partido perdido ante Senegal
                            lo terminó de jugar en cuclillas y al borde del llanto..</p>
                        <button type="button" class="btn btn-primary"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Más información
                            <a href="#"></a>
                        </button>
                        <br>
                        <br>

                        <!--SERVICIO 6-->
                        <div class="fakeimg">
                            <img src="https://www.eluniverso.com/resizer/hu2GZ3HQke0yvBO-0H6CEUam50Y=/912x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/YPA2Z3UEVJWUAYDI2EVD636F7Q.jpg"
                                class="mx-auto d-block fade-element" style="width:100%; height: 275px;">
                        </div>
                        <br>
                        <h6 style="text-align: justify;">Selección de Ecuador: Gustavo Alfaro y los ‘siete pecados capitales’ que cometió ante
                            Senegal</h6>
                        <p style="text-align: justify;">‘A un Mundial voy a ganar, no voy a competir’, dijo el DT en septiembre pasado. En el partido
                            con los africanos el argentino olvidó esa premisa.</p>
                        <button type="button" class="btn btn-primary"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Más información
                            <a href="#"></a>
                        </button>
                        <br>
                        <br>

                    </div>

                    <div class="col-sm-4">
                        <!--SERVICIO 7-->
                        <div class="fakeimg">
                            <img src="https://www.eluniverso.com/resizer/7QvPcc6srJoQs4yYggRtjkl6LCg=/1005x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/4Z636NRPBOLHORI62BWYJN65TI.jpg"
                                class="mx-auto d-block fade-element" style="width:100%">
                        </div>
                        <br>
                        <h6 style="text-align: justify;">Lionel Messi, el futbolista de Argentina con más partidos disputados en la historia de la
                            Copa</h6>
                        <p style="text-align: justify;">Messi es el único argentino en jugar cinco Mundiales y situarse en el selecto grupo que están
                            Lothar Matthäus.</p>
                        <button type="button" class="btn btn-primary"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Más información
                            <a href="#"></a>
                        </button>
                        <br>
                        <br>

                        <!--SERVICIO 8-->
                        <div class="fakeimg">
                            <img src="https://www.eluniverso.com/resizer/kZxoRkylctOnYlSsL19OGllNxt8=/0x0:1432x806/1190x670/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/DYZD3BQ3QZA33AGNEYKTRZOOSI.jpg"
                                class="mx-auto d-block fade-element" style="width:100%; height: 270px;">
                        </div>
                        <br>
                        <h6 style="text-align: justify;">‘Este club está acostumbrado al buen fútbol.</h6>
                        <p style="text-align: justify;">Argentino fue presentado como nuevo director técnico del equipo eléctrico, que en la década del 60 fue el Ballet Azul</p>
                        <button type="button" class="btn btn-primary"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Más información
                            <a href="#"></a>
                        </button>
                        <br>
                        <br>

                        <!--SERVICIO 9-->
                        <div class="fakeimg">
                            <img src="https://www.eluniverso.com/resizer/sWvuy9DTI98b_cN7nbr5uj3HNqM=/893x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/F56JRMPDQBAWZPF7PAIN54HJOQ.jpeg"
                                class="mx-auto d-block fade-element" style="width:100%; height: 275px;">
                        </div>
                        <br>
                        <h6 style="text-align: justify;">Ecuador sí le ganó a Senegal en Qatar, pero en un partido de fans que tuvo a Antonio
                            Valencia.</h6>
                        <p style="text-align: justify;">Toño Valencia viajó a Qatar el 16 de noviembre invitado por la FIFA durante el mundial 2022 a ver a sus colegas despues de tanto tiempo.</p>
                        <button type="button" class="btn btn-primary"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Más información
                            <a href="#"></a>
                        </button>
                        <br>
                        <br>


                     

                    </div>
                </div>
            </div>
         
              
   <div class="contenedor responsive-image" style="background-image: url(ds.png); heigth:100px;" >
        <article>
        <br>
       
               <h2 class="text">"ENTERATE DE TODAS LAS NOTICIAS DEL FUTBOL"</h2>
                <br>
       
      
            <button id="btn-abrir-popup" class="btn-abrir-popup">! Suscribete !</button>

        </article>

        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                <h3>SUSCRIBETE</h3>
                <h4>"Dia a dia con el deporte"</h4>


                <form action="guardar_datos.php" method="POST">

                <div class="contenedor-inputs">
                <label>Nombre:</label>
		<input type="text" name="nombre"><br><br>
		<label>Correo:</label>
		<input type="email" name="correo"><br><br>

                </div>
		
                <input type="submit" class="btn-submit" value="REGISTRARME">
	</form>

    <?php
		if (isset($_GET['guardado'])) {
			$nombre = $_GET['nombre'];
			$correo = $_GET['correo'];
			echo "<script>alert('¡REGISTRO EXITOSO! ✔️.\\n\\nHola ".$nombre."\\nHaz sido Registado Correctamente.');</script>";
		}
	?>




            </div>



        </div>

            </div>

            
    </div>

</body>
<script src="base.js"></script>

</html>