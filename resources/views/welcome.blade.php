<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sede Innovar IPABS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logopuri.png') }}" alt="Logo Purificación" style="height:50px; margin-right:10px;">
                <img src="{{ asset('images/logoipabs.png') }}" alt="Logo IPABS" style="height:50px; margin-right:15px;">
                <span class="d-none d-sm-inline">Antiguo Innovar IPABS</span>
            </a>
            <div class="ms-auto">
                <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Iniciar Sesión</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Registrarse</a>
            </div>
        </div>
    </nav>

    <header class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content container" data-aos="fade-up">
            <h1 class="display-4 fw-bold">Bienvenido al Innovar IPABS</h1>
            <p class="lead col-lg-8 mx-auto">Comprometidos con la formación técnica y el desarrollo de Purificación.</p>
        </div>
    </header>

    <main>
        <section id="nosotros" class="bg-light">
            <div class="container">
                <h2 class="text-center section-title" data-aos="fade-up">Nuestra Institución</h2>
                <div class="row g-4">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="card p-4">
                            <div class="card-body text-center">
                                <h3 class="card-title">Misión</h3>
                                <p class="card-text text-justify">INFI - PURIFICACIÓN cooperará al mejoramiento y desarrollo de la calidad de vida de los habitantes del municipio, mediante la prestación directa de servicios, operando con transparencia, compromiso social y preservando el medio ambiente...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="card p-4">
                            <div class="card-body text-center">
                                <h3 class="card-title">Visión</h3>
                                <p class="card-text text-justify">INFI – PURIFICACIÓN en el año 2030 será reconocido como un Instituto descentralizado sostenible, por su liderazgo regional, su desarrollo, mejoramiento continuo e incremento constante de su productividad y flexibilidad para adoptarse al cambio.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="servicios">
            <div class="container">
                <h2 class="text-center section-title" data-aos="fade-up">Nuestros Servicios</h2>
                <div class="row g-4 text-center">
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item">
                            <i class="bi bi-mortarboard-fill icon"></i>
                            <h5 class="mt-3 fw-bold">Formación Técnica</h5>
                            <p>Programas educativos gratuitos y de calidad para todos.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item">
                            <i class="bi bi-building icon"></i>
                            <h5 class="mt-3 fw-bold">Instalaciones Modernas</h5>
                            <p>Espacios y ambientes diseñados para el aprendizaje efectivo.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item">
                            <i class="bi bi-people-fill icon"></i>
                            <h5 class="mt-3 fw-bold">Apoyo Comunitario</h5>
                            <p>Trabajamos activamente junto a la comunidad para crecer.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item">
                            <i class="bi bi-globe2 icon"></i>
                            <h5 class="mt-3 fw-bold">Conexión Global</h5>
                            <p>Ofrecemos una educación con visión de futuro y alcance global.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="cursos" class="bg-light">
            <div class="container">
                <h2 class="text-center section-title" data-aos="fade-up">Oferta de Cursos</h2>
                <p class="text-center lead mb-5" data-aos="fade-up">Aprende nuevas habilidades con nuestros programas de formación.</p>
                <div class="row g-4 course-gallery">
                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100"><img src="{{ asset('images/analisisdedatos.jpeg') }}" class="img-fluid" alt="Curso Análisis de Datos"></div>
                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200"><img src="{{ asset('images/progranube.jpeg') }}" class="img-fluid" alt="Curso Programación en la Nube"></div>
                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300"><img src="{{ asset('images/prograsoftware.jpeg') }}" class="img-fluid" alt="Curso Programación de Software"></div>
                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400"><img src="{{ asset('images/teleinformatica.jpeg') }}" class="img-fluid" alt="Curso Teleinformática"></div>
                </div>
            </div>
        </section>

        <section id="noticias">
            <div class="container">
                <h2 class="text-center section-title" data-aos="fade-up">Últimas Noticias</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="https://images.pexels.com/photos/4144222/pexels-photo-4144222.jpeg" class="card-img-top" alt="Estudiantes en clase">
                            <div class="card-body">
                                <h5 class="card-title">Inscripciones Abiertas</h5>
                                <p class="card-text">Ya puedes inscribirte en nuestros cursos técnicos gratuitos para el próximo ciclo. ¡No te quedes fuera!</p>
                                <a href="#cursos" class="btn btn-outline-primary">Ver Cursos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg" class="card-img-top" alt="Evento de graduación">
                            <div class="card-body">
                                <h5 class="card-title">Exitosa Feria Educativa</h5>
                                <p class="card-text">Conoce todos los detalles de la pasada feria educativa donde presentamos nuestros programas a la comunidad.</p>
                                <a href="#" class="btn btn-outline-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                         <div class="card">
                            <img src="https://images.pexels.com/photos/5905709/pexels-photo-5905709.jpeg" class="card-img-top" alt="Taller de tecnología">
                            <div class="card-body">
                                <h5 class="card-title">Nuevo Taller de Robótica</h5>
                                <p class="card-text">Ampliamos nuestra oferta con un nuevo taller de robótica para jóvenes. ¡Inscríbete y crea el futuro!</p>
                                <a href="#" class="btn btn-outline-primary">Más Información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-5 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contacto y Atención</h5>
                    <p>
                        Lunes a Viernes: 8:00 am - 5:00 pm <br>
                        Sábados: 8:00 am - 12:00 pm <br>
                        <strong>Teléfono:</strong> 314 231 7311 <br>
                        <strong>Email:</strong> gerencia@ipabs-purificacion-tolima.gov.co
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Enlaces Rápidos</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#nosotros">Nosotros</a></li>
                        <li><a href="#cursos">Cursos</a></li>
                        <li><a href="#noticias">Noticias</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Síguenos en Redes</h5>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/AlcaldiaPurificacionTolima?locale=es_LA" target="_blank" class="me-3"><i class="bi bi-facebook"></i> Facebook</a>
                        <a href="https://www.instagram.com/alcaldiadepurificacion/" target="_blank"><i class="bi bi-instagram"></i> Instagram</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center p-3 footer-bottom">
            © {{ date('Y') }} Antiguo Innovar IPABS. Todos los derechos reservados.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800, // Duración de las animaciones
            once: true,    // Animar solo una vez
        });
    </script>
</body>
</html>