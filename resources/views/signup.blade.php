<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from codeskdhaka.com/html/expovent-prev/expovent/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2024 06:54:17 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Expovent - Event Management Dashboard HTML5 Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="theme-style-mode" content="1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
      <!-- CSS here -->
   <link rel="stylesheet" href="assets/app/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/app/css/meanmenu.min.css">
   <link rel="stylesheet" href="assets/app/css/animate.css">
   <link rel="stylesheet" href="assets/app/css/metisMenu.min.css">
   <link rel="stylesheet" href="assets/app/css/swiper-bundle.min.css">
   <link rel="stylesheet" href="assets/app/css/slick.css">
   <link rel="stylesheet" href="assets/app/css/backtotop.css">
   <link rel="stylesheet" href="assets/app/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/app/css/flaticon_expovent.css">
   <link rel="stylesheet" href="assets/app/css/fontawesome-pro.css">
   <link rel="stylesheet" href="assets/app/css/spacing.css">
   <link rel="stylesheet" href="assets/app/css/main.css">
   </head>
 
<body class="body-area">

      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- Preloder start -->
      <div id="preloader">
         <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
         </div>
      </div>
      <!-- Preloder start -->

      <!-- Offcanvas area start -->
      <div class="fix">
         <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
               <div class="offcanvas__content">
                  <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                     <div class="offcanvas__logo">
                        <a href="{{ url("dashboard.html") }}">
                           <img src="{{ asset("/assets/img/logo/logo-black.svg") }}" alt="logo not found">
                        </a>
                     </div>
                     <div class="offcanvas__close">
                        <button>
                           <i class="fal fa-times"></i>
                        </button>
                     </div>
                  </div>
                  <div class="offcanvas__search mb-25">
                     <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit"><i class="far fa-search"></i></button>
                     </form>
                  </div>
                  <div class="mobile-menu fix mb-40"></div>
                  <div class="offcanvas__contact mt-30 mb-20">
                     <h4>Contact Info</h4>
                     <ul>
                        <li class="d-flex align-items-center">
                           <div class="offcanvas__contact-icon mr-15">
                              <i class="fal fa-map-marker-alt"></i>
                           </div>
                           <div class="offcanvas__contact-text">
                              <a target="_blank"
                                 href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                                 Mirnada City Tower, NYC</a>
                           </div>
                        </li>
                        <li class="d-flex align-items-center">
                           <div class="offcanvas__contact-icon mr-15">
                              <i class="far fa-phone"></i>
                           </div>
                           <div class="offcanvas__contact-text">
                              <a href="{{ url("tel:+088889797697") }}">+088889797697</a>
                           </div>
                        </li>
                        <li class="d-flex align-items-center">
                           <div class="offcanvas__contact-icon mr-15">
                              <i class="fal fa-envelope"></i>
                           </div>
                           <div class="offcanvas__contact-text">
                              <a href="{{ url("tel:+012-345-6789") }}"><span class="mailto:support@mail.com">support@mail.com</span></a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="offcanvas__social">
                     <ul>
                        <li><a href="{{ url("#") }}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ url("#") }}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ url("#") }}"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="{{ url("#") }}"><i class="fab fa-linkedin"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="offcanvas__overlay"></div>
      <div class="offcanvas__overlay-white"></div>
      <!-- Offcanvas area start -->

      <!--Speaker popup area start -->
      <section class="speaker__popup-area">
         <div class="popup__wrapper">
            <div class="popup__title-wrapper">
               <h3 class="popup__title">Add Event Speaker</h3>
            </div>
            <div class="popup__input-wrapper">
               <form action="#">
                  <div class="singel__input-field mb-15">
                     <label class="input__field-text">Speaker Name</label>
                     <input type="text">
                  </div>
                  <div class="singel__input-field mb-15">
                     <label class="input__field-text">Email</label>
                     <input type="text">
                  </div>
                  <div class="singel__input-field mb-15">
                     <label class="input__field-text">Phone Number</label>
                     <input type="text">
                  </div>
                  <div class="singel__input-field mb-15">
                     <label class="input__field-text">Organization Name</label>
                     <input type="text">
                  </div>
                  <div class="singel__input-field mb-15">
                     <label class="input__field-text">Designation</label>
                     <input type="text">
                  </div>
                  <div class="popup__update mb-15">
                     <label class="input__field-text">Upload Image ( 200x200px )</label>
                     <input type="file">
                  </div>
                  <button class="input__btn w-100" type="submit"><i class="fa-regular fa-plus"></i>Add Speaker</button>
               </form>
            </div>
         </div>
      </section>
      <!--Speaker popup area end -->

      <!-- Event popup area start -->
      <section class="event__popup-area">
         <div class="popup__wrapper">
            <div class="popup__title-wrapper">
               <h3 class="popup__title">Add Event Attendant</h3>
            </div>
            <div class="popup__input-wrapper">
               <form action="#">
                  <div class="singel__input-field mb-15">
                     <label class="input__field-text">Name</label>
                     <input type="text">
                  </div>
                  <div class="singel__input-field mb-15">
                     <label class="input__field-text">Email</label>
                     <input type="email">
                  </div>
                  <div class="singel__input-field mb-15">
                     <label class="input__field-text">Phone Number</label>
                     <input type="text">
                  </div>
                  <div class="singel__input-field mb-15">
                     <label class="input__field-text">Organization Name</label>
                     <input type="text">
                  </div>
                  <div class="singel__input-field mb-15">
                     <label class="input__field-text">Ticket ID No</label>
                     <input type="text">
                  </div>
                  <div class="popup__update">
                     <label class="input__field-text">Upload Image ( 200x200px )</label>
                     <input type="file" name="img" accept="image/*">
                  </div>
                  <button class="input__btn w-100" type="submit"><i class="fa-regular fa-plus"></i>Add
                     Attendant</button>
               </form>
            </div>
         </div>
      </section>
      <!-- Event popup area end -->

      <section class="signin__area">
         <div class="sign__main-wrapper">
             <div class="sign__left">
                 <div class="sign__header">
                     <div class="sign__logo">
                         <a href="{{ route('dashboard') }}">
                             <img class="logo-black" src="{{ asset('assets/img/logo/color-logo.svg') }}" alt="image not found">
                             <img class="logo-white" src="{{ asset('assets/img/logo/color-logo-white.svg') }}" alt="image not found">
                         </a>
                     </div>
                     <div class="sign__link">
                         <a class="sign__link-text" href="{{ route('signin') }}">Sign in</a>
                         <a class="sign__link-active" href="{{ route('signup') }}">Sign Up</a>
                     </div>
                 </div>
                 <div class="sign__center-wrapper text-center mt-80">
                     <div class="sign__title-wrapper mb-40">
                         <h3 class="sign__title">Create An Account</h3>
                         <p>The faster you fill up, the faster you get a ticket</p>
                     </div>
                     <div class="sign__input-form text-center">
                         <form method="POST" action="{{ route('signup') }}">
                             @csrf
                             <div class="sign__input">
                                 <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="User Name" class="form-control @error('name') is-invalid @enderror">
                             </div>
                             @error('name')
                                 <div class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </div>
                             @enderror
                             <div class="sign__input">
                                 <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror">
                             </div>
                             @error('email')
                                 <div class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </div>
                             @enderror
                             <div class="sign__input">
                                 <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror">
                             </div>
                             @error('password')
                                 <div class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </div>
                             @enderror
                             <div class="sign__input">
                                 <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" class="form-control">
                             </div>
                             <div class="sing__button mb-20">
                                 <button class="input__btn w-100 mb-20 btn btn-primary" type="submit">Sign Up</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
             <div class="sign__right">
                 <div class="sign__input-thumb include__bg w-img" data-background="{{ asset('assets/img/sign/signup.jpg') }}"></div>
             </div>
         </div>
      </section>


       {{-- <!-- signup area start -->
         
<section class="signin__area">
   <div class="sign__main-wrapper">
       <div class="sign__left">
           <div class="sign__header">
               <div class="sign__logo">
                   <a href="{{ route('dashboard') }}">
                       <img class="logo-black" src="{{ asset('assets/img/logo/color-logo.svg') }}" alt="image not found">
                       <img class="logo-white" src="{{ asset('assets/img/logo/color-logo-white.svg') }}" alt="image not found">
                   </a>
               </div>
               <div class="sign__link">
                   <a class="sign__link-text" href="{{ route('login') }}">Sign in</a>
                   <a class="sign__link-active" href="{{ route('register') }}">Sign Up</a>
               </div>
           </div>
           <div class="sign__center-wrapper text-center mt-80">
               <div class="sign__title-wrapper mb-40">
                   <h3 class="sign__title">Create An Account</h3>
                   <p>The faster you fill up, the faster you get a ticket</p>
               </div>
               <div class="sign__input-form text-center">
                   <form method="POST" action="{{ route('register') }}">
                       @csrf
                       <div class="sign__input">
                           <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="User Name">
                           <span><i class="flaticon-user-2"></i></span>
                       </div>
                       <div class="sign__input">
                           <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                           <span><i class="flaticon-user-2"></i></span>
                       </div>
                       <div class="sign__input">
                           <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Enter Password">
                           <span><i class="flaticon-password"></i></span>
                       </div>
                       <div class="sign__input">
                           <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                           <span><i class="flaticon-password"></i></span>
                       </div>
                       <div class="sing__button mb-20">
                           <button class="input__btn w-100 mb-20" type="submit">Sign Up</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
       <div class="sign__right">
           <div class="sign__input-thumb include__bg w-img" data-background="{{ asset('assets/img/sign/signup.jpg') }}">
           </div>
       </div>
   </div>
</section> --}}
<!-- Signup area end -->

   <!-- Back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- Back to top end -->
      
   <!-- JS here -->
   <script src="{{ asset("/assets/app/js/jquery-3.6.0.min.js") }}"></script>
   <script src="{{ asset("/assets/app/js/waypoints.min.js") }}"></script>
   <script src="{{ asset("/assets/app/js/bootstrap.bundle.min.js") }}"></script>
   <script src="{{ asset("/assets/app/js/apexcharts.min.js") }}"></script>
   <script src="{{ asset("/assets/app/js/metisMenu.min.js") }}"></script>
   <script src="{{ asset("/assets/app/js/meanmenu.min.js") }}"></script>
   <script src="{{ asset("/assets/app/js/swiper-bundle.min.js") }}"></script>
   <script src="{{ asset("/assets/app/js/slick.min.js") }}"></script>
   <script src="{{ asset("/assets/app/js/magnific-popup.min.js") }}"></script>
   <script src="{{ asset("/assets/app/js/backtotop.js") }}"></script>
   <script src="{{ asset("/assets/app/js/counterup.js") }}"></script>
   <script src="{{ asset("/assets/app/js/wow.min.js") }}"></script>
   <script src="{{ asset("/assets/app/js/countdown.js") }}"></script>
   <script src="{{ asset("/assets/app/js/smooth-scrollbar.js") }}"></script>
   <script src="{{ asset("/assets/app/js/ajax-form.js") }}"></script>
   <script src="{{ asset("/assets/app/js/custom.js") }}"></script>
   <script src="{{ asset("/assets/app/js/main.js") }}"></script>
   </body>

<!-- Mirrored from codeskdhaka.com/html/expovent-prev/expovent/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2024 06:54:17 GMT -->
</html>

