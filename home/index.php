<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#14457b">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriend" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="description" content="En Medical nos encargamos de tu salud.">
    <link rel="stylesheet" href="./public/css/home.css">
    <link rel="canonical" href="https://medical.com/home/">
    <link rel="apple-touch-icon" href="/public/icon/favicon.ico">
    <link rel="apple-touch-startup-image" href="/public/icon/favicon.ico">
    <link rel="icon" href="/public/icon/favicon.ico">
    <title>Medical</title>
</head>

<body>
    <main>
        <?php
        require_once "./comons/btn_top.php";
        require_once "./comons/bar_top.php";
        ?>

        <div class="container">
            <div class="content">
                <nav class="nav">
                    <div class="nav_logo">
                        <a href="/">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-logo.webp">
                                <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-logo.png" alt="SoftFem agencia de programacion" title="SoftFem agencia de programacion" width="100" height="100">
                            </picture>
                        </a>
                    </div>
                    <div class="toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" id="openMenu" height="48" width="48">
                            <path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z" />
                        </svg>
                    </div>
                    <div class="nav_enlaces" id="menuMobile">
                        <p class="closeMenu" id="closeMenu">X</p>
                        <a href="/">Home</a>
                        <a href="#about">About</a>
                        <a href="#services">Services</a>
                        <a href="#portafolio">Portafolio</a>
                        <a href="#team">Team</a>
                        <div class="nav_search">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                                <path d="M796 935 533 672q-30 26-69.959 40.5T378 727q-108.162 0-183.081-75Q120 577 120 471t75-181q75-75 181.5-75t181 75Q632 365 632 471.15 632 514 618 554q-14 40-42 75l264 262-44 44ZM377 667q81.25 0 138.125-57.5T572 471q0-81-56.875-138.5T377 275q-82.083 0-139.542 57.5Q180 390 180 471t57.458 138.5Q294.917 667 377 667Z" />
                            </svg>
                        </div>
                        <div class="nav_btn">
                            <a href="">Appointments</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="banner">
            <div class="header">
                <p id="subtitleTop"><span>PASSION FOR CARING</span></p>
                <section>
                    <header>
                        <h1 id="title">Genuine Commitment <br> To Your Health</h1>
                    </header>
                </section>
                <p id="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, <br> rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, rerum.</p>
                <div class="btn-header">
                    <br>
                    <a href="">READ MORE +</a>
                </div>
            </div>
            <div class="header_img">
                <picture>
                    <source id="sourceMobile" media="(max-width: 700px)" srcset="/public/img/medical-home-header-slides-1-mobile.webp">
                    <source id="sourceDes" type='image/webp' srcset="/public/img/medical-home-header-slides-1.webp">
                    <img id="imageDes" class="imageSlider" src="/public/img/medical-home-header-slides-1.jpg" alt="Medical centro hospitalario" title="Medical centro hospitalario" width="100" height="100">
                </picture>
            </div>
            <div class="arrow_right" id="arrow_right">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                    <path d="m18.75 36-2.15-2.15 9.9-9.9-9.9-9.9 2.15-2.15L30.8 23.95Z" />
                </svg>
            </div>
            <div class="arrow_left" id="arrow_left">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                    <path d="M28.05 36 16 23.95 28.05 11.9l2.15 2.15-9.9 9.9 9.9 9.9Z" />
                </svg>
            </div>
        </div>

        <!-- Section Article Top -->
        <div class="container bg_section">
            <div class="content">
                <div class="article">

                    <div class="article_content">
                        <div class="article_content_img">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/estetoscopio.webp">
                                <img class="image" src="/public/img/default.png" data-img="/public/icon/estetoscopio.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                            </picture>
                        </div>
                        <div class="article_content_text">
                            <section class="article_content_text_title">
                                <header>
                                    <h2>Emergency Cases</h2>
                                </header>
                            </section>
                        </div>
                        <div class="article_content_text_subtitle">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                        <div class="article_content_contact">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                                <path d="M795 936q-122 0-242.5-60T336 720q-96-96-156-216.5T120 261q0-19.286 12.857-32.143T165 216h140q13.611 0 24.306 9.5Q340 235 343 251l27 126q2 14-.5 25.5T359 422L259 523q56 93 125.5 162T542 802l95-98q10-11 23-15.5t26-1.5l119 26q15.312 3.375 25.156 15.188Q840 740 840 756v135q0 19.286-12.857 32.143T795 936ZM229 468l81-82-23-110H180q0 39 12 85.5T229 468Zm369 363q41 19 89 31t93 14V769l-103-21-79 83ZM229 468Zm369 363Z" />
                            </svg>
                            <p>987 654 321</p>
                        </div>
                    </div>

                    <div class="article_content show">
                        <div class="article_content_img">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/medico.webp">
                                <img class="image" src="/public/img/default.png" data-img="/public/icon/medico.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                            </picture>
                        </div>
                        <div class="article_content_text">
                            <section class="article_content_text_title">
                                <header>
                                    <h2>Doctors Timetable</h2>
                                </header>
                            </section>
                        </div>
                        <div class="article_content_text_subtitle">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                        <div class="article_content_btn">
                            <a href="">TIMETABLE</a>
                        </div>
                    </div>

                    <div class="article_content">
                        <div class="article_content_img">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/informe-medico.webp">
                                <img class="image" src="/public/img/default.png" data-img="/public/icon/informe-medico.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                            </picture>
                        </div>
                        <div class="article_content_text">
                            <section class="article_content_text_title">
                                <header>
                                    <h2>Opening Hours</h2>
                                </header>
                            </section>
                        </div>
                        <div class="article_content_text_subtitle">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                        <div class="article_content_text_subtitle">
                            <p>Monday - Friday (7:00am - 8:00pm)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Info -->
        <div class="container bg_section">
            <div class="content">
                <div class="section_info">

                    <div class="section_info_img">
                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-about.webp">
                            <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-about.jpg" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                        </picture>
                    </div>

                    <div class="section_info_content">
                        <div class="section_info_content_subtitle">
                            <p><span>WHAT ABOUT US</span></p>
                        </div>
                        <section class="section_info_content_title">
                            <header>
                                <h2>The Heart And Science Of Medic Test</h2>
                            </header>
                        </section>
                        <div class="section_info_content_subtitle">
                            <p>It is a long established fact that a reader will be distracted by at its layout. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>

                        <!-- Section list -->
                        <div class="section_info_content_list">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                                <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                            </svg>
                            <p>Comprehensive Inpatient Services</p>
                        </div>
                        <div class="section_info_content_list">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                                <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                            </svg>
                            <p>Medical And Surgical Services</p>
                        </div>
                        <div class="section_info_content_list">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                                <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                            </svg>
                            <p>Outpatient Services</p>
                        </div>
                        <div class="section_info_content_list">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                                <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                            </svg>
                            <p>Medicine & instrument</p>
                        </div>
                        <div class="section_info_content_list">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                                <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                            </svg>
                            <p>Specialised Support Service</p>
                        </div>
                        <div class="section_info_content_list">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                                <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                            </svg>
                            <p>Instant Operation & Appointment</p>
                        </div><br>

                        <div class="section_info_content_btn">
                            <a href="">READ MORE +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Instalaciones -->
        <div class="container">
            <div class="content">
                <div class="facilities">
                    <div class="facilities_subtitle">
                        <p><span>FACILITIES WE HAVE</span></p>
                    </div>
                    <section class="facilities_title">
                        <header>
                            <h2>What facilities We Provided</h2>
                        </header>
                    </section>
                    <br>
                    <div class="facilities_box">
                        <div class="facilities_box_content">

                            <div class="facilities_box_content_img">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-facilities-1.webp">
                                    <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-facilities-1.jpg" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                                </picture>
                            </div>

                            <div class="facilities_box_content_text">
                                <section class="facilities_box_content_text_title">
                                    <header>
                                        <h2>MEDICAL SURGERY</h2>
                                    </header>

                                    <div class="facilities_box_content_text_subtitle">
                                        <p>Eye Care Services</p>
                                    </div>
                                </section>

                                <div class="facilities_box_content_text_img">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/laboratory.webp">
                                        <img class="image" src="/public/img/default.png" data-img="/public/icon/laboratory.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                                    </picture>
                                </div>
                            </div>
                        </div>


                        <div class="facilities_box_content">
                            <div class="facilities_box_content_img">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-facilities-2.webp">
                                    <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-facilities-2.jpg" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                                </picture>
                            </div>
                            <div class="facilities_box_content_text">
                                <section class="facilities_box_content_text_title">
                                    <header>
                                        <h2>MEDICAL THERAPY</h2>
                                    </header>

                                    <div class="facilities_box_content_text_subtitle">
                                        <p>Cardiology Services</p>
                                    </div>
                                </section>

                                <div class="facilities_box_content_text_img">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/doctor.webp">
                                        <img class="image" src="/public/img/default.png" data-img="/public/icon/doctor.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                                    </picture>
                                </div>
                            </div>
                        </div>

                        <div class="facilities_box_content">
                            <div class="facilities_box_content_img">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-facilities-3.webp">
                                    <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-facilities-3.jpg" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                                </picture>
                            </div>
                            <div class="facilities_box_content_text">
                                <section class="facilities_box_content_text_title">
                                    <header>
                                        <h2>MEDICAL PEDIATRICS</h2>
                                    </header>
                                    <div class="facilities_box_content_text_subtitle">
                                        <p>Dental Services</p>
                                    </div>
                                </section>
                                <div class="facilities_box_content_text_img">
                                    <picture class="picture-defer">
                                        <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/revision-medica.webp">
                                        <img class="image" src="/public/img/default.png" data-img="/public/icon/revision-medica.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Section about -->
        <div class="container bg_about" id="about">
            <div class="content">
                <div class="about">

                    <div class="about_content">
                        <div class="about_content_subtitle">
                            <p><span>ABOUT US</span></p>
                        </div>
                        <section class="about_content_title">
                            <header>
                                <h2>Joining Hands With <br> Techno Easement</h2>
                            </header>
                        </section>
                        <div class="about_content_subtitle">
                            <p>Lorem Ipsum is simply dummy text of the printing and <br> typesetting industry. Lorem Ipsum has been the industry's <br> standard dummy text</p>
                        </div>

                        <div class="about_content_article">
                            <div class="about_content_img">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/estetoscopio.webp">
                                    <img class="image" src="/public/img/default.png" data-img="/public/icon/estetoscopio.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="50" height="50">
                                </picture>
                            </div>

                            <div class="about_content_text">
                                <section class="about_content_text_subtitle">
                                    <header>
                                        <h2>Infection Prevention</h2>
                                    </header>
                                    <p>There are many variations of passages of <br> LoremIpsum available majority.</p>
                                </section>
                            </div>
                        </div>
                        <div class="about_content_text_btn">
                            <a href="">READ MORE +</a>
                        </div>
                    </div>

                    <div class="about_numbers">
                        <div class="about_number_content">
                            <p class="show-p">450+</p>
                            <p>HAPPY PATIENTS</p>
                        </div>

                        <div class="about_number_content">
                            <p class="show-p">100+</p>
                            <p>SAVED HEARTS</p>
                        </div>

                        <div class="about_number_content">
                            <p class="show-p">59+</p>
                            <p>EXPERT DOCTORS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services -->
        <div class="container" id="services">
            <div class="content">
                <div class="services">
                    <section class="services_title">
                        <p><span>OUR SERVICES</span></p>
                        <header>
                            <h2>We Provide Various Directions</h2>
                        </header>
                    </section>
                </div>

                <div class="services_icon">

                    <div class="services_icon_article">
                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/doctor.webp">
                            <img class="image" src="/public/img/default.png" data-img="/public/icon/doctor.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="50" height="50">
                        </picture>
                        <section class="services_icon_article_text">
                            <header>
                                <h2>Angioplasty</h2>
                            </header>
                            <p>There are many variations of <br> pas of Lorem Ipsum availab.</p>
                            <a href="">READ MORE +</a>
                        </section>
                    </div>

                    <div class="services_icon_article">
                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/corazon.webp">
                            <img class="image" src="/public/img/default.png" data-img="/public/icon/corazon.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="50" height="50">
                        </picture>
                        <section class="services_icon_article_text">
                            <header>
                                <h2>Cardiology</h2>
                            </header>
                            <p>There are many variations of <br> pas of Lorem Ipsum availab.</p>
                            <a href="">READ MORE +</a>
                        </section>
                    </div>

                    <div class="services_icon_article">
                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/diente-sano.webp">
                            <img class="image" src="/public/img/default.png" data-img="/public/icon/diente-sano.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="50" height="50">
                        </picture>
                        <section class="services_icon_article_text">
                            <header>
                                <h2>Dental</h2>
                            </header>
                            <p>There are many variations of <br> pas of Lorem Ipsum availab.</p>
                            <a href="">READ MORE +</a>
                        </section>
                    </div>

                    <div class="services_icon_article">
                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/inyeccion.webp">
                            <img class="image" src="/public/img/default.png" data-img="/public/icon/inyeccion.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="50" height="50">
                        </picture>
                        <section class="services_icon_article_text">
                            <header>
                                <h2>Endocrinology</h2>
                            </header>
                            <p>There are many variations of <br> pas of Lorem Ipsum availab.</p>
                            <a href="">READ MORE +</a>
                        </section>
                    </div>
                </div>

                <div class="services_icon">
                    <div class="services_icon_article">
                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/reporte-de-salud.webp">
                            <img class="image" src="/public/img/default.png" data-img="/public/icon/reporte-de-salud.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="50" height="50">
                        </picture>
                        <section class="services_icon_article_text">
                            <header>
                                <h2>Eye Care</h2>
                            </header>
                            <p>There are many variations of <br> pas of Lorem Ipsum availab.</p>
                            <a href="">READ MORE +</a>
                        </section>
                    </div>

                    <div class="services_icon_article">
                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/cerebro.webp">
                            <img class="image" src="/public/img/default.png" data-img="/public/icon/cerebro.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="50" height="50">
                        </picture>
                        <section class="services_icon_article_text">
                            <header>
                                <h2>Neurology</h2>
                            </header>
                            <p>There are many variations of <br> pas of Lorem Ipsum availab.</p>
                            <a href="">READ MORE +</a>
                        </section>
                    </div>

                    <div class="services_icon_article">
                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/protesico.webp">
                            <img class="image" src="/public/img/default.png" data-img="/public/icon/protesico.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="50" height="50">
                        </picture>
                        <section class="services_icon_article_text">
                            <header>
                                <h2>Orthopaedics</h2>
                            </header>
                            <p>There are many variations of <br> pas of Lorem Ipsum availab.</p>
                            <a href="">READ MORE +</a>
                        </section>
                    </div>

                    <div class="services_icon_article">
                        <picture class="picture-defer">
                            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/icon/resonancia-magnetica.webp">
                            <img class="image" src="/public/img/default.png" data-img="/public/icon/resonancia-magnetica.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="50" height="50">
                        </picture>
                        <section class="services_icon_article_text">
                            <header>
                                <h2>RMI</h2>
                            </header>
                            <p>There are many variations of <br> pas of Lorem Ipsum availab.</p>
                            <a href="">READ MORE +</a>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portafolios -->
        <div class="container bg_portafolio" id="portafolio">
            <div class="content">
                <div class="portafolio">
                    <section class="portafolio_title">
                        <p class="portafolio_subtitle"><span>OUR PORTAFOLIO</span></p>
                        <header>
                            <h2>All The Gret Work That We Done</h2>
                        </header>
                    </section>

                    <div class="portafolio_gallery">
                        <div class="portafolio_gallery_article">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-portafolio.webp">
                                <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-portafolio.jpg" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                            </picture>
                        </div>

                        <div class="portafolio_gallery_article">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-portafolio-2.webp">
                                <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-portafolio-2.jpg" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                            </picture>
                        </div>

                        <div class="portafolio_gallery_article">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-portafolio-3.webp">
                                <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-portafolio-3.jpg" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                            </picture>
                        </div>

                        <div class="portafolio_gallery_article">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-portafolio-4.webp">
                                <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-portafolio-4.jpg" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nuestros Pasos -->
        <div class="container bg_step">
            <div class="content">
                <div class="step">
                    <section class="step_title">
                        <p class="step_subtitle">
                            <span>OUR STEP</span>
                        </p>
                        <header>
                            <h2>Our Workig Best Processs</h2>
                        </header>
                    </section>

                    <div class="step_content">
                        <div class="step_content_article">
                            <div class="step_content_article_img">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-step-article-1.webp">
                                    <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-step-article-1.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                                </picture>
                                <p>01</p>
                            </div>
                            <section class="step_content_article_text">
                                <header>
                                    <h2>Emergency Care</h2>
                                </header>
                                <p>There are many variations of <br> passages Lorem Ipsum available</p>
                            </section>
                        </div>

                        <div class="step_content_article">
                            <div class="step_content_article_img">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-step-article-2.webp">
                                    <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-step-article-2.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                                </picture>
                                <p>02</p>
                            </div>
                            <section class="step_content_article_text">
                                <header>
                                    <h2>Operation Theatre</h2>
                                </header>
                                <p>There are many variations of <br> passages Lorem Ipsum available</p>
                            </section>
                        </div>

                        <div class="step_content_article">
                            <div class="step_content_article_img">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-step-article-3.webp">
                                    <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-step-article-1.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                                </picture>
                                <p>03</p>
                            </div>
                            <section class="step_content_article_text">
                                <header>
                                    <h2>Blood Test</h2>
                                </header>
                                <p>There are many variations of <br> passages Lorem Ipsum available</p>
                            </section>
                        </div>

                        <div class="step_content_article">
                            <div class="step_content_article_img">
                                <picture class="picture-defer">
                                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-step-article-4.webp">
                                    <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-step-article-4.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                                </picture>
                                <p>04</p>
                            </div>
                            <section class="step_content_article_text">
                                <header>
                                    <h2>Outdoor Checkup</h2>
                                </header>
                                <p>There are many variations of <br> passages Lorem Ipsum available</p>
                            </section>
                        </div>
                    </div>

                    <div class="step_btn">
                        <a href="">GET APPOINTMENT +</a>
                    </div>

                </div>
            </div>
        </div>


        <!-- Section TEAM -->
        <div class="container bg_team" id="team">
            <div class="content">
                <div class="team">

                    <section class="team_title">
                        <div class="subtitle">
                            <p><span>OUR TEAM</span></p>
                        </div>
                        <header>
                            <h2>Meet Our Heart Specialists</h2>
                        </header>
                    </section>

                    <div class="team_content">
                        <div class="team_content_article">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-team-article-1.webp">
                                <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-team-article-1.jpg" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                            </picture>
                            <header class="team_content_article_content">
                                <header>
                                    <h2>Danieal Frankie</h2>
                                </header>
                                <p>DOCTOR</p>
                            </header>
                        </div>

                        <div class="team_content_article">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-team-article-3.webp">
                                <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-team-article-3.jpg" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                            </picture>
                            <header class="team_content_article_content">
                                <header>
                                    <h2>Alex Jhon</h2>
                                </header>
                                <p>DOCTOR</p>
                            </header>
                        </div>

                        <div class="team_content_article">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-team-article-2.webp">
                                <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-team-article-2.jpg" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                            </picture>
                            <header class="team_content_article_content">
                                <header>
                                    <h2>Ryhana Roy</h2>
                                </header>
                                <p>GYNECOLOGY</p>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Formulario -->
        <div class="container bg_form">
            <div class="content">
                <div class="form">
                    <div class="form_input">
                        <section class="form_input_title">
                            <p><span>APPOINTMENT</span></p>
                            <header>
                                <h2>Apply For Free Treatments</h2>
                            </header>
                        </section>
                        <div class="form_input_inputs">
                            <form action="">
                                <div class="input_uno">
                                    <input type="text" class="input" name="" placeholder="Your Name" required>
                                    <input type="email" class="input" name="" placeholder="Your Email" required>
                                </div>
                                <div class="input_uno">
                                    <input type="text" class="input" name="" placeholder="Your Doctor Name" required>
                                    <input type="text" class="input" name="" placeholder="Your Disease Name" required>
                                </div>
                                <div class="btn-form">
                                    <input type="submit" name="" value="SEND MESSAGE">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- SECTION BAR SOCIOS -->
        <div class="container">
            <div class="content">
                <div class="bar_socios">
                    <picture class="picture-defer">
                        <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-bar-1.webp">
                        <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-bar-1.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                    </picture>

                    <picture class="picture-defer">
                        <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-bar-2.webp">
                        <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-bar-2.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                    </picture>

                    <picture class="picture-defer">
                        <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-bar-3.webp">
                        <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-bar-3.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                    </picture>

                    <picture class="picture-defer">
                        <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-bar-4.webp">
                        <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-bar-4.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                    </picture>

                    <picture class="picture-defer">
                        <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/medical-home-header-bar-5.webp">
                        <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-bar-5.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                    </picture>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="container bg_footer">
            <div class="content">
                <div class="footer">

                    <div class="footer_content">
                        <div class="footer_content_img">
                            <picture class="picture-defer">
                                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="/public/img/footer_logo-2.webp">
                                <img class="image" src="/public/img/default.png" data-img="/public/img/medical-home-header-bar-5.png" alt="Medical Centro Hospitalario" title="Medical Centro Hospitalario" width="100" height="100">
                            </picture>
                        </div>
                        <div class="footer_content_text">
                            <p>It helps designers plan out where the <br> content will sit, the content to be <br> written and approved.</p>
                        </div>
                        <div class="footer_content_social">
                            <div class="footer_contact_icon">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="footer_contact_icon">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="footer_contact_icon">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="footer_contact_icon">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="footer_contact">
                        <div class="footer_contact_text">
                            <p>Contact Us</p>
                        </div>
                        <div class="footer_contact_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                                <path d="M795 936q-122 0-242.5-60T336 720q-96-96-156-216.5T120 261q0-19.286 12.857-32.143T165 216h140q13.611 0 24.306 9.5Q340 235 343 251l27 126q2 14-.5 25.5T359 422L259 523q56 93 125.5 162T542 802l95-98q10-11 23-15.5t26-1.5l119 26q15.312 3.375 25.156 15.188Q840 740 840 756v135q0 19.286-12.857 32.143T795 936ZM229 468l81-82-23-110H180q0 39 12 85.5T229 468Zm369 363q41 19 89 31t93 14V769l-103-21-79 83ZM229 468Zm369 363Z" />
                            </svg>
                            <p>+1800-001-658</p>
                        </div>
                        <div class="footer_contact_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                                <path d="M140 896q-24 0-42-18t-18-42V316q0-24 18-42t42-18h680q24 0 42 18t18 42v520q0 24-18 42t-42 18H140Zm340-302L140 371v465h680V371L480 594Zm0-60 336-218H145l335 218ZM140 371v-55 520-465Z" />
                            </svg>
                            <p>Info@Peacefulthemes.Com</p>
                        </div>
                        <div class="footer_contact_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                                <path d="M480.089 566Q509 566 529.5 545.411q20.5-20.588 20.5-49.5Q550 467 529.411 446.5q-20.588-20.5-49.5-20.5Q451 426 430.5 446.589q-20.5 20.588-20.5 49.5Q410 525 430.589 545.5q20.588 20.5 49.5 20.5ZM480 897q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Zm0-472Z" />
                            </svg>
                            <p>Themeforest, Envato HQ 24 Fifth st.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="footer_2">
                    <p>Copyright 2023 medicate All Rights Reserved</p>
                </div>
            </div>
        </div>

    </main>

    <script src="/public/js/carga-diferida.js"></script>
    <script src="/public/js/nav.js"></script>
    <script src="/public/js/slide.js"></script>
</body>

</html>