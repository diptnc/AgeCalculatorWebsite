<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}
        {!! JsonLd::generate() !!}
        <link rel="shortcut icon" href="{{ asset('assets/images/applogo.ico') }}">
        <link rel="icon" type="image/svg" href="{{ asset('assets/images/applogo.svg') }}">
 @php
     $downloadFileName="Age_Calculator_ver_1_1.apk";

 @endphp   

        <!-- Fonts -->
<!-- CSS only -->
<script src="https://kit.fontawesome.com/e12b6c8850.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous"></script>

<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    </head>
    <x-loader/>
    <body class="antialiased">
    
        <script>
            
            new WOW().init();
            </script>    

<!-- Just an image -->
<nav class="navbar ">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img class="logo"
          src="{{asset('assets/images/logowhite.svg')}}"
         alt="diptanuchakraborty.in"
          loading="lazy"
        />
      </a>
    </div>
  </nav>




 
{{-- main body starts --}}
<div class="container main-frame">
    <div class="row container-left-container">
        <div class="col col-md-6 col-lg-6 col-xl-6 container-left">
            <div class="row ">
                <div class="col">
                    <div>
                        <h1 class="str_1 wow  animate__fadeInUp" data-wow-duration="1s">Age Calculator</h1>
                    </div>
                    <div>
                        <p class="str_2 wow  animate__fadeInUp" data-wow-duration="1.2s" >Calculate your age in Years , Days & Time.Available for Android. Install the App for FREE now</p>
                    </div>
                    <div class="sp-20"></div>
                    <div>
                        <h3 class="str_3  wow  animate__fadeInUp"data-wow-duration="1.3s">App information</h3>
                        <p class="str_4  wow  animate__fadeInUp"data-wow-duration="1.4s"><boldtext>Version:</boldtext> 1.1<br>
                            <boldtext>File name:</boldtext> Age calculator app<br>
                                <boldtext>Date of release:</boldtext> 07/02/2021<br>
                                    <boldtext>Minimum Requirements:</boldtext> Android OS 4.4 & up</p>
                    </div>
                    <div class="wow animate__fadeInUp"data-wow-duration="1.5s">
                        <form method="get" action={{asset("downloads/$downloadFileName")}}>
                         
                       
                        <button class="download_btn " type="submit" onclick="downloadApp();"><span><img class="android_icon"src="{{asset('assets/images/android.svg')}}" alt=""></span>Download now</button>
                   
                    </form>
                    </div>
                    <div class="sp-20"></div>
                    <div class="sp-20"></div>
                    <div>
                        <h1 class="str_5 wow animate__fadeInUp"data-wow-duration="1.6s">Support me 👍</h1>
                        <div class="sp-20"></div>
                        <div class="row support_container wow animate__fadeInUp"data-wow-duration="1.7s">
                            <div class="col">
                                <button class="gpay_btn" id="gpay_btn" onclick="gpay();"><img class="gpay_icon"src="{{asset('assets/images/gpay.svg')}}" alt=""></button>
                            </div>



<div class="col">
                                <button class="ppay_btn" id="ppay_btn" onclick="ppay();"><img class="ppay_icon"src="{{asset('assets/images/paypal.svg')}}" alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-lg-6 col-xl-6 image_bg_container ">
          
           <img class="wow animate__bounceInRight "data-wow-duration="1.5s"   src="{{asset('assets/images/mockup1.png')}}"width="60%" height="auto" />
        </div>
    </div>

    

</div>

    <section id="footer">

                        <!-- Grid column -->
                        <div class="col text-center  cta-social">
    
                            <li class="social-icons social-icons2">
                                <a data-toggle="tooltip" title="visit Facebook" class="social-icons-list" id="si1"
                                    href="{{ $social_links_raw[0]->facebook }} " target="_blank"><i
                                        class="fab fa-facebook"></i></a>
                                <a data-toggle="tooltip" title="visit Instagram" class="social-icons-list" id="si2"
                                    href="{{ $social_links_raw[0]->instagram }}" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                                <a data-toggle="tooltip" title="visit Linkedin" class="social-icons-list" id="si3"
                                    href="{{ $social_links_raw[0]->linkedin }}" target="_blank"><i
                                        class="fab fa-linkedin"></i></a>
                                <a data-toggle="tooltip" title="visit Soundcloud" class="social-icons-list" id="si4"
                                    href="{{ $social_links_raw[0]->soundcloud }}" target="_blank"><i
                                        class="fab fa-soundcloud"></i></a>
                                <a data-toggle="tooltip" title="visit Youtube" class="social-icons-list" id="si5"
                                    href="{{ $social_links_raw[0]->youtube }}" target="_blank"><i
                                        class="fab fa-youtube"></i></a>
                            </li>
    
                        </div>
                        <!-- Grid column -->
    
                    
    </section>
    @php
    date_default_timezone_set('Asia/Kolkata');
    @endphp
    <div class="" id="copyright-block">
        <div class="col">
            <h1 class="text-center" style="" target="_blank"> © {{ date('Y') }} All Rights Reserved by <a
                    href="https://diptanuchakraborty.in">diptanuchakraborty.in</a> </h1>
        </div>
    </div>
    
    
    <div>
    
    
    </div>
    
    <script data-cfasync="false" id="sbinit" src="https://diptanuchakraborty.in/chat/oqiweoiyqbcmncbmsdhfgiquwtiquwoiufypoqihwfidkjhvjbvcjwgef/js/init.js"></script>
    <script src="https://js.instamojo.com/v1/checkout.js"></script>

<script src="{{asset('assets/js/qwertyuiop.min.js')}}">




</script>
</html>
