<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <title> My Portfolio </title>
</head>
<body>
    <!-- HEADER -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="" class="nav__logo">Srushti</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__link">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i>Home
                        </a>
                    </li>
                    <li class="nav__link">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i> About
                        </a>
                    </li>
                    <li class="nav__link">
                        <a href="#skills" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i>Skills
                        </a>
                    </li>
                    <li class="nav__link">
                        <a href="#services" class="nav__link">
                            <i class="uil uil-briefcase-alt nav__icon"></i>Services
                        </a>
                    </li>
                    <li class="nav__link">
                        <a href="#portfolio" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i>Portfolio
                        </a>
                    </li>
                    <li class="nav__link">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-message nav__icon"></i>Contact me
                            
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>
            <div class="nav__btns">
                <!-- THEME CHANGE BUTTON -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>


                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!-- MAIN -->
    <main class="main">
        <!-- HOME  -->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social"> 
                    <a href="https://www.linkedin.com/in/srushti-gadekar-101405170/" target="_blank" class="home__social-icon">
                        <i class="uil uil-linkedin-alt"></i>
                    </a>
                    <a href="https://github.com/curlyCodes353"   target="_blank" class="home__social-icon">
                        <i class="uil uil-github-alt"></i>
                    </a>
                    <a href="https://www.instagram.com/3503_srushti_/"  target="_blank" class="home__social-icon">
                        <i class="uil uil-instagram"></i>
                    </a>
                </div>
                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                            130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                            97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                            0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                            165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                            129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                            -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>

                            <image class="home_blob-img" xlink:href="srushti.png"/>
                        </g>
                    </svg>
                </div>
                <div class="home__data">
                    <h1 class="home__title">Hi,I am Srushti</h1>
                    <h3 class="home__subtitle">Frontend developer</h2>
                    <p class="home__description">Producing amazing webdesigns with animation based on your needs </p>
                    <a href="#contact" class="button button--flex">
                        Contact Me <i class="uil uil-message button__icon"></i>
                    </a>
                </div>
            </div>
            <div class="home__scroll">
                <a href="#about" class="home__scroll-button button__icon">
                    <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                    <span class="home__scroll-name">Scroll down</span>
                    <i class="uil uil-arrow-down home__scroll-arrow"></i>
                </a>
            </div>
            </div>
        </section>

        <!-- ABOUT  -->
        <section class="about section" id="about">
            <h2 class="section__title">About Me</h2>
            <span class="section__subtitle">My introduction</span>

            <div class="about__container container grid">
                <img src="img3.jpg" alt="" class="about__img">
                <div class="about__data">
                    <p class="about__description"> Results-driven computer science student from Government polytechnic institute,
                         passionate about developing user-friendly Web applications, websites. Excellent problem-solving skills and ability to perform well in a team. Seeking to work as a Web developer, as well as grow and develop my own skills as a coder.</p>
                    
                         <div class="about__info">
                             <span class="about__info-title">10+</span>
                             <span class="about__info-name">Project<br>completed</span>
                         </div>

                         <div class="about__buttons">
                             <a download="" href="MyCV.pdf" class="button button--flex">
                                Download CV <i class="uil uil-download-alt button__icon"></i>
                             </a>
                         </div>
                </div>
            </div>
        </section>

        <!-- SKILLS  -->
        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">My technical level</span>

            <div class="skills__container container grid">
                <div>
                    <!-- Skills 1 -->
                    <div class="skills__content skills__open">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>
                        <div>
                        <h1 class="skills__title">Frontend developer</h1>
                    </div>

                    <i class="uil uil-angle-down skills__arrow"></i>
                </div>
                <div class="skills__list grid">
                    <div class="skills__data">
                        <div class="skills__titles">
                            <h3 class="skills_name">HTML</h3>
                            <span class="skills_number">90%</span>
                        </div>
                        <div class="skills__bar">
                            <span class="skills__percentage skills_html"></span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__titles">
                            <h3 class="skills_name">CSS</h3>
                            <span class="skills_number">80%</span>
                        </div>
                        <div class="skills__bar">
                            <span class="skills__percentage skills_css"></span>
                        </div>
                    </div>

                    <div class="skills__data">
                        <div class="skills__titles">
                            <h3 class="skills_name">JavaScript</h3>
                            <span class="skills_number">60%</span>
                        </div>
                        <div class="skills__bar">
                            <span class="skills__percentage skills_js"></span>
                        </div>
                    </div>
                </div>
            </div>

                  <!-- Skills 2 -->
                  <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-server-network skills__icon"></i>
                    <div>
                    <h1 class="skills__title">Backend developer</h1>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
            </div>
            <div class="skills__list grid">
                <div class="skills__data">
                    <div class="skills__titles">
                        <h3 class="skills_name">PHP</h3>
                        <span class="skills_number">70%</span>
                    </div>
                    <div class="skills__bar">
                        <span class="skills__percentage skills_php"></span>
                    </div>
                </div>

                <div class="skills__data">
                    <div class="skills__titles">
                        <h3 class="skills_name">Python</h3>
                        <span class="skills_number">40%</span>
                    </div>
                    <div class="skills__bar">
                        <span class="skills__percentage skills_python"></span>
                    </div>
                </div>

            </div>
        </div>

                <!-- Skills 3 -->
                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-swatchbook skills__icon"></i>
                    <div>
                    <h1 class="skills__title">Designer</h1>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
            </div>
            <div class="skills__list grid">
                <div class="skills__data">
                    <div class="skills__titles">
                        <h3 class="skills_name">Canva</h3>
                        <span class="skills_number">70%</span>
                    </div>
                    <div class="skills__bar">
                        <span class="skills__percentage skills_php"></span>
                    </div>
                </div>

                <div class="skills__data">
                    <div class="skills__titles">
                        <h3 class="skills_name">Photoshop</h3>
                        <span class="skills_number">60%</span>
                    </div>
                    <div class="skills__bar">
                        <span class="skills__percentage skills_python"></span>
                    </div>
                </div>

            </div>
        </div>
            </div>
            </div>
        </section>

        <!-- QUALIFICATION  -->
        <section class="qualification section">
            <h2 class="section__title">Qualification</h2>
            <span class="section__subtitle">My personal journey</span>

            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target='#education'>
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Education
                    </div>

                    <div class="qualification__button button--flex " data-target='#work'>
                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                        Work
                    </div>
                </div>
                <div class="qualification__sections">
                    <!-- Qualification content 1 -->
                    <div class="qualification__content qualification__active" data-content id="education">

                         <!-- Qualification 1 -->
                         <div class="qualification__data" >
                            <div>
                                <h3 class="qualification__title">Highschool</h3>
                                <span class="qualification__subtitle">S.B.T.K.M.V,Rahuri</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2013-2018
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                            
                        </div>

                        <!-- Qualification 2 -->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span> -->
                            </div>
                            <div>
                                <h3 class="qualification__title">Computer technology</h3>
                                <span class="qualification__subtitle">Government Polytechnic</span><br>
                                <span class="qualification__subtitle">,Ahmednagar</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2018-2021
                                </div>
                            </div>
                           
                        </div>
                    </div>

                       <!-- Qualification content 2 -->
                       <div class="qualification__content qualification__active" data-content id="work">

                        <!-- Qualification 1 -->
                        <div class="qualification__data" >
                           <div>
                               <h3 class="qualification__title">Vb.net Internship</h3>
                               <span class="qualification__subtitle">Transtech solutions</span>
                               <div class="qualification__calender">
                                   <i class="uil uil-calendar-alt"></i>
                                   2020-2021
                               </div>
                           </div>
                           <div>
                               <span class="qualification__rounder"></span>
                               <span class="qualification__line"></span>
                           </div>
                           
                       </div>

                       <!-- Qualification 2 -->
                       <div class="qualification__data">
                           <div></div>
                           <div>
                               <span class="qualification__rounder"></span>
                               <!-- <span class="qualification__line"></span> -->
                           </div>
                           <div>
                               <h3 class="qualification__title">Collage ambassador internship </h3>
                               <span class="qualification__subtitle">Internshala</span>
                               <div class="qualification__calender">
                                   <i class="uil uil-calendar-alt"></i>
                                   2020-2021
                               </div>
                           </div>
                          
                       </div>
                   </div>

                       </div>
                </div>
            </div>
        </section>

        <!-- SERVICES  -->
        <section class="services section" id="services">
            <h2 class="section__title">Services</h2>
            <span class="section__subtitle">What i offer</span>

            <div class="services__container container grid">
                <!-- SERVICES 1 -->
                <div class="services__content">
                    <div>
                        <i class="uil uil-web-grid services__icon"></i>
                        <h3 class="services__title">Ui/Ux <br> Designer</h3>
                    </div>
                    <span class="button button--flex button--small button--link services__button">
                        View More 
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Ui/Ux <br> Designer </h4>
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon">
                                    </i>
                                    <p>I develope the user interface</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon">
                                    </i>
                                    <p> Web page development</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon">
                                    </i>
                                    <p> user-friendly interface</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon">
                                    </i>
                                    <p>Designs based on your needs.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                 <!-- SERVICES 2 -->
                 <div class="services__content">
                    <div>
                        <i class="uil uil-arrow services__icon"></i>
                        <h3 class="services__title">Frontend <br> Developer</h3>
                    </div>
                    <span class="button button--flex button--small button--link services__button">
                        View More 
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Frontend <br> Developer</h4>
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon">
                                    </i>
                                    <p>I develope the Fontend</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon">
                                    </i>
                                    <p> Fontend with some animation</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon">
                                    </i>
                                    <p> user-friendly interface</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon">
                                    </i>
                                    <p>Designs based on your needs.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                 <!-- SERVICES 3 -->
                 <div class="services__content">
                    <div>
                        <i class="uil uil-pen services__icon"></i>
                        <h3 class="services__title">Poster <br> Designer</h3>
                    </div>
                    <span class="button button--flex button--small button--link services__button">
                        View More 
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Poster <br> Designer </h4>
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I can design posters,flyers for you</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p> Designs based on your needs</p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i> </i>
                                    <p> simple but significant designs </p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Designs you will get at affordable prices</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- PORTFOLIO  -->
        <section class="portfolio section" id="portfolio">
            <h2 class="section__title">Portfolio</h2>
            <span class="section__subtitle">Most recent work</span>

            <div class="portfolio__container container swiper-container mySwiper">
                <div class="swiper-wrapper">

                    <!-- PORTFOLIO 1 -->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="pc1.jpg" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Modern website</h3>
                            <p class="portfolio__description">Developed a modern gym website with video background 
                                but in these project i have only developed frontend.</p>
                                <a href="#" class="button button--flex button--small portfolio__button">
                                    Demo 
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                        </div>
                    </div>

                    <!-- PORTFOLIO 2 -->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="pc2.jpg" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Farm stock trading website</h3>
                            <p class="portfolio__description">Developed a fully responsive farm stock trading website with both frontend and backend.
                                 these website includes various functionality like shopping cart, otp authentication login, frontend with animation etc.</p>
                                <a href="#" class="button button--flex button--small portfolio__button">
                                    Demo 
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                        </div>
                    </div>

                    <!-- PORTFOLIO 3 -->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="pc3.jpg" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Poster designs</h3>
                            <p class="portfolio__description">Design some posters for a shop also designed some wedding invitations.</p>
                                <a href="#" class="button button--flex button--small portfolio__button">
                                    Demo 
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- PROJECT IN MIND -->
        <section class="project section">
            <div class="project__bg">
                <div class="project__container container grid">
                    <div class="project__data">
                        <h2 class="project__title"> You have a new project</h2>
                        <p class="project__description">Contact me now and get your project done!!</p>
                        <a href="#contact" class="button button--flex button--white">
                            Contact Me 
                            <i class="uil uil-message project__icon button_icon"></i>
                        </a>
                    </div>
                    <img src="img7.jpg" alt="" class="project__img">
                </div>
            </div>
        </section>

        <!-- CONTACT ME -->
        <section class="contact section" id="contact">
            <h2 class="section__title">Contact Me </h2>
            <span class="section__subtitle">Get in touch</span>

            <div class="contact__information">
                <i class="uil uil-envelope contact__icon"></i>

                <div >
                    <h3 class="contact__title">Email</h3>
                    <span class="contact__subtitle">srushtigadekar321@gmail.com</span>
                </div>
            </div>

            <div class="contact__information ">
                <i class="uil uil-map-marker contact__icon"></i>

                <div>
                    <h3 class="contact__title">Location</h3>
                    <span class="contact__subtitle">Rahuri, Ahmednagar, Maharashtra</span>
                </div>
            </div>

            <form action="contact.php" method="POST" class="contact__form grid">
                <div class="contact__inputs grid">
                    <div class="contact__content">
                        <label for=""   class="contact__label">Name</label>
                        <input type="text" name="name" class="contact__input">
                    </div>
                    <div class="contact__content">
                        <label for=""  class="contact__label">Email</label>
                        <input type="email" name="email" class="contact__input">
                    </div>
                </div>
                <div class="contact__content">
                    <label for=""  class="contact__label">Project</label>
                    <input type="text" name="project" class="contact__input">
                </div>
                <div class="contact__content">
                    <label for=""   class="contact__label">Message</label>
                    <textarea name="message" id="" cols="0" rows="7" class="contact__input"></textarea>
                </div>

                <div>
                <input type="submit" name="register" value="send" class="button button--flex">
                    <!-- <a href="#" name="register" class="button button--flex">
                        Send Message
                        <i class="uil uil-message button__icon"></i>
                    </a> -->
                </div>
            </form>
        </section>


    </main>

    <!-- FOOTER  -->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Srushti</h1>
                    <span class="footer__subtitle">Frontend developer</span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#services" class="footer__link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contact me</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href="https://www.linkedin.com/in/srushti-gadekar-101405170/" target="_blank" class="footer__social" >
                        <i class="uil uil-linkedin-alt"></i>
                    </a>
                    <a href="" target="_blank" class="footer__social">
                        <i class="uil uil-telegram-alt"></i>
                    </a>
                    <a href="https://www.instagram.com/3503_srushti_/" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>
                </div>
            </div>
            <p class="footer__copy">&#169; Srushti. All right reserved</p>
        </div>
    </footer>
    <!-- SCROLL TOP  -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>
    <!-- SWIPER JS -->
    <script src="swiper-bundle.min.js"></script>

    <!-- MAIN JS -->
    <script src="main.js"> </script>

</body>
</html>