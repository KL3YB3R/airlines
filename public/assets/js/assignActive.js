import { D, W } from "./variables.js";

function assignActive(optionActive) {
    optionActive.parentElement
        .querySelectorAll(".assign-active")
        .forEach((option) => {
            option.classList.remove("active");
            if (optionActive === option) {
                if (!option.classList.contains("active"))
                    option.classList.add("active");
                else option.classList.remove("active");
            }
        });
}

D.addEventListener("click", (e) => {
    if (e.target.matches(".assign-active")) assignActive(e.target);
});
