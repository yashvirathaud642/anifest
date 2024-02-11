<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from codeskdhaka.com/html/expovent-prev/expovent/landing-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2024 06:53:47 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Expovent - Event Management Dashboard HTML5 Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
   
   <body class="landing-body">

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
      
      <!-- Header area start -->
      <header>
         <div id="header-sticky" class="header__area header-1 header__transparent">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-12">
                     <div class="mega__menu-wrapper p-relative">
                        <div class="header__navigation d-flex align-items-center justify-content-between">
                           <div class="header__logo">
                              <a href="{{ url("dashboard.html") }}">
                                 <img class="logo__white" src="{{ asset("/assets/img/logo/logo.svg") }}" alt="logo not found">
                                 <img class="logo__dark" src="{{ asset("/assets/img/logo/logo-dark.svg") }}" alt="logo not found">
                              </a>
                           </div>
                           <div class="header__right">
                              <div class="main-menu smooth d-none d-none d-lg-block">
                                 <nav id="mobile-menu">
                                    <ul>
                                       <li class="has-dropdown has-mega-menu">
                                          <a href="{{ url("#homeindex") }}">Home</a>
                                          <ul class="mega-menu">
                                             <li>
                                                <a href="{{ url("landing-page.html") }}" data-background="assets/img/index/landing.jpg"></a>
                                             </li>
                                             <li>
                                                <a href="{{ url("dashboard.html") }}" data-background="assets/img/index/dashboard.jpg"></a>
                                             </li>
                                             <li>
                                                <a href="{{ url("event-list.html") }}" data-background="assets/img/index/event.jpg"></a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li>
                                          <a href="{{ url("#homeabout") }}">About</a>
                                       </li>
                                       <li>
                                          <a href="{{ url("#homespeakers") }}">Speakers</a>
                                       </li>
         
                                       <li>
                                          <a href="{{ url("#homeschedule") }}">Schedule</a>
                                       </li>
                                       <li class="has-dropdown">
                                          <a href="{{ url("#homeblog") }}">Blog</a>
                                       </li>
                                    </ul>
                                 </nav>
                              </div>
                              <div class="header__action-inner">
                                 <div class="header__btn d-none d-xl-block">
                                    <a href="{{ url("dashboard.html") }}" class="fill__btn">Buy Ticket<i class="fa-regular fa-angle-right"></i></a>
                                 </div>
                                 <div class="header__hamburger">
                                    <div class="sidebar__toggle">
                                       <a class="bar-icon" href="{{ url("#") }}">
                                          <span></span>
                                          <span></span>
                                          <span></span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header area end -->
      
      <!-- Body main wrapper start -->
      <main>
         
      <!-- Banner area start  -->
      <section id="homeindex" class="banner__area banner__area-1 banner__height-1 d-flex align-items-center" data-background="assets/img/bg/banner.png">
         <div class="spotlight"></div>
         <div class="banner__meta-title">
            <span>Meet Up 2023</span>
         </div>
         <div class="banner__shape">
            <img class="banner__shape-1 parallaxed" src="{{ asset("/assets/img/shape/slider/shape-1.png") }}" alt="imge not found">
            <img class="banner__shape-2" src="{{ asset("/assets/img/shape/slider/shape-2.png") }}" alt="imge not found">
            <img class="banner__shape-3" src="{{ asset("/assets/img/shape/slider/shape-3.png") }}" alt="imge not found">
            <img class="banner__shape-4 parallaxed" src="{{ asset("/assets/img/shape/slider/shape-4.png") }}" alt="imge not found">
            <img class="banner__shape-5" src="{{ asset("/assets/img/shape/slider/shape-5.png") }}" alt="imge not found">
            <img class="banner__shape-6 parallaxed" src="{{ asset("/assets/img/shape/slider/shape-6.png") }}" alt="imge not found">
            <div class="banner-all-line">
               <div class="banner__line banner__line-1"></div>
               <div class="banner__line banner__line-2"></div>
            </div>
            <div class="container-fluid">
               <div class="row align-items-xl-end">
                  <div class="col-xxl-7 col-xl-8 col-lg-6">
                     <div class="banner__content">
                        <h2 class="banner__title">
                           Digital Thinkers <span class="text__highlight"> Conference </span>
                        </h2>
                        <div class="slider__btn">
                           <a href="{{ url("signup.html") }}">
                               Register Now
                               <svg class="btn-svg-border1 reg-hover-color-none" width="206" height="78" viewBox="0 0 206 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path
                                    d="M205.374 38.5573C205.374 43.679 202.612 48.6179 197.487 53.1693C192.362 57.7203 184.918 61.8416 175.677 65.3128C157.197 72.2539 131.634 76.5573 103.374 76.5573C75.1136 76.5573 49.5509 72.2539 31.0714 65.3128C21.8298 61.8416 14.3857 57.7203 9.26099 53.1693C4.13572 48.6179 1.37402 43.679 1.37402 38.5573C1.37402 33.4355 4.13572 28.4966 9.26099 23.9452C14.3857 19.3942 21.8298 15.2729 31.0714 11.8017C49.5509 4.86064 75.1136 0.557251 103.374 0.557251C131.634 0.557251 157.197 4.86064 175.677 11.8017C184.918 15.2729 192.362 19.3942 197.487 23.9452C202.612 28.4966 205.374 33.4355 205.374 38.5573Z"
                                    stroke="white"
                                   />
                               </svg>
                               <svg class="btn-svg-border2 reg-hover-color-none" width="206" height="78" viewBox="0 0 206 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path
                                       d="M205.374 38.5573C205.374 43.679 202.612 48.6179 197.487 53.1693C192.362 57.7203 184.918 61.8416 175.677 65.3128C157.197 72.2539 131.634 76.5573 103.374 76.5573C75.1136 76.5573 49.5509 72.2539 31.0714 65.3128C21.8298 61.8416 14.3857 57.7203 9.26099 53.1693C4.13572 48.6179 1.37402 43.679 1.37402 38.5573C1.37402 33.4355 4.13572 28.4966 9.26099 23.9452C14.3857 19.3942 21.8298 15.2729 31.0714 11.8017C49.5509 4.86064 75.1136 0.557251 103.374 0.557251C131.634 0.557251 157.197 4.86064 175.677 11.8017C184.918 15.2729 192.362 19.3942 197.487 23.9452C202.612 28.4966 205.374 33.4355 205.374 38.5573Z"
                                       stroke="white"
                                   />
                               </svg>
                               <svg class="btn-svg-border1 reg-hover-color" width="206" height="78" viewBox="0 0 206 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path
                                       d="M205.374 38.6717C205.374 43.7934 202.612 48.7323 197.487 53.2837C192.362 57.8347 184.918 61.956 175.677 65.4272C157.197 72.3683 131.634 76.6717 103.374 76.6716C75.1136 76.6716 49.5509 72.3682 31.0714 65.4272C21.8298 61.956 14.3857 57.8347 9.26098 53.2837C4.13571 48.7323 1.37402 43.7934 1.37402 38.6716C1.37402 33.5499 4.13571 28.611 9.26098 24.0596C14.3857 19.5086 21.8298 15.3873 31.0714 11.9161C49.5509 4.97503 75.1136 0.671644 103.374 0.671649C131.634 0.671654 157.197 4.97505 175.677 11.9161C184.918 15.3873 192.362 19.5086 197.487 24.0596C202.612 28.611 205.374 33.5499 205.374 38.6717Z"
                                       stroke="url(#paint0_linear_42_638)"
                                   />
                                   <defs>
                                       <linearGradient id="paint0_linear_42_638" x1="103.374" y1="0.171649" x2="103.374" y2="77.1716" gradientUnits="userSpaceOnUse">
                                           <stop offset="1" stop-color="#F7426F" />
                                           <stop offset="1" stop-color="#F87A58" />
                                       </linearGradient>
                                   </defs>
                               </svg>
                               <svg class="btn-svg-border2 reg-hover-color" width="206" height="78" viewBox="0 0 206 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path
                                       d="M205.374 38.6717C205.374 43.7934 202.612 48.7323 197.487 53.2837C192.362 57.8347 184.918 61.956 175.677 65.4272C157.197 72.3683 131.634 76.6717 103.374 76.6716C75.1136 76.6716 49.5509 72.3682 31.0714 65.4272C21.8298 61.956 14.3857 57.8347 9.26098 53.2837C4.13571 48.7323 1.37402 43.7934 1.37402 38.6716C1.37402 33.5499 4.13571 28.611 9.26098 24.0596C14.3857 19.5086 21.8298 15.3873 31.0714 11.9161C49.5509 4.97503 75.1136 0.671644 103.374 0.671649C131.634 0.671654 157.197 4.97505 175.677 11.9161C184.918 15.3873 192.362 19.5086 197.487 24.0596C202.612 28.611 205.374 33.5499 205.374 38.6717Z"
                                       stroke="url(#paint0_linear_42_638)"
                                   />
                                   <defs>
                                       <linearGradient id="paint0_linear_42_6380" x1="103.374" y1="0.171649" x2="103.374" y2="77.1716" gradientUnits="userSpaceOnUse">
                                           <stop offset="1" stop-color="#F7426F" />
                                           <stop offset="1" stop-color="#F87A58" />
                                       </linearGradient>
                                   </defs>
                               </svg>
                           </a>
                       </div>
                     </div>
                  </div>
                  <div class="col-xxl-5 col-xl-4 col-lg-6">
                     <div class="banner__right-content d-flex justify-content-lg-end">
                        <div class="banner__card-wrapper ">
                           <div class="banner__card-inner">
                              <span class="card__icon"></span>
                              <span class="shape">
                                 <svg width="146" height="227" viewBox="0 0 146 227" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M124 1H139C142.314 1 145 3.68629 145 7V220C145 223.314 142.314 226 139 226H7C3.68629 226 1 223.314 1 220V166.194" stroke="#F87A58"/>
                                 </svg>                                 
                              </span>
                              <div class="banner__card-info">
                                 <span>WHEN AND WHERE</span>
                                 <h4>November 9–10 <br> The Midway SF</h4>
                              </div>
                              <div class="pluse__status">
                                 <span class="dot"></span>
                                 <span class="text">Online</span>
                              </div>
                           </div>
                           <div class="banner__time"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Banner area end  -->

      <!-- About area start  -->
      <section id="homeabout" class="about__area p-relative pt-150 pb-90">
         <div class="about__shape-1">
            <img src="{{ asset("/assets/img/shape/about-1.png") }}" alt="image not found">
         </div>
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="about__content-wrapper mb-60">
                     <div class="section__title-wrapper mb-80">
                        <span class="section__back-title">A</span>
                        <span class="section__subtitle">ABOUT THIS EVENT</span>
                        <h2 class="section__title">
                           EXPERIENCE A TRUE DIGITAL
                           <span class="text__highlight"> CONFERENCE
                              <svg width="328" height="31" viewBox="0 0 328 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M2 29C110 8.62517 326 -19.8996 326 29" stroke="url(#paint0_linear_47_128)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                 <defs>
                                 <linearGradient id="paint0_linear_47_1281" x1="2.50784" y1="22.0412" x2="322.486" y2="65.0473" gradientUnits="userSpaceOnUse">
                                 <stop offset="1" stop-color="#F7426F"/>
                                 <stop offset="1" stop-color="#F87A58"/>
                                 </linearGradient>
                                 </defs>
                              </svg>                                 
                           </span>
                        </h2>
                     </div>
                     <div class="about__content">
                        <div class="about__text">
                           <h4>How you transform your business as technology, consumer habits industry dynamic</h4>
                           <p class="mb-30">Velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                           <p>Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aeneansollicitudin, lorem quis bibendum auctonisi elit consequat ipsum nec sagittis sem nibh id elit.
                              Duis sed odio sit amet nibh vulputate cursusa sit amet mauris. Morbi accumsan ipsum velit.” Nam nec tellus a odio tincidunt.
                           </p>
                        </div>
                        <div class="about__location-info mb-80">
                           <div class="about__location-inner">
                              <div class="about__location-icon">
                                 <a href="{{ url("#") }}"><i class="fa-solid fa-location-dot"></i></a>
                              </div>
                              <div class="about__location-address">
                                 <h5>WHEN AND WHERE</h5>
                                 <span>
                                 November 9–10 <br>
                                 The Midway SF, Zoom
                                 </span>
                              </div>
                           </div>
                           <div class="pluse__status">
                              <span class="dot"></span>
                              <span class="text">Online</span>
                           </div>
                        </div>
                     </div>
                     <a href="{{ url("event-list.html") }}" class="fill__btn">Join Now<i class="fa-regular fa-angle-right"></i></a>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="about__thumb-wrapper mb-60 p-relative">
                     <div class="about__thumb-1 text-end w-img">
                        <img src="{{ asset("/assets/img/about/img1.jpg") }}" alt="image not found">
                        <div class="panel wow"></div>
                     </div>
                     <div class="about__thumb-2 w-img">
                        <img src="{{ asset("/assets/img/about/img2.jpg") }}" alt="image not found">
                        <div class="panel wow"></div>
                     </div>
                     <span class="about__play-btn">
                        <a class="video__play-btn popup-video" href="https://www.youtube.com/watch?v=2wuEOEFGSF4"><i class="fa-solid fa-play"></i>PLAY TRAILER</a>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- About area end  -->

      <!-- Join this area start  -->
      <section class="join__area p-relative z-index-1 fix" data-background="assets/img/bg/joinbg.jpg">
         <div class="join__all-shape p-relative">
            <img class="join__shape-1" src="{{ asset("/assets/img/shape/join-shape-1.png") }}" alt="image not found">
            <img class="join__shape-2" src="{{ asset("/assets/img/shape/join-shape-2.png") }}" alt="image not found">
            <div class="container">
               <div class="join__main-wrapper pt-150 pb-90">
                  <div class="row align-items-sm-start">
                     <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="join__features-wrapper mb-60">
                           <div class="join__features-grid">
                              <div class="join__features-item text-center">
                                 <div class="join__features-icon">
                                    <span><i class="flaticon-network"></i></span>
                                 </div>
                                 <h3 class="join__features-title">Build Networking</h3>
                              </div>
                              <div class="join__features-item text-center">
                                 <div class="join__features-icon">
                                    <span><i class="flaticon-teamwork"></i></span>
                                 </div>
                                 <h3 class="join__features-title">Meet New People</h3>
                              </div>
                              <div class="join__features-item text-center">
                                 <div class="join__features-icon">
                                    <span><i class="flaticon-speech"></i></span>
                                 </div>
                                 <h3 class="join__features-title">Experience Speakers</h3>
                              </div>
                              <div class="join__features-item text-center">
                                 <div class="join__features-icon">
                                    <span><i class="flaticon-confetti"></i></span>
                                 </div>
                                 <h3 class="join__features-title">Lot’s Of Fun</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="join__content-wrapper mb-60">
                           <div class="section__title-wrapper is-white mb-40">
                              <span class="section__back-title">w</span>
                              <span class="section__subtitle">WHY JOIN EVENT</span>
                              <h2 class="section__title">
                                 WHY YOU SHOULD
                                 <span class="text__highlight">JOIN THIS  
                                    <svg width="106" height="20" viewBox="0 0 106 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M2 18C36 5.92602 104 -10.9775 104 18" stroke="url(#paint0_linear_53_54)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                       <defs>
                                       <linearGradient id="paint0_linear_53_54" x1="2.15988" y1="13.8763" x2="104.193" y2="21.1616" gradientUnits="userSpaceOnUse">
                                       <stop offset="1" stop-color="#F7426F"/>
                                       <stop offset="1" stop-color="#F87A58"/>
                                       </linearGradient>
                                       </defs>
                                    </svg>
                                 </span>
                                 EVENT
                              </h2>
                           </div>
                           <div class="join__content mb-70">
                              <p>Velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>
                              <p class="mt-30">
                                 Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aeneansollicitudin, lorem quis bibendum auctonisi elit consequat ipsum nec sagittis sem nibh id
                                 elit. Duis sed odio sit amet nibh vulputate cursusa sit amet mauris. Morbi accumsan ipsum velit.” Nam nec tellus a odio tincidunt.
                              </p>
                           </div>
                           <a href="{{ url("event-list.html") }}" class="fill__btn">Join Now<i class="fa-regular fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="homespeakers" class="speaker__slider-area pt-80 pb-150">
            <div class="container">
               <div class="speaker__slider-wrapper">
                  <div class="speaker__activation">
                     <div class="speaker__slider-item w-img">
                        <a href="{{ url("#") }}"><img src="{{ asset("/assets/img/speaker/1.jpg") }}" alt="image not found"></a>
                     </div>
                     <div class="speaker__slider-item w-img">
                        <a href="{{ url("#") }}"><img src="{{ asset("/assets/img/speaker/2.jpg") }}" alt="image not found"></a>
                     </div>
                     <div class="speaker__slider-item w-img">
                        <a href="{{ url("#") }}"><img src="{{ asset("/assets/img/speaker/3.jpg") }}" alt="image not found"></a>
                     </div>
                     <div class="speaker__slider-item w-img">
                        <a href="{{ url("#") }}"><img src="{{ asset("/assets/img/speaker/4.jpg") }}" alt="image not found"></a>
                     </div>
                     <div class="speaker__slider-item w-img">
                        <a href="{{ url("#") }}"><img src="{{ asset("/assets/img/speaker/5.jpg") }}" alt="image not found"></a>
                     </div>
                     <div class="speaker__slider-item w-img">
                        <a href="{{ url("#") }}"><img src="{{ asset("/assets/img/speaker/1.jpg") }}" alt="image not found"></a>
                     </div>
                     <div class="speaker__slider-item w-img">
                        <a href="{{ url("#") }}"><img src="{{ asset("/assets/img/speaker/2.jpg") }}" alt="image not found"></a>
                     </div>
                     <div class="speaker__slider-item w-img">
                        <a href="{{ url("#") }}"><img src="{{ asset("/assets/img/speaker/3.jpg") }}" alt="image not found"></a>
                     </div>
                     <div class="speaker__slider-item w-img">
                        <a href="{{ url("#") }}"><img src="{{ asset("/assets/img/speaker/4.jpg") }}" alt="image not found"></a>
                     </div>
                     <div class="speaker__slider-item w-img">
                        <a href="{{ url("#") }}"><img src="{{ asset("/assets/img/speaker/5.jpg") }}" alt="image not found"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Join this area end  -->

      <!--  Event Schedule area start -->
      <section id="homeschedule" class="event__schedule-area pt-185 pb-150">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xxl-7 col-xl-7 col-lg-6">
                  <div class="section__title-wrapper is-left mb-110">
                     <span class="section__back-title">S</span>
                     <span class="section__subtitle">SCHEDULE OF EVENT</span>
                     <h2 class="section__title">
                        Conference 
                        <span class="text__highlight">Schedule
                           <svg width="256" height="33" viewBox="0 0 256 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.90108 28.28C86.6962 8.53589 254.194 -18.7278 253.826 30.1705" stroke="url(#paint0_linear_60_218)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                              <defs>
                              <linearGradient id="paint0_linear_60_218" x1="3.34681" y1="21.3244" x2="252.733" y2="49.1844" gradientUnits="userSpaceOnUse">
                              <stop offset="1" stop-color="#F7426F"/>
                              <stop offset="1" stop-color="#F87A58"/>
                              </linearGradient>
                              </defs>
                           </svg>  
                        </span>
                     </h2>
                  </div>
               </div>
               <div class="col-xxl-5 col-xl-5 col-lg-6">
                  <div class="accordion__tab">
                     <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link active" id="nav-day-one-tab" data-bs-toggle="tab" data-bs-target="#nav-day-one" type="button" role="tab" aria-controls="nav-day-one" aria-selected="true">day one</button>
                          <button class="nav-link" id="nav-day-tow-tab" data-bs-toggle="tab" data-bs-target="#nav-day-tow" type="button" role="tab" aria-controls="nav-day-tow" aria-selected="false">day two</button>
                          <button class="nav-link" id="nav-day-three-tab" data-bs-toggle="tab" data-bs-target="#nav-day-three" type="button" role="tab" aria-controls="nav-day-three" aria-selected="false">day three</button>
                        </div>
                      </nav>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="schedule__accordion">
                     <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-day-one" role="tabpanel" aria-labelledby="nav-day-one-tab" tabindex="0">
                           <div class="accordion" id="accordionExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="accordion__heading">
                                       <span class="accordion__meta">
                                          <span class="accordion__meta-thumb">
                                             <img src="{{ asset("/assets/img/accordion/meta-02.png") }}" alt="image not found">
                                          </span>
                                          <span class="accordion__meta-contet">
                                             <span class="title">Fredric Martin</span>
                                             <span class="info">Digital Marketer</span>
                                          </span>
                                       </span>
                                       <span class="accordion__title_inner accordion-border">
                                          <span class="accordion__title">BITPA
                                             Conference Dhaka Meet up 2023</span>
                                       </span>
                                    </span> 
                                  </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <div class="accordiong__inner">
                                       <div class="accordion__title-inner mb-25">
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, nulla. Veritatis magnam esse laboriosam aliquam sunt voluptate sequi nesciunt officia, sint culpa! Numquam, soluta commodi. Ex laborum natus iste nihil?</p>
                                       </div>
                                       <div class="accordion__thumb w-img">
                                          <img src="{{ asset("/assets/img/accordion/schedule-thumb.jpg") }}" alt="image not found">
                                       </div>
                                       <div class="accordiong__meta">
                                          <span>
                                             <i class="flaticon-calendar"></i>
                                             November 9-10
                                          </span>
                                          <span>
                                             <i class="flaticon-placeholder-1"></i>
                                             November 9-10
                                          </span>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="accordion__heading">
                                       <span class="accordion__meta">
                                          <span class="accordion__meta-thumb">
                                             <img src="{{ asset("/assets/img/accordion/meta-01.png") }}" alt="image not found">
                                          </span>
                                          <span class="accordion__meta-contet">
                                             <span class="title">Betty D. Lucas</span>
                                             <span class="info">Network Expert</span>
                                          </span>
                                       </span>
                                       <span class="accordion__title_inner accordion-border">
                                          <span class="accordion__title">Business Conference Tokyo Meet up - 2023</span>
                                       </span>
                                    </span> 
                                  </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <div class="accordiong__inner">
                                       <div class="accordion__title-inner mb-25">
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, nulla. Veritatis magnam esse laboriosam aliquam sunt voluptate sequi nesciunt officia, sint culpa! Numquam, soluta commodi. Ex laborum natus iste nihil?</p>
                                       </div>
                                       <div class="accordion__thumb w-img">
                                          <img src="{{ asset("/assets/img/accordion/schedule-thumb.jpg") }}" alt="image not found">
                                       </div>
                                       <div class="accordiong__meta">
                                          <span>
                                             <i class="flaticon-calendar"></i>
                                             November 9-10
                                          </span>
                                          <span>
                                             <i class="flaticon-placeholder-1"></i>
                                             November 9-10
                                          </span>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="accordion__heading">
                                       <span class="accordion__meta">
                                          <span class="accordion__meta-thumb">
                                             <img src="{{ asset("/assets/img/accordion/meta-03.png") }}" alt="image not found">
                                          </span>
                                          <span class="accordion__meta-contet">
                                             <span class="title">Drew P. Bad</span>
                                             <span class="info">Technology Specialist</span>
                                          </span>
                                       </span>
                                       <span class="accordion__title_inner accordion-border">
                                          <span class="accordion__title">Cyber Security Conference Meet up Japan - 2023</span>
                                       </span>
                                    </span> 
                                  </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <div class="accordiong__inner">
                                       <div class="accordion__title-inner mb-25">
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, nulla. Veritatis magnam esse laboriosam aliquam sunt voluptate sequi nesciunt officia, sint culpa! Numquam, soluta commodi. Ex laborum natus iste nihil?</p>
                                       </div>
                                       <div class="accordion__thumb w-img">
                                          <img src="{{ asset("/assets/img/accordion/schedule-thumb.jpg") }}" alt="image not found">
                                       </div>
                                       <div class="accordiong__meta">
                                          <span>
                                             <i class="flaticon-calendar"></i>
                                             November 9-10
                                          </span>
                                          <span>
                                             <i class="flaticon-placeholder-1"></i>
                                             November 9-10
                                          </span>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="accordion__heading">
                                       <span class="accordion__meta">
                                          <span class="accordion__meta-thumb">
                                             <img src="{{ asset("/assets/img/accordion/meta-03.png") }}" alt="image not found">
                                          </span>
                                          <span class="accordion__meta-contet">
                                             <span class="title">Drew P. Bad</span>
                                             <span class="info">Technology Specialist</span>
                                          </span>
                                       </span>
                                       <span class="accordion__title_inner accordion-border">
                                          <span class="accordion__title">Cyber Security Conference Meet up Japan - 2023</span>
                                       </span>
                                    </span> 
                                  </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <div class="accordiong__inner">
                                       <div class="accordion__title-inner mb-25">
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, nulla. Veritatis magnam esse laboriosam aliquam sunt voluptate sequi nesciunt officia, sint culpa! Numquam, soluta commodi. Ex laborum natus iste nihil?</p>
                                       </div>
                                       <div class="accordion__thumb w-img">
                                          <img src="{{ asset("/assets/img/accordion/schedule-thumb.jpg") }}" alt="image not found">
                                       </div>
                                       <div class="accordiong__meta">
                                          <span>
                                             <i class="flaticon-calendar"></i>
                                             November 9-10
                                          </span>
                                          <span>
                                             <i class="flaticon-placeholder-1"></i>
                                             November 9-10
                                          </span>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-day-tow" role="tabpanel" aria-labelledby="nav-day-tow-tab" tabindex="0">
                           <div class="accordion" id="accordionExample-p">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne-p">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-p" aria-expanded="true" aria-controls="collapseOne-p">
                                    <span class="accordion__heading">
                                       <span class="accordion__meta">
                                          <span class="accordion__meta-thumb">
                                             <img src="{{ asset("/assets/img/accordion/meta-02.png") }}" alt="image not found">
                                          </span>
                                          <span class="accordion__meta-contet">
                                             <span class="title">Fredric Martin</span>
                                             <span class="info">Digital Marketer</span>
                                          </span>
                                       </span>
                                       <span class="accordion__title_inner accordion-border">
                                          <span class="accordion__title">BITPA
                                             Conference Dhaka Meet up 2023</span>
                                       </span>
                                    </span> 
                                  </button>
                                </h2>
                                <div id="collapseOne-p" class="accordion-collapse collapse show" aria-labelledby="headingOne-p" data-bs-parent="#accordionExample-p">
                                 <div class="accordion-body">
                                    <div class="accordiong__inner">
                                       <div class="accordion__title-inner mb-25">
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, nulla. Veritatis magnam esse laboriosam aliquam sunt voluptate sequi nesciunt officia, sint culpa! Numquam, soluta commodi. Ex laborum natus iste nihil?</p>
                                       </div>
                                       <div class="accordion__thumb w-img">
                                          <img src="{{ asset("/assets/img/accordion/schedule-thumb.jpg") }}" alt="image not found">
                                       </div>
                                       <div class="accordiong__meta">
                                          <span>
                                             <i class="flaticon-calendar"></i>
                                             November 9-10
                                          </span>
                                          <span>
                                             <i class="flaticon-placeholder-1"></i>
                                             November 9-10
                                          </span>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo-p">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-p" aria-expanded="false" aria-controls="collapseTwo-p">
                                    <span class="accordion__heading">
                                       <span class="accordion__meta">
                                          <span class="accordion__meta-thumb">
                                             <img src="{{ asset("/assets/img/accordion/meta-01.png") }}" alt="image not found">
                                          </span>
                                          <span class="accordion__meta-contet">
                                             <span class="title">Betty D. Lucas</span>
                                             <span class="info">Network Expert</span>
                                          </span>
                                       </span>
                                       <span class="accordion__title_inner accordion-border">
                                          <span class="accordion__title">Business Conference Tokyo Meet up - 2023</span>
                                       </span>
                                    </span> 
                                  </button>
                                </h2>
                                <div id="collapseTwo-p" class="accordion-collapse collapse" aria-labelledby="headingTwo-p" data-bs-parent="#accordionExample-p">
                                 <div class="accordion-body">
                                    <div class="accordiong__inner">
                                       <div class="accordion__title-inner mb-25">
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, nulla. Veritatis magnam esse laboriosam aliquam sunt voluptate sequi nesciunt officia, sint culpa! Numquam, soluta commodi. Ex laborum natus iste nihil?</p>
                                       </div>
                                       <div class="accordion__thumb w-img">
                                          <img src="{{ asset("/assets/img/accordion/schedule-thumb.jpg") }}" alt="image not found">
                                       </div>
                                       <div class="accordiong__meta">
                                          <span>
                                             <i class="flaticon-calendar"></i>
                                             November 9-10
                                          </span>
                                          <span>
                                             <i class="flaticon-placeholder-1"></i>
                                             November 9-10
                                          </span>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree-p">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-p" aria-expanded="false" aria-controls="collapseThree-p">
                                    <span class="accordion__heading">
                                       <span class="accordion__meta">
                                          <span class="accordion__meta-thumb">
                                             <img src="{{ asset("/assets/img/accordion/meta-03.png") }}" alt="image not found">
                                          </span>
                                          <span class="accordion__meta-contet">
                                             <span class="title">Drew P. Bad</span>
                                             <span class="info">Technology Specialist</span>
                                          </span>
                                       </span>
                                       <span class="accordion__title_inner accordion-border">
                                          <span class="accordion__title">Cyber Security Conference Meet up Japan - 2023</span>
                                       </span>
                                    </span> 
                                  </button>
                                </h2>
                                <div id="collapseThree-p" class="accordion-collapse collapse" aria-labelledby="headingThree-p" data-bs-parent="#accordionExample-p">
                                 <div class="accordion-body">
                                    <div class="accordiong__inner">
                                       <div class="accordion__title-inner mb-25">
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, nulla. Veritatis magnam esse laboriosam aliquam sunt voluptate sequi nesciunt officia, sint culpa! Numquam, soluta commodi. Ex laborum natus iste nihil?</p>
                                       </div>
                                       <div class="accordion__thumb w-img">
                                          <img src="{{ asset("/assets/img/accordion/schedule-thumb.jpg") }}" alt="image not found">
                                       </div>
                                       <div class="accordiong__meta">
                                          <span>
                                             <i class="flaticon-calendar"></i>
                                             November 9-10
                                          </span>
                                          <span>
                                             <i class="flaticon-placeholder-1"></i>
                                             November 9-10
                                          </span>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour-p">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-p" aria-expanded="false" aria-controls="collapseFour-p">
                                    <span class="accordion__heading">
                                       <span class="accordion__meta">
                                          <span class="accordion__meta-thumb">
                                             <img src="{{ asset("/assets/img/accordion/meta-03.png") }}" alt="image not found">
                                          </span>
                                          <span class="accordion__meta-contet">
                                             <span class="title">Drew P. Bad</span>
                                             <span class="info">Technology Specialist</span>
                                          </span>
                                       </span>
                                       <span class="accordion__title_inner accordion-border">
                                          <span class="accordion__title">Cyber Security Conference Meet up Japan - 2023</span>
                                       </span>
                                    </span> 
                                  </button>
                                </h2>
                                <div id="collapseFour-p" class="accordion-collapse collapse" aria-labelledby="headingFour-p" data-bs-parent="#accordionExample-p">
                                 <div class="accordion-body">
                                    <div class="accordiong__inner">
                                       <div class="accordion__title-inner mb-25">
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, nulla. Veritatis magnam esse laboriosam aliquam sunt voluptate sequi nesciunt officia, sint culpa! Numquam, soluta commodi. Ex laborum natus iste nihil?</p>
                                       </div>
                                       <div class="accordion__thumb w-img">
                                          <img src="{{ asset("/assets/img/accordion/schedule-thumb.jpg") }}" alt="image not found">
                                       </div>
                                       <div class="accordiong__meta">
                                          <span>
                                             <i class="flaticon-calendar"></i>
                                             November 9-10
                                          </span>
                                          <span>
                                             <i class="flaticon-placeholder-1"></i>
                                             November 9-10
                                          </span>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-day-three" role="tabpanel" aria-labelledby="nav-day-three-tab" tabindex="0">
                           <div class="accordion" id="accordionExample-c">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne-c">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-c" aria-expanded="true" aria-controls="collapseOne-c">
                                    <span class="accordion__heading">
                                       <span class="accordion__meta">
                                          <span class="accordion__meta-thumb">
                                             <img src="{{ asset("/assets/img/accordion/meta-02.png") }}" alt="image not found">
                                          </span>
                                          <span class="accordion__meta-contet">
                                             <span class="title">Fredric Martin</span>
                                             <span class="info">Digital Marketer</span>
                                          </span>
                                       </span>
                                       <span class="accordion__title_inner accordion-border">
                                          <span class="accordion__title">BITPA
                                             Conference Dhaka Meet up 2023</span>
                                       </span>
                                    </span> 
                                  </button>
                                </h2>
                                <div id="collapseOne-c" class="accordion-collapse collapse show" aria-labelledby="headingOne-c" data-bs-parent="#accordionExample-c">
                                 <div class="accordion-body">
                                    <div class="accordiong__inner">
                                       <div class="accordion__title-inner mb-25">
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, nulla. Veritatis magnam esse laboriosam aliquam sunt voluptate sequi nesciunt officia, sint culpa! Numquam, soluta commodi. Ex laborum natus iste nihil?</p>
                                       </div>
                                       <div class="accordion__thumb w-img">
                                          <img src="{{ asset("/assets/img/accordion/schedule-thumb.jpg") }}" alt="image not found">
                                       </div>
                                       <div class="accordiong__meta">
                                          <span>
                                             <i class="flaticon-calendar"></i>
                                             November 9-10
                                          </span>
                                          <span>
                                             <i class="flaticon-placeholder-1"></i>
                                             November 9-10
                                          </span>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo-c">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-c" aria-expanded="false" aria-controls="collapseTwo-c">
                                    <span class="accordion__heading">
                                       <span class="accordion__meta">
                                          <span class="accordion__meta-thumb">
                                             <img src="{{ asset("/assets/img/accordion/meta-01.png") }}" alt="image not found">
                                          </span>
                                          <span class="accordion__meta-contet">
                                             <span class="title">Betty D. Lucas</span>
                                             <span class="info">Network Expert</span>
                                          </span>
                                       </span>
                                       <span class="accordion__title_inner accordion-border">
                                          <span class="accordion__title">Business Conference Tokyo Meet up - 2023</span>
                                       </span>
                                    </span> 
                                  </button>
                                </h2>
                                <div id="collapseTwo-c" class="accordion-collapse collapse" aria-labelledby="headingTwo-c" data-bs-parent="#accordionExample-c">
                                 <div class="accordion-body">
                                    <div class="accordiong__inner">
                                       <div class="accordion__title-inner mb-25">
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, nulla. Veritatis magnam esse laboriosam aliquam sunt voluptate sequi nesciunt officia, sint culpa! Numquam, soluta commodi. Ex laborum natus iste nihil?</p>
                                       </div>
                                       <div class="accordion__thumb w-img">
                                          <img src="{{ asset("/assets/img/accordion/schedule-thumb.jpg") }}" alt="image not found">
                                       </div>
                                       <div class="accordiong__meta">
                                          <span>
                                             <i class="flaticon-calendar"></i>
                                             November 9-10
                                          </span>
                                          <span>
                                             <i class="flaticon-placeholder-1"></i>
                                             November 9-10
                                          </span>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree-c">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-c" aria-expanded="false" aria-controls="collapseThree-c">
                                    <span class="accordion__heading">
                                       <span class="accordion__meta">
                                          <span class="accordion__meta-thumb">
                                             <img src="{{ asset("/assets/img/accordion/meta-03.png") }}" alt="image not found">
                                          </span>
                                          <span class="accordion__meta-contet">
                                             <span class="title">Drew P. Bad</span>
                                             <span class="info">Technology Specialist</span>
                                          </span>
                                       </span>
                                       <span class="accordion__title_inner accordion-border">
                                          <span class="accordion__title">Cyber Security Conference Meet up Japan - 2023</span>
                                       </span>
                                    </span> 
                                  </button>
                                </h2>
                                <div id="collapseThree-c" class="accordion-collapse collapse" aria-labelledby="headingThree-c" data-bs-parent="#accordionExample-c">
                                 <div class="accordion-body">
                                    <div class="accordiong__inner">
                                       <div class="accordion__title-inner mb-25">
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, nulla. Veritatis magnam esse laboriosam aliquam sunt voluptate sequi nesciunt officia, sint culpa! Numquam, soluta commodi. Ex laborum natus iste nihil?</p>
                                       </div>
                                       <div class="accordion__thumb w-img">
                                          <img src="{{ asset("/assets/img/accordion/schedule-thumb.jpg") }}" alt="image not found">
                                       </div>
                                       <div class="accordiong__meta">
                                          <span>
                                             <i class="flaticon-calendar"></i>
                                             November 9-10
                                          </span>
                                          <span>
                                             <i class="flaticon-placeholder-1"></i>
                                             November 9-10
                                          </span>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour-c">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-c" aria-expanded="false" aria-controls="collapseFour-c">
                                    <span class="accordion__heading">
                                       <span class="accordion__meta">
                                          <span class="accordion__meta-thumb">
                                             <img src="{{ asset("/assets/img/accordion/meta-03.png") }}" alt="image not found">
                                          </span>
                                          <span class="accordion__meta-contet">
                                             <span class="title">Drew P. Bad</span>
                                             <span class="info">Technology Specialist</span>
                                          </span>
                                       </span>
                                       <span class="accordion__title_inner accordion-border">
                                          <span class="accordion__title">Cyber Security Conference Meet up Japan - 2023</span>
                                       </span>
                                    </span> 
                                  </button>
                                </h2>
                                <div id="collapseFour-c" class="accordion-collapse collapse" aria-labelledby="headingFour-c" data-bs-parent="#accordionExample-c">
                                 <div class="accordion-body">
                                    <div class="accordiong__inner">
                                       <div class="accordion__title-inner mb-25">
                                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, nulla. Veritatis magnam esse laboriosam aliquam sunt voluptate sequi nesciunt officia, sint culpa! Numquam, soluta commodi. Ex laborum natus iste nihil?</p>
                                       </div>
                                       <div class="accordion__thumb w-img">
                                          <img src="{{ asset("/assets/img/accordion/schedule-thumb.jpg") }}" alt="image not found">
                                       </div>
                                       <div class="accordiong__meta">
                                          <span>
                                             <i class="flaticon-calendar"></i>
                                             November 9-10
                                          </span>
                                          <span>
                                             <i class="flaticon-placeholder-1"></i>
                                             November 9-10
                                          </span>
                                       </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--  Event Schedule area end -->

      <!-- Counter area start -->
      <section class="counter__area include__bg pt-150 pb-120 counter__overlay fix" data-background="assets/img/bg/cunter-bg.jpg">
         <div class="counter__shape">
            <img src="{{ asset("/assets/img/shape/counter-shape.png") }}" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="counter__item text-center mb-60">
                     <div class="counter__icon">
                        <i class="flaticon-team"></i>
                     </div>
                     <div class="counter__content">
                        <div class="counter__number">
                           <span class="counter">1030</span>
                        </div>
                        <div class="counter__title">
                           <h3>Participants</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="counter__item text-center mb-60">
                     <div class="counter__icon">
                        <i class="flaticon-speech"></i>
                     </div>
                     <div class="counter__content">
                        <div class="counter__number">
                           <span class="counter">1600</span>
                        </div>
                        <div class="counter__title">
                           <h3>Speakers</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="counter__item text-center mb-60">
                     <div class="counter__icon">
                        <i class="flaticon-workshop"></i>
                     </div>
                     <div class="counter__content">
                        <div class="counter__number">
                           <span class="counter">1230</span>
                        </div>
                        <div class="counter__title">
                           <h3>Workshop</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="counter__item text-center mb-60">
                     <div class="counter__icon">
                        <i class="flaticon-trophy-1"></i>
                     </div>
                     <div class="counter__content">
                        <div class="counter__number">
                           <span class="counter">1070</span>
                        </div>
                        <div class="counter__title">
                           <h3>Awards Win</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Counter area end -->

      <!-- Testimonial start -->
      <section class="testimonial__area p-relative pt-175 pb-135">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-6">
                  <div class="section__title-wrapper is-center text-center mb-110">
                     <span class="section__back-title">t</span>
                     <span class="section__subtitle">PARTICIPANTS REVIEW</span>
                     <h2 class="section__title">
                        PEOPLES
                        <span class="text__highlight"> TESTIMONIAL
                           <svg class="title-underline" width="328" height="31" viewBox="0 0 328 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 29C110 8.62517 326 -19.8996 326 29" stroke="url(#paint0_linear_47_128)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                              <defs>
                                 <linearGradient id="paint0_linear_47_128" x1="2.50784" y1="22.0412" x2="322.486" y2="65.0473" gradientUnits="userSpaceOnUse">
                                    <stop offset="1" stop-color="#F7426F" />
                                    <stop offset="1" stop-color="#F87A58" />
                                 </linearGradient>
                              </defs>
                           </svg>
                        </span>
                     </h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="tetimonial__inner-main p-relative">
            <div class="container p-relative">
               <div class="testimonial__all-user">
                  <img class="author__user-1 user__shadow" src="{{ asset("/assets/img/testimonial/author/01.png") }}" alt="image not found">
                  <img class="author__user-2 user__shadow" src="{{ asset("/assets/img/testimonial/author/02.png") }}" alt="image not found">
                  <img class="author__user-3 user__shadow" src="{{ asset("/assets/img/testimonial/author/03.png") }}" alt="image not found">
                  <img class="author__user-4 user__shadow" src="{{ asset("/assets/img/testimonial/author/04.png") }}" alt="image not found">
                  <img class="author__user-5 user__shadow" src="{{ asset("/assets/img/testimonial/author/05.png") }}" alt="image not found">
                  <img class="author__user-6 user__shadow" src="{{ asset("/assets/img/testimonial/author/06.png") }}" alt="image not found">
                  <div class="testimonial__navigation"></div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-xxl-8 col-xl-8 col-lg-8 text-center">
                     <div class="testimonial__activation">
                        <div class="testimonial__item">
                           <div class="testimonial__thumb">
                              <img src="{{ asset("/assets/img/testimonial/1.png") }}" alt="image not found">
                              <div class="testimonial__quote">
                                 <i class="flaticon-quotation-1"></i>
                              </div>
                           </div>
                           <div class="testimonial__content">
                              <p>
                                 It is a sequence of Latin words that, as they are positioned, do not form sentences with a complete sense, but give life to a test text useful
                                 to fill spaces that will subsequently be occupied from ad hoc texts composed by communication professionals.
                              </p>
                              <div class="testimonial__content-name"><span>Dio Caprio</span>CEO - XYZ Innovation</div>
                           </div>
                        </div>
                        <div class="testimonial__item">
                           <div class="tetiminal-item-wrap">
                              <div class="testimonial__thumb">
                                 <img src="{{ asset("/assets/img/testimonial/2.png") }}" alt="image not found">
                                 <div class="testimonial__quote">
                                    <i class="flaticon-quotation-1"></i>
                                 </div>
                              </div>
                              <div class="testimonial__content">
                                 <p>
                                    It is a sequence of Latin words that, as they are positioned, do not form sentences with a complete sense, but give life to a test text useful
                                    to fill spaces that will subsequently be occupied from ad hoc texts composed by communication professionals.
                                 </p>
                                 <div class="testimonial__content-name"><span>Linda M. Norris</span>CEO - XYZ Innovation</div>
                              </div>
                           </div>
                        </div>
                        <div class="testimonial__item">
                           <div class="tetiminal-item-wrap">
                              <div class="testimonial__thumb">
                                 <img src="{{ asset("/assets/img/testimonial/3.png") }}" alt="image not found">
                                 <div class="testimonial__quote">
                                    <i class="flaticon-quotation-1"></i>
                                 </div>
                              </div>
                              <div class="testimonial__content">
                                 <p>
                                    It is a sequence of Latin words that, as they are positioned, do not form sentences with a complete sense, but give life to a test text useful
                                    to fill spaces that will subsequently be occupied from ad hoc texts composed by communication professionals.
                                 </p>
                                 <div class="testimonial__content-name"><span>Dio Caprio</span>CEO - XYZ Innovation</div>
                              </div>
                           </div>
                        </div>
                        <div class="testimonial__item">
                           <div class="tetiminal-item-wrap">
                              <div class="testimonial__thumb">
                                 <img src="{{ asset("/assets/img/testimonial/4.png") }}" alt="image not found">
                                 <div class="testimonial__quote">
                                    <i class="flaticon-quotation-1"></i>
                                 </div>
                              </div>
                              <div class="testimonial__content">
                                 <p>
                                    It is a sequence of Latin words that, as they are positioned, do not form sentences with a complete sense, but give life to a test text useful
                                    to fill spaces that will subsequently be occupied from ad hoc texts composed by communication professionals.
                                 </p>
                                 <div class="testimonial__content-name"><span>Bruce S. Smith</span>CEO - XYZ Innovation</div>
                              </div>
                           </div>
                        </div>
                        <div class="testimonial__item">
                           <div class="tetiminal-item-wrap">
                              <div class="testimonial__thumb">
                                 <img src="{{ asset("/assets/img/testimonial/5.png") }}" alt="image not found">
                                 <div class="testimonial__quote">
                                    <i class="flaticon-quotation-1"></i>
                                 </div>
                              </div>
                              <div class="testimonial__content">
                                 <p>
                                    It is a sequence of Latin words that, as they are positioned, do not form sentences with a complete sense, but give life to a test text useful
                                    to fill spaces that will subsequently be occupied from ad hoc texts composed by communication professionals.
                                 </p>
                                 <div class="testimonial__content-name"><span>Nicolas N. Smith</span>CEO - XYZ Innovation</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonial area end -->

      <!-- Gallery area start -->
      <div class="gallery__area fix">
         <div class="gallery-wrap swiper-container gallery-slider-activation1">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="gallery-item">
                     <a href="{{ url("assets/img/gallery/1.jpg") }}" class="gallery-icon  popup-image"><i class="flaticon-plus"></i></a>
                     <img src="{{ asset("/assets/img/gallery/1.jpg") }}" alt="image not found">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="gallery-item">
                     <a href="{{ url("assets/img/gallery/2.jpg") }}" class="gallery-icon  popup-image"><i class="flaticon-plus"></i></a>
                     <img src="{{ asset("/assets/img/gallery/2.jpg") }}" alt="image not found">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="gallery-item">
                     <a href="{{ url("assets/img/gallery/3.jpg") }}" class="gallery-icon  popup-image"><i class="flaticon-plus"></i></a>
                     <img src="{{ asset("/assets/img/gallery/3.jpg") }}" alt="image not found">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="gallery-item">
                     <a href="{{ url("assets/img/gallery/4.jpg") }}" class="gallery-icon  popup-image"><i class="flaticon-plus"></i></a>
                     <img src="{{ asset("/assets/img/gallery/4.jpg") }}" alt="image not found">
                  </div>
               </div>
            </div>
         </div>
         <div class="gallery-wrap swiper-container gallery-slider-activation2">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="gallery-item">
                     <a href="{{ url("assets/img/gallery/5.jpg") }}" class="gallery-icon  popup-image"><i class="flaticon-plus"></i></a>
                     <img src="{{ asset("/assets/img/gallery/5.jpg") }}" alt="image not found">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="gallery-item">
                     <a href="{{ url("assets/img/gallery/6.jpg") }}" class="gallery-icon  popup-image"><i class="flaticon-plus"></i></a>
                     <img src="{{ asset("/assets/img/gallery/6.jpg") }}" alt="image not found">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="gallery-item">
                     <a href="{{ url("assets/img/gallery/7.jpg") }}" class="gallery-icon  popup-image"><i class="flaticon-plus"></i></a>
                     <img src="{{ asset("/assets/img/gallery/7.jpg") }}" alt="image not found">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="gallery-item">
                     <a href="{{ url("assets/img/gallery/8.jpg") }}" class="gallery-icon  popup-image"><i class="flaticon-plus"></i></a>
                     <img src="{{ asset("/assets/img/gallery/8.jpg") }}" alt="image not found">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="gallery-item">
                     <a href="{{ url("assets/img/gallery/5.jpg") }}" class="gallery-icon  popup-image"><i class="flaticon-plus"></i></a>
                     <img src="{{ asset("/assets/img/gallery/5.jpg") }}" alt="image not found">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="gallery-item">
                     <a href="{{ url("assets/img/gallery/6.jpg") }}" class="gallery-icon  popup-image"><i class="flaticon-plus"></i></a>
                     <img src="{{ asset("/assets/img/gallery/6.jpg") }}" alt="image not found">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="gallery-item">
                     <a href="{{ url("assets/img/gallery/7.jpg") }}" class="gallery-icon  popup-image"><i class="flaticon-plus"></i></a>
                     <img src="{{ asset("/assets/img/gallery/7.jpg") }}" alt="image not found">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="gallery-item">
                     <a href="{{ url("assets/img/gallery/8.jpg") }}" class="gallery-icon  popup-image"><i class="flaticon-plus"></i></a>
                     <img src="{{ asset("/assets/img/gallery/8.jpg") }}" alt="image not found">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Gallery area end -->

      <!-- Pricing area start -->
      <section class="pricing__area pt-185 pb-120">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xxl-5 col-xl-6 col-lg-6"> 
                  <div class="section__title-wrapper is-left mb-105">
                     <span class="section__back-title">R</span>
                     <span class="section__subtitle">REGISTRATION NOW</span>
                     <h2 class="section__title">
                        Get
                        <span class="text__highlight">Ticket
                           <svg width="164" height="32" viewBox="0 0 164 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1.99971 28.2805C55.3778 8.30722 162.042 -19.4147 161.673 29.4835" stroke="url(#paint0_linear_83_347)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                              <defs>
                              <linearGradient id="paint0_linear_83_347" x1="2.30241" y1="21.3238" x2="162.062" y2="33.1155" gradientUnits="userSpaceOnUse">
                              <stop offset="1" stop-color="#F7426F"/>
                              <stop offset="1" stop-color="#F87A58"/>
                              </linearGradient>
                              </defs>
                           </svg>                                 
                        </span>
                        Now
                     </h2>
                  </div>
               </div>
               <div class="col-xxl-7 col-xl-6 col-lg-6">
                  <div class="price__short-details d-lg-flex justify-content-center mb-105">
                     <p>Velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi <br>
                        elit consequat ipsum, nec sagittis sem nibh.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                  <div class="pricing__item mb-30">
                     <div class="pricing__item-header">
                        <div><span class="pricing__item-title">$599 </span></div>
                        <div class="pricing__item-lable">
                           <span class="pricing__item-label"> CIP </span>
                           <svg class="lable-border" width="97" height="54" viewBox="0 0 97 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M1.55449 2.53125L0.518162 0.84375L0.944232 0.582093L0.893817 0.5H1.01039V0H3.03123V0.5H5.05206V0H7.0729V0.5H9.09373V0H11.1146V0.5H13.1354V0H15.1562V0.5H17.1771V0H19.1979V0.5H21.2188V0H23.2396V0.5H25.2604V0H27.2813V0.5H29.3021V0H31.3229V0.5H33.3438V0H35.3646V0.5H37.3854V0H39.4063V0.5H41.4271V0H43.4479V0.5H45.4688V0H47.4896V0.5H49.5104V0H51.5313V0.5H53.5521V0H55.5729V0.5H57.5938V0H59.6146V0.5H61.6354V0H63.6562V0.5H65.6771V0H67.6979V0.5H69.7188V0H71.7396V0.5H73.7604V0H75.7812V0.5H77.8021V0H79.8229V0.5H81.8438V0H83.8646V0.5H85.8854V0H87.9062V0.5H89.9271V0H91.9479V0.5H93.9688V0H95.9896V0.5H96.5V0.964301H97V2.89287H96.5V4.82144H97V6.75001H96.5V8.67858H97V10.6072H96.5V12.5357H97V14.4643H96.5V16.3929H97V18.3214H96.5V20.25H97V22.1786H96.5V24.1071H97V26.0357H96.5V27.9643H97V29.8929H96.5V31.8214H97V33.75H96.5V35.6786H97V37.6071H96.5V39.5357H97V41.4643H96.5V43.3929H97V45.3214H96.5V47.25H97V49.1786H96.5V51.1071H97V53.0357H96.5V53.5H95.9896V54H93.9688V53.5H91.9479V54H89.9271V53.5H87.9063V54H85.8854V53.5H83.8646V54H81.8438V53.5H79.8229V54H77.8021V53.5H75.7812V54H73.7604V53.5H71.7396V54H69.7187V53.5H67.6979V54H65.6771V53.5H63.6562V54H61.6354V53.5H59.6146V54H57.5937V53.5H55.5729V54H53.5521V53.5H51.5312V54H49.5104V53.5H47.4896V54H45.4687V53.5H43.4479V54H41.4271V53.5H39.4062V54H37.3854V53.5H35.3646V54H33.3438V53.5H31.3229V54H29.3021V53.5H27.2813V54H25.2604V53.5H23.2396V54H21.2188V53.5H19.1979V54H17.1771V53.5H15.1562V54H13.1354V53.5H11.1146V54H9.09375V53.5H7.07292V54H5.05208V53.5H3.03125V54H1.01042V53.5H0.893817L0.944236 53.4179L0.518167 53.1562L1.55449 51.4688L1.98056 51.7304L3.01688 50.0429L2.59082 49.7812L3.62714 48.0938L4.05321 48.3554L5.08953 46.6679L4.66346 46.4062L5.69979 44.7188L6.12586 44.9804L7.16218 43.2929L6.73611 43.0312L7.77244 41.3438L8.19851 41.6054L9.23483 39.9179L8.80876 39.6562L9.84509 37.9688L10.2712 38.2304L11.3075 36.5429L10.8814 36.2812L11.9177 34.5938L12.3438 34.8554L13.3801 33.1679L12.9541 32.9062L13.9904 31.2188L14.4165 31.4804L15.4528 29.7929L15.0267 29.5313L16.063 27.8438L16.4891 28.1054L17.0073 27.2617L17.168 27L17.0073 26.7383L16.4891 25.8946L16.063 26.1562L15.0267 24.4687L15.4528 24.2071L14.4165 22.5196L13.9904 22.7812L12.9541 21.0937L13.3801 20.8321L12.3438 19.1446L11.9177 19.4062L10.8814 17.7188L11.3075 17.4571L10.2712 15.7696L9.84508 16.0312L8.80876 14.3438L9.23483 14.0821L8.19851 12.3946L7.77244 12.6562L6.73611 10.9688L7.16218 10.7071L6.12586 9.01959L5.69979 9.28125L4.66346 7.59375L5.08953 7.33209L4.05321 5.64459L3.62714 5.90625L2.59081 4.21875L3.01688 3.95709L1.98056 2.26959L1.55449 2.53125Z"
                                 stroke="#1EA9F8"
                                 stroke-dasharray="2 2"
                                 />
                           </svg>
                        </div>
                     </div>
                     <div class="pricing__item-content">
                        <ul>
                           <li><i class="flaticon-comment"></i>Everything from ALL Access</li>
                           <li><i class="flaticon-comment"></i>Cocktail Hour</li>
                           <li><i class="flaticon-comment"></i>Premium Seating</li>
                           <li><i class="flaticon-comment"></i>Speaker Meet & Greets</li>
                           <li><i class="flaticon-comment"></i>Signed Books</li>
                        </ul>
                     </div>
                     <div class="pricing__btn-wrap">
                        <a class="pricing__btn" href="{{ url("signup.html") }}">Register Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                  <div class="pricing__item mb-30">
                     <div class="pricing__item-header">
                        <span class="pricing__item-title">$799 </span>
                        <div class="pricing__item-lable">
                           <span class="pricing__item-label pricing__item-label-color1"> VIP </span>
                           <svg class="lable-border" width="97" height="54" viewBox="0 0 97 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M1.55449 2.53125L0.518162 0.84375L0.944232 0.582093L0.893817 0.5H1.01039V0H3.03123V0.5H5.05206V0H7.0729V0.5H9.09373V0H11.1146V0.5H13.1354V0H15.1562V0.5H17.1771V0H19.1979V0.5H21.2188V0H23.2396V0.5H25.2604V0H27.2813V0.5H29.3021V0H31.3229V0.5H33.3438V0H35.3646V0.5H37.3854V0H39.4063V0.5H41.4271V0H43.4479V0.5H45.4688V0H47.4896V0.5H49.5104V0H51.5313V0.5H53.5521V0H55.5729V0.5H57.5938V0H59.6146V0.5H61.6354V0H63.6562V0.5H65.6771V0H67.6979V0.5H69.7188V0H71.7396V0.5H73.7604V0H75.7812V0.5H77.8021V0H79.8229V0.5H81.8438V0H83.8646V0.5H85.8854V0H87.9062V0.5H89.9271V0H91.9479V0.5H93.9688V0H95.9896V0.5H96.5V0.964301H97V2.89287H96.5V4.82144H97V6.75001H96.5V8.67858H97V10.6072H96.5V12.5357H97V14.4643H96.5V16.3929H97V18.3214H96.5V20.25H97V22.1786H96.5V24.1071H97V26.0357H96.5V27.9643H97V29.8929H96.5V31.8214H97V33.75H96.5V35.6786H97V37.6071H96.5V39.5357H97V41.4643H96.5V43.3929H97V45.3214H96.5V47.25H97V49.1786H96.5V51.1071H97V53.0357H96.5V53.5H95.9896V54H93.9688V53.5H91.9479V54H89.9271V53.5H87.9063V54H85.8854V53.5H83.8646V54H81.8438V53.5H79.8229V54H77.8021V53.5H75.7812V54H73.7604V53.5H71.7396V54H69.7187V53.5H67.6979V54H65.6771V53.5H63.6562V54H61.6354V53.5H59.6146V54H57.5937V53.5H55.5729V54H53.5521V53.5H51.5312V54H49.5104V53.5H47.4896V54H45.4687V53.5H43.4479V54H41.4271V53.5H39.4062V54H37.3854V53.5H35.3646V54H33.3438V53.5H31.3229V54H29.3021V53.5H27.2813V54H25.2604V53.5H23.2396V54H21.2188V53.5H19.1979V54H17.1771V53.5H15.1562V54H13.1354V53.5H11.1146V54H9.09375V53.5H7.07292V54H5.05208V53.5H3.03125V54H1.01042V53.5H0.893817L0.944236 53.4179L0.518167 53.1562L1.55449 51.4688L1.98056 51.7304L3.01688 50.0429L2.59082 49.7812L3.62714 48.0938L4.05321 48.3554L5.08953 46.6679L4.66346 46.4062L5.69979 44.7188L6.12586 44.9804L7.16218 43.2929L6.73611 43.0312L7.77244 41.3438L8.19851 41.6054L9.23483 39.9179L8.80876 39.6562L9.84509 37.9688L10.2712 38.2304L11.3075 36.5429L10.8814 36.2812L11.9177 34.5938L12.3438 34.8554L13.3801 33.1679L12.9541 32.9062L13.9904 31.2188L14.4165 31.4804L15.4528 29.7929L15.0267 29.5313L16.063 27.8438L16.4891 28.1054L17.0073 27.2617L17.168 27L17.0073 26.7383L16.4891 25.8946L16.063 26.1562L15.0267 24.4687L15.4528 24.2071L14.4165 22.5196L13.9904 22.7812L12.9541 21.0937L13.3801 20.8321L12.3438 19.1446L11.9177 19.4062L10.8814 17.7188L11.3075 17.4571L10.2712 15.7696L9.84508 16.0312L8.80876 14.3438L9.23483 14.0821L8.19851 12.3946L7.77244 12.6562L6.73611 10.9688L7.16218 10.7071L6.12586 9.01959L5.69979 9.28125L4.66346 7.59375L5.08953 7.33209L4.05321 5.64459L3.62714 5.90625L2.59081 4.21875L3.01688 3.95709L1.98056 2.26959L1.55449 2.53125Z"
                                 stroke="#F302ED"
                                 stroke-dasharray="2 2"
                                 />
                           </svg>
                        </div>
                     </div>
                     <div class="pricing__item-content">
                        <ul>
                           <li><i class="flaticon-comment"></i>Everything from ALL Access</li>
                           <li><i class="flaticon-comment"></i>Cocktail Hour</li>
                           <li><i class="flaticon-comment"></i>Premium Seating</li>
                           <li><i class="flaticon-comment"></i>Speaker Meet & Greets</li>
                           <li><i class="flaticon-comment"></i>Signed Books</li>
                        </ul>
                     </div>
                     <div class="pricing__btn-wrap">
                        <a class="pricing__btn" href="{{ url("signup.html") }}">Register Now</a>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                  <div class="pricing__item mb-30">
                     <div class="pricing__item-header">
                        <span class="pricing__item-title">$999 </span>
                        <div class="pricing__item-lable">
                           <span class="pricing__item-label pricing__item-label-color2"> VVIP </span>
                           <svg class="lable-border" width="97" height="54" viewBox="0 0 97 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M1.55449 2.53125L0.518162 0.84375L0.944232 0.582093L0.893817 0.5H1.01039V0H3.03123V0.5H5.05206V0H7.0729V0.5H9.09373V0H11.1146V0.5H13.1354V0H15.1562V0.5H17.1771V0H19.1979V0.5H21.2188V0H23.2396V0.5H25.2604V0H27.2813V0.5H29.3021V0H31.3229V0.5H33.3438V0H35.3646V0.5H37.3854V0H39.4063V0.5H41.4271V0H43.4479V0.5H45.4688V0H47.4896V0.5H49.5104V0H51.5313V0.5H53.5521V0H55.5729V0.5H57.5938V0H59.6146V0.5H61.6354V0H63.6562V0.5H65.6771V0H67.6979V0.5H69.7188V0H71.7396V0.5H73.7604V0H75.7812V0.5H77.8021V0H79.8229V0.5H81.8438V0H83.8646V0.5H85.8854V0H87.9062V0.5H89.9271V0H91.9479V0.5H93.9688V0H95.9896V0.5H96.5V0.964301H97V2.89287H96.5V4.82144H97V6.75001H96.5V8.67858H97V10.6072H96.5V12.5357H97V14.4643H96.5V16.3929H97V18.3214H96.5V20.25H97V22.1786H96.5V24.1071H97V26.0357H96.5V27.9643H97V29.8929H96.5V31.8214H97V33.75H96.5V35.6786H97V37.6071H96.5V39.5357H97V41.4643H96.5V43.3929H97V45.3214H96.5V47.25H97V49.1786H96.5V51.1071H97V53.0357H96.5V53.5H95.9896V54H93.9688V53.5H91.9479V54H89.9271V53.5H87.9063V54H85.8854V53.5H83.8646V54H81.8438V53.5H79.8229V54H77.8021V53.5H75.7812V54H73.7604V53.5H71.7396V54H69.7187V53.5H67.6979V54H65.6771V53.5H63.6562V54H61.6354V53.5H59.6146V54H57.5937V53.5H55.5729V54H53.5521V53.5H51.5312V54H49.5104V53.5H47.4896V54H45.4687V53.5H43.4479V54H41.4271V53.5H39.4062V54H37.3854V53.5H35.3646V54H33.3438V53.5H31.3229V54H29.3021V53.5H27.2813V54H25.2604V53.5H23.2396V54H21.2188V53.5H19.1979V54H17.1771V53.5H15.1562V54H13.1354V53.5H11.1146V54H9.09375V53.5H7.07292V54H5.05208V53.5H3.03125V54H1.01042V53.5H0.893817L0.944236 53.4179L0.518167 53.1562L1.55449 51.4688L1.98056 51.7304L3.01688 50.0429L2.59082 49.7812L3.62714 48.0938L4.05321 48.3554L5.08953 46.6679L4.66346 46.4062L5.69979 44.7188L6.12586 44.9804L7.16218 43.2929L6.73611 43.0312L7.77244 41.3438L8.19851 41.6054L9.23483 39.9179L8.80876 39.6562L9.84509 37.9688L10.2712 38.2304L11.3075 36.5429L10.8814 36.2812L11.9177 34.5938L12.3438 34.8554L13.3801 33.1679L12.9541 32.9062L13.9904 31.2188L14.4165 31.4804L15.4528 29.7929L15.0267 29.5313L16.063 27.8438L16.4891 28.1054L17.0073 27.2617L17.168 27L17.0073 26.7383L16.4891 25.8946L16.063 26.1562L15.0267 24.4687L15.4528 24.2071L14.4165 22.5196L13.9904 22.7812L12.9541 21.0937L13.3801 20.8321L12.3438 19.1446L11.9177 19.4062L10.8814 17.7188L11.3075 17.4571L10.2712 15.7696L9.84508 16.0312L8.80876 14.3438L9.23483 14.0821L8.19851 12.3946L7.77244 12.6562L6.73611 10.9688L7.16218 10.7071L6.12586 9.01959L5.69979 9.28125L4.66346 7.59375L5.08953 7.33209L4.05321 5.64459L3.62714 5.90625L2.59081 4.21875L3.01688 3.95709L1.98056 2.26959L1.55449 2.53125Z"
                                 stroke="#F87859"
                                 stroke-dasharray="2 2"
                                 />
                           </svg>
                        </div>
                     </div>
                     <div class="pricing__item-content">
                        <ul>
                           <li><i class="flaticon-comment"></i>Everything from ALL Access</li>
                           <li><i class="flaticon-comment"></i>Cocktail Hour</li>
                           <li><i class="flaticon-comment"></i>Premium Seating</li>
                           <li><i class="flaticon-comment"></i>Speaker Meet & Greets</li>
                           <li><i class="flaticon-comment"></i>Signed Books</li>
                        </ul>
                     </div>
                     <div class="pricing__btn-wrap">
                        <a class="pricing__btn" href="{{ url("signup.html") }}">Register Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- pricing area end -->
      
      <!-- Partner area start -->
      <div class="partner__area grey-bg pt-175 pb-150">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-6 col-xl-6">
                  <div class="section__title-wrapper is-center text-center mb-110">
                     <span class="section__back-title">P</span>
                     <span class="section__subtitle">EVENT SPONSORS</span>
                     <h2 class="section__title">
                        Organize
                        <span class="text__highlight"> Partner
                           <svg width="228" height="32" viewBox="0 0 228 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.6296 28.2336C77.1701 8.41978 226.159 -18.9833 225.79 29.9149" stroke="url(#paint0_linear_85_33)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                              <defs>
                              <linearGradient id="paint0_linear_85_333yh" x1="3.0318" y1="21.2777" x2="225.342" y2="43.5485" gradientUnits="userSpaceOnUse">
                              <stop offset="1" stop-color="#F7426F"/>
                              <stop offset="1" stop-color="#F87A58"/>
                              </linearGradient>
                              </defs>
                           </svg>
                        </span>
                     </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="partner__grid-wrapper">
                     <div class="partner__item">
                        <div class="partner__thumb">
                           <a href="{{ url("#") }}">
                              <img src="{{ asset("/assets/img/partner/1/01.png") }}" alt="image not found">
                           </a>
                        </div>
                     </div>
                     <div class="partner__item">
                        <div class="partner__thumb">
                           <a href="{{ url("#") }}">
                              <img src="{{ asset("/assets/img/partner/1/02.png") }}" alt="image not found">
                           </a>
                        </div>
                     </div>
                     <div class="partner__item">
                        <div class="partner__thumb">
                           <a href="{{ url("#") }}">
                              <img src="{{ asset("/assets/img/partner/1/03.png") }}" alt="image not found">
                           </a>
                        </div>
                     </div>
                     <div class="partner__item">
                        <div class="partner__thumb">
                           <a href="{{ url("#") }}">
                              <img src="{{ asset("/assets/img/partner/1/04.png") }}" alt="image not found">
                           </a>
                        </div>
                     </div>
                     <div class="partner__item">
                        <div class="partner__thumb">
                           <a href="{{ url("#") }}">
                              <img src="{{ asset("/assets/img/partner/1/05.png") }}" alt="image not found">
                           </a>
                        </div>
                     </div>
                     <div class="partner__item">
                        <div class="partner__thumb">
                           <a href="{{ url("#") }}">
                              <img src="{{ asset("/assets/img/partner/1/06.png") }}" alt="image not found">
                           </a>
                        </div>
                     </div>
                     <div class="partner__item">
                        <div class="partner__thumb">
                           <a href="{{ url("#") }}">
                              <img src="{{ asset("/assets/img/partner/1/07.png") }}" alt="image not found">
                           </a>
                        </div>
                     </div>
                     <div class="partner__item">
                        <div class="partner__thumb">
                           <a href="{{ url("#") }}">
                              <img src="{{ asset("/assets/img/partner/1/08.png") }}" alt="image not found">
                           </a>
                        </div>
                     </div>
                     <div class="partner__item">
                        <div class="partner__thumb">
                           <a href="{{ url("#") }}">
                              <img src="{{ asset("/assets/img/partner/1/09.png") }}" alt="image not found">
                           </a>
                        </div>
                     </div>
                     <div class="partner__item">
                        <div class="partner__thumb">
                           <a href="{{ url("#") }}">
                              <img src="{{ asset("/assets/img/partner/1/10.png") }}" alt="image not found">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Partner area end -->

      <!-- BLog area start -->
      <section id="homeblog" class="blog__area pt-185 pb-120 pb-120">
         <div class="container">
            <div class="row align-items-center">
               <div class="blog__intro-innner mb-80">
                  <div class="section__title-wrapper is-left">
                     <span class="section__back-title">B</span>
                     <span class="section__subtitle">LATEST NEWS FROM BLOG</span>
                     <h2 class="section__title">
                        expovent 
                        <span class="text__highlight"> insight
                           <svg width="228" height="32" viewBox="0 0 228 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.6296 28.2336C77.1701 8.41978 226.159 -18.9833 225.79 29.9149" stroke="url(#paint0_linear_85_33)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                              <defs>
                              <linearGradient id="paint0_linear_85_33" x1="3.0318" y1="21.2777" x2="225.342" y2="43.5485" gradientUnits="userSpaceOnUse">
                              <stop offset="1" stop-color="#F7426F"/>
                              <stop offset="1" stop-color="#F87A58"/>
                              </linearGradient>
                              </defs>
                           </svg>
                        </span>
                     </h2>
                  </div>
                  <div class="blog__pagination">
                  <!-- If we need pagination -->
                  <div class="testimonial-slider-dot bd-swiper-dot"></div>
                  </div>
               </div>
            </div>
            <div class="swiper blog__slider-active">
               <div class="swiper-wrapper">
                 <div class="swiper-slide">
                  <div class="swipwe-slide">
                     <div class="blog__item-wrapper">
                        <div class="blog__item mb-30">
                           <div class="blog__thumb w-img">
                              <a href="{{ url("schedule-list.html") }}">
                                 <img src="{{ asset("/assets/img/blog/1/01.jpg") }}" alt="image not found">
                              </a>
                           </div>
                           <div class="blog__content">
                              <h3>
                                 <a href="{{ url("schedule-list.html") }}">How to get started learning JavaScript the right way
                                 </a>
                              </h3>
                           </div>
                           <div class="blog__meta">
                              <span>
                                 <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clipcxcxc0_89_209)">
                                    <path d="M16.1386 1.54064H15.3926V0.785785C15.3926 0.354493 15.043 0.00488281 14.6117 0.00488281C14.1804 0.00488281 13.8308 0.354493 13.8308 0.785785V1.54064H6.16913V0.785785C6.16913 0.354493 5.81952 0.00488281 5.38823 0.00488281C4.95693 0.00488281 4.60732 0.354493 4.60732 0.785785V1.54064H3.86137C1.7322 1.54064 0 3.27284 0 5.40197V16.1346C0 18.2638 1.7322 19.996 3.86137 19.996H16.1387C18.2678 19.996 20 18.2638 20 16.1346V5.40197C20 3.27284 18.2678 1.54064 16.1386 1.54064ZM3.86137 3.10245H4.60732V4.62521C4.60732 5.0565 4.95693 5.40611 5.38823 5.40611C5.81952 5.40611 6.16913 5.0565 6.16913 4.62521V3.10245H13.8309V4.62521C13.8309 5.0565 14.1805 5.40611 14.6118 5.40611C15.0431 5.40611 15.3927 5.0565 15.3927 4.62521V3.10245H16.1387C17.4066 3.10245 18.4382 4.13402 18.4382 5.40197V6.14797H1.5618V5.40197C1.5618 4.13402 2.59338 3.10245 3.86137 3.10245ZM16.1386 18.4342H3.86137C2.59338 18.4342 1.5618 17.4026 1.5618 16.1346V7.70977H18.4382V16.1346C18.4382 17.4026 17.4066 18.4342 16.1386 18.4342ZM6.93703 10.7813C6.93703 11.2126 6.58742 11.5622 6.15613 11.5622H4.62036C4.18907 11.5622 3.83946 11.2126 3.83946 10.7813C3.83946 10.35 4.18907 10.0004 4.62036 10.0004H6.15613C6.58738 10.0004 6.93703 10.35 6.93703 10.7813ZM16.1606 10.7813C16.1606 11.2126 15.811 11.5622 15.3797 11.5622H13.8439C13.4126 11.5622 13.063 11.2126 13.063 10.7813C13.063 10.35 13.4126 10.0004 13.8439 10.0004H15.3797C15.8109 10.0004 16.1606 10.35 16.1606 10.7813ZM11.5444 10.7813C11.5444 11.2126 11.1947 11.5622 10.7634 11.5622H9.22769C8.79639 11.5622 8.44678 11.2126 8.44678 10.7813C8.44678 10.35 8.79639 10.0004 9.22769 10.0004H10.7634C11.1947 10.0004 11.5444 10.35 11.5444 10.7813ZM6.93703 15.3887C6.93703 15.8199 6.58742 16.1696 6.15613 16.1696H4.62036C4.18907 16.1696 3.83946 15.8199 3.83946 15.3887C3.83946 14.9574 4.18907 14.6078 4.62036 14.6078H6.15613C6.58738 14.6078 6.93703 14.9574 6.93703 15.3887ZM16.1606 15.3887C16.1606 15.8199 15.811 16.1696 15.3797 16.1696H13.8439C13.4126 16.1696 13.063 15.8199 13.063 15.3887C13.063 14.9574 13.4126 14.6078 13.8439 14.6078H15.3797C15.8109 14.6078 16.1606 14.9574 16.1606 15.3887ZM11.5444 15.3887C11.5444 15.8199 11.1947 16.1696 10.7634 16.1696H9.22769C8.79639 16.1696 8.44678 15.8199 8.44678 15.3887C8.44678 14.9574 8.79639 14.6078 9.22769 14.6078H10.7634C11.1947 14.6078 11.5444 14.9574 11.5444 15.3887Z" fill="#7C7C7C"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_8vcvc9_209">
                                    <rect width="20" height="20" fill="white"/>
                                    </clipPath>
                                    </defs>
                                 </svg>
                                 20 Sep, 2023
                              </span>
                              <span>
                                 <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clipcxcxc0_89_214)">
                                    <path d="M2.91114 18.8054H1.49401L2.4961 17.8033C3.03641 17.2629 3.37382 16.5602 3.46453 15.7978C2.05459 14.8726 1.02358 13.6552 0.471684 12.2592C-0.079823 10.8642 -0.149128 9.32857 0.271282 7.81825C0.775712 6.00602 1.95883 4.35424 3.60263 3.16713C5.38892 1.87717 7.61264 1.19531 10.0334 1.19531C13.083 1.19531 15.6534 2.07147 17.4667 3.72901C19.1003 5.2223 20 7.23654 20 9.40073C20 10.4522 19.7859 11.4752 19.3637 12.4415C18.9268 13.4414 18.287 14.3317 17.4621 15.0877C15.6463 16.7518 13.0775 17.6314 10.0334 17.6314C8.90333 17.6314 7.72413 17.4805 6.67132 17.2037C5.67479 18.2259 4.32441 18.8054 2.91114 18.8054ZM10.0334 2.36932C5.17936 2.36932 2.20087 5.26413 1.40228 8.13308C0.647628 10.8442 1.76007 13.406 4.3781 14.9859L4.67062 15.1625L4.66162 15.504C4.64378 16.18 4.48263 16.8311 4.19417 17.4196C4.89658 17.182 5.53395 16.7511 6.03305 16.1615L6.28124 15.8682L6.64929 15.9783C7.68214 16.2872 8.88396 16.4573 10.0334 16.4573C16.0745 16.4573 18.826 12.7994 18.826 9.40073C18.826 7.57023 18.062 5.8637 16.6746 4.59554C15.0814 3.13915 12.7849 2.36932 10.0334 2.36932Z" fill="#7C7C7C"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_89_vcvc214">
                                    <rect width="20" height="20" fill="white"/>
                                    </clipPath>
                                    </defs>
                                 </svg>
                                 <a href="{{ url("#") }}">0 Comments</a>
                              </span>
                           </div>
                           <a class="blog__btn" href="{{ url("schedule-list.html") }}">business</a>
                        </div>
                     </div>
                  </div>
                 </div>
                 <div class="swiper-slide">
                  <div class="blog__item mb-30">
                     <div class="blog__thumb w-img">
                        <a href="{{ url("schedule-list.html") }}">
                           <img src="{{ asset("/assets/img/blog/1/02.jpg") }}" alt="image not found">
                        </a>
                     </div>
                     <div class="blog__content">
                        <h3>
                           <a href="{{ url("schedule-list.html") }}">How to get started learning JavaScript the right way
                           </a>
                        </h3>
                     </div>
                     <div class="blog__meta">
                        <span>
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_8vddddv9_209)">
                              <path d="M16.1386 1.54064H15.3926V0.785785C15.3926 0.354493 15.043 0.00488281 14.6117 0.00488281C14.1804 0.00488281 13.8308 0.354493 13.8308 0.785785V1.54064H6.16913V0.785785C6.16913 0.354493 5.81952 0.00488281 5.38823 0.00488281C4.95693 0.00488281 4.60732 0.354493 4.60732 0.785785V1.54064H3.86137C1.7322 1.54064 0 3.27284 0 5.40197V16.1346C0 18.2638 1.7322 19.996 3.86137 19.996H16.1387C18.2678 19.996 20 18.2638 20 16.1346V5.40197C20 3.27284 18.2678 1.54064 16.1386 1.54064ZM3.86137 3.10245H4.60732V4.62521C4.60732 5.0565 4.95693 5.40611 5.38823 5.40611C5.81952 5.40611 6.16913 5.0565 6.16913 4.62521V3.10245H13.8309V4.62521C13.8309 5.0565 14.1805 5.40611 14.6118 5.40611C15.0431 5.40611 15.3927 5.0565 15.3927 4.62521V3.10245H16.1387C17.4066 3.10245 18.4382 4.13402 18.4382 5.40197V6.14797H1.5618V5.40197C1.5618 4.13402 2.59338 3.10245 3.86137 3.10245ZM16.1386 18.4342H3.86137C2.59338 18.4342 1.5618 17.4026 1.5618 16.1346V7.70977H18.4382V16.1346C18.4382 17.4026 17.4066 18.4342 16.1386 18.4342ZM6.93703 10.7813C6.93703 11.2126 6.58742 11.5622 6.15613 11.5622H4.62036C4.18907 11.5622 3.83946 11.2126 3.83946 10.7813C3.83946 10.35 4.18907 10.0004 4.62036 10.0004H6.15613C6.58738 10.0004 6.93703 10.35 6.93703 10.7813ZM16.1606 10.7813C16.1606 11.2126 15.811 11.5622 15.3797 11.5622H13.8439C13.4126 11.5622 13.063 11.2126 13.063 10.7813C13.063 10.35 13.4126 10.0004 13.8439 10.0004H15.3797C15.8109 10.0004 16.1606 10.35 16.1606 10.7813ZM11.5444 10.7813C11.5444 11.2126 11.1947 11.5622 10.7634 11.5622H9.22769C8.79639 11.5622 8.44678 11.2126 8.44678 10.7813C8.44678 10.35 8.79639 10.0004 9.22769 10.0004H10.7634C11.1947 10.0004 11.5444 10.35 11.5444 10.7813ZM6.93703 15.3887C6.93703 15.8199 6.58742 16.1696 6.15613 16.1696H4.62036C4.18907 16.1696 3.83946 15.8199 3.83946 15.3887C3.83946 14.9574 4.18907 14.6078 4.62036 14.6078H6.15613C6.58738 14.6078 6.93703 14.9574 6.93703 15.3887ZM16.1606 15.3887C16.1606 15.8199 15.811 16.1696 15.3797 16.1696H13.8439C13.4126 16.1696 13.063 15.8199 13.063 15.3887C13.063 14.9574 13.4126 14.6078 13.8439 14.6078H15.3797C15.8109 14.6078 16.1606 14.9574 16.1606 15.3887ZM11.5444 15.3887C11.5444 15.8199 11.1947 16.1696 10.7634 16.1696H9.22769C8.79639 16.1696 8.44678 15.8199 8.44678 15.3887C8.44678 14.9574 8.79639 14.6078 9.22769 14.6078H10.7634C11.1947 14.6078 11.5444 14.9574 11.5444 15.3887Z" fill="#7C7C7C"/>
                              </g>
                              <defs>
                              <clipPath id="xxz">
                              <rect width="20" height="20" fill="white"/>
                              </clipPath>
                              </defs>
                           </svg>
                           25 Sep, 2023
                        </span>
                        <span>
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clipcc0_89_214)">
                              <path d="M2.91114 18.8054H1.49401L2.4961 17.8033C3.03641 17.2629 3.37382 16.5602 3.46453 15.7978C2.05459 14.8726 1.02358 13.6552 0.471684 12.2592C-0.079823 10.8642 -0.149128 9.32857 0.271282 7.81825C0.775712 6.00602 1.95883 4.35424 3.60263 3.16713C5.38892 1.87717 7.61264 1.19531 10.0334 1.19531C13.083 1.19531 15.6534 2.07147 17.4667 3.72901C19.1003 5.2223 20 7.23654 20 9.40073C20 10.4522 19.7859 11.4752 19.3637 12.4415C18.9268 13.4414 18.287 14.3317 17.4621 15.0877C15.6463 16.7518 13.0775 17.6314 10.0334 17.6314C8.90333 17.6314 7.72413 17.4805 6.67132 17.2037C5.67479 18.2259 4.32441 18.8054 2.91114 18.8054ZM10.0334 2.36932C5.17936 2.36932 2.20087 5.26413 1.40228 8.13308C0.647628 10.8442 1.76007 13.406 4.3781 14.9859L4.67062 15.1625L4.66162 15.504C4.64378 16.18 4.48263 16.8311 4.19417 17.4196C4.89658 17.182 5.53395 16.7511 6.03305 16.1615L6.28124 15.8682L6.64929 15.9783C7.68214 16.2872 8.88396 16.4573 10.0334 16.4573C16.0745 16.4573 18.826 12.7994 18.826 9.40073C18.826 7.57023 18.062 5.8637 16.6746 4.59554C15.0814 3.13915 12.7849 2.36932 10.0334 2.36932Z" fill="#7C7C7C"/>
                              </g>
                              <defs>
                              <clipPath id="clipvfgg0_89_214">
                              <rect width="20" height="20" fill="white"/>
                              </clipPath>
                              </defs>
                           </svg>
                           <a href="{{ url("#") }}">3 Comments</a>
                        </span>
                     </div>
                     <a class="blog__btn" href="{{ url("schedule-list.html") }}">business</a>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="blog__item mb-30">
                     <div class="blog__thumb w-img">
                        <a href="{{ url("schedule-list.html") }}">
                           <img src="{{ asset("/assets/img/blog/1/03.jpg") }}" alt="image not found">
                        </a>
                     </div>
                     <div class="blog__content">
                        <h3>
                           <a href="{{ url("schedule-list.html") }}">How to get started learning JavaScript the right way
                           </a>
                        </h3>
                     </div>
                     <div class="blog__meta">
                        <span>
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_8vvcv9_209)">
                              <path d="M16.1386 1.54064H15.3926V0.785785C15.3926 0.354493 15.043 0.00488281 14.6117 0.00488281C14.1804 0.00488281 13.8308 0.354493 13.8308 0.785785V1.54064H6.16913V0.785785C6.16913 0.354493 5.81952 0.00488281 5.38823 0.00488281C4.95693 0.00488281 4.60732 0.354493 4.60732 0.785785V1.54064H3.86137C1.7322 1.54064 0 3.27284 0 5.40197V16.1346C0 18.2638 1.7322 19.996 3.86137 19.996H16.1387C18.2678 19.996 20 18.2638 20 16.1346V5.40197C20 3.27284 18.2678 1.54064 16.1386 1.54064ZM3.86137 3.10245H4.60732V4.62521C4.60732 5.0565 4.95693 5.40611 5.38823 5.40611C5.81952 5.40611 6.16913 5.0565 6.16913 4.62521V3.10245H13.8309V4.62521C13.8309 5.0565 14.1805 5.40611 14.6118 5.40611C15.0431 5.40611 15.3927 5.0565 15.3927 4.62521V3.10245H16.1387C17.4066 3.10245 18.4382 4.13402 18.4382 5.40197V6.14797H1.5618V5.40197C1.5618 4.13402 2.59338 3.10245 3.86137 3.10245ZM16.1386 18.4342H3.86137C2.59338 18.4342 1.5618 17.4026 1.5618 16.1346V7.70977H18.4382V16.1346C18.4382 17.4026 17.4066 18.4342 16.1386 18.4342ZM6.93703 10.7813C6.93703 11.2126 6.58742 11.5622 6.15613 11.5622H4.62036C4.18907 11.5622 3.83946 11.2126 3.83946 10.7813C3.83946 10.35 4.18907 10.0004 4.62036 10.0004H6.15613C6.58738 10.0004 6.93703 10.35 6.93703 10.7813ZM16.1606 10.7813C16.1606 11.2126 15.811 11.5622 15.3797 11.5622H13.8439C13.4126 11.5622 13.063 11.2126 13.063 10.7813C13.063 10.35 13.4126 10.0004 13.8439 10.0004H15.3797C15.8109 10.0004 16.1606 10.35 16.1606 10.7813ZM11.5444 10.7813C11.5444 11.2126 11.1947 11.5622 10.7634 11.5622H9.22769C8.79639 11.5622 8.44678 11.2126 8.44678 10.7813C8.44678 10.35 8.79639 10.0004 9.22769 10.0004H10.7634C11.1947 10.0004 11.5444 10.35 11.5444 10.7813ZM6.93703 15.3887C6.93703 15.8199 6.58742 16.1696 6.15613 16.1696H4.62036C4.18907 16.1696 3.83946 15.8199 3.83946 15.3887C3.83946 14.9574 4.18907 14.6078 4.62036 14.6078H6.15613C6.58738 14.6078 6.93703 14.9574 6.93703 15.3887ZM16.1606 15.3887C16.1606 15.8199 15.811 16.1696 15.3797 16.1696H13.8439C13.4126 16.1696 13.063 15.8199 13.063 15.3887C13.063 14.9574 13.4126 14.6078 13.8439 14.6078H15.3797C15.8109 14.6078 16.1606 14.9574 16.1606 15.3887ZM11.5444 15.3887C11.5444 15.8199 11.1947 16.1696 10.7634 16.1696H9.22769C8.79639 16.1696 8.44678 15.8199 8.44678 15.3887C8.44678 14.9574 8.79639 14.6078 9.22769 14.6078H10.7634C11.1947 14.6078 11.5444 14.9574 11.5444 15.3887Z" fill="#7C7C7C"/>
                              </g>
                              <defs>
                              <clipPath id="clip0_89vvcv_209">
                              <rect width="20" height="20" fill="white"/>
                              </clipPath>
                              </defs>
                           </svg>
                           15 Nov, 2023
                        </span>
                        <span>
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_vv89_214xcx)">
                              <path d="M2.91114 18.8054H1.49401L2.4961 17.8033C3.03641 17.2629 3.37382 16.5602 3.46453 15.7978C2.05459 14.8726 1.02358 13.6552 0.471684 12.2592C-0.079823 10.8642 -0.149128 9.32857 0.271282 7.81825C0.775712 6.00602 1.95883 4.35424 3.60263 3.16713C5.38892 1.87717 7.61264 1.19531 10.0334 1.19531C13.083 1.19531 15.6534 2.07147 17.4667 3.72901C19.1003 5.2223 20 7.23654 20 9.40073C20 10.4522 19.7859 11.4752 19.3637 12.4415C18.9268 13.4414 18.287 14.3317 17.4621 15.0877C15.6463 16.7518 13.0775 17.6314 10.0334 17.6314C8.90333 17.6314 7.72413 17.4805 6.67132 17.2037C5.67479 18.2259 4.32441 18.8054 2.91114 18.8054ZM10.0334 2.36932C5.17936 2.36932 2.20087 5.26413 1.40228 8.13308C0.647628 10.8442 1.76007 13.406 4.3781 14.9859L4.67062 15.1625L4.66162 15.504C4.64378 16.18 4.48263 16.8311 4.19417 17.4196C4.89658 17.182 5.53395 16.7511 6.03305 16.1615L6.28124 15.8682L6.64929 15.9783C7.68214 16.2872 8.88396 16.4573 10.0334 16.4573C16.0745 16.4573 18.826 12.7994 18.826 9.40073C18.826 7.57023 18.062 5.8637 16.6746 4.59554C15.0814 3.13915 12.7849 2.36932 10.0334 2.36932Z" fill="#7C7C7C"/>
                              </g>
                              <defs>
                              <clipPath id="clip0_89_2xcxc14">
                              <rect width="20" height="20" fill="white"/>
                              </clipPath>
                              </defs>
                           </svg>
                           <a href="{{ url("#") }}">0 Comments</a>
                        </span>
                     </div>
                     <a class="blog__btn" href="{{ url("schedule-list.html") }}">business</a>
                  </div>
               </div>
               </div>
            </div>
         </div>
      </section>
      <!-- BLog area end -->

      <!-- Trailer area start -->
      <div class="trailer__area pb-150">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="trailer__wrapper p-relative">
                     <div class="trailer__thumb include__bg" data-background="assets/img/blog/trailer.jpg">
                        <div class="trailer__play-btn">
                           <a class="video__play-btn popup-video" href="https://www.youtube.com/watch?v=IaL8CXDJCX8"><i class="fa-solid fa-play"></i>PLAY TRAILER</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
       <!-- Trailer area end -->

      </main>
      <!-- Body main wrapper end -->
      
      <!-- Footer area start -->
      <footer>
         <section class="footer__area footer-bg fix p-relative pt-145">
            <div class="footer__shape">
               <img class="footer__shape-1" src="{{ asset("/assets/img/shape/footer/footer-1.png") }}" alt="image not found">
               <img class="footer__shape-2" src="{{ asset("/assets/img/shape/footer/footer-2.png") }}" alt="image not found">
               <img class="footer__shape-3" src="{{ asset("/assets/img/shape/footer/footer-3.png") }}" alt="image not found">
               <img class="footer__shape-4" src="{{ asset("/assets/img/shape/footer/footer-4.png") }}" alt="image not found">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                     <div class="footer__widget-1 mb-70">
                        <div class="footer__logo mb-30">
                           <img src="{{ asset("/assets/img/logo/logo.svg") }}" alt="image bnot found">
                        </div>
                        <div class="footer__content">
                           <p>Velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. aliquam purus sit amet magna elemen facilisis. Enim praesent elementum facilisis.</p>
                           <div class="footer__social">
                              <a href="{{ url("#") }}"><i class="fa-brands fa-facebook"></i></a>
                              <a href="{{ url("#") }}"><i class="fa-brands fa-twitter"></i></a>
                              <a href="{{ url("#") }}"><i class="fa-brands fa-linkedin"></i></a>
                              <a href="{{ url("#") }}"><i class="fa-brands fa-youtube"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                     <div class="footer__widget-2 mb-70">
                        <div class="footer__widget-title">
                           <h4>Useful Links</h4>
                        </div>
                        <div class="footer__link">
                           <ul>
                              <li><a href="{{ url("#") }}">Speakers</a></li>
                              <li><a href="{{ url("#") }}">Venue Info</a></li>
                              <li><a href="{{ url("#") }}">Our Partners</a></li>
                              <li><a href="{{ url("#") }}">Contact Support</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                     <div class="footer__widget-3 mb-70">
                        <div class="footer__widget-title">
                           <h4>Useful Links</h4>
                        </div>
                        <div class="footer__link">
                           <ul>
                              <li><a href="{{ url("#") }}">Business Conference</a></li>
                              <li><a href="{{ url("#") }}">Design Conference</a></li>
                              <li><a href="{{ url("#") }}">Web Design Seminar</a></li>
                              <li><a href="{{ url("#") }}">Global Conference</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                     <div class="footer__widget-4 mb-70">
                        <div class="footer__widget-title">
                           <h4>Useful Links</h4>
                        </div>
                        <div class="footer__contact">
                           <p>Subscribe Our Newsletter To Get Latest
                              Update And News</p>
                           <div class="footer__input">
                              <form action="#">
                                 <span><i class="fa-solid fa-envelope-open"></i></span>
                                 <input type="text" placeholder="Enter mail">
                                 <button class="input__btn w-100" type="submit">Subscribe Now</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="footer__copyright text-center" data-background="">
                        <p>Copyright & design by <a target="_blank" href="https://themeforest.net/user/bdevs">@Bdevs </a> - 2023</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </footer>
      <!-- Footer area end -->
      
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

<!-- Mirrored from codeskdhaka.com/html/expovent-prev/expovent/landing-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2024 06:54:05 GMT -->
</html>

