export {}
const header: HTMLHeadElement = document.createElement("header");
const container: HTMLDivElement = document.createElement("div");
const div: HTMLDivElement = document.createElement("div");
const logo: HTMLImageElement = document.createElement("img");
const logoLink: HTMLAnchorElement = document.createElement("a");
const linksItems: HTMLUListElement = document.createElement("ul");
const formSearch: HTMLFormElement = document.createElement("form");
const searchInput: HTMLInputElement = document.createElement("input");
const buttonContainer: HTMLDivElement = document.createElement("div");
const searchButton: HTMLButtonElement = document.createElement("button");

header.classList.add("p-3", "bg-dark", "text-white");
container.classList.add("container");
div.classList.add("d-flex", "flex-wrap", "align-items-center", "justify-content-center", "justify-content-lg-start");
logo.srcset = "icon.png"
logo.alt = "ESPE-NEWS"
logoLink.classList.add("d-flex", "align-items-", "mb-2", "mb-lg-0", "text-white", "text-decoration-none");
logoLink.href = "index.html";
linksItems.classList.add("nav", "col-12", "col-lg-auto", "me-lg-auto", "mb-2", "justify-content-center", "mb-md-0");
formSearch.classList.add("col-12", "col-lg-auto", "mb-3", "mb-lg-0", "me-lg-3");
searchInput.type = "search";
searchInput.classList.add("form-control", "form-control-dark");
searchInput.placeholder = "Buscar...";
searchInput.ariaLabel = "Search";
buttonContainer.classList.add("");
buttonContainer.textContent;
searchButton.classList.add("btn", "btn-outline-light", "me-2");
searchButton.type = "button";

logoLink.appendChild(logo);
addLinkToNav("INICIO", "#");
addLinkToNav("NOTICIAS", "#");
addLinkToNav("AMERICA LATINA", "#");
addLinkToNav("INTERNACIONAL", "#");
addLinkToNav("DEPORTES", "#");
formSearch.appendChild(searchInput);
buttonContainer.appendChild(searchButton);
div.appendChild(logoLink);
div.appendChild(linksItems);
div.appendChild(formSearch);
div.appendChild(buttonContainer);
container.appendChild(div);
header.appendChild(container);
document.body.prepend(header);


function addLinkToNav(title: string, href: string) {
    const newLink: HTMLLIElement = document.createElement("li");
    const a: HTMLAnchorElement = document.createElement("a");
    a.classList.add("nav-link", "px-2", "text-white");
    a.textContent = title;
    a.href = href;
    newLink.appendChild(a);
    linksItems.appendChild(newLink);
}