import { D, W } from "./variables.js";

function showOrHideOptions(button, classToTag) {
    if (button.classList.contains("button-subOption"))
        showOrHide(button.nextElementSibling, classToTag);
    else if (button.classList.contains("suboption-container"))
        showOrHide(button, classToTag);
    else showOrHide(button.parentElement.parentElement, classToTag);
}

function showOrHide(button, classToTag) {
    if (classToTag === "show") button.classList.remove("hidden");
    else button.classList.add("hidden");
}

D.addEventListener("mouseover", (e) => {
    if (
        e.target.matches(".button-subOption") ||
        e.target.matches(".suboption-container") ||
        e.target.matches(".suboption-container > li > a")
    )
        showOrHideOptions(e.target, "show");
});

D.addEventListener("mouseout", (e) => {
    if (
        e.target.matches(".button-subOption") ||
        e.target.matches(".suboption-container") ||
        e.target.matches(".suboption-container > li > a")
    )
        showOrHideOptions(e.target, "hidden");
});
