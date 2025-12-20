document.addEventListener("DOMContentLoaded", () => {
  Fancybox.bind("[data-fancybox]", {
    animated: true,
    showClass: "f-fadeIn",
    hideClass: "f-fadeOut",
    dragToClose: true,
  });
  new Rellax(".rellax");
  ScrollReveal().reveal(".reveal");
});
