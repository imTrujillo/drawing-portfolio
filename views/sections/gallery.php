<div class="bg-[#bec4c0] py-10 reveal">
  <div class="container mx-auto px-4 py-8">
    <h2 class="flex justify-center w-full uppercase text-slate-500 text-4xl tracking-widest mb-4 scroll-mt-28" id="galeria">
      Galería
    </h2>

    <div x-data="{ 
            openTab: <?= $categorias[0]['id'] ?>,
            activeClasses: ' px-3 border-b text-slate-600 hover:text-black/50 transition-all duration-200',
            inactiveClasses: 'text-slate-500 hover:text-slate-700 hover:border-b transition-all duration-100',
            isModalOpen: false,
            foto: {},
            favoritos: JSON.parse(localStorage.getItem('favoritos')) || [],
            toggleFavorito(id) {
              if (this.favoritos.includes(id)){
                this.favoritos = this.favoritos.filter(f => f !== id);
              } else {
                this.favoritos.push(id);
              }
              localStorage.setItem('favoritos',JSON.stringify(this.favoritos));
            }
        }"
      x-effect="document.body.style.overflow = isModalOpen ? 'hidden' : 'auto'"
      class="p-6">
      <ul class="flex justify-center items-center divide-x divide-slate-600/60">
        <?php foreach ($categorias as $cat): ?>
          <li @click.prevent="openTab = <?= $cat['id'] ?>"
            :class="{ '-mb-px': openTab === <?= $cat['id'] ?> }" class="-mb-px mr-1">
            <a href="#" :class="openTab === <?= $cat['id'] ?> ? activeClasses : inactiveClasses"
              class="pb-2 font-light uppercase text-sm md:text-lg text-center tracking-widest mx-4 ">
              <?= htmlspecialchars($cat['name']) ?>
            </a>
          </li>
        <?php endforeach ?>
      </ul>

      <div class="w-full pb-8">
        <?php foreach ($categorias as $cat): ?>
          <div x-show="openTab === <?= $cat['id'] ?>">
            <p class="text-center text-slate-600 max-w-2xl mx-auto mt-4 mb-8">
              <?= $cat['description'] ?>
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 auto-rows-[180px] gap-4 grid-flow-dense max-w-[70rem] mx-auto">
              <?php
              $layouts = [
                'md:col-span-2 md:row-span-2',
                'md:row-span-2',
                'lg:row-span-3',
                ''
              ];

              $fotos = Picture::getPicturesByCategory($cat['id']);

              foreach ($fotos as $foto):
                $layout = $layouts[array_rand($layouts)];
              ?>
                <div class=" relative overflow-hidden rounded-2xl shadow-lg cursor-pointer group <?= $layout ?>"
                  @click="isModalOpen = true; foto = <?= htmlspecialchars(json_encode($foto), ENT_QUOTES, 'UTF-8') ?>">
                  <img
                    src="<?= $foto['image'] ?>"
                    alt="<?= $foto['name'] ?>"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 active:scale-105">


                  <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 active:opacity-100 transition-opacity duration-300">
                    <button
                      aria-label="Favorito"
                      class="absolute top-0 right-0 p-4 transition-colors text-slate-100">
                      <svg class="w-8 h-8 transition-transform" :class="favoritos.includes(<?= $foto['id'] ?>) ? 'scale-110' : ''" :fill="favoritos.includes(<?= $foto['id'] ?>) ? 'currentColor' : 'none'" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                      </svg>
                    </button>

                    <div class="absolute bottom-0 left-0 right-0 p-4">
                      <h4 class="text-lg font-semibold tracking-widest uppercase text-white">
                        <?= $foto['name'] ?>
                      </h4>
                      <p class="text-sm text-white/90">
                        <?= $foto['description'] ?>
                      </p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div
        x-show="isModalOpen"
        x-transition
        @click.self="isModalOpen = false"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 px-4 overflow-hidden"
        style="display: none;">

        <div class="relative bg-gray-100 flex flex-col md:flex-row rounded-lg max-w-4xl max-h-[90vh] overflow-hidden">

          <!-- Status Badge -->
          <div class="absolute top-0 right-0  text-white text-xs font-bold px-3 py-1 rounded-bl-lg z-10"
            x-text="foto.status" :class="foto.status == 'Disponible' ? 'bg-lime-600' : 'bg-rose-600' "></div>

          <!-- Close Button -->
          <button
            @click="isModalOpen = false"
            class="absolute top-2 left-2 text-white bg-black/50 hover:bg-black/70 rounded-full p-2 w-8 h-8 flex items-center justify-center z-10">
            ✕
          </button>

          <!-- Image -->
          <a
            :href="foto.image"
            data-fancybox="gallery-<?= $cat['id'] ?>"
            :data-caption="foto.name + ' - ' + foto.description"
            class="cursor-zoom-in overflow-y-auto">
            <img
              class="w-full object-cover rounded-t-lg"
              :src="foto.image"
              :alt="foto.name">
          </a>

          <!-- Image Details -->
          <div class="flex flex-col justify-between p-6 pt-10 min-w-[20rem]">
            <div>
              <h3 class="text-xl uppercase tracking-widest text-slate-500 mb-2" x-text="foto.name"></h3>
              <p class="text-sm text-gray-700 mb-4" x-text="foto.description"></p>
              <div class="flex justify-between text-sm text-gray-500">
                <span x-text="foto.tecnique" class="uppercase tracking-wide"></span>
                <span x-text="foto.measure"></span>
              </div>
            </div>

            <button
              @click="toggleFavorito(foto.id)"
              aria-label="Favorito"
              :class="favoritos.includes(foto.id) ? 'text-rose-600' : 'text-slate-600 hover:text-slate-500'"
              class="transition-colors">
              <svg class="w-10 h-10 transition-transform" :class="favoritos.includes(foto.id) ? 'scale-110' : ''" :fill="favoritos.includes(foto.id) ? 'currentColor' : 'none'" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
              </svg>
            </button>
          </div>

        </div>

      </div>
    </div>
  </div>