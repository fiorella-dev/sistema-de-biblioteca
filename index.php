
<html>
<head>
  <base href="." />
  <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

<header class="header">
  <div class="logo-container">
    <img src="img/logo2.png" alt="Logo Santiago Mariño" class="logo">
    <span class="institution-name">Politécnico Santiago Mariño</span>
  </div>
  <nav class="nav-menu">
    <ul class="nav-list">
      <li class="nav-item">
        <a href="#" class="nav-link">Libros</a>
        <ul class="dropdown">
          <li><a href="libros.php">Registrar</a></li>
          <li><a href="#">Ver</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Tesis</a>
        <ul class="dropdown">
          <li><a href="tesis.php">Registrar</a></li>
          <li><a href="#">Ver</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Informe de Pasantías</a>
        <ul class="dropdown">
          <li><a href="pasantias.php">Registrar</a></li>
          <li><a href="#">Ver</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div class="user-menu">
    <button class="user-menu-button">
      &#9662; <!-- Flecha hacia abajo -->
    </button>
    <ul class="user-dropdown">
      <li><a href="#"> <i class="fas fa-home menu-icon"></i>Inicio</a></li>
      <li><a href="#"><i class="fas fa-user menu-icon"></i> Ver perfil</a></li>
      <li><a href="#"><i class="fas fa-sign-out-alt menu-icon"></i> Cerrar Sesión</a></li>
    </ul>
  </div>
     
    
  
</header>

<section class="hero-section">
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1541339907198-e08756dedf3f')">
        <div class="slide-content">
          <h1>Biblioteca Universitaria</h1>
          <p>Tu fuente de conocimiento e investigación</p>
        </div>
      </div>
      <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1524995997946-a1c2e315a42f')">
        <div class="slide-content">
          <h1>Recursos Digitales</h1>
          <p>Accede a nuestra colección digital</p>
        </div>
      </div>
      <div class="swiper-slide" style="background-image: url('https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0')">
        <div class="slide-content">
          <h1>Espacios de Estudio</h1>
          <p>Ambientes diseñados para tu éxito académico</p>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

<section class="news-section">
  <h2>Noticias Universitarias</h2>
  <div class="news-grid">
    <article class="news-card">
      <div class="news-content">
        <h3>Nueva Base de Datos Académica</h3>
        <p>Accede a miles de artículos científicos con nuestra nueva suscripción.</p>
        <small>Hace 2 días</small>
      </div>
    </article>
    <article class="news-card">
      <div class="news-content">
        <h3>Seminario de Investigación</h3>
        <p>Participa en nuestro próximo seminario sobre metodologías de investigación.</p>
        <small>Hace 5 días</small>
      </div>
    </article>
    <article class="news-card">
      <div class="news-content">
        <h3>Actualización del Catálogo</h3>
        <p>Nuevas adquisiciones disponibles en nuestra biblioteca.</p>
        <small>Hace 1 semana</small>
      </div>
    </article>
  </div>
</section>

<section class="university-info">
  <div class="info-container">
    <div class="info-card">
      <h3>50,000+</h3>
      <p>Libros en Colección</p>
    </div>
    <div class="info-card">
      <h3>1,000+</h3>
      <p>Tesis Digitalizadas</p>
    </div>
    <div class="info-card">
      <h3>24/7</h3>
      <p>Acceso Digital</p>
    </div>
    <div class="info-card">
      <h3>500+</h3>
      <p>Informes de Pasantías</p>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script2.js"></script>
</body>
</html>
