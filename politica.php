<?php
if (isset($_GET['submit'])) {
    if (!empty($_GET['nombres']) && !empty($_GET['tema'])) {

        $nombre = $_GET['nombres'];
        $tema = $_GET['tema'];

        $registro = fopen('Registros/solicitudes.txt', 'a');
        fwrite($registro, "Nombre: " . $nombre . "\n");
        fwrite($registro, "Tema: " . $tema . "\n");
        fclose($registro);

        $_POST['nombres'] = '';
        $_POST['tema'] = '';

        echo "<script>alert('La solicitud se realizó con éxito.')</script>";

    } else {

        echo "<script>alert('Por favor, llene todos los campos antes de enviar el formulario.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="node_modules/jquery-color/dist/jquery.color.min.js"></script>
    <title>Política</title>

    <style>
        p {
            font-size: 20px;
        }
    </style>

    <script>
        $(document).ready(function () {
            $("#op").hover(function () {
                $(this).animate({ opacity: '0.75' });
            }, function () {
                $(this).finish().animate(
                    { opacity: '1' });
            });

            $("#titulo").hover(function () {
                $(this).css("color", "blue");
                $(this).css("text-decoration", "underline");
                $(this).css("cursor", "pointer");
            }, function () {
                $(this).css("color", "black");
                $(this).css("text-decoration", "none");
                $(this).css("cursor", "default");
            });

            $(".titulos").hover(function () {
                $(this).css("color", "gray");
                $(this).css("text-decoration", "underline");
                $(this).css("cursor", "pointer");
            }, function () {
                $(this).css("color", "black");
                $(this).css("text-decoration", "none");
                $(this).css("cursor", "default");
            });

        });
    </script>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <hr style="border:0px; border-top: 5px double #000;">
            <h2 class="text-bg-dark text-center" id="demo">TENDENCIAS POLÍTICAS</h2>
            <hr style="border:0px; border-top: 5px double #000;">

            <div class="col-8">
                <img id="op" class="w-100"
                    src="https://media.primicias.ec/2022/11/28194234/28-jorge-glas-salida-carcel-1024x574.jpg" alt="">
                <br>
                <h2 id="titulo" style="text-align: justify;">Política Gobierno y Procuraduría piden la revocatoria de la
                    libertad de Glas</h2>
                <p>SNAI y la Procuraduría presentaron escritos para que se revoque la medida cautelar que favoreció al
                    exvicepresidente Jorge Glas.</p>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12" style="text-align: justify;">
                        <h2 class="titulos">Rehabilitación del edificio de Contraloría costó USD 22,2 millones</h2>
                        <p>El edificio matriz de Contraloría fue incendiado por manifestantes durante el paro de 2019.
                            USD 12,1 millones fueron cubiertos por la aseguradora.</p>
                    </div>
                    <br>
                    <div class="col-12" style="text-align: justify;">
                        <h2 class="titulos">Corte avala consulta para que Sevilla Don Bosco sea cantón</h2>
                        <p>Según la Corte Constitucional, la propuesta de consulta popular para que Sevilla Don Bosco se
                            convierta en cantón, cumple con los parámetros.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $noticias = [
            [
                "titulo" => "Iza pregunta a Jiménez: “¿Nos está amenazando Ministro?”",
                "contenido" => "Dirigentes de la Conaie, Feine y Fenocin advirtieron que el Gobierno no debe provocarles y debe cumplir acuerdos. Gobierno dice que está cumpliendo.",
                "img" => "https://media.primicias.ec/2022/11/30095432/1-21-765x429.jpg"
            ],
            [
                "titulo" => "Ecuador abordará con Perú y Colombia seguridad en fronteras",
                "contenido" => "El canciller Juan Carlos Holguín confirmó la visita a Ecuador, del secretario de Seguridad Nacional de Estados Unidos.",
                "img" => "https://media.primicias.ec/2022/10/13075308/13-10-2022-canciller-ecuador-765x429.jpg"
            ],
            [
                "titulo" => "López Obrador viajará a Perú para cumbre de Alianza del Pacífico",
                "contenido" => "El presidente mexicano López Obrador anunció fecha para entregar en Perú, la presidencia temporal del organismo a su par, Pedro Castillo.",
                "img" => "https://media.primicias.ec/2021/12/13144424/13-AMLO-presidente-mexico-765x429.jpg"
            ],
            [
                "titulo" => "Ministerio del Interior recaudará tasas por migración desde diciembre",
                "contenido" => "Además de migración, se incluye el cobro de servicios de seguridad privada y sustancias catalogadas a fiscalización.",
                "img" => "https://media.primicias.ec/2021/12/15082740/15-12-2021-recaudacion-impuestos-sri-2021-765x429.jpg"
            ],
            [
                "titulo" => "El presidente Lasso convoca a un referendo con ocho preguntas",
                "contenido" => "El Consejo Nacional Electoral (CNE) tiene un plazo máximo de 15 días para convocar a elecciones y otros 60 días para ejecutar la votación.",
                "img" => "https://media.primicias.ec/2022/11/29153637/Lasso-8-765x429.jpg"
            ]

        ];
        $lista = [
            "Jorge Glas salió de la Cárcel 4 tras obtención de medida cautelar",
            "Tensión en la Corte entre la Fiscal y Pablo Celi por caso Las Torres",
            "Uno de los nuevos vocales del Cpccs tiene orden de captura",
            "La división entre Pachakutik y la Conaie se hace más profunda",
            "EE. UU. espera pico de migración irregular tras el fin de la expulsión inmediata",
            "Jueza dispone reintegro de Fernando Villavicencio a la Asamblea",
            "HOla"
        ];
        ?>
        <div class="row my-5">
            <div class="col-9">
                <?php
                foreach ($noticias as $noticia) {
                    echo "<div class='row'>";
                    echo '<div class="col-8 slide-element" style="text-align: justify;">';
                    echo '<h3 class="titulos">' . $noticia['titulo'] . '</h3>';
                    echo '<p>' . $noticia['contenido'] . '</p>';
                    echo '</div>';
                    echo '<div class="col-4">';
                    echo '<img id="op" class="fade-element w-100" src="' . $noticia['img'] . '" alt="">';
                    echo '</div>';
                    echo '</div>';
                    echo '<br class="mt-2">';
                }
                ?>
            </div>
            <div class="col-3 border p-3" style="text-align: justify;">
                <ol>
                    <?php
                    foreach ($lista as $valor) {
                        echo "<h3><li>$valor</li></h3>";
                    }
                    ?>
                </ol>
            </div>
        </div>
        <h1 class="mt-4 text-center">Dinos de que temas quieres que hablemos!</h1>
        <form action="" method="get">
            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" id="nombres" class="form-control w-100"><br>

            <label for="apellidos">Tema:</label>
            <textarea name="tema" id="tema" cols="30" rows="10" class="form-control w-100"></textarea>

            <input type="submit" name="submit" value="Enviar" class="btn btn-primary mt-4">
        </form>

    </div>
</body>
<script src="base.js"></script>

</html>