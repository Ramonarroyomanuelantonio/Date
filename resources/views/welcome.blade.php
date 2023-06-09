<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>JC MEDICAL</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="landingstyle.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">JC MEDICAL</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="#about">Nosotros</a></li>
                    <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
                    <li><a class="getstarted scrollto" href="{{ route('login') }}">Iniciar Sesión</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>¡Salud y tecnología en tus manos, calidad médica a tu alcance!</h1>

                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('login') }}" class="btn-get-started scrollto">Iniciar Sesión</a>

                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/VECTOR_JC.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/uni.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/calletano.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/san-marcos.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/ministerio.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/Suiza-Lab.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/cientifica.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Nosotros</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Somos representantes en Perú de marcas tales como:

                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Optika que esta sectorisada en el rubro de
                                los microscopios</li>
                            <li><i class="ri-check-double-line"></i> Biobase, empresa de alta tecnologia ezpecializada
                                en equipos cientificos</li>
                            <li><i class="ri-check-double-line"></i> Daiwha dedicada a realizar sistemas de infucion
                                y Quirúrgico</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            JC Medical Supplies es una empresa peruana, con 17 años en el mercado, que representa
                            directamente marcas prestigiosas en el sector biomédico para su línea de equipamiento
                            hospitalario e implementación de laboratorios.
                        </p>
                        <a href="#" class="btn-learn-more">Conoce Mas</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->


        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/skills.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>En crecimiento constante, construyendo un futuro prometedor.</h3>

                        <div class="skills-content">

                            <div class="progress">
                                <span class="skill">2020<i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">2021<i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">2022<i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">2023<i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Servicios y Productos</h2>
                    <p>Aqui en jc medicals encontraras productos y servicios de garantia y primera calidad</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Equipamiento hopitalario</a></h4>
                            <p>Montores , bomba de jeringa desfribilador , bomba de infusión , electrocardiografo , etc
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">implementación de laboratorio</a></h4>
                            <p>Microscopio , Estetoscopio , Ultra congeladora , Agitador magnético, etc</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Equipos domiciliarios</a></h4>
                            <p>Concentrador de Oxigeno, Tensiómetro Digital, Aspirador de secreciones , Pulsoxímetro,
                                Nebulizador , etc.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="">Reactivos</a></h4>
                            <p>Acetato de amonio , acetato de zinc, Acido Ascórbico , Almidón soluble, Diclorometano ,
                                Cloruro de magnesio, etc.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Vacuna bivalente</h3>
                        <p>El coronavirus no ha desaparecido y probablemente no desaparezca, por lo que el mundo ya está
                            desarrollando vacunas para minimizar o mitigar los efectos del virus.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle"
                            href="https://www.who.int/es/emergencies/diseases/novel-coronavirus-2019/question-and-answers-hub/q-a-detail/coronavirus-disease-(covid-19)-vaccines?adgroupsurvey">Ver
                            mas</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!--
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Productos</h2>
                    <p>contamos con 10 categorias diferentes con mas 200 produtos para ofrecer de acuerdo a lo que
                        busque , tecnologia , comodidad y modernidad son los aspectos que resaltan en nuestro equipos
                    </p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/microscopio.png" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Microscopio1</h4>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/microscopio2.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>microscopio2</h4>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/microscopio3.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Microscopio3</h4>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/talco.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="portfolio-info">
                            <h4>Polvo</h4>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/acido.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="portfolio-info">
                            <h4>Acido</h4>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/plato.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="portfolio-info">
                            <h4>Plato</h4>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/tubo.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="portfolio-info">
                            <h4>Tubo</h4>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="assets/img/taper.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="portfolio-info">
                            <h4>Deshechos</h4>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/palo.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="portfolio-info">
                            <h4>Algo</h4>

                        </div>
                    </div>

                </div>

            </div>
        </section>


        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contactanos</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Ubicacion:</h4>
                                <p>José Antonio Encinas 141</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>jcmedical@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Llamanos:</h4>
                                <p>+51 933 802 311</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7801.656924618144!2d-77.0240055098176!3d-12.123886602475679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c801ac0533ef%3A0xd2b53f2a970bff3a!2sCl%C3%ADnica%20Miraflores!5e0!3m2!1ses-419!2spe!4v1686163340117!5m2!1ses-419!2spe"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Correo</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Sujeto</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Mensaje</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><-->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>JC MEDICAL</h3>
                        <p>
                            José Antonio Encinas 141<br>
                            Lima, miraflores<br>
                            Peru<br><br>
                            <strong>Telefono:</strong> +51 933 802 311<br>
                            <strong>Email:</strong> jcmedical@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Enlaces utiles</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Nosotros</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuestros servicios</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Equipamiento hospitalario</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">implementación domiciliaria</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Reactivos</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuestra redes sociales</h4>
                        <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>JC MEDICAL</span></strong>. Todos los derechos reservados
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->

            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
