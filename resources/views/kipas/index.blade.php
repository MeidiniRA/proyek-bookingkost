<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booking Kost</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="{{asset('front/fonts/flaticon/font/flaticon.css')}}">
  
    <link rel="stylesheet" href="{{asset('front/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    
  </head>
  <body>
 @include('layout.header')
  <div class="site-blocks-cover overlay" style="background-image: url({{asset('front/images/hero_1.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <span class="caption mb-3">AC Rooms</span>
              <h1 class="mb-4">Kost Rooms</h1>
            </div>
          </div>
        </div>
      </div>  

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Our Rooms</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
               <a href="#" class="d-block mb-0 thumbnail"><img src="{{asset('front/images/img_2.jpg')}}" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="{{asset('front/images/img_2.jpg')}}">Melati</a></h3>
                <strong class="price">Rp.500.000/ per month</strong>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
               <a href="#" class="d-block mb-0 thumbnail"><img src="{{asset('front/images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="{{asset('front/images/img_3.jpg')}}">Kamboja</a></h3>
                <strong class="price">Rp.600.000 / per month</strong>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
                <a href="#" class="d-block mb-0 thumbnail"><img src="{{asset('front/images/img_6.jpg')}}" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                 <h3 class="heading mb-0"><a href="{{asset('front/images/img_6.jpg')}}">Merpati</a></h3>
                <strong class="price">Rp.600.000 / per month</strong>
              </div>
            </div>
          </div>

       

        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <!-- <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li> -->
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
      

  @extends('layout.footer')

  <script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('front/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('front/js/jquery-ui.js')}}"></script>
  <script src="{{asset('front/js/popper.min.js')}}"></script>
  <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('front/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('front/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('front/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('front/js/aos.js')}}"></script>

  
  <script src="{{asset('front/js/mediaelement-and-player.min.js')}}"></script>

  <script src="{{asset('front/js/main.js')}}"></script>
    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;
                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

  </body>
</html>

