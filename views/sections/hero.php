<header class=" relative h-screen min-h-[400px] md:h-[600px] w-screen"
  id="inicio">
  <div id="parallax" class=" w-full h-full absolute inset-0 bg-cover bg-[30%] md:bg-center -z-10 " style="background-image: url(/drawing-portfolio/public/assets/images/header.png);"></div>

  <div class="relative max-w-[70rem] mx-auto h-full">
    <div class="absolute right-0 bottom-0 translate-y-[-100%] px-6 py-2">
      <div class="flex justify-end text-right">
        <div class="w-full" style="text-shadow: 0 20px 50px hsla(0,0%,0%,8);">
          <h1 class="text-4xl md:text-6xl font-bold tracking-wide text-white font-['Segoe_Script','Brush_Script_MT','cursive']">Portafolio de Arte</h1>
          <h2 class="text-2xl md:text-4xl font-bold tracking-wide text-white">
            Explora las distintas obras del autor.
          </h2>
          <p class="text-slate-100 text-xl">
            En cada una se ilustra una esencia única e inspirada de la realidad.
          </p>
        </div>
      </div>
    </div>
  </div>

</header>

<script>
  const container = document.getElementById("inicio");
  const media = document.getElementById("parallax");

  const handleScroll = () => {
    if (!container || !media) return;

    const rect = container.getBoundingClientRect();
    const scrolled = window.scrollY;
    const containerTop = scrolled + rect.top;
    const offset = (scrollY - containerTop) * 0.3;

    media.style.transform = `translateY(${offset}px)`;
  }

  document.addEventListener("scroll", handleScroll, {
    passive: true
  });
</script>