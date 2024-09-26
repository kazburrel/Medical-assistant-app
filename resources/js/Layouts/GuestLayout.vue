<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>


    <div class="site-wrapper">
        <div class="first_nav_hero_about">
            <!-- ======== 1.1. header section ======== -->
            <header>
                <nav class="container navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <!-- site logo -->
                        <a class="nav-logo p-0" href="index.html"><img src="main_assets/images/Logo.png" alt="logo"></a>
                        <!-- navigation button  -->
                        <button class="navbar-toggle" onclick="openNav()" type="button"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <!-- navigation bar manu  -->
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul
                                class="navbar-nav d-flex justify-content-center align-items-center gap-lg-2 gap-md-2 gap-sm-2 gap-2 mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="feature.html">Feature</a>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link " href="#">Pages <i
                                            class="fa-sharp fa-solid fa-sort-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                                        <li><a class="dropdown-item" href="contact.html">Contact</a></li>
                                        <li><a class="dropdown-item" href="team.html">Team</a></li>
                                        <li><a class="dropdown-item" href="testimonials.html">Testimonials</a></li>
                                        <li><a class="dropdown-item" href="blogs.html">Blogs</a></li>
                                        <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                                        <li><a class="dropdown-item" href="404.html">404</a></li>
                                        <li><a class="dropdown-item" href="coming.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a id="search-bar-bt" class="nav-link" href="#"><i
                                            class="fa-solid fa-magnifying-glass"></i></a>
                                </li>
                                <li class="nav-item header_btn ">
                                    <a class="nav-link nav-hrf btn-hover1" href="#">Create Account</a>
                                </li>
                                <li class="nav-item" onclick="open_right_side()">
                                    <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-bars"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!--============ navigation left slidebar================-->
                <aside>
                    <div id="mySidenav" class="sidenav">
                        <div class="side-nav-logo d-flex justify-content-between align-items-center ps-4 pe-3">
                            <figure class="navbar-brand"><a href="index.html"><img src="main_assets/images/Logo.png"
                                        alt="img" class="nav-logo"></a></figure>
                            <div class="closebtn" onclick="closeNav()"><i
                                    class="fa-solid fa-square-xmark side-bar-close-btn"></i></div>
                        </div>
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="feature.html">Feature</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pricing.html">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <div class="d-flex align-items-center justify-content-between pt-3" id="slid-btn">
                                    <button class="a-slid">Pages</button>
                                    <i class="fa-solid fa-caret-down pe-4"></i>
                                </div>
                                <ul id="slid-drop" class="myst">
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="blogs.html">Blogs</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="coming.html">Coming Soon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </aside>
                <!--================== navigation drop search bar================-->
                <div class="search" id="search-bar">
                    <form class="d-flex nav-search">
                        <input type="text" name="search" placeholder="Enter your text">
                        <button class="btn-hover1" type="submit">Search</button>
                    </form>
                    <button id="remove-btn">
                        <i class="fa-solid fa-square-xmark "></i>
                    </button>
                </div>
                <!--=================navigation Right slidebar==================-->
                <section class="right-sidbar" id="right_side">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- site logo -->
                        <a class="p-0 " href="index.html"><img src="main_assets/images/Logo.png" alt="logo"></a>
                        <button class="close_right_sidebar fa-solid fa-xmark" onclick="close_right_sade()">
                        </button>
                    </div>
                    <p class="mt-4 pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <a href="#" class="btn-hover1">Discover More</a>
                    <hr>
                    <h5 class="mt-4 mb-4">Connected details:</h5>
                    <ul class="d-flex flex-column gap-3">
                        <li>
                            <a href="#"> <i class="fa-solid fa-phone"></i></a>
                            <a href="#">yourname@email.com</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-envelope"></i></a>
                            <a href="#">+123-456-7890</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-clock"></i></a>
                            <a href="#">Office Hours: 8AM - 11PM Sunday -
                                Weekend Day</a>
                        </li>
                    </ul>
                    <span class="d-flex gap-4 mt-4">
                        <a href="#" class="p-0"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="p-0"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="p-0"><i class="fa-brands fa-twitter"></i></a>
                    </span>
                </section>
            </header>
            <!-- ======== End of 1.1. header section ========  -->
            <!-- ======== 1.2. hero section ======== -->
            <section class="hero">
                <div class="container">
                    <div class="row text-md-start text-sm-center text-center gap-md-0 gap-sm-4 gap-5">
                        <div
                            class="col-md-6 d-flex align-items-md-start align-items-ms-center align-items-center justify-content-center flex-column">
                            <!-- <h1>sfdsfsfssd</h1> -->
                            <h1>EMPOWER YOUR FINANCES</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has
                                been the industry's standard dummy text ever since the 1500s.</p>
                            <a class="btn-hover1" href="about.html">Get the Card</a>
                        </div>
                        <div
                            class="col-md-6 position-relative d-flex flex-column justify-content-center align-items-center mt-md-0 mt-sm-5 mt-4">
                            <img src="main_assets/images/index/hero.png" alt="hero_img1" class="moving">
                            <img src="main_assets/images/index/hero_watch.png" alt="hero_img2">
                            <img src="main_assets/images/icon/hero_star.png" alt="hero_icon">
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======== End of 1.2. hero section ========  -->
            <!-- ======== 1.3. about section ========  -->
            <section class="about">
                <div class="container">
                    <div class="row text-md-start text-sm-center text-center">
                        <div class="col-md-6 d-flex justify-content-between">
                            <div class="ab_card1">
                                <h3>About</h3>
                                <p class="p-f-s">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem
                                    Ipsum
                                    has
                                    been the industry’s standard dummy text ever since the 1500s, when an unknown
                                    printer
                                    took a
                                    galley of type and scrambled.</p>
                                <div
                                    class="d-flex align-items-center justify-content-lg-start justify-content-md-center justify-content-center">
                                    <a class="btn-hover1" href="about.html">Learn More</a>
                                    <div class="abut-video">
                                        <a class="video-play-button" href="#">
                                            <span class="fa-solid fa-play"></span>
                                        </a>

                                    </div>
                                    <div class="p-f-s w-v">Watch Video</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center mt-md-0 mt-sm-3 mt-3">
                            <div class="ab_card2 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="row gap-md-0 gap-sm-3 gap-3">
                                        <div class="col-md-5 col-sm-12 col-12 ">
                                            <div
                                                class="d-flex justify-content-md-start justify-content-sm-center justify-content-center">
                                                <h3 class="count">38</h3>
                                                <h3>M+</h3>
                                            </div>
                                            <p class="p-f-s">Business have already joined us! Business have already
                                                joined us!</p>
                                        </div>
                                        <div class="col-2 p-0 d-flex justify-content-center align-items-center">
                                            <hr>
                                        </div>
                                        <div class="col-md-5 col-sm-12 col-12 p-0">
                                            <h3>0%</h3>
                                            <p class="p-f-s">Zero percent fee to any transaction Zero percent fee to
                                                any
                                                transaction
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="d-flex mb-3 mt-4 gap-4 justify-content-md-start justify-content-ms-center justify-content-center">
                                    <div class="position-relative">
                                        <img src="main_assets/images/index/about_card_img1.jpg" alt="about_img1">
                                        <img src="main_assets/images/index/about_card_img2.jpg" alt="about_img2">
                                    </div>
                                    <div class="ps-2">
                                        <span>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        <p>So many people like this service</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <slot />

        <footer class="position-relative">
            <div class="container">
                <h4 class="text-center">SUBSCRIBE OUR NEWSLETTER</h4>
                <P class="text-center pt-2 pb-3">Get latest News and Updates</P>
                <form class="d-flex align-items-center justify-content-center" id="footer-sub2">
                    <!-- form Subscribe massage -->
                    <div id="Succes-box2"></div>
                    <div class="d-flex footer-search ">
                        <input type="email" name="search" placeholder="Enter your Email" required>
                        <button type="submit" class="btn-hover1">Subscribe</button>
                    </div>
                </form>
                <div class="footer-logo text-center pb-lg-4 pb-md-3 pb-sm-2 pb-4">
                    <!-- footer logo  -->
                    <a href="index.html">
                        <figure><img src="main_assets/images/Logo.png" alt="img"></figure>
                    </a>
                </div>
                <ul class="d-flex align-items-center justify-content-center">
                    <li>
                        <a href="#">Feature</a>
                    </li>
                    <li>
                        <a href="#">Pricing</a>
                    </li>
                    <li>
                        <a href="#">About us</a>
                    </li>
                    <li>
                        <a href="#">Faq</a>
                    </li>
                </ul>
                <hr>
                <div class="row footer-nav-icon">
                    <!-- footer social icon  -->
                    <div
                        class="col-lg-3 col-md-3 d-flex align-items-center justify-content-md-start justify-content-sm-center justify-content-center">
                        <div
                            class="social-icon d-flex gap-2 justify-content-md-start justify-content-sm-center justify-content-center">
                            <a href="#"> <i class="fa-brands fa-facebook-f foot-facebook"></i></a>
                            <a href="#"> <i class="fa-brands fa-twitter"></i></a>
                            <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <!-- footer terms privacy  -->
                    <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center">
                        <div class=" d-flex gap-3 p-2">
                            <a href="#">Terms & Condition</a>
                            <a href="#">Privacy Policy</a>
                        </div>
                    </div>
                    <!-- footer logo slider  -->
                    <div class="col-lg-3 col-md-3">
                        <div class="footer_ispsum_slider">
                            <figure><a href="#"><img src="main_assets/images/icon/logoipsum-228.png" alt="qr-code"></a>
                            </figure>
                            <figure><a href="#"><img src="main_assets/images/icon/logoipsum-233.png" alt="qr-code"></a>
                            </figure>
                            <figure><a href="#"><img src="main_assets/images/icon/logoipsum-229.png" alt="qr-code"></a>
                            </figure>
                            <figure><a href="#"><img src="main_assets/images/icon/logoipsum-228.png" alt="qr-code"></a>
                            </figure>
                            <figure><a href="#"><img src="main_assets/images/icon/logoipsum-233.png" alt="qr-code"></a>
                            </figure>
                            <figure><a href="#"><img src="main_assets/images/icon/logoipsum-229.png" alt="qr-code"></a>
                            </figure>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="Copyright d-flex justify-content-between flex-wrap dir">
                    <p>Copyright © 2023 Paypath by Evonicmedia. All Right Reserved.</p>
                    <p>Powered by Evonicsoft</p>
                </div>
            </div>
        </footer>
        <!-- ======== End of 1.13. footer section ========  -->
    </div>
    <!-- end site wrapper -->





</template>
