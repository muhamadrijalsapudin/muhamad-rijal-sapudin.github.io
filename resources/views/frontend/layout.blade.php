<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="{{ asset('assets/frontend/css/font-raleway.css') }}" rel="stylesheet">

        <title>Portofolio</title>

        <!-- Additional CSS Files -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/fullpage.min.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/frontend/css/templatemo-style.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">

    </head>

    <body>

        <div id="video">
            <div class="preloader">
                <div class="preloader-bounce">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <header id="header">
                <div class="container-fluid">
                    <div class="navbar">
                        <a id="logo">
                            Portofolio
                        </a>
                        <div class="navigation-row">
                            <nav id="navigation">
                                <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                                <div class="nav-box navbar-collapse">
                                    <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                        <li data-menuanchor="slide01" class="active"><a href="#slide01">Beranda</a></li>
                                        <li data-menuanchor="slide02"><a href="#slide02">Tentang</a></li>
                                        <li data-menuanchor="slide03"><a href="#slide03">Kemampuan</a></li>
                                        <li data-menuanchor="slide04"><a href="#slide04">Keterampilan</a></li>
                                        <li data-menuanchor="slide05"><a href="#slide05">Aplikasi</a></li>
                                        <li data-menuanchor="slide06"><a href="#slide06">Kontak</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>

            <div id="fullpage" class="fullpage-default">

                <div class="section animated-row" data-section="slide01">
                    <div class="section-inner">
                        <div class="welcome-box">
                            <span class="welcome-first animate" data-animate="fadeInUp">Portofolio</span>
                            <h1 class="welcome-title animate" data-animate="fadeInUp">Muhamad Rijal S.</h1>
                        </div>
                    </div>
                </div>

                <div class="section animated-row" data-section="slide02">
                    <div class="section-inner">
                        <div class="about-section">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 wide-col-laptop">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about-contentbox">
                                                <div class="animate" data-animate="fadeInUp">
                                                    <span>Tentang saya</span>
                                                    <h5>Siapa saya?</h5>
                                                    <p>
                                                        Nama lengkap saya <strong>Muhamad Rijal Sapudin</strong>, biasa dipanggil dengan nama <strong>Ijal</strong>.<br>
                                                        Saya lahir di <strong>Jakarta</strong> pada tanggal <strong>6 April 1995</strong>.
                                                    </p>
                                                </div>
                                                <div class="facts-list owl-carousel">
                                                    <div class="item animate" data-animate="fadeInUp">
                                                        <div class="counter-box">
                                                            <i class="fa fa-graduation-cap counter-icon" aria-hidden="true"></i>
                                                            <span class="count-number">4</span>Pendidikan
                                                        </div>
                                                    </div>
                                                    <div class="item animate" data-animate="fadeInUp">
                                                        <div class="counter-box">
                                                            <i class="fa fa-briefcase counter-icon" aria-hidden="true"></i>
                                                            <span class="count-number">1</span>Tahun Freelance
                                                        </div>
                                                    </div>
                                                    <div class="item animate" data-animate="fadeInUp">
                                                        <div class="counter-box">
                                                            <i class="fa fa-briefcase counter-icon" aria-hidden="true"></i>
                                                            <span class="count-number">5</span>Tahun Bekerja
                                                        </div>
                                                    </div>
                                                    <div class="item animate" data-animate="fadeInUp">
                                                        <div class="counter-box">
                                                            <i class="fa fa-certificate counter-icon" aria-hidden="true"></i>
                                                            <span class="count-number">6</span>Kemampuan
                                                        </div>
                                                    </div>
                                                    <div class="item animate" data-animate="fadeInUp">
                                                        <div class="counter-box">
                                                            <i class="fa fa-certificate counter-icon" aria-hidden="true"></i>
                                                            <span class="count-number">20</span>Keterampilan
                                                        </div>
                                                    </div>
                                                    <div class="item animate" data-animate="fadeInUp">
                                                        <div class="counter-box">
                                                            <i class="fa fa-code counter-icon" aria-hidden="true"></i>
                                                            <span class="count-number">11</span>Aplikasi Web
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <figure class="about-img animate" data-animate="fadeInUp">
                                                <img src="{{ asset('assets/frontend/images/foto.jpg') }}" class="rounded">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section animated-row" data-section="slide03">
                    <div class="section-inner">
                        <div class="row justify-content-center">
                            <div class="col-md-8 wide-col-laptop">
                                <div class="title-block animate" data-animate="fadeInUp">
                                    <span>Kemampuan</span>
                                    <h2>Apa saja kemampuan saya?</h2>
                                </div>
                                <div class="services-section">
                                    <div class="services-list owl-carousel">
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <span class="service-icon"><i class="fa fa-code" aria-hidden="true"></i></span>
                                                <h3>Back-End Web Development</h3>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <span class="service-icon"><i class="fa fa-code" aria-hidden="true"></i></span>
                                                <h3>API Development</h3>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <span class="service-icon"><i class="fa fa-database" aria-hidden="true"></i></span>
                                                <h3>Database</h3>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <span class="service-icon"><i class="fa fa-github" aria-hidden="true"></i></span>
                                                <h3>GitHub</h3>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <span class="service-icon"><i class="fa fa-bitbucket" aria-hidden="true"></i></span>
                                                <h3>Bitbucket</h3>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <span class="service-icon"><i class="fa fa-bug" aria-hidden="true"></i></span>
                                                <h3>Solving Bug</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section animated-row" data-section="slide04">
                    <div class="section-inner">
                        <div class="row justify-content-center">
                            <div class="col-md-7 wide-col-laptop">
                                <div class="title-block animate" data-animate="fadeInUp">
                                    <span>Keterampilan</span>
                                    <h2>Apa saja keterampilan saya?</h2>
                                </div>
                                <div class="skills-row animate" data-animate="fadeInDown">
                                    <div class="row">
                                        <div class="col-md-8 offset-md-2">
                                            <div class="skill-item">
                                                <h6>HTML</h6>
                                                <div class="skill-bar">
                                                    <span>90%</span>
                                                    <div class="progress-skill-bar" style="width: 90%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>CSS</h6>
                                                <div class="skill-bar">
                                                    <span>60%</span>
                                                    <div class="progress-skill-bar" style="width: 60%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>SCSS</h6>
                                                <div class="skill-bar">
                                                    <span>50%</span>
                                                    <div class="progress-skill-bar" style="width: 50%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>Bootstrap</h6>
                                                <div class="skill-bar">
                                                    <span>60%</span>
                                                    <div class="progress-skill-bar" style="width: 60%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>SQL</h6>
                                                <div class="skill-bar">
                                                    <span>90%</span>
                                                    <div class="progress-skill-bar" style="width: 90%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>MySQL</h6>
                                                <div class="skill-bar">
                                                    <span>90%</span>
                                                    <div class="progress-skill-bar" style="width: 90%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>PostgreSQL</h6>
                                                <div class="skill-bar">
                                                    <span>80%</span>
                                                    <div class="progress-skill-bar" style="width: 80%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>SQL Server</h6>
                                                <div class="skill-bar">
                                                    <span>60%</span>
                                                    <div class="progress-skill-bar" style="width: 60%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>PHP</h6>
                                                <div class="skill-bar">
                                                    <span>95%</span>
                                                    <div class="progress-skill-bar" style="width: 95%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>Codeigniter</h6>
                                                <div class="skill-bar">
                                                    <span>80%</span>
                                                    <div class="progress-skill-bar" style="width: 80%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>Laravel</h6>
                                                <div class="skill-bar">
                                                    <span>60%</span>
                                                    <div class="progress-skill-bar" style="width: 60%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>Ajax</h6>
                                                <div class="skill-bar">
                                                    <span>90%</span>
                                                    <div class="progress-skill-bar" style="width: 90%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>JQuery</h6>
                                                <div class="skill-bar">
                                                    <span>90%</span>
                                                    <div class="progress-skill-bar" style="width: 90%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>Javascript</h6>
                                                <div class="skill-bar">
                                                    <span>90%</span>
                                                    <div class="progress-skill-bar" style="width: 90%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>Java</h6>
                                                <div class="skill-bar">
                                                    <span>40%</span>
                                                    <div class="progress-skill-bar" style="width: 40%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>Visual Basic</h6>
                                                <div class="skill-bar">
                                                    <span>50%</span>
                                                    <div class="progress-skill-bar" style="width: 50%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>Visual Basic .NET</h6>
                                                <div class="skill-bar">
                                                    <span>50%</span>
                                                    <div class="progress-skill-bar" style="width: 50%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>C# .NET</h6>
                                                <div class="skill-bar">
                                                    <span>65%</span>
                                                    <div class="progress-skill-bar" style="width: 65%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>.NET Core</h6>
                                                <div class="skill-bar">
                                                    <span>65%</span>
                                                    <div class="progress-skill-bar" style="width: 65%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h6>AngularJS</h6>
                                                <div class="skill-bar">
                                                    <span>80%</span>
                                                    <div class="progress-skill-bar" style="width: 80%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section animated-row" data-section="slide05">
                    <div class="section-inner">
                        <div class="row justify-content-center">
                            <div class="col-md-8 wide-col-laptop">
                                <div class="title-block animate" data-animate="fadeInUp">
                                    <span>Aplikasi</span>
                                    <h2>Aplikasi Web apa saja yang telah dikerjakan?</h2>
                                </div>
                                <div class="services-section">
                                    <div class="services-list owl-carousel">
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <h3>Web Application</h3>
                                                <span class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                                <h3>Information System<br>Student Registration</h3>
                                                <p>Back-End Web and Database<br>PHP | MySQL</p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <h3>Web Application</h3>
                                                <span class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                                <h3>Online Shop<br>Furniture</h3>
                                                <p>Front-End Web, Back-End Web and Database<br>PHP | MySQL</p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <h3>Web Application</h3>
                                                <span class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                                <h3>Information System<br>Cloth Production</h3>
                                                <p>Back-End Web and Database<br>PHP | MySQL</p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <h3>Web Application</h3>
                                                <span class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                                <h3>Information System<br>Inventory</h3>
                                                <p>Back-End Web and Database<br>PHP | MySQL</p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <h3>Web Application</h3>
                                                <span class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                                <h3>Video Streaming<br>Event 13th World Islamic Economic Forum - JCC Senayan</h3>
                                                <p>Front-End Web, Back-End Web and Database<br>PHP | MySQL</p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <h3>Web Application</h3>
                                                <span class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                                <h3>Company Profile<br>PT. Hanjungin</h3>
                                                <p>Front-End Web, Back-End Web and Database<br>Codeigniter | MySQL</p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <h3>Web Application</h3>
                                                <span class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                                <h3>Information System<br>Attendance, Paid Leave and Payroll</h3>
                                                <p>Back-End Web and Database<br>Codeigniter | MySQL</p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <h3>Web Application</h3>
                                                <span class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                                <h3>Online Shop<br>Sacrificial Animal</h3>
                                                <p>Front-End Web, Back-End Web and Database<br>Codeigniter | MySQL</p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <h3>Web Application</h3>
                                                <span class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                                <h3>Point of Sales<br>Sparepart Computer</h3>
                                                <p>Back-End Web and Database<br>Codeigniter | MySQL</p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <h3>Web Application</h3>
                                                <span class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                                <h3>Point of Sales<br>PT. Kreasi Cipta Aksesdasisindo</h3>
                                                <p>Back-End Web and Database<br>Codeigniter | MySQL</p>
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp" style="width: 100%">
                                            <div class="service-box">
                                                <h3>Web Application</h3>
                                                <span class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                                <h3>Portfolio<br>Muhamad Rijal S.</h3>
                                                <p>Front-End Web<br>Laravel</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section animated-row" data-section="slide06">
                    <div class="section-inner">
                        <div class="row justify-content-center">
                            <div class="col-md-7 wide-col-laptop">
                                <div class="title-block animate" data-animate="fadeInUp">
                                    <span>Kontak</span>
                                    <h2>Hubungi saya!</h2>
                                </div>
                                <div class="contact-section">
                                    <div class="row">
                                        <div class="col-md-12 animate" data-animate="fadeInUp">
                                            <div class="contact-box">
                                                <div class="contact-row">
                                                    <a href="https://www.google.com/maps/place/-6.124545502866224,106.81269335366416" target="_blank">
                                                        <i class="fa fa-map-marker"></i>
                                                    </a>
                                                    Jl. Lodan Dalam 2D Rt. 009 Rw. 008 No. 29 Ancol, Pademangan - DKI Jakarta (14430)
                                                </div>
                                                <div class="contact-row">
                                                    <a href="https://wa.me/6282210391810" target="_blank">
                                                        <i class="fa fa-phone"></i> 
                                                    </a>
                                                    +62 822 1039 1810
                                                </div>
                                                <div class="contact-row">
                                                    <a href="mailto: muhamad.rijal.sapudin@gmail.com" target="_blank">
                                                        <i class="fa fa-envelope"></i> 
                                                    </a>
                                                    muhamad.rijal.sapudin@gmail.com
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="social-icons">
                <div class="text-right">
                    <ul class="social-icons">
                        <li><a href="https://www.linkedin.com/in/muhamad-rijal-sapudin-a44454156/" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>

        <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('assets/frontend/js/fullpage.min.js') }}"></script>

        <script src="{{ asset('assets/frontend/js/scrolloverflow.js') }}"></script>

        <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>

        <script src="{{ asset('assets/frontend/js/jquery.inview.min.js') }}"></script>

        <script src="{{ asset('assets/frontend/js/form.js') }}"></script>

        <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>

    </body>

</html>