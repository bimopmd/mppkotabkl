
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <script language='JavaScript'>
        var txt = "Mal Pelayanan Publik - Kota Bengkulu";
        var speed = 300;
        var refresh = null;

        function action() {
            document.title = txt;
            txt = txt.substring(1, txt.length) + txt.charAt(0);
            refresh = setTimeout("action()", speed);
        }
        action();
    </script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/img/icon-fasilitas/mpp.png')}}" style="width: 50%;" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100&display=swap" rel="stylesheet">

    <!-- css digimedia -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/style-digimedia.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated-digimedia.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl-digimedia.css')}}">
    <!-- end css digimedia-->

    <!-- css constra -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/colorbox/colorbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style-constra.css')}}">
    <!-- end css constra -->

    <!-- css dentcare -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/lib/twentytwenty/twentytwenty.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bootstrap-dentcare.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style-dentcare.css')}}" rel="stylesheet">
    <!-- end css dentcare -->

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-header1 ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Fri : 8.00
                        am - 16.30 pm, Sunday Closed </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-shape1 text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0 text-white"><i class="fa fa-envelope-open me-2 text-white"></i>info@example.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0 text-white"><i class="fa fa-phone-alt me-2 text-white"></i>+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('frontend.header')
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Carousel Start -->
    <style type="text/css">
        .left {
            text-align: left;
        }

        .right {
            text-align: right;
        }

        .center {
            text-align: center;
        }

        .justify {
            text-align: justify;
        }
        @font-face {
            font-family: "BillionDreams";
            src: url('assets/font/BillionDreams_PERSONAL.ttf') format('truetype');
        }
        .heebo{
            font-family: "heebo";
            src: url('assets/font/Heebo-VariableFont_wght.ttf') format('truetype');
        }
        .montserrat{
            font-family: "montserrat";
            src: url('assets/font/Montserrat-VariableFont_wght.ttf') format('truetype');
        }

    </style>
    <div class="banner-carousel banner-carousel-1 mb-0 fluid p-0">
        <div class="banner-carousel-item bg-slider1">
        {{-- <div class="banner-carousel-item" style="background-image:url({{asset('assets/img/background-header/background-header5.jpg')}})"> --}}
        {{-- <div class="banner-carousel-item bg-appointment1"> --}}
            <div class="slider-content-overlay">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-6 align-self-center slide-title" data-animation-in="slideInLeft">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="slide-sub-title" data-animation-in="slideInRight">
                                            MAL PELAYANAN PUBLIK
                                        </h3>
                                        <p data-animation-in="slideInRight" data-duration-in="1.2">
                                            <!-- <a href="services.html" class="slider btn btn-primary">Our Services</a> -->
                                            <h3 class="slide-sub-title2"
                                                style="font-family: 'BillionDreams', sans-serif;">Balai Harapan
                                                & Do'a
                                            </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center slide-title" data-animation-in="slideInRight">
                            <div class="Right-content show-up header-text wow fadeInRight" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <p>
                                            <img src="{{asset('assets/img/header-slider/walikota4.jpg.png')}}" alt="">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-carousel-item bg-appointment3">
            <div class="slider-content text-left">
                <div class="container h-100">
                    <!-- <div class="carousel-caption1 row align-items-center h-100"> -->
                    <div class="row align-items-center h-100">
                        <div class="col-md-12">
                            <h2 class="slide-title-box" data-animation-in="slideInDown">World Class Service</h2>
                            <h3 class="slide-title" data-animation-in="fadeIn">When Service Matters</h3>
                            <h3 class="slide-sub-title" data-animation-in="slideInLeft">Your Choice is Simple</h3>
                            <p data-animation-in="slideInRight">
                                <a href="services.html" class="slider btn btn-primary border">Our Services</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Banner Start -->
    <section class="call-to-action-box no-padding">
        <div class="container">
            <div class="action-style-box kotak">
                <div class="row align-items-center">
                    <div class="col-md-8 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">We can't back againg</h3>
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                        <div class="call-to-action-btn">
                            <a class="btn btn-dark" href="#">Request Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Start -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <style type="text/css">
        .left {
            text-align: left;
        }

        .right {
            text-align: right;
        }

        .center {
            text-align: center;
        }

        .justify {
            text-align: justify;
        }

        @font-face {
            font-family: "BillionDreams";
            src: url('font/BillionDreams_PERSONAL.ttf') format('truetype');
        }
        .montserrat{
            font-family: "montserrat";
            src: url('assets/font/Montserrat-VariableFont_wght.ttf') format('truetype');
        }
    </style>
    <!-- About Start -->
    @include('frontend.about')
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <!-- About End -->

    <!-- Fasilitas Start -->
    @include('frontend.facility')
    <br>
    <br>
    <br>
    <br>

    <!-- Appointment Start -->
    <div id="instansi" class="instansi container-fluid bg-instansi kotak my-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg py-5">
            <div class="py-12">
                <div id="portfolio" class="our-portfolio kotak section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-heading wow fadeInLeft" data-wow-duration="1s"
                                    data-wow-delay="0.3s">
                                    <h6>Text Content</h6>
                                    <h4>Text <em>Content</em></h4>
                                    <div class="line-dec"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="loop owl-carousel">
                                    @foreach ($instansi as $data)
                                    <a href="frontend/instansi/{{$data->id}}">
                                    <div class="item">
                                            <div class="portfolio-item">
                                            <div class="thumb">
                                                @if ($data->logo_instansi)
                                                <td class="text-center">
                                                    <img style="height: 400px" class="img-fluid options-item" src="{{asset('storage/' . $data->logo_instansi)}}" alt="">
                                                    </td>
                                                @else
                                                    <td class="text-center">
                                                    <img style="height: 400px" class="img-fluid options-item" src="\assets\file-default\default.jpg" alt="">
                                                    </td>
                                                @endif
                                                <div class="down-content">
                                                    <h6>{{$data->nama_instansi}}</h6>
                                                    <span>-----</span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-animation-in="slideInLeft">
                    <a href="contact.html" class="slider btn btn-primary"  aria-label="contact-with-us">View All
                        Instansi</a>
                </div>
            </div>
        </div>
    </div>



    {{-- buta maps kah --}}
    <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="{{asset('assets/images/contact-dec.png')}}" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                  <iframe
                    {{-- src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" --}}
                    width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{asset('assets/images/phone-icon.png')}}" alt="">
                          <a href="#">010-020-0340</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{asset('assets/images/email-icon.png')}}" alt="">
                          <a href="#">our@email.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{asset('assets/images/location-icon.png')}}" alt="">
                          <a href="#">123 Rio de Janeiro</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                      </fieldset>
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email"
                          required="">
                      </fieldset>
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message"
                          required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

    {{-- youdah klo buta maps --}}
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid text-light py-4" style="background: #ffffff;">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h4 style="font-family: 'BillionDreams', sans-serif;">
                    IZIN BERES, INVESTASI MENINGKAT
                </h4>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" style="color: #82af7c" class="btn btn-lg btn-warning btn-lg-square rounded back-to-top" ><i class="bi bi-arrow-up"></i></a>

    <script>
        var map = L.map('map').setView([-3.790392, 102.271513], 15);

        var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery ?? <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(map);

        var marker = L.marker([-3.790392, 102.271513]).addTo(map);

        var circle = L.circle([-3.790392, 102.271513], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 20
        }).addTo(map);

        var polygon = L.polygon([
            [51.509, -0.08],
            [51.503, -0.06],
            [51.51, -0.047]
        ]).addTo(map);

    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('assets/lib/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('assets/lib/twentytwenty/jquery.twentytwenty.js')}}"></script>
    <script src="{{asset('assets/js/main-dentcare.js')}}"></script>
    <!-- Template Javascript -->

    <!-- contsra jQuery Library -->
    <script src="{{asset('assets/plugins/jQuery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/bootstrap.min.js')}}" defer></script>
    <script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/plugins/slick/slick-animation.min.js')}}"></script>
    <script src="{{asset('assets/plugins/colorbox/jquery.colorbox.js')}}"></script>
    <script src="{{asset('assets/plugins/shuffle/shuffle.min.js')}}" defer></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script> --}}
    {{-- <script src="{{asset('assets/plugins/google-map/map.js')}}" defer></script> --}}
    <script src="{{asset('assets/js/script-constra.js')}}"></script>

    <!-- js digimedia -->
    <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel-digimedia.js')}}"></script>
    <script src="{{asset('assets/js/animation-digimedia.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded-digimedia.js')}}"></script>
    <script src="{{asset('assets/js/custom-digimedia.js')}}"></script>

    {{-- mapss --}}
    {{-- <script src="http://maps.googleapis.com/maps/api/js"></script> --}}

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.5830695,116.3202515),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>

</html>
