<!-- resources/views/about.blade.php -->
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>About | COCO Island Holidays - Travel Agency</title>
        <meta name="description" content="Learn more about COCO Island Holidays, our story, mission, vision, and values.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/fav-icon.jpg') }}">
        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/preloader.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-pro.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
        @stack('styles')
    </head>
    <body>
        <!-- pre loader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>

        <!-- scroll up -->
        <div class="scroll-up" id="scroll" style="display: none;">
            <a href="javascript:void(0);"><i class="fas fa-angle-up"></i></a>
        </div>

        <!-- Floating WhatsApp -->
        <a href="https://wa.me/94776605054" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>

        @php($transparentHeader = true)
        @include('components.header')

    <main>
                <!-- About Hero Banner -->
        <section class="about-hero-area slider-area" data-background="{{ asset('frontend/assets/img/slider/slider-01.jpg') }}">
            <div class="about-hero single-slider slider-height d-flex align-items-center"
                 data-background="{{ asset('frontend/assets/img/about/aboutpage.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="about-hero-content text-center">
                                <h1 class="about-page-title sec-title text-center pt-150">Contact Us</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Banner -->
        <!-- <section class="tropical-shores-hero-area slider-area">
            <div class="tropical-shores-hero single-slider slider-height d-flex align-items-center"
                 data-background="{{ asset('frontend/assets/img/slider/contact-banner.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tropical-shores-hero-content text-center">
                                <h1 class="tropical-shores-page-title sec-title">Contact Us</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Section 1: Contact Info -->
    <section class="section pt-120 pb-70 contact-info">
  <div class="container">
    <!-- row-cols makes it responsive without repeating breakpoints -->
    <div class="row text-center row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
      
      <div class="col">
        <div class="h-100 px-3">
          <i class="fas fa-phone fa-2x mb-3" aria-hidden="true"></i>
          <h4 class="theme-color mb-1">Phone</h4>
          <p class="mb-0"><a href="tel:+94770505952">+94 77 050 5952</a></p>
        </div>
      </div>

      <div class="col">
        <div class="h-100 px-3">
          <i class="fas fa-map-marker-alt fa-2x mb-3" aria-hidden="true"></i>
          <h4 class="theme-color mb-1">Address</h4>
          <p class="mb-0">01, Wickramasinghepura, Ruwanmaga, Dodangoda, Kaluthara</p>
        </div>
      </div>

      <div class="col">
        <div class="h-100 px-3">
          <i class="fas fa-envelope fa-2x mb-3" aria-hidden="true"></i>
          <h4 class="theme-color mb-1">Email</h4>
          <p class="mb-0">
            <a href="mailto:info@cocoislandholidays.com">info@cocoislandholidays.com</a>
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

        <hr>

        <!-- Section 2: Google Map + Contact Form -->
<section class="section pt-70 pb-70 contact-main">
  <div class="container">
    <div class="row g-4 align-items-stretch">
      
      <!-- Google Map -->
      <div class="col-12 col-lg-6">
        <div class="mapouter w-100 h-100">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63359.83101338046!2d79.8612436!3d6.9270786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2591b9f6d9c5b%3A0x1234567890abcdef!2sColombo!5e0!3m2!1sen!2slk!4v1700000000000"
            class="w-100 rounded shadow-sm"
            style="min-height: 300px; border:0;" 
            allowfullscreen 
            loading="lazy">
          </iframe>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-12 col-lg-6">
        <h3 class="mb-3">Get In Touch</h3>
        <form action="{{ route('contact') }}" method="POST" class="h-100 d-flex flex-column">
          @csrf
          <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="mb-3">
            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
          </div>
          <div class="mb-3">
            <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100 mt-auto">Send Message</button>
        </form>
      </div>

    </div>
  </div>
</section>


        <!-- Section 3: Social Links -->
<section class="section pt-50 pb-100 contact-social">
    <div class="container text-center">
        <h3 class="mb-30 pt-40 pb-20">Connect Us in Social Media</h3>
        <p class="mb-40 pt-20 pb-40">Stay inspired and updated—follow Coco Island Holidays on your favorite platforms for travel stories, offers, and unforgettable moments.</p>
        <div class="d-flex justify-content-around">
            <a href="https://www.facebook.com/coco.island.holidays" target="_blank" class="social-icon mx-3">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/coco.island.holidays" target="_blank" class="social-icon mx-3">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.tiktok.com/@coco.island.holidays" target="_blank" class="social-icon mx-3">
                <i class="fab fa-tiktok"></i>
            </a>
            <a href="https://wa.me/94770505952" target="_blank" class="social-icon mx-3">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>
</section>


    @include('components.footer')

    <!-- JS -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>
