
const otevrit = document.getElementById("otevrit");
const zavrit = document.getElementById("zavrit");
const modal = document.getElementById("dialog");

otevrit.addEventListener("click", () => {dialog.showModal()});
zavrit.addEventListener("click", () => {dialog.close()});