let docTitle = document.title;
window.addEventListener("blur", () => {
    document.title = "Ты куда пропал?";
})
window.addEventListener("focus", () => {
    document.title = docTitle;
})