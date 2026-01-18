<section class="flex flex-col justify-center items-center px-4 py-12 bg-linear-to-b from-gray-200 to-white reveal scroll-mt-12">
  <?php
  $id = "precios";
  $label = "Precios y Categorías";
  $color = "text-slate-500";
  include __DIR__ . "/../components/title.php"; ?>

  <p class=" text-center text-sm md:text-lg text-slate-600 max-w-2xl mx-auto mb-12">
    Escoge el estilo de tu dibujo. Será entregado lo más pronto posible.
  </p>

  <div id="precios-categorias" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 md:max-w-[70rem] md:mx-auto" />

</section>

<script>
  const basePath = "/drawing-portfolio/public/assets/images/";

  const categorias = [{
      titulo: "Grafito",
      desc: "Mejor para rostros",
      precio: 4,
      features: ["Entrega rápida", "Buen detalle", "Blanco y negro"],
      images: ["grafito.png", "grafito2.png"],
      popular: true
    },
    {
      titulo: "Colores",
      desc: "Más vistoso y bonito",
      precio: 6,
      features: ["Variedad de colores", "Buen detalle", "Lápices de alta calidad"],
      images: ["color.png", "color2.png"]
    },
    {
      titulo: "Lapicero",
      desc: "Acabado elegante",
      precio: 7,
      features: ["Blanco y negro", "Mucho detalle", "Alta calidad técnica"],
      images: ["lapicero2.png", "lapicero.png"]
    },
    {
      titulo: "Pintura",
      desc: "Perfecto para paisajes",
      precio: 7,
      features: ["Variedad de colores", "Entrega rápida", "Tamaño grande"],
      images: ["pintura.png", "pintura2.png"]
    }
  ];

  const contenedor = document.getElementById("precios-categorias");

  categorias.forEach(cat => {
    const asunto = encodeURIComponent("Pedido de Dibujo");
    const cuerpo = encodeURIComponent(`¡Hola! Me interesa el estilo ${cat.titulo}.\n¿Podrías darme más información sobre los tiempos de entrega?`);
    const mailtoLink = `mailto:stjs.trujillo@gmail.com?subject=${asunto}&body=${cuerpo}`;

    contenedor.innerHTML += `
    <div class="group relative bg-white rounded-lg shadow-lg reveal transform hover:translate-y-[-5px] transition-all duration-300">

      <img class="h-30 absolute top-2 -left-16 md:-left-18 md:opacity-0 -translate-x-[8px] group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300" src="${basePath + cat.images[0]}" alt="${cat.titulo}" />
      <img class="h-20 absolute bottom-2 -right-6 md:-right-10 md:opacity-0 translate-x-[8px] group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300" src="${basePath + cat.images[1]}" alt="${cat.titulo}" />

      ${cat.popular ? `
      <div class="absolute top-0 right-0 bg-slate-600 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">
        Popular
      </div>` : ''}

      <div class="flex flex-col justify-between h-full px-6 py-8">
        <div class="flex-grow">
          <div class="text-center">
            <h2 class="text-xl md:text-2xl font-bold uppercase text-slate-600">${cat.titulo}</h2>
            <p class="text-sm mt-2 text-slate-600">${cat.desc}</p>
          </div>

          <div class="mt-8 text-center">
            <span class="text-sm text-slate-600">desde</span>
            <span class="text-3xl md:text-4xl font-bold text-slate-900">$${cat.precio}</span>
          </div>

          <ul class="mt-8 space-y-4">
            ${cat.features.map(f => `
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="text-sm ml-2 text-slate-700">${f}</span>
              </li>
            `).join('')}
          </ul>
        </div>
        
        <div class="text-center mt-8">
          <a href="${mailtoLink}" class="w-auto inline-block hover:bg-gray-100 text-gray-600 font-semibold py-2 px-6 border border-gray-400 rounded shadow transition-all">
              Pedir ahora
          </a>
        </div>
      </div>
    </div>
  `;
  });
</script>