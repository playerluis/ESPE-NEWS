<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="node_modules/jquery-color/dist/jquery.color.min.js"></script>
    <title>Inicio</title>
</head>
<style>
    em {
        font-size: 9pt;
    }
</style>

<body>

    <div class="container my-5">
        <div class="row">
            <hr style="border:0px; border-top: 5px double #000;">
            <h2 class="text-bg-dark text-center" id="demo">PANORAMA DIARIO</h2>
            <hr style="border:0px; border-top: 5px double #000;">

            <?php
            if (!file_exists("data-index.json")) {

                $noticiero_control = [
                    "noticia principal" => [
                        "titulo" => "Cómo China se quedó atrapada en su política de covid cero y por qué las vacunas son su talón de Aquiles",
                        "imagen" => "https://ichef.bbci.co.uk/news/800/cpsprodpb/9405/production/_127839873_0e053b09dda7dd2ffb6361999847f979fce18df2.png.webp",
                        "texto principal" => "Mientras el mundo aprende a convivir con el virus, Pekín insiste en eliminarlo, una estrategia que alimenta el descontento social y tiene elevados costos económicos.",
                        "pie de texto" => "Cómo China está silenciando las protestas contra el gobierno y su política de 'covid cero'"
                    ],
                    "noticias secundarias" => [
                        [
                            "imagen" => "https://ichef.bbci.co.uk/news/800/cpsprodpb/D203/production/_127836735_salvamarnunki.jpg.webp",
                            "texto" => "Qué se sabe de los inmigrantes cuya foto llegando a España en la pala del timón de un petrolero dio la vuelta al mundo",
                            "fecha" => "30 noviembre 2022."
                        ],
                        [
                            "imagen" => "https://ichef.bbci.co.uk/news/800/cpsprodpb/115DB/production/_123913117_labourcamps.png.webp",
                            "texto" => "La pobreza en el multimillonario Qatar, uno de los países más ricos del mundo",
                            "fecha" => "30 noviembre 2022."
                        ],
                        [
                            "imagen" => "https://ichef.bbci.co.uk/news/800/cpsprodpb/D2F4/production/_127840045_gettyimages-1445833456.jpg.webp",
                            "texto" => "Mundial: 3 claves que explican la eliminación de México en la fase de grupos de Qatar 2022 (el mayor fracaso en cuatro décadas)",
                            "fecha" => "5 Horas."
                        ],
                        [
                            "imagen" => "https://ichef.bbci.co.uk/news/800/cpsprodpb/16AFB/production/_127832929_gettyimages-1300838513.jpg.webp",
                            "texto" => "Mundial 2022: quiénes son las 3 mujeres que dirigirán por primera vez un partido de hombres en la historia de los mundiales",
                            "fecha" => "30 noviembre 2022."
                        ],
                        [
                            "imagen" => "https://ichef.bbci.co.uk/news/800/cpsprodpb/19FC/production/_127825660_volcanoindex.png.webp",
                            "texto" => "Erupción de Mauna Loa: ¿qué está pasando dentro del volcán más grande del mundo?",
                            "fecha" => "30 noviembre 2022."
                        ],
                        [
                            "imagen" => "https://ichef.bbci.co.uk/news/800/cpsprodpb/12681/production/_127839357_crop.jpg.webp",
                            "texto" => "Todo acerca de la reina isabel",
                            "fecha" => "30 noviembre 2022."
                        ],
                        [
                            "imagen" => "https://ichef.bbci.co.uk/news/800/cpsprodpb/188F/production/_127778260_gettyimages-1443291131.jpg.webp",
                            "texto" => "Lady Susan Hussey: la madrina del príncipe William renuncia por comentarios a la jefa de una organización benéfica",
                            "fecha" => "10 horas."
                        ],
                        [
                            "imagen" => "https://ichef.bbci.co.uk/news/800/cpsprodpb/5909/production/_127839722_gettyimages-460270604.jpg.webp",
                            "texto" => "Muere Christine McVie, cantante de la emblemática banda británica Fleetwood Mac y autora de grandes éxitos como \"Little Lies\"",
                            "fecha" => "30 noviembre 2022."
                        ],

                    ],
                    "noticia principal 2" => [
                        "titulo" => "Cómo Venezuela se convirtió con la ayuda de Irán en el \"único país latinoamericano que cuenta con drones armados\"",
                        "imagen" => "https://ichef.bbci.co.uk/news/800/cpsprodpb/14A00/production/_127808448_dron.jpg.webp",
                        "fecha" => "30 noviembre 2022."
                    ],
                    "noticias secundarias 2" => [
                        [
                            "imagen" => "https://ichef.bbci.co.uk/news/768/cpsprodpb/5D46/production/_127787832_ucrania.jpg.webp",
                            "texto" => "La impactante imagen satelital que muestra la dimensión de los apagones en Ucrania",
                            "fecha" => "22 noviembre 2022."
                        ],
                        [
                            "imagen" => "https://ichef.bbci.co.uk/news/800/cpsprodpb/32CB/production/_127630031_cb37a983-0e9d-41d9-80bd-0025c5b6ce06.jpg.webp",
                            "texto" => "La Noche de los Cristales Rotos: las imágenes inéditas del horror causado por los nazis",
                            "fecha" => "26 noviembre 2022."
                        ],
                        [
                            "imagen" => "https://ichef.bbci.co.uk/news/800/cpsprodpb/11F59/production/_127616537_gettyimages-1244707935.jpg.webp",
                            "texto" => "Las escenas de júbilo en Ucrania tras la retirada de las tropas rusas de Jersón",
                            "fecha" => "12 Horas."
                        ],
                        [
                            "imagen" => "https://ichef.bbci.co.uk/news/800/cpsprodpb/13A52/production/_127466408_guardian-of-the-mangroves.jpg.webp",
                            "texto" => "La impresionante foto de un cocodrilo en Cuba que ganó el máximo premio de los Mangrove Photography Awards (y otras espectaculares imágenes del certamen)",
                            "fecha" => "20 noviembre 2022."
                        ]
                    ],
                    "noticia final" => [
                        "imagen" => "https://ichef.bbci.co.uk/news/800/cpsprodpb/2942/production/_127826501_gettyimages-103743129.jpg.webp",
                        "texto" => "Los crímenes por los que condenaron a \"La Barbie\", el narco cuyo paradero exacto se desconoce en el sistema de prisiones de EE.UU.",
                        "fecha" => "29 noviembre 2022."

                    ]
                ];

                file_put_contents(
                    "data-index.json",
                    json_encode($noticiero_control, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
                );
            }

            $data = json_decode(file_get_contents("data-index.json"), true);

            ?>

            <div class="col-sm-12 col-md-6">
                <img src=<?php echo '"' . $data["noticia principal"]["imagen"] . '"' ?> alt="" class="w-100">
            </div>
            <a class="col-sm-12 col-md-6 text-decoration-none text-black" href="#" style="text-align: justify;">
                <h2>
                    <?php echo $data["noticia principal"]["titulo"] ?>
                </h2>
                <p>
                    <?php echo $data["noticia principal"]["texto principal"] ?>
                </p>
                <hr>
                <b>
                    <?php echo $data["noticia principal"]["pie de texto"] ?>
                </b>
            </a>

        </div>

        <div class="row my-4">
            <?php
            foreach ($data["noticias secundarias"] as $noticia) {
                echo '<a class="col-lg-3 col-md-4 p-2 text-decoration-none text-black" href="#">';
                echo '<img src="' . $noticia["imagen"] . '" alt="" class="w-100">';
                echo '<b style="text-align: justify;">' . $noticia["texto"] . '</b>';
                echo '<p><em>' . $noticia["fecha"] . '</em></p>';
                echo '</a>';
            }
            ?>
        </div>

    </div>
    <div style="height: 200px; background-color: rgb(216, 216, 216);">
    </div>

    <div class="container my-5">

        <div class="row fade-element">
            <div class="col-12 col-md-4">
                <h2 style="text-align: justify;">
                    <?php echo $data["noticia principal 2"]["titulo"] ?>
                </h2>
                <p>
                    <em>
                        <?php echo $data["noticia principal 2"]["fecha"] ?>
                    </em>
                </p>
            </div>
            <div class="col-12 col-md-8">
                <img src=<?php echo '"' . $data["noticia principal 2"]["imagen"] . '"' ?> alt="" class="w-100">
            </div>
        </div>

        <div class="row my-4">
            <?php
            foreach ($data["noticias secundarias 2"] as $noticia) {
                echo '<a class="fade-element col-lg-3 col-md-4 p-2 text-decoration-none text-black" href="#">';
                echo '<img src="' . $noticia["imagen"] . '" alt="" class="w-100">';
                echo '<b style="text-align: justify;">' . $noticia["texto"] . '</b>';
                echo '<p><em>' . $noticia["fecha"] . '</em></p>';
                echo '</a>';
            }
            ?>
        </div>

        <div class="fade-element row p-4">
            <div class="col-12 col-md-8">
                <img src=<?php echo '"' . $data["noticia final"]["imagen"] . '"' ?> alt="" class="w-100">
            </div>
            <div class="col-12 col-md-4">
                <h2>
                    <?php echo $data["noticia final"]["texto"] ?>
                </h2>
                <p>
                    <em>
                        <?php echo $data["noticia final"]["fecha"] ?>
                    </em>
                </p>
            </div>
        </div>
    </div>
    <div style="height: 200px; background-color: rgb(216, 216, 216);">
</body>
<script src="base.js"></script>

</html>