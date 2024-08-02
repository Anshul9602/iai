<style>
    @media (max-width: 767px) {
        .mxw{
           margin: auto;
        }
        
        .mt-2 {
            text-align: center;
        }

        .tc {
            text-align: center;
        }
    }

    .social_icon {
        font-size: 25px;
        color: #f26522 !important;
        display: none;
    }

    hr {
        border-top: 2px solid;
        opacity: 1;
    }

    .formPopup {
        background: rgba(0, 0, 0, 0.7);
        width: 100%;
        height: 100vh;
        display: none;
        position: fixed;
        left: 50%;
        top: 0%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 4;
    }

    .formContainer {
        max-width: 700px;
        padding: 20px;
        background-color: #f26522;
    }

    .formContainer input[type=text]:focus,
    .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    .formContainer .btn {
        padding: 12px 20px;
        border: none;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
    }

    .formContainer .cancel {
        width: 50px;
    }

    .formContainer .btn:hover,
    .openButton:hover {
        opacity: 1;
    }
</style>


<footer class="footer-no-negative wf-section">
    <hr>
    <div>
        <div style="max-width:85%;margin:auto;">


            <div class="  footer-row-1 row tc mt-5" style="    justify-content: space-around;">
                <div class="col-md-3  mb-3 mt-3"><a href="/" aria-current="page" class="w-inline-block w--current">
                        <img src="assets/img/logo.png" alt="" style="width:150px;">

                        <div class="row mt-4 mxw" style="max-width:50%;">
                            <div class="col-md-4 col-4" style="    align-items: start; display: flex;"> <a href="" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"style="    width: 24px;" >
                                        <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                    </svg></a></div>
                            <div class="col-md-4 col-4"> <a href="" target="_blank"><i style="font-size: 28px;" class="fab fa-instagram"></i></a> </div>
                            <div class="col-md-4 col-4"><a href="" target="_blank"><i style="font-size: 28px;" class="fab fa-linkedin"></i></a></div>
                        </div>

                    </a>
                </div>
                <div class=" row col-md-9 mt-md-3 mb-md-3 mb-0 mt-0">
                    <div class="col-lg-4 col-md-6 col-6  mt-2  tc">
                        <div class="div-block-1463">
                            <div class="footer-title">Useful Links </div>
                        </div>
                        <div class="col-footer">

                            <a href="<?php echo base_url(''); ?>" class="footer-links mt-16">Home</a>
                            <a href="<?php echo base_url('About'); ?>" class="footer-links mt-16">About</a>
                            <a href="<?php echo base_url('Services'); ?>" class="footer-links mt-16">Services</a>
                            <a href="<?php echo base_url('Industry'); ?>" class="footer-links mt-16">Industry</a>
                            <a href="<?php echo base_url('Contact'); ?>" class="footer-links mt-16">Contact us</a>



                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6  mt-2  tc">
                        <div class="div-block-1463">
                            <div class="footer-title">Need help?</div>
                        </div>
                        <div class="col-footer">
                            <a href="<?php echo base_url('FAQ'); ?>" class="footer-links mt-25">FAQs</a>
                            <a href="<?php echo base_url('Privacy'); ?>" class="footer-links mt-16">Privacy Policy</a>

                            <a href="<?php echo base_url('Compliance'); ?>" class="footer-links mt-16">Compliance</a>
                            <a href="<?php echo base_url('Terms'); ?>" class="footer-links mt-16">Terms & conditions</a>

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-12 mt-2  tc">
                        <div class="div-block-1463">
                            <div class="footer-title">Newsletter</div>
                        </div>
                        <div class="col-footer">
                            <h6 class="mt-4">Subscribe to our news letter</h6>
                            <div class="form-block w-form" style="width:100%;">
                                <form action="Sub_mail" method="post" class="footer-form d-flex" style="align-items: center;">

                                    <input type="email" style="width:100%; border-radius: 3px;" class="text-field w-input" maxlength="256" name="email" placeholder="Enter your email address" required="">

                                    <input type="submit" value="Subscribe" class="sub-send sub-send-btn-trigger" style="width:50%">
                                </form>

                                <div class="success-message-2 w-form-done" tabindex="-1" role="region" aria-label="Newsletter-footer success">
                                    <div>Thank you!</div>
                                </div>

                                <div class="w-form-fail" tabindex="-1" role="region" aria-label="Newsletter-footer failure">
                                    <div>Oops! Something went wrong while submitting the form.</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-row-3 tc" style="    text-align: center;">
                <div class="footer-copyw tc">

                    <p class="text-center container mob-size" style=" font-size:14px; color:#000; padding:5px;font-weight: 300;">
                        Copyright © 2024 IAI . All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll <= 500) {
            $(".addclass").removeClass("addclass").addClass("stick");
        }
    })
</script>

<script>
    function openForm() {
        document.getElementById("popupForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("popupForm").style.display = "none";
    }

    function openForm1() {
        document.getElementById("popupForm1").style.display = "block";
    }

    function closeForm1() {
        document.getElementById("popupForm1").style.display = "none";
    }
</script>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>