<nav class="fixed top-0 left-0 w-full z-50 transition-all duration-300" id="navbar">
  <div class="mx-auto max-w-7xl px-2 md:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">

      <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
        <button
          type="button"
          data-drawer-target="drawer-navigation"
          data-drawer-show="drawer-navigation"
          aria-controls="drawer-navigation"
          class="inline-flex items-center justify-center rounded-md p-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <span class="sr-only">Abrir menú</span>

          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

      <div class="absolute flex flex-1 inset-y-0 right-0 items-center pr-2  md:static md:inset-auto md:ml-6 md:pr-0">
        <p class="!font-['Segoe_Script','Brush_Script_MT','cursive'] text-xl text-slate-600">Galería de Steven</p>
      </div>

      <div class="flex items-center justify-center md:items-stretch md:justify-start">
        <div class="hidden md:ml-6 md:block">
          <div class="flex space-x-4">
            <a href="#acerca-de-mi" class="mx-3 text-sm lg:text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-gray-100 hover:text-gray-900">Acerca de mí</a>
            <a href="#galeria" class="mx-3 text-sm lg:text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-gray-100 hover:text-gray-900">Galería</a>
            <a href="#precios" class="mx-3 text-sm lg:text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-gray-100 hover:text-gray-900">Precios</a>
            <a href="#contacto" class="mx-3 text-sm lg:text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-gray-100 hover:text-gray-900">Contacto</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="drawer-navigation"
    class="fixed top-0 left-0 z-40 w-[60%] min-w-80 max-w-100 block md:hidden h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white"
    tabindex="1" aria-labelledby="drawer-navigation-label">

    <div class="border-b pb-4 flex items-center justify-between relative">
      <p class="!font-['Segoe_Script','Brush_Script_MT','cursive'] text-xl  text-slate-600">Galería de Steven</p>

      <button type="button"
        data-drawer-hide="drawer-navigation"
        aria-controls="drawer-navigation"
        class=" text-gray-400 hover:text-gray-900 rounded-lg p-2">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
        <span class="sr-only">Cerrar menú</span>
      </button>
    </div>

    <div class="space-y-2 mt-4">
      <a href="#acerca-de-mi" class="block p-2 text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-gray-100 hover:text-gray-900">Acerca de mí</a>
      <a href="#galeria" class="block p-2 text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-gray-100 hover:text-gray-900">Galería</a>
      <a href="#precios" class="block p-2 text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-gray-100 hover:text-gray-900">Precios</a>
      <a href="#contacto" class="block p-2 text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-gray-100 hover:text-gray-900">Contacto</a>
    </div>
  </div>
</nav>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("p[id]");
    const navLinks = document.querySelectorAll("nav a[href^='#']");

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          const id = entry.target.getAttribute("id");
          const navbar = document.getElementById("navbar");

          if (entry.isIntersecting) {
            navLinks.forEach((link) => {
              link.classList.remove("nav-active");

              if (id === "inicio") {
                navbar.classList.remove("backdrop-blur-md", "shadow-lg", "bg-gray-800/10");
              } else {
                navbar.classList.add("backdrop-blur-md", "shadow-lg", "bg-gray-800/10");
              }

              if (link.getAttribute("href") === `#${id}`) {
                link.classList.add("nav-active");
              }
            });
          }
        });
      }, {
        threshold: 0.3
      }
    );

    sections.forEach((sec) => observer.observe(sec));
  });
</script>