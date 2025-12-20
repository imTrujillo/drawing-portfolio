<nav class="fixed top-0 left-0 w-full z-50   transition-all duration-300" id="navbar">
  <div class="mx-auto max-w-7xl px-2 md:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
        <!-- Mobile menu button-->
        <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-700 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Abrir menú</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <div class="absolute flex flex-1 inset-y-0 right-0 flex items-center pr-2 md:static md:inset-auto md:ml-6 md:pr-0">
        <p class="!font-['Segoe_Script','Brush_Script_MT','cursive'] text-xl text-slate-600">Galería de Steven</p>
      </div>
      <div class="flex items-center justify-center md:items-stretch md:justify-start">
        <div class="hidden md:ml-6 md:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
            <!-- <a href="#inicio" class="px-3 py-2 text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-white/5 hover:text-white">Inicio</a> -->
            <a href="#acerca-de-mi" class="px-3 py-2 text-sm lg:text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-white/5 hover:text-white">Acerca de mí</a>
            <a href="#galeria" class=" px-3 py-2 text-sm lg:text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-white/5 hover:text-white">Galería</a>
            <a href="#precios" class="px-3 py-2 text-sm lg:text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-white/5 hover:text-white">Precios</a>
            <a href="#contacto" class="px-3 py-2 text-sm lg:text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-white/5 hover:text-white">Contacto</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <el-disclosure id="mobile-menu" hidden class="block md:hidden overflow-hidden transition-all duration-100 ease-out">

    <div class="space-y-1 px-2 pt-2 pb-3 backdrop-blur-lg">
      <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
      <!-- <a href="#inicio" class="block px-3 py-2 text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-white/5 hover:text-white">Inicio</a> -->
      <a href="#acerca-de-mi" class="block px-3 py-2 text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-white/5 hover:text-white">Acerca de mí</a>
      <a href="#galeria" class="block px-3 py-2 text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-white/5 hover:text-white">Galería</a>
      <a href="#precios" class="block px-3 py-2 text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-white/5 hover:text-white">Precios</a>
      <a href="#contacto" class="block px-3 py-2 text-lg font-light uppercase tracking-widest text-gray-800 hover:bg-white/5 hover:text-white">Contacto</a>
    </div>
  </el-disclosure>
</nav>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("[id]");
    const navLinks = document.querySelectorAll("nav a[href^='#']");

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          const id = entry.target.getAttribute("id");
          const navbar = document.getElementById("navbar");

          if (entry.isIntersecting) {
            navLinks.forEach((link) => {
              link.classList.remove("nav-active");

              if (entry.target.getAttribute("id") === "inicio") {
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
        threshold: 0.6,
      }
    );

    sections.forEach((sec) => observer.observe(sec));
  });
</script>