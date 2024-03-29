<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <title>Acerca de</title>
    <style>
        label.error {
            color: hsl(0, 74%, 64%);
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>
            <center>ESPE NEWS</center>
        </h2>
        <hr>
        <p>
            Somos una cadena universitaria de noticias que aborda la actualidad preferentemente a través
            de noticias y el despliegue de medios de producción humanos y técnicos. El reportaje es un género que
            engloba
            todos los géneros y suele ser escrito por un reportero. Son historias de cierta actualidad, con citas de los
            personajes, pequeñas entrevistas, datos, y que plantean un tema concreto sacando ciertas conclusiones. Por
            lo tanto, tiene un poco de noticia, de entrevista, de opinión. Los temas de los reportajes se abordan en
            profundidad y detalladamente. La frecuencia con la que se emiten este tipo de programas suele ser semanal,
            aunque hay formatos que emiten de forma diaria. Es un espacio grabado con antelación y cuenta con personajes
            y espacio reales.<br>
            <br>
            <hr>
        <div class="site-section site-block-appointment">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 mb-5 pl-lg-5 order-1 order-lg-2">
                        <div class="pl-lg-5 ml-lg-5">
                            <h2 id="contactanos" class="site-heading text-black"><strong>!Informate !</strong> </h2>

                            <p class="lead text-black"> <br>¡OBTEN MAS INFORMACIÓN!
                            </p>
                            <p align="justify" class="text-black-opacity-5"> <br> Llene el formulario digital e
                                ingrese correctamente la información solicitada, para ser atendido por un
                                funcionario.
                            </p>
                            <center>
                                <img src="https://www.espe.edu.ec/wp-content/uploads/2022/01/ESPEtransparente.png"
                                    class="img-fluid" alt="..." style="width: 800px;">
                            </center>
                        </div>
                    </div>

                    <div class="col-lg-6 order-2 order-lg-1 rounded-3" style="background-color: rgb(44, 44, 44);">


                        <form name="contacto" action="acerca_de.php" method="POST" class="p-5 bg-rgb(44, 44, 44)">

                            <div class="row form-group">
                                <div class="col-md-6 mb-3 mb-md-0" style="padding: 5px; color: white;">
                                    <label class="font-weight-bold" for="fname">Nombre</label>
                                    <input type="text" id="fname" name="fname" class="form-control"
                                        placeholder="Nombre">
                                </div>
                                <div class="col-md-6" style="padding: 5px; color: white;">
                                    <label class="font-weight-bold" for="lname">Apellido</label>
                                    <input type="text" id="lname" name="lname" class="form-control"
                                        placeholder="Apellido">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-6 mb-3 mb-md-0" style="padding: 5px; color: white;">
                                    <label class="font-weight-bold" for="cell">Telefono</label>
                                    <input type="number" id="cell" name="cell" class="form-control datepicker px-2"
                                        placeholder="Telefono Celular">
                                </div>
                                <div class="col-md-6" style="padding: 5px; color: white;">
                                    <label class="font-weight-bold" for="email">Correo Electronico</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Correo">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12" style="padding: 5px; color: white;">Mensaje</label>
                                    <textarea name="note" id="note" cols="30" rows="5" class="form-control"
                                        placeholder="Escribe algún mensaje o pregunta..."></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Enviar" class="btn"
                                        style="background: white; color: black;">
                                </div>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <br>
    </div>
</body>
<script src="base.js"></script>

</html>

<script>
    jQuery.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Ingrese solo texto");

    $(function () {
        // Initialize form validation on the registration form.
        // It has the name attribute "registration"
        $("form[name='contacto']").validate({
            //Reglas de validacion
            rules: {

                fname: {
                    required: true,
                    lettersonly: true
                },

                lname: {
                    required: true,
                    lettersonly: true
                },

                cell: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                },

                email: {
                    required: true,
                    email: true
                },

            },
            // Mensajes especificos de error de validacion
            messages: {
                fname: {
                    required: "Por favor, introduzca su nombre",
                },
                lname: {
                    required: "Por favor, introduzca su apellido",
                },
                cell: {
                    required: "Por favor, introduzca su numero de telefono",
                    minlength: "Ingrese 10 digitos",
                    maxlength: "Ingrese 10 digitos"
                },
                email: {
                    required: "Por favor, introduzca una dirección de correo",
                    email: "Por favor, introduzca una direccion de correo valida"
                },
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>


<?php
$datos = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['fname'])) {
        $fname = $_POST['fname'];
        $datos['fname'] = $fname;
    }
    if (isset($_POST['lname'])) {
        $lname = $_POST['lname'];
        $datos['lname'] = $lname;
    }
    if (isset($_POST['cell'])) {
        $cell = $_POST['cell'];
        $datos['cell'] = $cell;
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $datos['email'] = $email;
    }
    if (isset($_POST['note'])) {
        $note = $_POST['note'];
        $datos['note'] = $note;
    }

    // Concatenar los datos en una cadena de texto
    $datos = "Nombre: $fname\nApellido: $lname\nTelefono: $cell\nCorreo Electronico: $email\nMensaje: $note\n\n";

    // Abrir el archivo de texto plano
    $archivo = fopen("datosPrueba.txt", "a");

    // Escribir los datos en el archivo de texto plano
    fwrite($archivo, $datos);

    // Cerrar el archivo
    fclose($archivo);
}
?>