<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
  .header{
  background-color: transparent;
  color:black;
  position: absolute;
  }
  li a {
  color:black !important;
  }
</style>
<section class="p-0">
  <div class="main">
    <div class="video-section desk" id="parallax-section">
      <div class="video-overlay" style="position: relative;">
        <img src="assets/img/ban1.png" alt style="width: 100%;">
      </div>
    </div>
    <div class="mt-md-5" style>
      <div class=" text-center" style="max-width: 90%;margin:auto;">
        <h1 class="bold" style="font-weight:500;">Our Expertise.</h1>

        <h4 style="color:#0890DD;">Tailored AI Solutions for Every Need.</h4>
        <br>
        <div class="row mt-5">
          <div class="col-md-3">
            <div class="img" style="border-radius: 24px;overflow:hidden;">
              <img src="assets/img/oe1.png" alt width="100%">
            </div>
            <h4 class="p-3 text-start mt-3">Ai Consulting</h4>
          </div>
          <div class="col-md-3">
            <div class="img" style="border-radius: 24px;overflow:hidden;">
              <img src="assets/img/oe2.png" alt width="100%">
            </div>
            <h4 class="p-3 text-start mt-3">Custom AI Solutions</h4>
          </div>
          <div class="col-md-3">
            <div class="img" style="border-radius: 24px;overflow:hidden;">
              <img src="assets/img/oe3.png" alt width="100%">
            </div>
            <h4 class="p-3 text-start mt-3">Machine Learning Models</h4>
          </div>
          <div class="col-md-3">
            <div class="img" style="border-radius: 24px;overflow:hidden;">
              <img src="assets/img/oe4.png" alt width="100%">
            </div>
            <h4 class="p-3 text-start mt-3">Data Analytics</h4>
          </div>

        </div>
        <div class="btnn mt-4 pb-4">
          <a href><button class="btn"
              style="border: 1px solid;border-radius: 16px;padding:10px 20px;font-size:18px;">Explore
              our
              services</button></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="mt-md-5 mt-3">
  <div class="container">
    <div class="row text-black pt-4">
      <div class="col-md-7 ">
        <h1 style="max-width: 65%;font-size:52px;">Why iAI Solution is the <span
            style="color:#0890DD;">best <br>choice for you</span></h1>
        <img src alt>

      </div>
      <div class="col-md-5">
        <p style="font-size: 18px;">At iAI Solution, we excel in delivering
          cutting-edge AI technologies tailored to optimize operations, enhance
          decision-making, and drive innovation. Based in the UAE, our
          experienced team offers customized AI solutions across various
          industries, ensuring exceptional results and client success. With a
          commitment to innovation, collaboration, excellence, and integrity, we
          build strong partnerships and provide AI-driven insights that
          transform businesses. Choose iAI Solution for unparalleled expertise
          and a competitive edge in the rapidly evolving digital landscape.</p>
      </div>

    </div>
    <br><br>
    <div class="row">
      <div class="col-md-4">
        <hr>
        <h3 style="font-weight: 700;">Innovative Solutions</h3>
        <p>Leveraging the latest AI advancements <br>to meet your unique
          business challenges. </p>
      </div>
      <div class="col-md-4">
        <hr>
        <h3 style="font-weight: 700;">Agility and Flexibility</h3>
        <p>Personalized and responsive service to <br>ensure your business
          thrives.</p>
      </div>
      <div class="col-md-4">
        <hr>
        <h3 style="font-weight: 700;">Client-Centric Focus</h3>
        <p>Building strong, collaborative partnerships with transparent and
          tailored AI insights.</p>
      </div>
    </div>

  </div>
</section>
<section class="mt-md-5 mt-4 pb-5">
  <img src="assets/img/ban21.png" alt width="90%">
</section>
<section>
  <div style="max-width: 90%;margin:auto;">
    <div class="mt-md-5" style>
      <div class=" text-center" style="max-width: 90%;margin:auto;">
        <h1 class="bold" style="font-weight:500;">Industry Solutions</h1>
  
        <h4 class="mt-3" style="color:#0890DD;">AI for Every Sector.</h4>
        <br>
        <div class="row mt-5">
          <div class="col-md-3">
            <div class="img" style="overflow:hidden;">
              <img src="assets/img/is1.png" alt width="100%">
            </div>
            <h4 class="p-3 text-start mt-3">Healthcare</h4>
          </div>
          <div class="col-md-3">
            <div class="img" style="overflow:hidden;">
              <img src="assets/img/is2.png" alt width="100%">
            </div>
            <h4 class="p-3 text-start mt-3">Finance</h4>
          </div>
          <div class="col-md-3">
            <div class="img" style="overflow:hidden;">
              <img src="assets/img/is3.png" alt width="100%">
            </div>
            <h4 class="p-3 text-start mt-3">Retail</h4>
          </div>
          <div class="col-md-3">
            <div class="img" style="overflow:hidden;">
              <img src="assets/img/is4.png" alt width="100%">
            </div>
            <h4 class="p-3 text-start mt-3">Manufacturing</h4>
          </div>
  
        </div>
        <div class="btnn mt-4 pb-4">
          <h4>Our AI solutions are tailored to meet the unique challenges and<br> opportunities in each industry.</h4>
          <a ><button class="btn mt-4"
              style="border: 1px solid;border-radius: 16px;padding:10px 20px;font-size:18px;">Explore all Industries</button></a>
        </div>
      </div>
    </div>
  </div>

</section>
<script>
  // Parallax effect using JavaScript
  document.addEventListener("DOMContentLoaded", function () {
    var parallaxSection = document.getElementById("parallax-section");
    var backgroundVideo = document.getElementById("backgroundVideo");
    var textOverlay = document.querySelector(".text-overlay");

    function updateParallax() {
      var scrollPosition = window.scrollY;
      var parallaxValue = scrollPosition * 0.5; // Adjust the speed of parallax

      backgroundVideo.style.transform = "translateY(" + parallaxValue + "px)";
      textOverlay.style.transform = "translate(-50%, calc(-50% + " + parallaxValue + "px))";
    }

    window.addEventListener("scroll", updateParallax);
  });

</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var video = document.getElementById('backgroundVideo');
    var additionalText = document.getElementById('additionalText');

    // Play the video
    video.play();

    // Show the additional text after the video has started playing
    video.addEventListener('playing', function () {
      additionalText.style.opacity = 1;
    });
  });
</script>
<script>
  //window.addEventListener('scroll', function () {
  //var dsImage = document.querySelector('.ds');
  // var ddsImage = document.querySelector('.dds');

  // Get the scroll position
  // var scrollPosition = window.scrollY || document.documentElement.scrollTop;

  // Define the threshold for switching images (adjust as needed)
  //var switchThreshold = 20;

  // Toggle the visibility of images based on scroll position
  // if (scrollPosition > switchThreshold) {
  ////  dsImage.style.display = 'none';
  //ddsImage.style.display = 'inline-block';
  // } else {
  //  dsImage.style.display = 'inline-block';
  //  ddsImage.style.display = 'none';
  // }
  //});
</script>