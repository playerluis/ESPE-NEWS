<?php
function validarNombre($nombre): bool
{
    $patron = '/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/';
    return preg_match($patron, $nombre) === 1;
}
// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica si se han llenado todos los campos
    if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['noticia']) && !empty($_POST['comentarios'])) {
        // Obtiene los datos del formulario
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $noticia = $_POST['noticia'];
        $comentarios = $_POST['comentarios'];

        if (!validarNombre($nombre)) {
            echo "<script>alert('Revise que su nombre este escrito correctamente')</script>";
        } else {
            // Crea el archivo en la carpeta noticias y guarda los datos
            $archivo = fopen('Registros/noticias.txt', 'a');
            fwrite($archivo, "Nombre: " . $nombre . "\n");
            fwrite($archivo, "Correo: " . $correo . "\n");
            fwrite($archivo, "Noticia: " . $noticia . "\n");
            fwrite($archivo, "Comentarios: " . $comentarios . "\n\n");
            fclose($archivo);

            // Limpia los campos
            $_POST['nombre'] = '';
            $_POST['correo'] = '';
            $_POST['noticia'] = '';
            $_POST['comentarios'] = '';

            // Muestra una alerta de éxito
            echo "<script>alert('Los datos se han guardado correctamente.')</script>";
        }


    } else {
        // Muestra una alerta de error si no se han llenado todos los campos
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
    <title>Noticias</title>
    <script src="node_modules\jquery\dist\jquery.min.js" type=""></script>
    <script src="node_modules/jquery-color/dist/jquery.color.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#tarjeta").hover(function () {
                $(this).animate({ opacity: '0.45' });
            }, function () {
                $(this).stop().animate(
                    { opacity: '1' });
            });
            $(document).ready(function () {
                $("#tarjeta2").hover(function () {
                    $(this).animate({ opacity: '0.45' });
                }, function () {
                    $(this).stop().animate(
                        { opacity: '1' });
                });
                $(document).ready(function () {
                    $("#tarjeta3").hover(function () {
                        $(this).animate({ opacity: '0.45' });
                    }, function () {
                        $(this).stop().animate(
                            { opacity: '1' });
                    });
                });
            });
        });
    </script>

</head>

<body>
    <div class="container">
        <!--Implementacion de Carrusel-->
        <!--Aparte de las imagenes todas las demas caracteristicas del carrusel estan por defecto-->
        <div style="padding: 1%;">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.elcomercio.com/wp-content/uploads/2021/11/fiestas-de-quito-700x391.png"
                            class="d-block w-100" alt="..." width="450px" height="650px">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.juiciocrudo.com/pic/square/1200x637/656168ada6b3885bda4f81200436ed11f7def42e.jpg"
                            class="d-block w-100" alt="..." width="450px" height="650px">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.eluniverso.com/resizer/S7dKaxpfIZ5CDU_E5m_Wt1lXr-4=/arc-anglerfish-arc2-prod-eluniverso/public/WYNQHPJRIJHDJFFPGL4CSNK4MA.jpg"
                            class="d-block w-100" alt="..." width="450px" height="650px">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!--Bloque de Texto-->
        <hr style="border:0px; border-top: 5px double #000;">
        <h2 class="text-bg-dark text-center" id="demo">INFÓRMATE SANTO DOMINGO</h2>
        <hr style="border:0px; border-top: 5px double #000;">

        <div class="slide-element container">
            <div style="text-align: justify;">
                Facturación electrónica ya es obligatoria en Ecuador: qué comprobantes físicos siguen teniendo vigencia.
                El 100 % de los contribuyentes obligados a emitir comprobantes electrónicos ya están autorizados por el
                SRI para hacerlo. Desde este 30 de noviembre
                del 2022 la facturación electrónica es obligatoria en el país: las personas naturales y empresas están
                obligadas a emitir comprobantes electrónicos en todas sus transacciones. El 100 % de los contribuyentes
                que deben hacerlo ya está autorizado.
            </div>
        </div>
        <br>
        <div class="container">
            <div class="col-md-4">
                <h2>Noticias</h2>
            </div>
        </div>

        <!--Tarjetas-->
        <!--Clase contener-->
        <div class="container">
            <div class="row">
                <div class="fade-element col-md-4" style="padding: 20px">
                    <!--Clase de la tarjeta modificada en el centrado del texto y el background de la tarjeta-->
                    <div class="card text-center text-bg-primary mb-3" style="width: 18rem">
                        <img id="tarjeta"
                            src="https://www.elcomercio.com/wp-content/uploads/2021/12/fiestas-700x391.jpg"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Fiestas de Quito: más de 190.000 personas se espera que asistan a los
                                desfiles de la Confraternidad y Mascarada Nocturna</h5>
                            <p class="card-text">
                                El Desfile de la Confraternidad, realizado el sábado pasado, fue parte de la agenda de
                                festejos por los 485 años de fundación de la capital ecuatoriana.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="fade-element col-md-4" style="padding: 20px">
                    <div class="card text-center text-bg-danger mb-3" style="width: 18rem">
                        <img id="tarjeta2" src="http://hee.gob.ec/wp-content/uploads/2022/06/tabaco2.jpeg"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Día mundial sin tabaco
                            </h5>
                            <p class="card-text">
                                La unidad de Salud Mental y Cardio Metabólica de nuestro hospital, organizó una Casa
                                Abierta en el marco del “Día Mundial Sin Tabaco”, con el objetivo de brindar información
                                preventiva en el ámbito físico, mental y social, en la cual participaron activamente
                                nuestros usuarios.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="fade-element col-md-4" style="padding: 20px">
                    <div class="card text-center text-bg-dark" style="width: 18rem">
                        <img id="tarjeta3"
                            src="https://www.eluniverso.com/resizer/VogwUunK6aWCDWf8wvCjDeauCNY=/1482x1005/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/XJDC347M2THMZBM6YIPQKW6H74.jpg"
                            class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h6 class="card-title">Pronóstico del tiempo para la mañana y tarde de este jueves 1 de
                                diciembre, según el Inamhi</h6>
                            <p class="card-text">
                                El Instituto Nacional de Meteorología e Hidrología (Inamhi) emitió un boletín
                                meteorológico de temperaturas altas en el día y de bajas en la noche con vigencia hasta
                                el 5 de diciembre.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Bloque de Texto-->
        <hr style="border:0px; border-top: 5px double #000;">
        <h2 class="text-bg-dark text-center" id="demo">PREGUNTAS 🤔</h2>
        <hr style="border:0px; border-top: 5px double #000;">

        <!--Formulario-->
        <form id="form-noticias" method="POST" action="">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                <label for="nombre">Nombre y Apellido</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="correo" name="correo" placeholder="name@gmail.com">
                <label for="correo">Correo</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="noticia" name="noticia" style="height: 100px"></textarea>
                <label for="noticia">Si tienes alguna noticia háznoslo saber aquí.</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="comentarios" name="comentarios" style="height: 100px"></textarea>
                <label for="comentarios">Déjanos tus comentarios para mejorar el sitio web.</label>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-secondary" type="submit">Enviar</button>
            </div>
        </form><br><br>
    </div>
</body>
<script src="base.js"></script>

</html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>