<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from codeskdhaka.com/html/expovent-prev/expovent/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2024 06:54:15 GMT -->
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

      <!-- Dashboard area start -->
      <div class="page__full-wrapper">
      <!-- App sidebar area start -->
      <div class="expovent__sidebar" data-background="assets/img/bg/dropdown-bg.png">
         <div class="logo-details">
            <span>
               <a href="{{ url("dashboard.html") }}">
                  <img class="logo__white" src="{{ asset("/assets/img/logo/logo-small.svg") }}" alt="logo not found">
               </a>
            </span>
            <span>
               <a href="{{ url("dashboard.html") }}">
                  <img class="log__smnall" src="{{ asset("/assets/img/logo/logo.svg") }}" alt="logo not found">
               </a>
            </span>
         </div>
         <div class="sidebar__inner simple-bar">
            <div class="dlabnav">
               <ul class="metismenu" id="menu">
                  <li><a class="has-arrow" href="{{ url("javascript:void(0)") }}" aria-expanded="false">
                        <i class="flaticon-home"></i>
                        <span class="nav-text">Dashboard</span>
                     </a>
                     <ul aria-expanded="false">
                        <li><a href="{{ url("dashboard.html") }}">Dashboard</a></li>
                        <li><a href="{{ url("landing-page.html") }}">Landing Page</a></li>
                        <li><a href="{{ url("element.html") }}">UI Elements</a></li>
                     </ul>
                  </li>
                  <li><a href="{{ url("schedule-list.html") }}" aria-expanded="false">
                        <i class="flaticon-calendar-1"></i>
                        <span class="nav-text">Schedule List</span>
                     </a>
                  </li>
                  <li><a href="{{ url("speaker-list.html") }}" aria-expanded="false">
                        <i class="flaticon-speaker"></i>
                        <span class="nav-text">Speaker List</span>
                     </a>
                  </li>
                  <li><a href="{{ url("attendant-list.html") }}" aria-expanded="false">
                        <i class="flaticon-user-1"></i>
                        <span class="nav-text">Attendant List</span>
                     </a>
                  </li>
                  <li><a class="has-arrow" href="{{ url("javascript:void(0)") }}" aria-expanded="false">
                     <i class="flaticon-reminder"></i>
                     <span class="nav-text">Upcomg Event</span>
                  </a>
                  <ul aria-expanded="false">
                     <li><a href="{{ url("create-event.html") }}">Create Event</a></li>
                     <li><a href="{{ url("event-list.html") }}"> Event List</a></li>
                     <li><a href="{{ url("event-details.html") }}"> Event Details</a></li>
                  </ul>
                  </li>
                  <li><a href="{{ url("calendar.html") }}" aria-expanded="false">
                        <i class="flaticon-calendar"></i>
                        <span class="nav-text">Calendar</span>
                     </a>
                  </li>
                  <li><a href="{{ url("venue.html") }}" aria-expanded="false">
                        <i class="flaticon-map-2"></i>
                        <span class="nav-text">Venue</span>
                     </a>
                  </li>
                  <li><a class="has-arrow" href="{{ url("javascript:void(0)") }}" aria-expanded="false">
                     <i class="flaticon-user-1"></i>
                     <span class="nav-text">Profile</span>
                  </a>
                  <ul aria-expanded="false">
                     <li><a href="{{ url("profile.html") }}">Profile</a></li>
                     <li><a href="{{ url("setting.html") }}">Setting</a></li>
                     <li><a href="{{ url("chat.html") }}">Chatbox</a></li>
                     <li><a href="{{ url("signin.html") }}">Sign in</a></li>
                     <li><a href="{{ url("signup.html") }}">Sign up</a></li>
                  </ul>
                  </li>
               </ul>
               <div class="sidebar__thumb mb-60 mt-50">
                  <a href="{{ url("#") }}">
                     <img src="{{ asset("/assets/img/sidebar/sidebar.jpg") }}" alt="image not found">
                  </a>
               </div>
               <div class="sidebar__profile mb-50">
                  <a href="{{ url("signin.html") }}"><i class="flaticon-log-out-3"></i><span class="links_name">Log out</span></a>
               </div>
               <div class="sidebar__copyright">
                  <p>Copyright @ Expovent 2023</p>
               </div>
            </div>
         </div>
      </div>
      <div class="app__offcanvas-overlay"></div>
      <!-- App sidebar area end -->
      <div class="page__body-wrapper">
      <!-- App header area start -->
      <div class="app__header__area">
         <div class="app__header-inner">
            <div class="app__header-left">
               <a id="sidebar__active" class="app__header-toggle" href="{{ url("javascript:void(0)") }}">
                  <div class="bar-icon-2">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </a>
               <div class="app__herader-input p-relative">
                  <input type="search" placeholder="Search Here . . .">
                  <button><i class="flaticon-loupe"></i></button>
               </div>
            </div>
            <div class="app__header-right">
               <div class="app__header-action">
                  <ul>
                     <li>
                        <div class="nav-item p-relative">
                           <a id="langdropdown" class="langdropdown" href="{{ url("javascript:void(0)") }}">
                              <span>
                                 <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2045_21)">
                                       <path
                                          d="M18.5295 15.2207C19.4935 13.6502 20.0025 11.8429 20 10.0002C20.0025 8.15741 19.4935 6.34975 18.5295 4.77922L18.524 4.77065C17.6296 3.31298 16.3765 2.10901 14.8841 1.27379C13.3918 0.438574 11.7102 6.98837e-06 10 0C8.28987 -6.98804e-06 6.60828 0.438545 5.11595 1.27375C3.62361 2.10896 2.37039 3.31292 1.47604 4.77057L1.47048 4.77925C0.508875 6.35086 7.13768e-06 8.15752 0 10C-7.13739e-06 11.8425 0.508846 13.6491 1.47044 15.2207L1.47609 15.2295C2.37045 16.6871 3.62366 17.8911 5.11599 18.7263C6.60832 19.5615 8.28989 20 10 20C11.7102 20 13.3917 19.5615 14.8841 18.7262C16.3764 17.891 17.6296 16.6871 18.5239 15.2294L18.5295 15.2207ZM11.2782 18.2861C11.0876 18.47 10.8684 18.6215 10.6289 18.7345C10.4324 18.8279 10.2175 18.8764 10 18.8764C9.78245 18.8764 9.56755 18.8279 9.37109 18.7345C8.91545 18.5018 8.52543 18.1586 8.23666 17.7363C7.64692 16.8841 7.20987 15.9358 6.94506 14.9339C7.96235 14.8713 8.98065 14.8395 10 14.8383C11.0189 14.8383 12.0373 14.8702 13.0551 14.9339C12.9085 15.4491 12.7255 15.9532 12.5073 16.4423C12.2199 17.1302 11.8026 17.7563 11.2782 18.2861ZM1.14315 10.5618H5.17663C5.20289 11.6873 5.32488 12.8085 5.54129 13.9133C4.43869 14.0104 3.33891 14.1435 2.24195 14.3131C1.59959 13.1606 1.22409 11.8787 1.14315 10.5618ZM2.24195 5.68691C3.33847 5.85684 4.43865 5.99013 5.54245 6.08678C5.32561 7.19151 5.20335 8.31271 5.17699 9.43818H1.14315C1.22408 8.1213 1.59959 6.83936 2.24195 5.68691ZM8.72176 1.71385C8.91231 1.52998 9.13164 1.3785 9.37109 1.2654C9.56755 1.17203 9.78245 1.12358 10 1.12358C10.2175 1.12358 10.4324 1.17203 10.6289 1.2654C11.0845 1.49813 11.4745 1.84135 11.7634 2.26367C12.3531 3.11586 12.7901 4.06413 13.0549 5.06606C12.0376 5.12866 11.0194 5.16055 10 5.16174C8.98108 5.16173 7.96271 5.12983 6.94488 5.06605C7.09146 4.5509 7.27455 4.04685 7.49275 3.55771C7.78008 2.8698 8.19736 2.24375 8.72176 1.71385ZM18.8568 9.43818H14.8234C14.7971 8.31271 14.6751 7.19149 14.4587 6.08668C15.5614 5.98966 16.6611 5.8564 17.7581 5.68691C18.4005 6.83936 18.7759 8.1213 18.8568 9.43818ZM6.67136 13.8259C6.45163 12.751 6.32753 11.6586 6.30052 10.5618H13.6996C13.6728 11.6586 13.5489 12.751 13.3295 13.826C12.2208 13.7533 11.111 13.7161 10 13.7146C8.88978 13.7146 7.78024 13.7517 6.67136 13.8259ZM13.3286 6.17404C13.5484 7.24901 13.6725 8.34134 13.6995 9.43818H6.30039C6.32715 8.34134 6.45103 7.24899 6.67056 6.17398C7.77915 6.24672 8.88896 6.28383 10 6.28532C11.1102 6.28532 12.2197 6.24822 13.3286 6.17404ZM14.823 10.5618H18.8568C18.7759 11.8787 18.4004 13.1606 17.758 14.3131C16.6615 14.1431 15.5614 14.0098 14.4575 13.9132C14.6744 12.8085 14.7966 11.6873 14.823 10.5618ZM17.0844 4.65275C16.1256 4.79108 15.164 4.90059 14.1995 4.9813C14.0262 4.33593 13.8026 3.7051 13.5309 3.0946C13.2828 2.53279 12.9706 2.00154 12.6006 1.51138C14.3889 2.05982 15.9582 3.15928 17.0844 4.65275ZM3.72341 3.7234C4.74923 2.69661 6.01126 1.93712 7.39889 1.51152C7.37784 1.53878 7.35618 1.56485 7.33543 1.59267C6.62219 2.61941 6.10266 3.76789 5.80247 4.98147C4.83795 4.89978 3.87567 4.79021 2.91564 4.65275C3.16324 4.32479 3.43313 4.01427 3.72341 3.7234ZM2.91563 15.3472C3.87435 15.2089 4.83594 15.0994 5.80041 15.0187C5.97375 15.6641 6.19732 16.2949 6.46905 16.9054C6.71715 17.4672 7.02932 17.9985 7.39935 18.4886C5.61107 17.9402 4.0418 16.8406 2.91563 15.3472ZM16.2765 16.2765C15.2507 17.3034 13.9887 18.0629 12.6011 18.4885C12.6222 18.4612 12.6438 18.4352 12.6645 18.4073C13.3778 17.3805 13.8974 16.2321 14.1975 15.0185C15.1621 15.1002 16.1244 15.2098 17.0844 15.3473C16.8367 15.6752 16.5668 15.9857 16.2765 16.2765Z"
                                          fill="#7A7A7A" />
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_2045_21">
                                          <rect width="20" height="20" fill="white" />
                                       </clipPath>
                                    </defs>
                                 </svg>
                              </span>
                              <span class="language-text">English</span>
                           </a>
                           <div class="lang__dropdown">
                              <ul>
                                 <li>
                                    <a class="lang__item" href="{{ url("#") }}">
                                       <div class="lang__icon">
                                          <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_647_364)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M0 0H28.5003V1.15386H0V0ZM0 2.30771H28.5003V3.46157H0V2.30771ZM0 4.61543H28.5003V5.76929H0V4.61543ZM0 6.92314H28.5003V8.077H0V6.92314ZM0 9.23086H28.5003V10.3847H0V9.23086ZM0 11.5386H28.5003V12.6924H0V11.5386ZM0 13.8463H28.5003V15.0001H0V13.8463Z"
                                                   fill="#BD3D44" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M0 1.15381H28.5003V2.30767H0V1.15381ZM0 3.46152H28.5003V4.61538H0V3.46152ZM0 5.76924H28.5003V6.9231H0V5.76924ZM0 8.07695H28.5003V9.23081H0V8.07695ZM0 10.3847H28.5003V11.5385H0V10.3847ZM0 12.6924H28.5003V13.8462H0V12.6924Z"
                                                   fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M0 0H11.4V8.07686H0V0Z" fill="#192F5D" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M0.950137 0.345703L1.05385 0.664922H1.38953L1.11795 0.862236L1.22169 1.18146L0.950107 0.98417L0.678584 1.18146L0.782295 0.862236L0.510742 0.664922H0.846396L0.950137 0.345703ZM2.85013 0.345703L2.95387 0.664922H3.28955L3.01797 0.862236L3.12171 1.18146L2.85013 0.98417L2.5786 1.18146L2.68231 0.862236L2.41076 0.664922H2.74642L2.85013 0.345703ZM4.75021 0.345703L4.85392 0.664922H5.1896L4.91802 0.862236L5.02176 1.18146L4.75021 0.98417L4.47865 1.18146L4.58236 0.862236L4.31081 0.664922H4.64649L4.75021 0.345703ZM6.65017 0.345703L6.75388 0.664922H7.08953L6.81798 0.862236L6.92169 1.18146L6.65017 0.98417L6.37858 1.18146L6.48232 0.862236L6.21074 0.664922H6.54643L6.65017 0.345703ZM8.55021 0.345703L8.65393 0.664922H8.98961L8.71803 0.862236L8.82177 1.18146L8.55019 0.98417L8.27866 1.18146L8.38237 0.862236L8.11082 0.664922H8.44647L8.55021 0.345703ZM10.4503 0.345703L10.554 0.664922H10.8897L10.6181 0.862236L10.7218 1.18146L10.4503 0.98417L10.1787 1.18146L10.2825 0.862236L10.0109 0.664922H10.3466L10.4503 0.345703ZM1.90018 1.15342L2.00389 1.47264H2.33957L2.06799 1.66992L2.17176 1.98917L1.90018 1.79188L1.62862 1.98917L1.73233 1.66992L1.46078 1.47264H1.79646L1.90018 1.15342ZM3.80014 1.15342L3.90385 1.47264H4.2395L3.96795 1.66992L4.07166 1.98917L3.80014 1.79188L3.52855 1.98917L3.63229 1.66992L3.36071 1.47264H3.6964L3.80014 1.15342ZM5.70019 1.15342L5.8039 1.47264H6.13958L5.868 1.66992L5.97174 1.98917L5.70016 1.79188L5.42863 1.98917L5.53234 1.66992L5.26079 1.47264H5.59645L5.70019 1.15342ZM7.60023 1.15342L7.70395 1.47264H8.03963L7.76805 1.66992L7.87179 1.98917L7.60023 1.79188L7.32865 1.98917L7.43245 1.66992L7.16087 1.47264H7.49655L7.60023 1.15342ZM9.5002 1.15342L9.60391 1.47264H9.93956L9.66801 1.66992L9.77172 1.98917L9.5002 1.79188L9.22861 1.98917L9.33235 1.66992L9.06077 1.47264H9.39646L9.5002 1.15342ZM0.950137 1.9611L1.05385 2.28032H1.38953L1.11795 2.47764L1.22169 2.79686L0.950107 2.59957L0.678584 2.79686L0.782295 2.47764L0.510742 2.28032H0.846396L0.950137 1.9611ZM2.85013 1.9611L2.95387 2.28032H3.28955L3.01797 2.47764L3.12171 2.79686L2.85013 2.59957L2.5786 2.79686L2.68231 2.47764L2.41076 2.28032H2.74642L2.85013 1.9611ZM4.75021 1.9611L4.85392 2.28032H5.1896L4.91802 2.47764L5.02176 2.79686L4.75021 2.59957L4.47865 2.79686L4.58236 2.47764L4.31081 2.28032H4.64649L4.75021 1.9611ZM6.65017 1.9611L6.75388 2.28032H7.08953L6.81798 2.47764L6.92169 2.79686L6.65017 2.59957L6.37858 2.79686L6.48232 2.47764L6.21074 2.28032H6.54643L6.65017 1.9611ZM8.55021 1.9611L8.65393 2.28032H8.98961L8.71803 2.47764L8.82177 2.79686L8.55019 2.59957L8.27866 2.79686L8.38237 2.47764L8.11082 2.28032H8.44647L8.55021 1.9611ZM10.4503 1.9611L10.554 2.28032H10.8897L10.6181 2.47764L10.7218 2.79686L10.4503 2.59957L10.1787 2.79686L10.2825 2.47764L10.0109 2.28032H10.3466L10.4503 1.9611ZM1.90018 2.76879L2.00389 3.08804H2.33957L2.06799 3.28532L2.17176 3.60457L1.90018 3.40729L1.62862 3.60457L1.73233 3.28532L1.46078 3.08804H1.79646L1.90018 2.76879ZM3.80014 2.76879L3.90385 3.08804H4.2395L3.96795 3.28532L4.07166 3.60457L3.80014 3.40729L3.52855 3.60457L3.63229 3.28532L3.36071 3.08804H3.6964L3.80014 2.76879ZM5.70019 2.76879L5.8039 3.08804H6.13958L5.868 3.28532L5.97174 3.60457L5.70016 3.40729L5.42863 3.60457L5.53234 3.28532L5.26079 3.08804H5.59645L5.70019 2.76879ZM7.60023 2.76879L7.70395 3.08804H8.03963L7.76805 3.28532L7.87179 3.60457L7.60023 3.40729L7.32865 3.60457L7.43242 3.28532L7.16084 3.08804H7.49652L7.60023 2.76879ZM9.5002 2.76879L9.60391 3.08804H9.93956L9.66801 3.28532L9.77172 3.60457L9.5002 3.40729L9.22861 3.60457L9.33235 3.28532L9.06077 3.08804H9.39646L9.5002 2.76879ZM0.950137 3.5765L1.05385 3.89572H1.38953L1.11795 4.09304L1.22169 4.41226L0.950107 4.21497L0.678584 4.41226L0.782295 4.09304L0.510742 3.89572H0.846396L0.950137 3.5765ZM2.85013 3.5765L2.95387 3.89572H3.28955L3.01797 4.09304L3.12171 4.41226L2.85013 4.21497L2.5786 4.41226L2.68231 4.09304L2.41076 3.89572H2.74642L2.85013 3.5765ZM4.75021 3.5765L4.85392 3.89572H5.1896L4.91802 4.09304L5.02176 4.41226L4.75021 4.21497L4.47865 4.41226L4.58236 4.09304L4.31081 3.89572H4.64649L4.75021 3.5765ZM6.65017 3.5765L6.75388 3.89572H7.08953L6.81798 4.09304L6.92169 4.41226L6.65017 4.21497L6.37858 4.41226L6.48232 4.09304L6.21074 3.89572H6.54643L6.65017 3.5765ZM8.55021 3.5765L8.65393 3.89572H8.98961L8.71803 4.09304L8.82177 4.41226L8.55019 4.21497L8.27866 4.41226L8.38237 4.09304L8.11082 3.89572H8.44647L8.55021 3.5765ZM10.4503 3.5765L10.554 3.89572H10.8897L10.6181 4.09304L10.7218 4.41226L10.4503 4.21497L10.1787 4.41226L10.2825 4.09304L10.0109 3.89572H10.3466L10.4503 3.5765ZM1.90018 4.38419L2.00389 4.70344H2.33957L2.06799 4.90072L2.17176 5.21997L1.90018 5.02269L1.62862 5.21997L1.73233 4.90072L1.46078 4.70344H1.79646L1.90018 4.38419ZM3.80014 4.38419L3.90385 4.70344H4.2395L3.96795 4.90072L4.07166 5.21997L3.80014 5.02269L3.52855 5.21997L3.63229 4.90072L3.36071 4.70344H3.6964L3.80014 4.38419ZM5.70019 4.38419L5.8039 4.70344H6.13958L5.868 4.90072L5.97174 5.21997L5.70016 5.02269L5.42863 5.21997L5.53234 4.90072L5.26079 4.70344H5.59645L5.70019 4.38419ZM7.60023 4.38419L7.70395 4.70344H8.03963L7.76805 4.90072L7.87179 5.21997L7.60023 5.02269L7.32865 5.21997L7.43242 4.90072L7.16084 4.70344H7.49652L7.60023 4.38419ZM9.5002 4.38419L9.60391 4.70344H9.93956L9.66801 4.90072L9.77172 5.21997L9.5002 5.02269L9.22861 5.21997L9.33235 4.90072L9.06077 4.70344H9.39646L9.5002 4.38419ZM0.950137 5.1919L1.05385 5.51112H1.38953L1.11795 5.70844L1.22169 6.02766L0.950107 5.83037L0.678584 6.02766L0.782295 5.70844L0.510742 5.51112H0.846396L0.950137 5.1919ZM2.85013 5.1919L2.95387 5.51112H3.28955L3.01797 5.70844L3.12171 6.02766L2.85013 5.83037L2.5786 6.02766L2.68231 5.70844L2.41076 5.51112H2.74642L2.85013 5.1919ZM4.75021 5.1919L4.85392 5.51112H5.1896L4.91802 5.70844L5.02176 6.02766L4.75021 5.83037L4.47865 6.02766L4.58236 5.70844L4.31081 5.51112H4.64649L4.75021 5.1919ZM6.65017 5.1919L6.75388 5.51112H7.08953L6.81798 5.70844L6.92169 6.02766L6.65017 5.83037L6.37858 6.02766L6.48232 5.70844L6.21074 5.51112H6.54643L6.65017 5.1919ZM8.55021 5.1919L8.65393 5.51112H8.98961L8.71803 5.70844L8.82177 6.02766L8.55019 5.83037L8.27866 6.02766L8.38237 5.70844L8.11082 5.51112H8.44647L8.55021 5.1919ZM10.4503 5.1919L10.554 5.51112H10.8897L10.6181 5.70844L10.7218 6.02766L10.4503 5.83037L10.1787 6.02766L10.2825 5.70844L10.0109 5.51112H10.3466L10.4503 5.1919ZM1.90018 5.99959L2.00389 6.31884H2.33957L2.06799 6.51612L2.17176 6.83537L1.90018 6.63809L1.62862 6.83537L1.73233 6.51612L1.46078 6.31884H1.79646L1.90018 5.99959ZM3.80014 5.99959L3.90385 6.31884H4.2395L3.96795 6.51612L4.07166 6.83537L3.80014 6.63809L3.52855 6.83537L3.63229 6.51612L3.36071 6.31884H3.6964L3.80014 5.99959ZM5.70019 5.99959L5.8039 6.31884H6.13958L5.868 6.51612L5.97174 6.83537L5.70016 6.63809L5.42863 6.83537L5.53234 6.51612L5.26079 6.31884H5.59645L5.70019 5.99959ZM7.60023 5.99959L7.70395 6.31884H8.03963L7.76805 6.51612L7.87179 6.83537L7.60023 6.63809L7.32865 6.83537L7.43242 6.51612L7.16084 6.31884H7.49652L7.60023 5.99959ZM9.5002 5.99959L9.60391 6.31884H9.93956L9.66801 6.51612L9.77172 6.83537L9.5002 6.63809L9.22861 6.83537L9.33235 6.51612L9.06077 6.31884H9.39646L9.5002 5.99959ZM0.950137 6.8073L1.05385 7.12652H1.38953L1.11795 7.32384L1.22169 7.64306L0.950107 7.44577L0.678584 7.64306L0.782295 7.32384L0.510742 7.12652H0.846396L0.950137 6.8073ZM2.85013 6.8073L2.95387 7.12652H3.28955L3.01797 7.32384L3.12171 7.64306L2.85013 7.44577L2.5786 7.64306L2.68231 7.32384L2.41076 7.12652H2.74642L2.85013 6.8073ZM4.75021 6.8073L4.85392 7.12652H5.1896L4.91802 7.32384L5.02176 7.64306L4.75021 7.44577L4.47865 7.64306L4.58236 7.32384L4.31081 7.12652H4.64649L4.75021 6.8073ZM6.65017 6.8073L6.75388 7.12652H7.08953L6.81798 7.32384L6.92169 7.64306L6.65017 7.44577L6.37858 7.64306L6.48232 7.32384L6.21074 7.12652H6.54643L6.65017 6.8073ZM8.55021 6.8073L8.65393 7.12652H8.98961L8.71803 7.32384L8.82177 7.64306L8.55019 7.44577L8.27866 7.64306L8.38237 7.32384L8.11082 7.12652H8.44647L8.55021 6.8073ZM10.4503 6.8073L10.554 7.12652H10.8897L10.6181 7.32384L10.7218 7.64306L10.4503 7.44577L10.1787 7.64306L10.2825 7.32384L10.0109 7.12652H10.3466L10.4503 6.8073Z"
                                                   fill="white" />
                                             </g>
                                             <defs>
                                                <clipPath id="clip0_647_364">
                                                   <rect width="20" height="15" fill="white" />
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                       <div class="lang__country">
                                          <span>English</span>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="lang__item" href="{{ url("#") }}">
                                       <div class="lang__icon">
                                          <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_650_408)">
                                                <path d="M0 0H20V5H0V0Z" fill="#00732F" />
                                                <path d="M0 5H20V10H0V5Z" fill="white" />
                                                <path d="M0 10H20V15H0V10Z" fill="black" />
                                                <path d="M0 0H6.875V15H0V0Z" fill="#FF0000" />
                                             </g>
                                             <defs>
                                                <clipPath id="clip0_650_408">
                                                   <rect width="20" height="15" fill="white" />
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                       <div class="lang__country">
                                          <span>لعربية</span>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="lang__item" href="{{ url("#") }}">
                                       <div class="lang__icon">
                                          <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_650_394)">
                                                <path d="M0 0H20V15H0V0Z" fill="#DE2910" />
                                                <path
                                                   d="M2.4269 5.5725L3.74988 1.5L5.07287 5.5725L1.60791 3.0525H5.89186L2.4269 5.5725Z"
                                                   fill="#FFDE00" />
                                                <path
                                                   d="M8.25704 1.56588L6.86593 1.88534L7.8037 0.809307L7.67681 2.23181L6.94284 1.00688L8.25704 1.56588Z"
                                                   fill="#FFDE00" />
                                                <path
                                                   d="M9.66184 3.3445L8.25572 3.09942L9.53741 2.47132L8.86876 3.73327L8.66731 2.31955L9.66184 3.3445Z"
                                                   fill="#FFDE00" />
                                                <path
                                                   d="M9.46176 5.84138L8.27787 5.04411L9.70428 4.99338L8.57909 5.87289L8.97174 4.49993L9.46176 5.84138Z"
                                                   fill="#FFDE00" />
                                                <path
                                                   d="M7.69664 7.47561L6.91253 6.28295L8.24786 6.78708L6.87029 7.16375L7.76274 6.04899L7.69664 7.47561Z"
                                                   fill="#FFDE00" />
                                             </g>
                                             <defs>
                                                <clipPath id="clip0_650_394">
                                                   <rect width="20" height="15" fill="white" />
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                       <div class="lang__country">
                                          <span>简体中文</span>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="lang__item" href="{{ url("#") }}">
                                       <div class="lang__icon">
                                          <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_651_428)">
                                                <path d="M0 10H20V15.0001H0V10Z" fill="#FFCE00" />
                                                <path d="M0 0H20V5H0V0Z" fill="black" />
                                                <path d="M0 5H20V10H0V5Z" fill="#DD0000" />
                                             </g>
                                             <defs>
                                                <clipPath id="clip0_651_428">
                                                   <rect width="20" height="15" fill="white" />
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                       <div class="lang__country">
                                          <span>Deutsch</span>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="lang__item" href="{{ url("#") }}">
                                       <div class="lang__icon">
                                          <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <g clip-path="url(#clip0_651_427)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H20V15H0V0Z"
                                                   fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M0 0H6.66678V15H0V0Z" fill="#00267F" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                   d="M13.333 0H19.9998V15H13.333V0Z" fill="#F31830" />
                                             </g>
                                             <defs>
                                                <clipPath id="clip0_651_427">
                                                   <rect width="20" height="15" fill="white" />
                                                </clipPath>
                                             </defs>
                                          </svg>
                                       </div>
                                       <div class="lang__country">
                                          <span>Français</span>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a href="{{ url("#!") }}" onclick="javascript:toggleFullScreen()">
                           <div class="nav-item">
                              <div class="notification__icon">
                                 <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M7.47106 21.549C7.09156 21.549 6.78356 21.2417 6.78356 20.8615V14.7984H0.6875C0.308 14.7984 0 14.4911 0 14.1109C0 13.7308 0.308 13.4234 0.6875 13.4234H7.47106C7.85056 13.4234 8.15856 13.7308 8.15856 14.1109V20.8615C8.15856 21.2417 7.85056 21.549 7.47106 21.549V21.549ZM14.5289 21.5318C14.1494 21.5318 13.8414 21.2245 13.8414 20.8443V14.0601C13.8414 13.6799 14.1494 13.3726 14.5289 13.3726H21.2795C21.659 13.3726 21.967 13.6799 21.967 14.0601C21.967 14.4403 21.659 14.7476 21.2795 14.7476H15.2164V20.8443C15.2164 21.2245 14.9084 21.5318 14.5289 21.5318V21.5318ZM7.47106 8.17644H0.7205C0.341 8.17644 0.033 7.86912 0.033 7.48894C0.033 7.10875 0.341 6.80144 0.7205 6.80144H6.78356V0.704688C6.78356 0.3245 7.09156 0.0171875 7.47106 0.0171875C7.85056 0.0171875 8.15856 0.3245 8.15856 0.704688V7.48894C8.15856 7.86844 7.85056 8.17644 7.47106 8.17644ZM21.3125 8.12556H14.5289C14.1494 8.12556 13.8414 7.81825 13.8414 7.43806V0.6875C13.8414 0.307312 14.1494 0 14.5289 0C14.9084 0 15.2164 0.307312 15.2164 0.6875V6.75056H21.3125C21.692 6.75056 22 7.05788 22 7.43806C22 7.81825 21.692 8.12556 21.3125 8.12556Z"
                                       fill="#7A7A7A" />
                                 </svg>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li>
                        <div class="nav-item p-relative">
                           <a id="emaildropdown" href="{{ url("#") }}">
                              <div class="notification__icon">
                                 <svg width="22" height="16" viewBox="0 0 22 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M20.0001 0H1.99998C0.895427 0 0 0.895428 0 2.00003V14.0001C0 15.1046 0.895427 16 1.99998 16H20C21.1046 16 22 15.1046 22 14.0001V2.00003C22 0.895428 21.1046 0 20.0001 0ZM1.99998 1.00001H20C20.1143 1.00074 20.2276 1.02103 20.335 1.06L11.68 9.71504C11.3083 10.0892 10.7036 10.0912 10.3295 9.71946C10.328 9.718 10.3265 9.7165 10.325 9.71504L1.665 1.06C1.77242 1.02103 1.88573 1.0007 1.99998 1.00001ZM1.00001 14V2.00003C0.9949 1.9418 0.9949 1.88324 1.00001 1.82502L7.19002 8.00002L1.00001 14.175C0.9949 14.1168 0.9949 14.0582 1.00001 14ZM20.0001 15H1.99998C1.88573 14.9993 1.77242 14.979 1.665 14.94L7.89999 8.70506L9.61501 10.4201C10.3771 11.185 11.6149 11.1873 12.3798 10.4253C12.3816 10.4236 12.3833 10.4218 12.385 10.4201L14.1 8.70506L20.335 14.94C20.2276 14.979 20.1143 14.9993 20.0001 15ZM21 14.175L14.81 8.00002L21 1.82502C21.0051 1.88324 21.0051 1.9418 21 2.00003V14.0001C21.0051 14.0582 21.0051 14.1168 21 14.175Z"
                                       fill="#7A7A7A" />
                                 </svg>
                              </div>
                           </a>
                           <div class="email__dropdown">
                              <div class="notification__card card__scroll">
                                 <div class="notification__header">
                                    <div class="notification__inner">
                                       <h5>Email Notifications</h5>
                                       <span>(14)</span>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/user/notifactuion/02.png") }}" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="{{ url("chat.html") }}">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/user/notifactuion/01.png") }}" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="{{ url("chat.html") }}">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/user/notifactuion/03.png") }}" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="{{ url("chat.html") }}">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/user/notifactuion/04.png") }}"
                                             alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="{{ url("chat.html") }}">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/user/notifactuion/02.png") }}" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="{{ url("chat.html") }}">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/user/notifactuion/01.png") }}" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="{{ url("chat.html") }}">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/user/notifactuion/03.png") }}" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="{{ url("chat.html") }}">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/user/notifactuion/04.png") }}"
                                             alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p><a href="{{ url("chat.html") }}">consectetur adipisci elit,
                                             sed eiusmod</a></p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="nav-item p-relative">
                           <a id="notifydropdown" href="{{ url("#") }}">
                              <div class="notification__icon">
                                 <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_209_757)">
                                       <path
                                          d="M9.1665 22C7.27185 22 5.729 20.4582 5.729 18.5625C5.729 18.183 6.037 17.875 6.4165 17.875C6.79601 17.875 7.104 18.183 7.104 18.5625C7.104 19.7002 8.02985 20.625 9.1665 20.625C10.3032 20.625 11.229 19.7002 11.229 18.5625C11.229 18.183 11.537 17.875 11.9165 17.875C12.296 17.875 12.604 18.183 12.604 18.5625C12.604 20.4582 11.0613 22 9.1665 22Z"
                                          fill="#7A7A7A" />
                                       <path
                                          d="M16.7291 19.2499H1.60411C0.719559 19.2499 0 18.5304 0 17.6458C0 17.1764 0.204437 16.7319 0.560944 16.4266C0.583939 16.4065 0.608612 16.3882 0.634293 16.3715C1.97992 15.1973 2.75 13.5079 2.75 11.724V9.16655C2.75 6.18106 4.77306 3.61805 7.66975 2.93323C8.04002 2.84797 8.41046 3.07439 8.49757 3.44483C8.58452 3.81426 8.35541 4.18453 7.98698 4.27164C5.71266 4.80875 4.125 6.82174 4.125 9.16655V11.724C4.125 13.9388 3.15417 16.0343 1.46396 17.4724C1.4502 17.4835 1.43828 17.4936 1.42351 17.5037C1.39883 17.5349 1.375 17.5826 1.375 17.6458C1.375 17.7704 1.47957 17.8749 1.60411 17.8749H16.7291C16.8538 17.8749 16.9584 17.7704 16.9584 17.6458C16.9584 17.5815 16.9346 17.5349 16.9089 17.5037C16.8951 17.4936 16.8822 17.4835 16.8694 17.4724C16.0482 16.7722 15.3999 15.9271 14.9436 14.9599C14.7804 14.617 14.9269 14.2073 15.2707 14.0442C15.6173 13.881 16.0233 14.0296 16.1856 14.3723C16.5485 15.1387 17.0573 15.8116 17.7008 16.3744C17.7246 16.3908 17.7495 16.4083 17.7704 16.4266C18.129 16.7319 18.3334 17.1764 18.3334 17.6458C18.3334 18.5304 17.6138 19.2499 16.7291 19.2499Z"
                                          fill="#7A7A7A" />
                                       <path
                                          d="M16.0417 11.9166C12.7565 11.9166 10.0835 9.24365 10.0835 5.95839C10.0835 2.67296 12.7565 0 16.0417 0C19.3271 0 22.0001 2.67296 22.0001 5.95839C22.0001 9.24365 19.3271 11.9166 16.0417 11.9166ZM16.0417 1.375C13.5145 1.375 11.4585 3.43112 11.4585 5.95839C11.4585 8.48566 13.5145 10.5416 16.0417 10.5416C18.569 10.5416 20.6251 8.48566 20.6251 5.95839C20.6251 3.43112 18.569 1.375 16.0417 1.375Z"
                                          fill="#7A7A7A" />
                                       <path
                                          d="M16.2709 8.70828C15.8914 8.70828 15.5834 8.40028 15.5834 8.02078V5.0415H15.125C14.7455 5.0415 14.4375 4.73351 14.4375 4.354C14.4375 3.9745 14.7455 3.6665 15.125 3.6665H16.2709C16.6504 3.6665 16.9584 3.9745 16.9584 4.354V8.02078C16.9584 8.40028 16.6504 8.70828 16.2709 8.70828Z"
                                          fill="#7A7A7A" />
                                    </g>
                                    <defs>
                                       <clipPath id="clip0_209_757">
                                          <rect width="22" height="22" fill="white" />
                                       </clipPath>
                                    </defs>
                                 </svg>
                              </div>
                           </a>
                           <div class="notification__dropdown">
                              <div class="notification__card card__scroll">
                                 <div class="notification__header">
                                    <div class="notification__inner">
                                       <h5>Notifications</h5>
                                       <span>(10)</span>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/meta/chatbox/01.png") }}" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>Mark your calendar for BITPA
                                          Conference Dhaka Meet up 2023</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/meta/chatbox/02.png") }}" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>Get ready for today’s Business Conference Tokyo Meet up - 2023!</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                       <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/meta/chatbox/03.png") }}" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>You don’t want to miss Digital Innovation Meet up!</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/meta/chatbox/04.png") }}" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>Digital Innovation Meet up Canada - 2023 starts in 5 minutes!</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/meta/chatbox/05.png") }}" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>Mark your calendar for BITPA
                                          Conference Dhaka Meet up 2023</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/meta/chatbox/06.png") }}" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>You don’t want to miss Digital Innovation Meet up!</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/meta/chatbox/07.png") }}" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>Digital Innovation Meet up Canada - 2023 starts in 5 minutes!</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="notification__item">
                                    <div class="notification__thumb">
                                       <a href="{{ url("profile.html") }}"><img src="{{ asset("/assets/img/meta/chatbox/08.png") }}" alt="image not found"></a>
                                    </div>
                                    <div class="notification__content">
                                       <p>Meet the speakers at Cyber Security Conference Meet up Japan!</p>
                                       <div class="notification__time">
                                          <span>2h ago</span>
                                          <span class="status">Graphic Design</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="nav-item p-relative">
                  <a id="userportfolio" href="{{ url("#") }}">
                     <div class="user__portfolio">
                        <div class="user__portfolio-thumb">
                           <img src="{{ asset("/assets/img/user/1/01.png") }}" alt="imge not found">
                        </div>
                        <div class="user__content">
                           <span>Jhon Smith</span>
                        </div>
                     </div>
                  </a>
                  <div class="user__dropdown">
                     <ul>
                        <li>
                           <a href="{{ url("profile.html") }}"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_643_344)">
                                    <path
                                       d="M13.6569 10.3431C12.7855 9.47181 11.7484 8.82678 10.6168 8.43631C11.8288 7.60159 12.625 6.20463 12.625 4.625C12.625 2.07478 10.5502 0 8 0C5.44978 0 3.375 2.07478 3.375 4.625C3.375 6.20463 4.17122 7.60159 5.38319 8.43631C4.25162 8.82678 3.2145 9.47181 2.34316 10.3431C0.832156 11.8542 0 13.8631 0 16H1.25C1.25 12.278 4.27803 9.25 8 9.25C11.722 9.25 14.75 12.278 14.75 16H16C16 13.8631 15.1678 11.8542 13.6569 10.3431ZM8 8C6.13903 8 4.625 6.486 4.625 4.625C4.625 2.764 6.13903 1.25 8 1.25C9.86097 1.25 11.375 2.764 11.375 4.625C11.375 6.486 9.86097 8 8 8Z"
                                       fill="#7A7A7A" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_643_344">
                                       <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                              Profile</a>
                        </li>
                        <li>
                           <a href="{{ url("chat.html") }}"><svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M4.2 16.8C4.1118 16.8 4.023 16.7802 3.9396 16.7406C3.7326 16.6404 3.6 16.431 3.6 16.2V13.2H1.8C0.8076 13.2 0 12.3924 0 11.4V1.8C0 0.8076 0.8076 0 1.8 0H16.2C17.1924 0 18 0.8076 18 1.8V11.4C18 12.3924 17.1924 13.2 16.2 13.2H8.9106L4.575 16.6686C4.4664 16.7556 4.3338 16.8 4.2 16.8ZM1.8 1.2C1.4688 1.2 1.2 1.4694 1.2 1.8V11.4C1.2 11.7306 1.4688 12 1.8 12H4.2C4.5318 12 4.8 12.2682 4.8 12.6V14.952L8.325 12.1314C8.4318 12.0462 8.5632 12 8.7 12H16.2C16.5312 12 16.8 11.7306 16.8 11.4V1.8C16.8 1.4694 16.5312 1.2 16.2 1.2H1.8Z"
                                    fill="#7A7A7A" />
                                 <path
                                    d="M13.8001 6.00005H4.2001C3.8683 6.00005 3.6001 5.73125 3.6001 5.40005C3.6001 5.06885 3.8683 4.80005 4.2001 4.80005H13.8001C14.1319 4.80005 14.4001 5.06885 14.4001 5.40005C14.4001 5.73125 14.1319 6.00005 13.8001 6.00005Z"
                                    fill="#7A7A7A" />
                                 <path
                                    d="M9.0001 8.39995H4.2001C3.8683 8.39995 3.6001 8.13115 3.6001 7.79995C3.6001 7.46875 3.8683 7.19995 4.2001 7.19995H9.0001C9.3319 7.19995 9.6001 7.46875 9.6001 7.79995C9.6001 8.13115 9.3319 8.39995 9.0001 8.39995Z"
                                    fill="#7A7A7A" />
                              </svg>
                              chat</a>
                        </li>
                        <li>
                           <a href="{{ url("chat.html") }}"><svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M16.418 0H1.58203C0.711492 0 0 0.708363 0 1.58203V11.0742C0 11.9482 0.711949 12.6562 1.58203 12.6562H16.418C17.2885 12.6562 18 11.9479 18 11.0742V1.58203C18 0.708152 17.2882 0 16.418 0ZM16.175 1.05469C15.6636 1.56786 9.65549 7.59551 9.40866 7.84315C9.2025 8.04994 8.79761 8.05008 8.59134 7.84315L1.82496 1.05469H16.175ZM1.05469 10.8803V1.77592L5.59213 6.32812L1.05469 10.8803ZM1.82496 11.6016L6.3367 7.07512L7.84438 8.58772C8.46221 9.20756 9.53803 9.20732 10.1557 8.58772L11.6633 7.07516L16.175 11.6016H1.82496ZM16.9453 10.8803L12.4079 6.32812L16.9453 1.77592V10.8803Z"
                                    fill="#7A7A7A" />
                              </svg>
                              inbox
                           </a>
                        </li>
                        <li>
                           <a href="{{ url("signin.html") }}"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M12.9224 9.03197C12.5765 8.86754 12.2235 8.7259 11.8644 8.60724C13.0275 7.73424 13.7812 6.34413 13.7812 4.78125C13.7812 2.14488 11.6364 0 8.99999 0C6.36359 0 4.21874 2.14488 4.21874 4.78125C4.21874 6.34585 4.97418 7.73734 6.13943 8.61016C5.07181 8.96165 4.07003 9.50858 3.19323 10.2298C1.58546 11.5522 0.4676 13.3969 0.0456193 15.4239C-0.0866386 16.059 0.0718107 16.7114 0.480256 17.2136C0.886698 17.7134 1.48938 18 2.13373 18H10.793C11.1813 18 11.4961 17.6852 11.4961 17.2969C11.4961 16.9086 11.1813 16.5938 10.793 16.5938H2.13373C1.83356 16.5938 1.65247 16.4262 1.57126 16.3264C1.43102 16.1539 1.37674 15.9295 1.42234 15.7105C2.15201 12.2056 5.24351 9.64527 8.8136 9.55892C8.87544 9.56131 8.93756 9.56251 8.99999 9.56251C9.06303 9.56251 9.12578 9.56128 9.18822 9.55885C10.2823 9.58452 11.3345 9.8342 12.3187 10.3021C12.6694 10.4687 13.0888 10.3196 13.2556 9.96885C13.4223 9.61813 13.2731 9.19868 12.9224 9.03197ZM9.17149 8.15193C9.11443 8.15091 9.05726 8.15039 8.99999 8.15039C8.94325 8.15039 8.88651 8.15095 8.82984 8.152C7.04759 8.06309 5.62499 6.58519 5.62499 4.78125C5.62499 2.92026 7.139 1.40625 8.99999 1.40625C10.861 1.40625 12.375 2.92026 12.375 4.78125C12.375 6.58474 10.9531 8.06236 9.17149 8.15193Z"
                                    fill="#7A7A7A" />
                                 <path
                                    d="M17.2969 13.957H15.3633V12.0234C15.3633 11.6351 15.0485 11.3203 14.6602 11.3203C14.2718 11.3203 13.957 11.6351 13.957 12.0234V13.957H12.0234C11.6351 13.957 11.3203 14.2718 11.3203 14.6602C11.3203 15.0485 11.6351 15.3633 12.0234 15.3633H13.957V17.2969C13.957 17.6852 14.2718 18 14.6602 18C15.0485 18 15.3633 17.6852 15.3633 17.2969V15.3633H17.2969C17.6852 15.3633 18 15.0485 18 14.6602C18 14.2718 17.6852 13.957 17.2969 13.957Z"
                                    fill="#7A7A7A" />
                              </svg>
                              add acount
                           </a>
                        </li>
                        <li>
                           <a href="{{ url("signin.html") }}"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <g clip-path="url(#clip0_643_343)">
                                    <path
                                       d="M17.4368 8.43771H10.312C10.0015 8.43771 9.74951 8.18572 9.74951 7.87523C9.74951 7.56474 10.0015 7.31274 10.312 7.31274H17.4368C17.7473 7.31274 17.9993 7.56474 17.9993 7.87523C17.9993 8.18572 17.7473 8.43771 17.4368 8.43771Z"
                                       fill="#7A7A7A" />
                                    <path
                                       d="M14.6244 11.2502C14.4803 11.2502 14.3364 11.1954 14.2268 11.0852C14.0071 10.8654 14.0071 10.5091 14.2268 10.2894L16.6418 7.87457L14.2268 5.45958C14.0071 5.23986 14.0071 4.88364 14.2268 4.66392C14.4467 4.44406 14.8029 4.44406 15.0226 4.66392L17.835 7.47633C18.0547 7.69605 18.0547 8.05227 17.835 8.27199L15.0226 11.0844C14.9123 11.1954 14.7684 11.2502 14.6244 11.2502Z"
                                       fill="#7A7A7A" />
                                    <path
                                       d="M5.99986 18.0002C5.83932 18.0002 5.68703 17.9776 5.53488 17.9304L1.02142 16.4267C0.407305 16.2122 0 15.64 0 15.0003V1.50073C0 0.673487 0.672754 0.000732422 1.5 0.000732422C1.66039 0.000732422 1.81269 0.0232537 1.96498 0.0704934L6.4783 1.5742C7.09255 1.7887 7.49972 2.36093 7.49972 3.00059V16.5002C7.49972 17.3274 6.8271 18.0002 5.99986 18.0002ZM1.5 1.1257C1.29374 1.1257 1.12496 1.29447 1.12496 1.50073V15.0003C1.12496 15.16 1.23222 15.3085 1.3852 15.3617L5.8775 16.8587C5.90977 16.8692 5.95179 16.8752 5.99986 16.8752C6.20612 16.8752 6.37475 16.7064 6.37475 16.5002V3.00059C6.37475 2.84088 6.2675 2.69244 6.11452 2.63915L1.62222 1.14218C1.58995 1.13174 1.54793 1.1257 1.5 1.1257Z"
                                       fill="#7A7A7A" />
                                    <path
                                       d="M11.4371 6.00035C11.1266 6.00035 10.8746 5.74836 10.8746 5.43786V2.06297C10.8746 1.54622 10.454 1.12545 9.93722 1.12545H1.49998C1.18949 1.12545 0.9375 0.873462 0.9375 0.562971C0.9375 0.252479 1.18949 0.000488281 1.49998 0.000488281H9.93722C11.075 0.000488281 11.9996 0.925234 11.9996 2.06297V5.43786C11.9996 5.74836 11.7476 6.00035 11.4371 6.00035Z"
                                       fill="#7A7A7A" />
                                    <path
                                       d="M9.93699 15.7501H6.93699C6.6265 15.7501 6.37451 15.4981 6.37451 15.1876C6.37451 14.8771 6.6265 14.6251 6.93699 14.6251H9.93699C10.4537 14.6251 10.8744 14.2044 10.8744 13.6876V10.3127C10.8744 10.0022 11.1264 9.75024 11.4369 9.75024C11.7473 9.75024 11.9993 10.0022 11.9993 10.3127V13.6876C11.9993 14.8254 11.0747 15.7501 9.93699 15.7501Z"
                                       fill="#7A7A7A" />
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_643_343">
                                       <rect width="18" height="18" fill="white" />
                                    </clipPath>
                                 </defs>
                              </svg>
                              Log in</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="body__overlay"></div>
      <!-- App header area end -->
         <!-- App side area start -->
         <div class="app__slide-wrapper">
            <div class="breadcrumb__area">
               <div class="breadcrumb__wrapper mb-35">
                  <div class="breadcrumb__main">
                     <div class="breadcrumb__inner">
                        <div class="breadcrumb__icon">
                           <i class="flaticon-home"></i>
                        </div>
                        <div class="breadcrumb__menu">
                           <nav>
                              <ul>
                              <li><span><a href="{{ url("dashboard.html") }}">Home</a></span></li>
                                 <li class="active"><span>Chatbox</span></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="chatbox__area">
               <div class="chatbox__main-wrapper">
                  <div class="chatbox__inbox-wrapper">
                     <div class="chatbox__inbox-inner">
                        <div class="chatbox__author-item is-active">
                           <div class="chatbox__author-content">
                              <div class="chatbox__author-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/01.png") }}" alt="image not found">
                              </div>
                              <div class="chatbox__author-info">
                                 <h5>David Peters</h5>
                                 <span>Senior Developer</span>
                              </div>
                           </div>
                           <div class="chatbox__edit">
                              <a href="{{ url("#") }}">
                                 <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.0252 3.46674L12.339 1.0084C12.1615 0.847596 11.9212 0.757324 11.6708 0.757324C11.4204 0.757324 11.1802 0.847596 11.0027 1.0084L1.47962 9.66674L0.610137 13.0834C0.580143 13.2083 0.581171 13.3377 0.613147 13.4622C0.645122 13.5867 0.707237 13.7031 0.794954 13.8029C0.88267 13.9028 0.993773 13.9835 1.12015 14.0392C1.24652 14.095 1.38497 14.1243 1.52538 14.1251C1.59081 14.1311 1.65673 14.1311 1.72216 14.1251L5.51584 13.3334L15.0252 4.6834C15.2018 4.52178 15.301 4.30306 15.301 4.07507C15.301 3.84708 15.2018 3.62836 15.0252 3.46674ZM5.05821 12.5834L1.5025 13.2626L2.31249 10.0876L9.43765 3.62507L12.1834 6.12507L5.05821 12.5834ZM12.7966 5.5209L10.0509 3.0209L11.6434 1.57924L14.3433 4.07924L12.7966 5.5209Z" fill="#545454"/>
                                 </svg>
                              </a>    
                           </div>
                        </div>
                        <div class="chatbox__inbox-search">
                           <form action="#">
                              <div class="chatbox__inbox-input">
                                 <input type="search" placeholder="Search Here...">
                                 <button class="chatbox__inbox-btn" type="submit"><i class="flaticon-loupe"></i></button>
                              </div>
                           </form>
                        </div>
                        <div class="chatbox__author-item">
                           <div class="chatbox__author-content">
                              <div class="chatbox__author-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/02.png") }}" alt="image not found">
                              </div>
                              <div class="chatbox__author-info">
                                 <h5>Lisa Roy</h5>
                                 <p>Hi, are you Available Tomorrow?</p>
                              </div>
                           </div>
                           <div class="chatbox__notification">
                              <span class="time">10:35 AM</span>
                              <span class="text__number active">1</span>
                           </div>
                        </div>
                        <div class="chatbox__author-item">
                           <div class="chatbox__author-content">
                              <div class="chatbox__author-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/03.png") }}" alt="image not found">
                              </div>
                              <div class="chatbox__author-info">
                                 <h5>Jamie Taylor</h5>
                                 <p>Hi, are you Available Tomorrow?</p>
                              </div>
                           </div>
                           <div class="chatbox__notification">
                              <span class="time">10:35 AM</span>
                              <span class="text__number active">3</span>
                           </div>
                        </div>
                        <div class="chatbox__author-item">
                           <div class="chatbox__author-content">
                              <div class="chatbox__author-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/04.png") }}" alt="image not found">
                              </div>
                              <div class="chatbox__author-info">
                                 <h5>Jason Roy</h5>
                                 <p>Hi, are you Available Tomorrow?</p>
                              </div>
                           </div>
                           <div class="chatbox__notification">
                              <span class="time">10:35 AM</span>
                              <span class="text__number"><i class="fa-light fa-check"></i></span>
                           </div>
                        </div>
                        <div class="chatbox__author-item">
                           <div class="chatbox__author-content">
                              <div class="chatbox__author-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/05.png") }}" alt="image not found">
                              </div>
                              <div class="chatbox__author-info">
                                 <h5>Amy Frost</h5>
                                 <p>Hi, are you Available Tomorrow?</p>
                              </div>
                           </div>
                           <div class="chatbox__notification">
                              <span class="time">10:35 AM</span>
                              <span class="text__number"><i class="fa-light fa-check"></i></span>
                           </div>
                        </div>
                        <div class="chatbox__author-item">
                           <div class="chatbox__author-content">
                              <div class="chatbox__author-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/06.png") }}" alt="image not found">
                              </div>
                              <div class="chatbox__author-info">
                                 <h5>Paul Wilson</h5>
                                 <p>Hi, are you Available Tomorrow?</p>
                              </div>
                           </div>
                           <div class="chatbox__notification">
                              <span class="time">10:35 AM</span>
                              <span class="text__number"></span>
                           </div>
                        </div>
                        <div class="chatbox__author-item">
                           <div class="chatbox__author-content">
                              <div class="chatbox__author-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/07.png") }}" alt="image not found">
                              </div>
                              <div class="chatbox__author-info">
                                 <h5>Ana Wlliams</h5>
                                 <p>??</p>
                              </div>
                           </div>
                           <div class="chatbox__notification">
                              <span class="time">10:35 AM</span>
                              <span class="text__number active">1</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="chatbox__chatting-wrapper">
                     <div class="chatbox__chatting-top">
                        <div class="chatbox__header">
                           <div class="chatting__user">
                              <div class="chatting__user-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/08.png") }}" alt="">
                              </div>
                              <div class="chatting__user-content">
                                 <h5 class="chatting__user-info">Dianne Jhonson</h5>
                              </div>
                           </div>
                           <div class="chatbox__header-notification">
                              <a href="{{ url("#") }}">
                                 <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.55295 17.105C10.4506 17.1046 12.2936 16.4694 13.7884 15.3004L18.4883 20L20 18.4883L15.3002 13.7888C16.4698 12.2938 17.1054 10.4505 17.1059 8.55249C17.1059 3.83686 13.2688 0 8.55295 0C3.83707 0 0 3.83686 0 8.55249C0 13.2681 3.83707 17.105 8.55295 17.105ZM8.55295 2.13812C12.0907 2.13812 14.9677 5.01497 14.9677 8.55249C14.9677 12.09 12.0907 14.9669 8.55295 14.9669C5.01523 14.9669 2.13824 12.09 2.13824 8.55249C2.13824 5.01497 5.01523 2.13812 8.55295 2.13812Z" fill="#BABABA"/>
                                 </svg>
                              </a>
                              <a href="{{ url("#") }}">
                                 <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 1C3.4629 1 1 3.36095 1 6.27377C1 8.62513 1.9625 14.2057 11.4368 19.8471C11.6065 19.9471 11.8013 20 12 20C12.1987 20 12.3935 19.9471 12.5632 19.8471C22.0375 14.2057 23 8.62513 23 6.27377C23 3.36095 20.5371 1 17.5 1C14.4629 1 12 4.19623 12 4.19623C12 4.19623 9.5371 1 6.5 1Z" stroke="#BABABA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg> 
                              </a>
                              <a href="{{ url("#") }}">
                                 <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.7718 17.6344C19.1246 17.0525 18.558 16.3855 18.0872 15.6513C17.5733 14.6378 17.2653 13.531 17.1812 12.3958V9.05238C17.1857 7.26939 16.5443 5.54613 15.3777 4.20638C14.211 2.86662 12.5994 2.0026 10.8456 1.77663V0.903545C10.8456 0.66391 10.7512 0.43409 10.5832 0.264642C10.4152 0.0951948 10.1873 0 9.94966 0C9.71204 0 9.48414 0.0951948 9.31612 0.264642C9.14809 0.43409 9.05369 0.66391 9.05369 0.903545V1.79017C7.31561 2.03242 5.72347 2.90167 4.57217 4.23692C3.42086 5.57217 2.78841 7.28295 2.79195 9.05238V12.3958C2.70789 13.531 2.39985 14.6378 1.88591 15.6513C1.42341 16.3839 0.865903 17.0508 0.228188 17.6344C0.156598 17.6978 0.0992224 17.7759 0.0598775 17.8634C0.0205325 17.9509 0.000120669 18.0459 0 18.142V19.0624C0 19.2419 0.0707093 19.4141 0.196573 19.541C0.322436 19.6679 0.493143 19.7393 0.671141 19.7393H19.3289C19.5069 19.7393 19.6776 19.6679 19.8034 19.541C19.9293 19.4141 20 19.2419 20 19.0624V18.142C19.9999 18.0459 19.9795 17.9509 19.9401 17.8634C19.9008 17.7759 19.8434 17.6978 19.7718 17.6344ZM1.39597 18.3856C2.02041 17.7773 2.5702 17.0956 3.03356 16.3552C3.68095 15.1312 4.05868 13.7806 4.14094 12.3958V9.05238C4.11432 8.25917 4.24626 7.46868 4.52889 6.72797C4.81152 5.98726 5.23907 5.31148 5.78607 4.74087C6.33308 4.17026 6.98835 3.71649 7.71287 3.40659C8.4374 3.09668 9.21635 2.93697 10.0034 2.93697C10.7904 2.93697 11.5693 3.09668 12.2938 3.40659C13.0184 3.71649 13.6736 4.17026 14.2206 4.74087C14.7676 5.31148 15.1952 5.98726 15.4778 6.72797C15.7605 7.46868 15.8924 8.25917 15.8658 9.05238V12.3958C15.948 13.7806 16.3258 15.1312 16.9732 16.3552C17.4365 17.0956 17.9863 17.7773 18.6107 18.3856H1.39597Z" fill="#BABABA"/>
                                    <path d="M10.0335 21.9999C10.4563 21.9901 10.862 21.8298 11.1789 21.5474C11.4958 21.265 11.7034 20.8787 11.7651 20.4568H8.23486C8.29827 20.8902 8.51562 21.2856 8.84648 21.5694C9.17733 21.8533 9.59917 22.0063 10.0335 21.9999Z" fill="#BABABA"/>
                                 </svg> 
                              </a>
                           </div>
                        </div>
                        <div class="chatbox__chatting-body">
                           <div class="chat__message-item mt-30">
                              <div class="chat__message-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/08.png") }}" alt="image not found">
                              </div>
                              <div class="chat__message-title">
                                 <p>Hi David, have you got the project <br> report pdf?</p>
                              </div>
                           </div>
                           <div class="chat__message-item is-right mt-20">
                              <div class="chat__message-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/01.png") }}" alt="image not found">
                              </div>
                              <div class="chat__message-title">
                                 <p>NO. I did not get it</p>
                              </div>
                           </div>
                           <div class="chat__message-item is-time">
                              <span>Yesterday</span>
                           </div>
                           <div class="chat__message-item">
                              <div class="chat__message-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/08.png") }}" alt="image not found">
                              </div>
                              <div class="chat__message-title">
                                 <p>Ok, I will just sent it here. Plz be <br> sure to fill the details by today <br> end of the day.</p>
                              </div>
                           </div>
                           <div class="chat__message-item mt-25">
                              <div class="chat__message-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/08.png") }}" alt="image not found">
                              </div>
                              <div class="chat__message-item-pdf">
                                 <img src="{{ asset("/assets/img/message/text.png") }}" alt="">
                                 <div class="chat__message-title">
                                    <p>project_report.pdf</p>
                                 </div>
                              </div>
                           </div>
                           <div class="chat__message-item is-right mt-30">
                              <div class="chat__message-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/01.png") }}" alt="image not found">
                              </div>
                              <div class="chat__message-title">
                                 <p>Ok. Should I send it over <br> email as well after filling <br> the details.</p>
                              </div>
                           </div>
                           <div class="chat__message-item mt-35">
                              <div class="chat__message-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/08.png") }}" alt="image not found">
                              </div>
                              <div class="chat__message-title">
                                 <p>Ya. I’ll be adding more team <br> members to it.</p>
                              </div>
                           </div>
                           <div class="chat__message-item is-right mt-20">
                              <div class="chat__message-thumb">
                                 <img src="{{ asset("/assets/img/meta/chatbox/01.png") }}" alt="image not found">
                              </div>
                              <div class="chat__message-title">
                                 <p>OK</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="chatbox__chatting-footer">
                        <form action="#">
                           <div class="chatbox__footer-input">
                              <a class="chatbox__input-voice" href="{{ url("#") }}">
                                 <svg width="14" height="23" viewBox="0 0 14 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.7 9.46533C0.885652 9.46533 1.0637 9.53678 1.19497 9.66395C1.32625 9.79112 1.4 9.96361 1.4 10.1435V11.4997C1.4 12.9385 1.99 14.3184 3.0402 15.3358C4.09041 16.3531 5.51479 16.9247 7 16.9247C8.48521 16.9247 9.90959 16.3531 10.9598 15.3358C12.01 14.3184 12.6 12.9385 12.6 11.4997V10.1435C12.6 9.96361 12.6737 9.79112 12.805 9.66395C12.9363 9.53678 13.1143 9.46533 13.3 9.46533C13.4857 9.46533 13.6637 9.53678 13.795 9.66395C13.9263 9.79112 14 9.96361 14 10.1435V11.4997C14 13.1808 13.3555 14.802 12.1914 16.0488C11.0273 17.2955 9.42664 18.0789 7.7 18.2471V20.9935H11.9C12.0857 20.9935 12.2637 21.0649 12.395 21.1921C12.5263 21.3192 12.6 21.4917 12.6 21.6716C12.6 21.8514 12.5263 22.0239 12.395 22.1511C12.2637 22.2783 12.0857 22.3497 11.9 22.3497H2.1C1.91435 22.3497 1.7363 22.2783 1.60503 22.1511C1.47375 22.0239 1.4 21.8514 1.4 21.6716C1.4 21.4917 1.47375 21.3192 1.60503 21.1921C1.7363 21.0649 1.91435 20.9935 2.1 20.9935H6.3V18.2471C4.57336 18.0789 2.97273 17.2955 1.80863 16.0488C0.644538 14.802 -2.18003e-05 13.1808 5.53009e-10 11.4997V10.1435C5.53009e-10 9.96361 0.0737499 9.79112 0.205025 9.66395C0.336301 9.53678 0.514348 9.46533 0.7 9.46533Z" fill="#9D9D9D"/>
                                    <path d="M9.7998 11.4999C9.7998 12.2193 9.5048 12.9092 8.9797 13.4179C8.4546 13.9266 7.74241 14.2124 6.9998 14.2124C6.2572 14.2124 5.54501 13.9266 5.01991 13.4179C4.4948 12.9092 4.1998 12.2193 4.1998 11.4999V4.71865C4.1998 3.99925 4.4948 3.30932 5.01991 2.80063C5.54501 2.29193 6.2572 2.00615 6.9998 2.00615C7.74241 2.00615 8.4546 2.29193 8.9797 2.80063C9.5048 3.30932 9.7998 3.99925 9.7998 4.71865V11.4999ZM6.9998 0.649902C5.8859 0.649902 4.81761 1.07857 4.02996 1.84161C3.2423 2.60465 2.7998 3.63955 2.7998 4.71865V11.4999C2.7998 12.579 3.2423 13.6139 4.02996 14.3769C4.81761 15.14 5.8859 15.5687 6.9998 15.5687C8.11371 15.5687 9.182 15.14 9.96965 14.3769C10.7573 13.6139 11.1998 12.579 11.1998 11.4999V4.71865C11.1998 3.63955 10.7573 2.60465 9.96965 1.84161C9.182 1.07857 8.11371 0.649902 6.9998 0.649902V0.649902Z" fill="#9D9D9D"/>
                                 </svg>
                              </a>
                              <input type="text" placeholder="Write Something...">
                              <button class="chatbox__submit-btn" type="button"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11.3798 10.7124L3.26922 12.0636C3.17597 12.0791 3.08847 12.119 3.01551 12.1791C2.94254 12.2392 2.88669 12.3174 2.85357 12.4059L0.0570815 19.8972C-0.209969 20.5862 0.510421 21.243 1.17158 20.9114L20.5543 11.2216C20.6882 11.1545 20.8009 11.0514 20.8796 10.9239C20.9583 10.7965 21 10.6496 21 10.4998C21 10.3499 20.9583 10.2031 20.8796 10.0756C20.8009 9.94808 20.6882 9.84501 20.5543 9.77787L1.17158 0.0881315C0.510421 -0.242396 -0.209969 0.414353 0.0570815 1.10232L2.85465 8.59357C2.88777 8.6821 2.94362 8.76035 3.01658 8.82045C3.08955 8.88055 3.17705 8.92038 3.2703 8.93594L11.3809 10.2871C11.4315 10.2952 11.4775 10.321 11.5108 10.36C11.544 10.399 11.5623 10.4485 11.5623 10.4998C11.5623 10.551 11.544 10.6005 11.5108 10.6395C11.4775 10.6785 11.4315 10.7043 11.3809 10.7124H11.3798Z" fill="white"/>
                                 </svg>
                              </button>
                              <div class="search__option">
                                 <div>
                                 <input name="type" type="radio" value="type-attach-file" id="type-attach-file">
                                 <label for="type-attach-file">
                                    <svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M13.4415 7.02667L12.064 5.63239L5.1765 12.6093C4.90524 12.8842 4.69009 13.2105 4.54332 13.5697C4.39655 13.9289 4.32104 14.3138 4.3211 14.7025C4.32117 15.0913 4.3968 15.4762 4.54369 15.8353C4.69057 16.1944 4.90583 16.5207 5.17717 16.7955C5.44852 17.0704 5.77063 17.2883 6.12513 17.4371C6.47962 17.5858 6.85955 17.6623 7.24323 17.6622C7.62691 17.6621 8.00681 17.5855 8.36126 17.4367C8.71571 17.2879 9.03775 17.0698 9.30901 16.7948L17.574 8.42232C18.4872 7.49694 19.0001 6.24194 19 4.9334C18.9999 3.62485 18.4867 2.36995 17.5733 1.44476C16.66 0.519566 15.4213 -0.00012891 14.1298 2.39851e-08C12.8383 0.000128958 11.5997 0.520071 10.6865 1.44544L2.00892 10.236L1.98992 10.2539C-0.663305 12.942 -0.663305 17.2981 1.98992 19.9849C4.64314 22.6717 8.94258 22.6717 11.5958 19.9849L11.6134 19.9657L11.6148 19.967L17.5387 13.9664L16.1612 12.5721L10.2373 18.5714L10.2197 18.5893C9.31055 19.5085 8.07861 20.0248 6.79421 20.0248C5.50981 20.0248 4.27788 19.5085 3.36878 18.5893C2.91815 18.1317 2.5611 17.5885 2.31809 16.9909C2.07509 16.3932 1.95091 15.7528 1.95267 15.1064C1.95444 14.4601 2.08211 13.8204 2.32838 13.2241C2.57465 12.6278 2.93466 12.0867 3.38778 11.6316L3.38642 11.6303L12.0654 2.83972C13.204 1.6847 15.0579 1.6847 16.1979 2.83972C17.3379 3.99474 17.3365 5.87165 16.1979 7.02529L7.93286 15.3978C7.74789 15.5702 7.50435 15.6635 7.25309 15.6583C7.00183 15.653 6.76229 15.5496 6.58449 15.3696C6.4067 15.1897 6.30441 14.9471 6.29898 14.6925C6.29355 14.438 6.3854 14.1911 6.55536 14.0035L13.4429 7.02529L13.4415 7.02667Z" fill="#B4B4B4"/>
                                    </svg>
                                    <span>attach file</span>
                                 </label>
                                 </div>
                                 <div>
                                 <input name="type" type="radio" value="type-posts" id="type-posts">
                                 <label for="type-posts">
                                    <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M28.6192 22H1.38112C1.10327 22 0.836803 21.8946 0.640337 21.7071C0.44387 21.5196 0.333496 21.2652 0.333496 21V4C0.333496 3.73478 0.44387 3.48043 0.640337 3.29289C0.836803 3.10536 1.10327 3 1.38112 3H8.14873L9.94016 0.45C10.0351 0.312439 10.1641 0.199384 10.3158 0.12088C10.4675 0.0423752 10.6371 0.000852118 10.8097 0H19.1906C19.3632 0.000852118 19.5328 0.0423752 19.6845 0.12088C19.8362 0.199384 19.9653 0.312439 20.0602 0.45L21.8516 3H28.6192C28.8971 3 29.1635 3.10536 29.36 3.29289C29.5565 3.48043 29.6668 3.73478 29.6668 4V21C29.6668 21.2652 29.5565 21.5196 29.36 21.7071C29.1635 21.8946 28.8971 22 28.6192 22ZM2.42873 20H27.5716V5H21.2859C21.1133 4.99915 20.9437 4.95763 20.792 4.87912C20.6403 4.80062 20.5113 4.68756 20.4164 4.55L18.6249 2H11.3754L9.58397 4.55C9.48907 4.68756 9.36004 4.80062 9.20835 4.87912C9.05666 4.95763 8.887 4.99915 8.71445 5H2.42873V20Z" fill="#B4B4B4"/>
                                       <path d="M15.0001 18C13.7569 18 12.5416 17.6481 11.5079 16.9888C10.4742 16.3295 9.66858 15.3925 9.19283 14.2961C8.71708 13.1997 8.5926 11.9933 8.83514 10.8295C9.07767 9.66557 9.67633 8.59648 10.5554 7.75736C11.4345 6.91825 12.5545 6.3468 13.7738 6.11529C14.9931 5.88378 16.2569 6.0026 17.4055 6.45673C18.5541 6.91085 19.5358 7.67989 20.2265 8.66658C20.9171 9.65328 21.2858 10.8133 21.2858 12C21.2858 13.5913 20.6235 15.1174 19.4447 16.2426C18.2659 17.3679 16.6671 18 15.0001 18ZM15.0001 8C14.1713 8 13.3611 8.2346 12.672 8.67412C11.9828 9.11365 11.4457 9.73836 11.1286 10.4693C10.8114 11.2002 10.7284 12.0044 10.8901 12.7804C11.0518 13.5563 11.4509 14.269 12.037 14.8284C12.623 15.3878 13.3697 15.7688 14.1826 15.9231C14.9954 16.0775 15.838 15.9983 16.6037 15.6955C17.3694 15.3928 18.0239 14.8801 18.4843 14.2223C18.9448 13.5645 19.1905 12.7911 19.1905 12C19.1905 10.9391 18.7491 9.92172 17.9632 9.17158C17.1773 8.42143 16.1115 8 15.0001 8V8Z" fill="#B4B4B4"/>
                                       </svg>                                          
                                    <span>insert photo</span>
                                 </label>
                                 </div>
                                 <div>
                                 <input name="type" type="radio" value="type-emoji" id="type-emoji">
                                 <label for="type-emoji">
                                       <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M4.87284 1.89995C6.06945 1.08518 7.41535 0.515669 8.83291 0.224273C10.2505 -0.0671228 11.7116 -0.0746369 13.1321 0.202164C14.5526 0.478965 15.9043 1.0346 17.1092 1.83703C18.3141 2.63945 19.3484 3.67278 20.1524 4.8774C20.9564 6.08203 21.5142 7.43411 21.7937 8.85565C22.0731 10.2772 22.0687 11.7401 21.7806 13.1599C21.4925 14.5797 20.9265 15.9283 20.1151 17.128C19.3038 18.3277 18.2633 19.3547 17.0535 20.1498C14.6362 21.7672 11.6762 22.3569 8.82463 21.7893C5.97306 21.2216 3.4635 19.5431 1.84804 17.1231C0.232576 14.703 -0.356462 11.7395 0.210505 8.88465C0.777472 6.02976 2.454 3.51729 4.87128 1.89995H4.87284ZM5.74356 18.8469C6.76941 19.5409 7.92214 20.025 9.13549 20.2715C10.3488 20.518 11.5989 20.522 12.8138 20.2833C14.0287 20.0446 15.1845 19.5679 16.2147 18.8805C17.245 18.1931 18.1295 17.3087 18.8172 16.278C19.505 15.2474 19.9825 14.0908 20.2224 12.8747C20.4622 11.6587 20.4597 10.4072 20.2148 9.19217C19.97 7.97712 19.4878 6.8225 18.7958 5.79465C18.1039 4.7668 17.2158 3.88599 16.1828 3.20284C14.1105 1.8325 11.5806 1.33924 9.14617 1.83088C6.71171 2.32253 4.57067 3.75909 3.19106 5.82655C1.81146 7.894 1.30551 10.4242 1.78381 12.864C2.26212 15.3039 3.68576 17.4549 5.74356 18.8469ZM8.61411 9.45703C8.61411 9.87285 8.44911 10.2716 8.15543 10.5657C7.86174 10.8597 7.46341 11.0249 7.04807 11.0249C6.63273 11.0249 6.2344 10.8597 5.94071 10.5657C5.64702 10.2716 5.48203 9.87285 5.48203 9.45703C5.48203 9.0412 5.64702 8.64241 5.94071 8.34838C6.2344 8.05435 6.63273 7.88917 7.04807 7.88917C7.46341 7.88917 7.86174 8.05435 8.15543 8.34838C8.44911 8.64241 8.61411 9.0412 8.61411 9.45703ZM16.4443 9.45703C16.4443 9.87285 16.2793 10.2716 15.9856 10.5657C15.6919 10.8597 15.2936 11.0249 14.8783 11.0249C14.4629 11.0249 14.0646 10.8597 13.7709 10.5657C13.4772 10.2716 13.3122 9.87285 13.3122 9.45703C13.3122 9.0412 13.4772 8.64241 13.7709 8.34838C14.0646 8.05435 14.4629 7.88917 14.8783 7.88917C15.2936 7.88917 15.6919 8.05435 15.9856 8.34838C16.2793 8.64241 16.4443 9.0412 16.4443 9.45703ZM10.9632 15.7285C10.1122 15.7305 9.27663 15.5012 8.54571 15.0649C7.81479 14.6286 7.21596 14.0017 6.81316 13.2512L5.45071 14.0038C5.99905 15.0197 6.81692 15.8644 7.81416 16.4446C8.81141 17.0248 9.9493 17.3181 11.1024 17.2922C12.2556 17.2662 13.3792 16.9221 14.3494 16.2976C15.3196 15.6731 16.0987 14.7925 16.6009 13.753L15.1915 13.0788C14.8063 13.8733 14.2054 14.5432 13.4576 15.0118C12.7098 15.4804 11.8454 15.7288 10.9632 15.7285Z" fill="#B4B4B4"/>
                                       </svg>
                                    <span>insert emoji</span>
                                 </label>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- App side area end -->
      </div>
      </div>
      <!-- Dashboard area end -->

      
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

<!-- Mirrored from codeskdhaka.com/html/expovent-prev/expovent/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Jan 2024 06:54:16 GMT -->
</html>

