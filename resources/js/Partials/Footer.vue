<template>
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
                    <figure><img src="assets/images/Logo.png" alt="img"></figure>
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
                        <figure><a href="#"><img src="assets/images/icon/logoipsum-228.png" alt="qr-code"></a>
                        </figure>
                        <figure><a href="#"><img src="assets/images/icon/logoipsum-233.png" alt="qr-code"></a>
                        </figure>
                        <figure><a href="#"><img src="assets/images/icon/logoipsum-229.png" alt="qr-code"></a>
                        </figure>
                        <figure><a href="#"><img src="assets/images/icon/logoipsum-228.png" alt="qr-code"></a>
                        </figure>
                        <figure><a href="#"><img src="assets/images/icon/logoipsum-233.png" alt="qr-code"></a>
                        </figure>
                        <figure><a href="#"><img src="assets/images/icon/logoipsum-229.png" alt="qr-code"></a>
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
    <!-- end site wrapper -->
    <!-- button back to top -->
    <button onclick="scrollToTop()" id="backToTopBtn"><i class="fa-solid fa-arrow-turn-up"></i></button>
</template>

<script setup>
import { onMounted } from 'vue';

onMounted(() => {
    const scriptUrls = [
        '{{ asset("main_assets/js/javascript-lib/bootstrap.min.js") }}',
        '{{ asset("main_assets/js/jquery.js") }}',
        '{{ asset("main_assets/js/slick.min.js") }}',
        '{{ asset("main_assets/js/custom.js") }}',
        '{{ asset("main_assets/js/waypoints.min.js") }}',
        '{{ asset("main_assets/js/aos.js") }}'
    ];

    scriptUrls.forEach(url => {
        const script = document.createElement('script');
        script.src = url;
        document.body.appendChild(script);
    });

    AOS.init({
        once: true,
        duration: 1500,
    });
});
</script>