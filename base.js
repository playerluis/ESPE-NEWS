var x = document.createElement("link");
x.setAttribute("rel", "stylesheet");
x.setAttribute("type", "text/css");
x.setAttribute("href", "custom_styles/transtions.css");
var y = document.createElement("link");
y.setAttribute("rel", "stylesheet");
y.setAttribute("type", "text/css");
y.setAttribute("href", "node_modules/bootstrap/dist/css/bootstrap.min.css");

document.head.appendChild(x);
document.head.appendChild(y);


var header = document.createElement("header");
var container = document.createElement("div");
var div = document.createElement("div");
var logo = document.createElement("img");
var logoLink = document.createElement("a");
var linksItems = document.createElement("ul");
var formSearch = document.createElement("form");
var searchInput = document.createElement("input");
var buttonContainer = document.createElement("div");
var searchButton = document.createElement("button");

header.classList.add("mx-1", "mt-1", "p-3", "bg-dark", "text-white");
header.style.borderRadius = "25px"

container.classList.add("container");
div.classList.add("d-flex", "flex-wrap", "align-items-center", "justify-content-center", "justify-content-lg-start");
logo.srcset = "resources/Logo_ESPE.png";
logo.style.width = "90px"
logo.alt = "ESPE-NEWS";
logoLink.classList.add("d-flex", "align-items-", "mb-2", "mb-lg-0", "text-white", "text-decoration-none");
logoLink.href = "index.html";
linksItems.classList.add("nav", "col-12", "col-lg-auto", "me-lg-auto", "mb-2", "justify-content-center", "mb-md-0");
formSearch.classList.add("col-12", "col-lg-auto", "mb-3", "mb-lg-0", "me-lg-3");
searchInput.type = "search";
searchInput.classList.add("form-control", "text-bg-dark");
searchInput.placeholder = "Buscar...";
searchInput.ariaLabel = "Search";
buttonContainer.classList.add("text-end");
buttonContainer.textContent;
searchButton.classList.add("btn", "btn-outline-light", "me-2");
searchButton.type = "button";
searchButton.textContent = "Buscar"
logoLink.appendChild(logo);

addLinkToNav("Inicio", "index.html");
addLinkToNav("Noticias", "noticias.html");
addLinkToNav("Seguridad", "seguridad.html");
addLinkToNav("Politica", "politica.html");
addLinkToNav("Deportes", "deportes.html");
addLinkToNav("acerca_de", "acerca_de.html");

formSearch.appendChild(searchInput);
buttonContainer.appendChild(searchButton);
div.appendChild(logoLink);
div.appendChild(linksItems);
div.appendChild(formSearch);
div.appendChild(buttonContainer);
container.appendChild(div);
header.appendChild(container);
document.body.prepend(header);


console.log("a");
function addLinkToNav(title, href) {
    var newLink = document.createElement("li");
    newLink.classList.add("to-gray-hover");
    newLink.style.borderRadius = "15px"
    var a = document.createElement("a");
    a.classList.add("nav-link", "px-3", "text-white");
    a.textContent = title;
    a.href = href;
    newLink.appendChild(a);
    linksItems.appendChild(newLink);
}
