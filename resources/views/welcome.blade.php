<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sede Innovar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <style>
            

            .hero {
                background: url('{{ asset('images/img1.jpg') }}') center/cover fixed;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
            }

            body {
                font-family: 'Nunito', sans-serif;
                background-color: #ffffffff;
                margin: 0;
                padding: 0;
            }

            .carousel-item img {
                max-height: 400px;
                object-fit: cover;
            }

            .card {
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            }

            .btn {
                padding: 10px 20px;
                border-radius: 8px;
                text-decoration: none;
                color: white;
                font-weight: bold;
                transition: background 0.3s ease;
                margin-right: 10px;
            }

            .btn-login, .btn-register {
                background: #202121ff;
            }

            .btn:hover {
                opacity: 0.8;
            }

            .text-justify {
                text-align: justify;
            }

            .img-hover {
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .img-hover:hover {
                transform: scale(1.05);
                box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            }

            .card {
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .card:hover {
                transform: translateY(-10px);
                box-shadow: 0 10px 20px rgba(0,0,0,0.3);
            }
            .card-img-top {
                height: 220px;      /* Ajusta la altura que quieras */
                object-fit: cover;  /* Recorta la imagen sin deformarla */
                width: 100%;        /* Asegura que ocupe todo el ancho */
            }

        </style>
    </head>
    <body class="antialiased">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logopuri.png') }}" alt="Logo 1" style="height:60px; margin-right:20px;">
                    <img src="{{ asset('images/logoipabs.png') }}" alt="Logo 2" style="height:60px; margin-right:20px;">
                    Antiguo Innovar IPABS
                </a>
                <div class="d-flex ms-auto">
                    <a href="{{ route('login') }}" class="btn btn-login">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="btn btn-register">Registrarse</a>
                </div>
            </div>
        </nav>
        <div class="container my-4">
            <div class="col-md-6" data-aos="fade-right">...</div>
            <section class="bg-dark text-white text-center d-flex align-items-center justify-content-center" 
                    style="height: 400px; background: url('{{ asset('images/img1.jpg') }}') center/cover;">
                <div>
                    <h1 class="fw-bold">Bienvenido al Innovar IPABS</h1>
                    <p>Formando el futuro de Purificación</p>
                </div>
            </section>
        </div>

        <div class="container my-5">
            <div class="row text-center">
                
                <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                    <h3 class="card-title mb-3">Misión</h3>
                    <p class="card-text text-justify">
                        INFI - PURIFICACIÓN cooperará al mejoramiento y desarrollo de la calidad de vida de los habitantes del municipio de Purificación, mediante la prestación directa de los servicios de la Planta de Beneficio Animal, Alumbrado Público, Plaza de Mercado de Cifuentes y Parque Recreacional Villa De Las Palmas, operando con transparencia en la actuación de los recursos públicos con un alto sentido del compromiso social, preservando la salud y el cuidado del medio ambiente, utilizando una apropiada tecnología, valorando el talento humano y el esfuerzo de sus colaboradores, contribuyendo a la sostenibilidad con procesos estandarizados basados en principios de calidad y eficiencia para satisfacer las necesidades de los usuarios.
                    </p>
                    </div>
                </div>
                </div>

                
                <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                    <h3 class="card-title mb-3">Visión</h3>
                    <p class="card-text text-justify">
                        INFI – PURIFICACIÓN en el año 2030 será reconocido como un Instituto descentralizado sostenible, por su liderazgo regional en la prestación de los servicios de la Planta de Beneficio Animal, Alumbrado Público, Plaza de Mercado de Cifuentes y Parque Recreacional Villa de las Palmas en el Municipio de Purificación, por su desarrollo, mejoramiento continuo, incremento constante de su productividad y flexibilidad para adoptarse al cambio.
                    </p>
                    </div>
                </div>
                </div>
            </div>
        </div>


        <section class="container my-5">
            <div class="col-md-6" data-aos="fade-right">...</div>
            <h2 class="text-center mb-4">Nuestros Servicios</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <i class="bi bi-mortarboard-fill display-4 text-primary"></i>
                    <h5 class="mt-3">Formación Técnica</h5>
                    <p>Programas educativos gratuitos para todos.</p>
                </div>
                <div class="col-md-3">
                    <i class="bi bi-building display-4 text-success"></i>
                    <h5 class="mt-3">Instalaciones Modernas</h5>
                    <p>Espacios diseñados para el aprendizaje.</p>
                </div>
                <div class="col-md-3">
                    <i class="bi bi-people-fill display-4 text-warning"></i>
                    <h5 class="mt-3">Apoyo Comunitario</h5>
                    <p>Trabajamos junto a la comunidad.</p>
                </div>
                <div class="col-md-3">
                    <i class="bi bi-globe display-4 text-danger"></i>
                    <h5 class="mt-3">Conexión Global</h5>
                    <p>Educación con visión de futuro.</p>
                </div>
            </div>
        </section>


        

        <div class="container my-4" id="cursos">
            <h1 class="text-center">Oferta de Cursos</h1>
            <p class="text-center">Aprende nuevas habilidades con nuestros programas de formación</p>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <img src="{{ asset('images/analisisdedatos.jpeg') }}" class="img-fluid rounded shadow img-hover" alt="Curso Análisis de Datos">
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="{{ asset('images/progranube.jpeg') }}" class="img-fluid rounded shadow img-hover" alt="Curso Programación en la Nube">
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="{{ asset('images/prograsoftware.jpeg') }}" class="img-fluid rounded shadow img-hover" alt="Curso Programación de Software">
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="{{ asset('images/teleinformatica.jpeg') }}" class="img-fluid rounded shadow img-hover" alt="Curso Teleinformática">
                </div>
            </div>
        </div>



        </div>
        <section class="container my-5">
            <div class="col-md-6" data-aos="fade-right">...</div>
            <h2 class="text-center mb-4">Últimas Noticias</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('https://images.pexels.com/photos/4144222/pexels-photo-4144222.jpeg') }}" class="card-img-top" alt="Evento 1">
                        <div class="card-body">
                            <h5 class="card-title">Inscripciones Abiertas</h5>
                            <p class="card-text">Ya puedes inscribirte en nuestros cursos técnicos gratuitos.</p>
                            <a href="#cursos" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg') }}" class="card-img-top" alt="Evento 2">
                        <div class="card-body">
                            <h5 class="card-title">Feria Educativa</h5>
                            <p class="card-text">Conoce todos los programas del SENA en nuestra feria educativa.</p>
                            <a href="#cursos" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            
        </section>
        

        <!-- Footer -->
        <footer class="bg-light text-center text-lg-start mt-5 border-top">
            <div class="container p-4">
                <div class="row">
            
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Horario de Atención</h5>
                        <p>
                            Lunes a Viernes: 8:00 am - 5:00 pm <br>
                            Sábados: 8:00 am - 12:00 pm <br>
                            Teléfono: 314 231 7311 <br>
                            Email: gerencia@ipabs-purificacion-tolima.gov.co <br>
                            Email: juridica@ipabs-purificacion-tolima.gov.co
                        </p>
                    </div>
                
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Enlaces</h5>
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{ route('login') }}" class="text-dark">Iniciar Sesión</a></li>
                            <li><a href="{{ route('register') }}" class="text-dark">Registrarse</a></li>
                            <li><a href="#" class="text-dark">Contacto</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Síguenos</h5>
                        <a href="https://www.facebook.com/AlcaldiaPurificacionTolima?locale=es_LA" class="me-2 text-dark">
                            <i class="bi bi-facebook"></i> Facebook
                        </a><br>
                        <a href="https://www.instagram.com/alcaldiadepurificacion/" class="text-dark">
                            <i class="bi bi-instagram"></i> Instagram
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center p-3 bg-dark text-white">
                © {{ date('Y') }} Antiguo Innovar IPABS. Todos los derechos reservados.
            </div>
        </footer>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>