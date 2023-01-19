

$(() => {

    $("<link>")
        .attr({
            rel: "stylesheet",
            type: "text/css",
            href: "node_modules/bootstrap/dist/css/bootstrap.min.css",
        })
        .appendTo("head");

    $("<script>")
        .attr({
            src: "node_modules/jquery-color/dist/jquery.color.min.js",
            type: "text/javascript"
        })
        .appendTo("head");

    $(document.body)
        .addClass("nav_top")
        .prepend(
            $("<header>")
                .attr("id", "nav")
                .addClass("mx-1 mt-1 p-3 bg-dark text-white fixed-top")
                .css("border-radius", "20px")
                .append(
                    $("<div>")
                        .addClass("container")
                        .append([
                            $("<div>")
                                .addClass(
                                    "d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"
                                )
                                .append([
                                    $("<a>")
                                        .addClass(
                                            "d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"
                                        )
                                        .attr("href", "index.html")
                                        .append(
                                            $("<img>")
                                                .attr({
                                                    src: "resources/Logo_ESPE.png",
                                                    alt: "ESPE-NEWS",
                                                })
                                                .css("width", "90px").on({
                                                    mouseenter: function () {
                                                        $(this).animate({
                                                            "width": "100px"
                                                        }, 250);
                                                    },
                                                    mouseleave: function () {
                                                        $(this).animate({
                                                            "width": "90px"
                                                        }, 250);
                                                    }
                                                })
                                        ),

                                    $("<ul>")
                                        .attr("id", "list-links")
                                        .addClass(
                                            "nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"
                                        ),

                                    $("<form>")
                                        .addClass(
                                            "col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3"
                                        )
                                        .append(
                                            $("<input>")
                                                .addClass(
                                                    "form-control text-bg-dark"
                                                )
                                                .attr({
                                                    type: "search",
                                                    placeholder:
                                                        "Buscar...",
                                                    ariaLabel:
                                                        "Search",
                                                })
                                        ),

                                    $("<div>")
                                        .addClass("text-end")
                                        .append(
                                            $("<button>")
                                                .addClass(
                                                    "btn btn-outline-light me-2"
                                                )
                                                .text("BUSCAR")
                                        ),
                                ]),
                        ])
                )
        )
        .append(
            $("<footer>")
                .css("border-radius", "25px")
                .addClass("bg-dark text-center text-white fade-element")
                .html(`
                    <div class="container p-4 pb-0">
                        <div class="row">
                        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                            <h5 class="text-uppercase text-danger">Misión</h5>
                            <p style="text-align: justify;">
                            El propósito principal del periodismo es dar a los ciudadanos información veraz y oportuna para hacer valer sus derechos ante la sociedad, además, mayormente es utilizada por los medios de comunicación para transmitir noticias, opiniones o críticas que enriquezcan al público.
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                            <h5 class="text-uppercase text-danger">Visión</h5>
                            <p style="text-align: justify;">
                            Desarrollar e impulsar el periodismo para fortalecer y consolidar las comunicaciones sociales, que pongan en común las actividades, hechos, descubrimientos y acontecimientos de la humanidad para alcanzar mejores niveles de vida de los seres humanos y el ambiente que le rodea.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="container">
                        <footer class="pt-3 mt-4">
                            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                                <li class="nav-item"><a href="index.html" class="nav-link px-2 text-white">Inicio</a></li>
                                <li class="nav-item"><a href="index.html" class="nav-link px-2 text-white">Nuestros Servicios</a></li>
                                <li class="nav-item"><a href="acerca_de.html" class="nav-link px-2 text-white">Contacto</a></li>
                            </ul>
                            <p class="text-center text-danger">&copy; Realizado por: Luis, Jordy, Kevin, Melany, Jonathan, Steeven</p>
                        </footer>
                    </div>
                `)
        );

    var size = $("#nav").height();
    setInterval(function () {
        if (size != $("#nav").height()) {
            size = $("#nav").height();
            $(document.body).css("margin-top", parseInt(1.5 * $("#nav").height()) + "px")
        }
    }, 10);

    let anim = false; 
    $(document).on("scroll", e => {
        var scroll = $(e.target).scrollTop();
        var threshold = $(e.target).height() * 0.2;
        if (scroll > threshold && !anim) {
            anim = true;            
            $("#nav").animate({
                "top": "-150px"
            }, 700, () => anim = false)
        } else if (!anim) {
            anim = true;
            $("#nav").finish().animate({
                "top": "0px"
            }, 700, () => anim = false)
        }
    });

    
    let fadeElements = $(".fade-element").hide();
    $(window).on("scroll", function() {
        var posicionVentana = $(window).scrollTop();
        for (let i = 0; i < fadeElements.length; i++) {
            const element = fadeElements[i];
            var posicionElemento = $(element).offset().top;
            if (posicionVentana + $(window).height() > posicionElemento) {
                $(element).fadeIn(1000);
            } else {
                $(element).finish().hide();
            }
        }

    });

    let slideElements = $(".slide-element").css("position","relative");
    slideElements.css("left" , "-300px");
    $(window).on("scroll", function() {
        var posicionVentana = $(window).scrollTop();
        for (let i = 0; i < slideElements.length; i++) {
            const element = slideElements[i];
            var posicionElemento = $(element).offset().top;
            if (posicionVentana + $(window).height() > posicionElemento) {
                $(element).animate({
                    left: "0px"
                }, 500);
            } else {
                $(element).finish().animate({
                    left: "-300px"
                }, 200);;
            }
        }

    });

    addLinkToNav("Inicio", "index.html");
    addLinkToNav("Noticias", "noticias.html");
    addLinkToNav("Seguridad", "seguridad.html");
    addLinkToNav("Política", "politica.html");
    addLinkToNav("Deportes", "deportes.html");
    addLinkToNav("Acerca de", "acerca_de.html");

    function addLinkToNav(title, href) {
        $("#list-links").append(
            $("<li>")
                .addClass("mx-1")
                .css("border-radius", "15px")
                .append(
                    $("<a>")
                        .addClass("nav-link px-3 text-white")
                        .text(title)
                        .attr("href", href)
                ).on({
                    mouseenter: function () {
                        $(this).animate({
                            "font-size": "130%",
                            "background-color": "rgb(100, 100, 100)"
                        }, 250);
                    },
                    mouseleave: function () {
                        $(this).animate({
                            "font-size": "100%",
                            "background-color": "rgb(33, 37, 41)"
                        }, 250);
                    }
                })
        );
    }
});