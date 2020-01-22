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
              <span class="caption mb-3">Contact Us</span>
              <h1 class="mb-3">CONTACT IN HERE</h1>
            </div>
          </div>
        </div>
      </div>  

    
    <!-- <div class="site-section site-section-sm">
      <div class="container">
        <div class="row"> -->
       <!-- 
          <div class="col-md-12 col-lg-8 mb-5"> -->
          
            
          
           <!--  <form action="#" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control" placeholder="Phone #">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary pill px-4 py-2">
                </div>
              </div>

  
            </form> -->
         <!--  </div> -->
          <center>
          <div class="col-lg-4" >
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4"><img src="{{asset('front/images/alamat.png')}}" alt="Image" class="img-fluid" width="15" height="15">  Jl. M.H Thamrin No.002 RT.002/RW.005, Kb.Melati, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibu Kota Jakarta</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#"><img src="{{asset('front/images/telfon.png')}}" alt="Image" class="img-fluid" width="15" height="15">  021-8997365</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#"><img src="{{asset('front/images/email.jpg')}}" alt="Image" class="img-fluid" width="15" height="15">  Booking@kost.com</a></p>
              </br>
              <p class="mb-0 font-weight-bold">Whatsapp</p>
              <p class="mb-0"><a href="https://api.whatsapp.com/send?phone=089509934219&text=Hallo "><img src="{{asset('front/images/person_3.png')}}" alt="Image" class="img-fluid" width="40" height="40"></a></p>

            </div>
          </div>
   <!--      </div>
      </div>
    </div> -->
     </center>

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

