<!--home.blade.php-->

@extends('master.layout')
@section('content')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container-fluid hero-container" data-aos="fade-up">
        <div class="row g-0 align-items-center">
          <div class="col-lg-6 content-col">
            <div class="content-wrapper">
            
              <h2>Lands And People</h2>
              <h1>Coffee Catering</h1>

              <div class="opening-hours" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-clock"></i>
                <span>Open Daily: 10am - 10pm</span>
              </div>

               <div class="btn-group">
                <a href="#book" class="btn btn-book">Book Now</a>
                <a href="#packages" class="btn btn-menu">View Packages</a>
              </div>
              
              <div class="social-links">
                <a href="https://www.facebook.com/profile.php?id=61576201207499" target="_blank">
                  <i class="bi bi-facebook"></i>
                </a>

                <a href="https://www.instagram.com/landsandpeople.co/" target="_blank">
                  <i class="bi bi-instagram"></i>
                </a>

                <a href="https://www.tiktok.com/@landspeoples?lang=en" target="_blank">
                  <i class="bi bi-tiktok"></i>
                </a>
              </div>


            </div>
          </div>

          <div class="col-lg-6 swiper-col">
            <div class="swiper hero-swiper init-swiper" data-aos="zoom-out" data-aos-delay="100">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 800,
                  "autoplay": {
                    "delay": 5000
                  },
                  "effect": "fade",
                  "slidesPerView": 1,
                  "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="assets/img/restaurant/home.jpg">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="assets/img/restaurant/home2.jpg" >
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="assets/img/restaurant/home3.jpg">
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->


    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content">
              <h3>Born To Survive And Success</h3>
              <p class="fst-italic">Spoiler, in the end we all die.</p>
              <p>At Lands and People Café, our coffee catering is crafted to bring people together over exceptional brews. We serve freshly prepared, high-quality coffee made from carefully selected beans, roasted to highlight their unique character and depth of flavor.

                  From intimate gatherings to corporate events, our professional baristas deliver a smooth and consistent coffee experience, tailored to your needs. Whether it’s classic espresso-based drinks or customized menus, our coffee catering adds warmth, energy, and a memorable touch to every occasion.
              </p>

            </div>
          </div>

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="about-image-wrapper">
              <img src="assets/img/restaurant/home4.jpg" class="img-fluid main-image shadow">
              <span class="establishment-year d-flex align-items-center justify-content-center text-center">Est. 2023</span>
            </div>
          </div>
        </div>

        <div class="row mt-5 pt-4 features-section">
        <h3 style="text-align:center;">What We Offer</h3>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-award"></i>
              </div>
              <h4>Professional Baristas</h4>
              <p>Skilled and friendly baristas dedicated to crafting high-quality coffee with consistency and care.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-egg-fried"></i>
              </div>
              <h4>Fresh Ingredients</h4>
              <p>Only fresh, carefully selected ingredients to ensure rich flavors in every cup.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-people"></i>
              </div>
              <h4>Handcrafted Drinks</h4>
              <p>Each beverage is made by hand, focusing on taste, balance, and presentation.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-heart"></i>
              </div>
              <h4>Mobile Coffee</h4>
              <p>A flexible coffee service that brings premium café-quality drinks directly to your event or location.</p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->


    <!-- Menu Section -->
    <section id="packages" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Catering Packages</h2>
        <p>Perfect for events, meetings, and celebrations</p>
      </div><!-- End Section Title -->

     <div class="container" data-aos="fade-up">

      <div class="menu-container row gy-4 justify-content-center">

      <!-- Package A -->
      <div class="col-lg-4 col-md-6">
        <div class="menu-item d-flex flex-column align-items-center gap-3">
          <img src="assets/img/PA.jpg" class="menu-img rounded-3">

          <div class="menu-content">
            <h5>Package A</h5>
            <h6>50 - 100 pax | RM8 per cup</h6>

            <p>
              • Black<br>
              • White<br>
              • Chocolate<br>
              • Matcha<br>
              • 1 Flavoured Latte<br>
              <span class="ms-3">• Vanilla</span><br>
              <span class="ms-3">• Caramel</span><br>
              <span class="ms-3">• Hazelnut</span><br>
              <span class="ms-3">• Salted Caramel</span><br>
              <span class="ms-3">• Tiramisu</span><br>
              <span class="ms-3">• Rose</span>
            </p>
          </div>
        </div>
      </div>

      <!-- Package B -->
      <div class="col-lg-4 col-md-6">
        <div class="menu-item d-flex flex-column align-items-center gap-3">
          <img src="assets/img/PA.jpg" class="menu-img rounded-3">

          <div class="menu-content">
            <h5>Package B</h5>
            <h6>100 - 200 pax | RM7 per cup</h6>

            <p>
              • Black<br>
              • White<br>
              • Chocolate<br>
              • Matcha<br>
              • 2 Flavoured Latte<br>
              <span class="ms-3">• Vanilla</span><br>
              <span class="ms-3">• Caramel</span><br>
              <span class="ms-3">• Hazelnut</span><br>
              <span class="ms-3">• Salted Caramel</span><br>
              <span class="ms-3">• Tiramisu</span><br>
              <span class="ms-3">• Rose</span>
            </p>
          </div>
        </div>
      </div>

      <!-- Package C -->
      <div class="col-lg-4 col-md-6">
        <div class="menu-item d-flex flex-column align-items-center gap-3">
          <img src="assets/img/PA.jpg" class="menu-img rounded-3">

          <div class="menu-content">
            <h5>Package C</h5>
            <h6>Above 200 pax | RM6 per cup</h6>

            <p>
              • Black<br>
              • White<br>
              • Chocolate<br>
              • Matcha<br>
              • 2 Flavoured Latte<br>
              <span class="ms-3">• Vanilla</span><br>
              <span class="ms-3">• Caramel</span><br>
              <span class="ms-3">• Hazelnut</span><br>
              <span class="ms-3">• Salted Caramel</span><br>
              <span class="ms-3">• Tiramisu</span><br>
              <span class="ms-3">• Rose</span>
            </p>
          </div>
        </div>
      </div>

  </div>
</div>

<!-- Book A Table Section -->
    <section id="book" class="book-a-table section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-12" data-aos="fade-up" data-aos-delay="400">
            <div class="reservation-form-wrapper">
              <div class="form-header">
                <h3>Book Coffee Packages</h3>
                <p>Please fill the form below to make a reservation</p>
              </div>

              <!--
              <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form mt-4"> -->
                <form action="{{ route('bookings.store') }}" method="POST">
                 @csrf

                <div class="row gy-4">
                  <div class="col-lg-4 form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>
                  <div class="col-lg-4 form-group">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>
                  <div class="col-lg-4 form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Your Phone" required="">
                  </div>
                  
                  <div class="col-lg-4 form-group">
                    <input type="date" name="date" class="form-control" placeholder="Date" required="">
                  </div>
                  
                  <div class="col-lg-4 form-group">
                    <input type="text" class="form-control" name="pax" placeholder="Number of Pax" required="">
                  </div>

                  <div class="col-lg-4 form-group">
                    <select name="package_id" class="form-select" required="">
                      <option value="">Select Package</option>
                      <option value="1">Package A</option>
                      <option value="2">Package B</option>
                      <option value="3">Package C</option>
                    </select>
                  </div>
                 

                  <div class="form-group mt-4">
                    <textarea class="form-control" name="address" rows="3" placeholder="Address"></textarea>
                  </div>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                </div>

                <div class="text-center mt-4">
                  <button type="submit" class="btn-book-table">Book Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Book A Table Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Contact Info Boxes -->
        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="info-content">
                <h4>Our Address</h4>
                <p>10-1G, Jalan PP2, Pusat Perdagangan Paroi, 70400 Seremban, Negeri Sembilan</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="info-content">
                <h4>Email Address</h4>
                <p>peoplebrews@gmail.com</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-headset"></i>
              </div>
              <div class="info-content">
                <h4>Hours of Operation</h4>
                <p>Monday - Sunday: 10am - 10pm</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Google Maps (Full Width) -->
        <div class="map-section" data-aos="fade-up" data-aos-delay="200">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.2989617102617!2d101.9778711!3d2.7273475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cddd4b2b632467%3A0x280a4ddeac11bfc7!2sLands%20%26%20People%20Craft%20Brews!5e0!3m2!1sen!2smy!4v1766214467722!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
        </div>

      </div>
        
    

  </main>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

@endsection
