# 🎨 Steven's Gallery – PHP Art Portfolio

<img src="/public/assets/images/color.png" alt="Logo" width="250">

Proyecto web desarrollado en PHP puro, orientado a la presentación de un emprendimiento artístico, con galería de obras, categorías, detalles de cada pieza y una arquitectura inspirada en Laravel (MVC-like).

El objetivo principal es mostrar el portafolio del artista y facilitar la visualización de obras y encargos personalizados de forma moderna e interactiva.

![Home](/public/assets/images/screenshots/1.png)

---

## 🚀 Características principales

![Features](/public/assets/images/screenshots/2.png)

1. Galería de obras organizada por categorías
2. Modal interactivo con detalles de cada obra
3. Animaciones modernas al hacer scroll
4. Efecto parallax en el header
5. Diseño responsive
6. Arquitectura modular y escalable
7. Código limpio y organizado

---

## 🧱 Arquitectura del proyecto

El proyecto sigue una estructura inspirada en Laravel, separando responsabilidades:

```

drawing-portfolio/
│
├── public/
│   ├── index.php
│   └── assets/
│       ├── css/
│       ├── js/
│       └── images/
│
├── app/
│   ├── db/
│   │   ├── Category.php
│   │   └── Picture.php
│
├── views/
│   ├── layouts/
│   │   └── app.php
│   ├── pages/
│   │   └── home.php
│   ├── sections/
│   │   ├── hero.php
│   │   ├── about.php
│   │   ├── gallery.php
│   │   └── prices.php
│   └── components/
│       ├── navbar.php
│       └── footer.php
│
└── README.md

```
---

## 🛠️ Tecnologías utilizadas
### Backend
- PHP puro
- Arquitectura MVC-like
- SQLite

![Backend](/public/assets/images/screenshots/5.png)

### Frontend
- Tailwind CSS
- Alpine.js (interactividad ligera)
- Fancybox (visualización de imágenes)
- Rellax.js (parallax)
- ScrollReveal.js (animaciones al aparecer)

![Frontend](/public/assets/images/screenshots/3.png)

---

## 🖥️ Requisitos
- PHP >= 8.0
- Servidor Apache (InfinityFree, XAMPP, etc.)
- Navegador moderno

--- 

## ⚙️ Instalación local
1. Clonar o copiar el proyecto
2. Colocar la carpeta en htdocs (XAMPP) o public_html
3. Asegurarse de que public/index.php sea el punto de entrada
4. Configurar la base de datos si aplica
5. Acceder desde el navegador
