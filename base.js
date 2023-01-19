

$(() => {
	$("<link>")
		.attr({
			rel: "stylesheet",
			type: "text/css",
			href: "custom_styles/transtions.css",
		})
		.appendTo("head");

	$("<link>")
		.attr({
			rel: "stylesheet",
			type: "text/css",
			href: "node_modules/bootstrap/dist/css/bootstrap.min.css",
		})
		.appendTo("head");


	$(document.body)
		.addClass("nav_top") 
		.prepend(
			$("<header>")
				.addClass("mx-1 mt-1 p-3 bg-dark text-white fixed-top")
				.css("border-radius", "25px")
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
												.css(
													"width",
													"90px"
												)
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
				.addClass("bg-dark text-center text-white").html(`
  <div class="container p-4 pb-0">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase text-danger">Mision</h5>
        <p>
        El propósito principal del periodismo es dar a los ciudadanos información veraz y oportuna para hacer valer sus derechos ante la sociedad, además, mayormente es utilizada por los medios de comunicación para transmitir noticias, opiniones o críticas que enriquezcan al público.
        </p>
      </div>
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase text-danger">Vision</h5>
        <p>
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
        <p class="text-center text-danger">&copy; Realizado por: Jordy, Kevin, Melany, Jonathan, Steeven</p>
    </footer>
  </div>
  `)
		);

	addLinkToNav("Inicio", "index.html");
	addLinkToNav("Noticias", "noticias.html");
	addLinkToNav("Seguridad", "seguridad.html");
	addLinkToNav("Politica", "politica.html");
	addLinkToNav("Deportes", "deportes.html");
	addLinkToNav("Acerca de", "acerca_de.html");

	function addLinkToNav(title, href) {
		$("#list-links").append(
			$("<li>")
				.addClass("to-gray-hover")
				.css("border-radius", "15px")
				.append(
					$("<a>")
						.addClass("nav-link px-3 text-white")
						.text(title)
						.attr("href", href)
				)
		);
	}
});
