<section class="pt-6 bg-linear-to-b from-gray-500 to-gray-400 text-white/80 w-full overflow-hidden reveal">
  <div class=" mx-auto px-6 max-w-[70rem]">
    <div class="grid items-center grid-cols-1 md:grid-cols-2">

      <div class="mx-auto">
        <?php
        $id = "acerca-de-mi";
        $label = " ¡Hola! 👋 <br /> Soy Steven Trujillo";
        $color = "text-white/80";
        include __DIR__ . "/../components/title.php"; ?>

        <p class="max-w-lg mt-3 text-sm md:text-lg lg:text-xl text-gray-600 md:mt-8 text-white/70 text-justify">
          Soy estudiante universitario y participo activamente en talleres artísticos. En mis ratos libres me dedico al dibujo como artista amateur. Cultivo esta pasión desde los 10 años, y mi proceso de aprendizaje ha sido principalmente autodidacta. <br />
          Cada imagen es un fragmento del tiempo: una mezcla de gustos, emociones, y expresiones grabadas en un canvas o en el papel.
          En cada trazo, en cada color, hay un significado que trata de interpretar la realidad.
        </p>
      </div>


      <div class="relative">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="absolute inset-x-0 md:bottom-0 -translate-x-1/2 left-1/2 rotate-180 h-150 md:h-120 lg:h-150">
          <path fill="#3A434B" d="M34.4,-50.9C42.8,-41.3,46.6,-28.8,52.1,-16C57.7,-3.1,64.9,10.2,64.5,23.9C64,37.6,55.9,51.7,43.9,58.3C31.9,64.9,15.9,64.1,-0.7,65C-17.3,65.9,-34.5,68.6,-43.2,60.9C-51.9,53.2,-52.1,35.1,-56.7,18.9C-61.2,2.8,-70.1,-11.4,-68.8,-24.5C-67.5,-37.6,-56.1,-49.5,-42.9,-57.6C-29.8,-65.6,-14.9,-69.8,-0.9,-68.5C13,-67.2,26,-60.5,34.4,-50.9Z" transform="translate(100 100)" />
        </svg>

        <img class="relative w-[200px] md:w-full lg:max-w-md mx-auto 2xl:origin-bottom 2xl:scale-110" src="/drawing-portfolio/public/assets/images/avatar.png" alt="" />
      </div>

    </div>
  </div>
</section>