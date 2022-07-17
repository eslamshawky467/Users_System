<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
<title>Alkhamsen</title>
  <!-- Favicons -->



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="About/main.d8e0d294.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: KnightOne - v4.7.0
  * Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-scroller">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
            <a href="#" style="text-align:left; color:white"><b>{{ trans('arab.International Corporate Consultancy') }}</b></a>
          <h1 class="logo me-auto me-lg-0"><a href="{{ url('/') }}"></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="{{ url('/') }}">{{ trans('arab.Home')}}</a></li>
              <li><a class="nav-link scrollto" href="#about">{{ trans('arab.About')}}</a></li>
              <li><a class="nav-link scrollto" href="#services">{{ trans('arab.information')}}</a></li>
              <li><a class="nav-link scrollto " href="#portfolio">{{ trans('arab.Gallery')}}</a></li>
              <ul>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li><b>
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                </b> </li>
                @endforeach
            </ul>
          </nav><!-- .navbar -->

          <a href="{{route('login')}}" class="get-started-btn scrollto">{{ trans('arab.Login')}}</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <a href="https://www.youtube.com/watch?v=9Dr4a4_c27k" class="glightbox play-btn mb-4"></a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <section id="about" class="about">
    <div class="container">
        <h2>{{ trans('arab.About Us')}}   </h2>
        <div class="row">
          <div class="col-xs-12">

             <div class="card">
               <div class="card-block">
                 @foreach ( $users as $user )
                 <div class="row">
                   <div class="col-md-4">
                     <p><img src="{{ $user->profile_photo_url }}" class="img-responsive" alt=""></p>
                   </div>
                   <div class="col-md-8">
                    @if (App::getLocale() == 'en')
                   <h2>{{ $user->name }}</h2>
                   <p>{{ $user->description}}</p>
                   </div>
                   @elseif (App::getLocale() == 'tr')
                   <div class="col-md-8">
                   <h2>{{ $user->nameTr }}</h2>
                   <p>{{ $user->descriptionTr}}</p>
                   </div>
                   @else
                   <div class="col-md-8">
                    <h2>{{ $user->nameAr }}</h2>
                    <p>{{ $user->descriptionAr}}</p>
                    </div>
                   @endif
                 </div>
                 @endforeach
               </div>
             </div>
          </div>
        </div>
    </div>
    </section>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>{{ trans('arab.Information')}} </h2>
          @if (App::getLocale() == 'ar')

          <div align="right">
            <font color="red"><b>{{ trans('arab.The activities related to the year 50 are centered around four main pillars:')}}</b></font>
            <br>
<font color="black"><i>{{trans('arab.Launching the fiftieth year in a festive spirit that includes everyone who considers the UAE their home.')}}</i></font>
            <br>
            <font color="black"><i>{{ trans('arab.Inviting the people of the country to reflect on the values and achievements of the past in honor of our founding fathers')}}</i></font>
            <br>
            <font color="black"><i>{{ trans('arab.Inspiring young people to imagine the aspirations of the next 50 years and supporting them with the tools to create the future.') }} .</i></font>
            <br>
            <font color="black"> <i>{{ trans('arab.The launch of the Year of Preparation for the 50th comes at a pivotal stage in the history of the UAE, which is preparing to celebrate its fiftieth anniversary in') }}
                {{ trans('arab.December of the year 2021, as the golden jubilee of the young country constitutes a milestone that calls for setting the new development model for the UAE. All') }}
                {{ trans('arab.institutional efforts in the country and all resources and capabilities will be mobilized within the various leadership and administrative cadres, in addition to investing') }}
            {{ trans('arab.in experiences, creative minds, exceptional talents and competencies to design new systems for the next fifty years, and create a collective vision around which all') }}
                {{ trans('arab.segments of society gather, so that the UAE during the next fifty years will be the most Distinguished and the best in quality of life in the world.') }}
            </i>  </font> </div>
@else
<div align="left">
    <font color="red"><b>{{ trans('arab.The activities related to the year 50 are centered around four main pillars:')}}</b></font>
    <br>
<font color="black"><i>{{trans('arab.Launching the fiftieth year in a festive spirit that includes everyone who considers the UAE their home.')}}</i></font>
  <br>
  <font color="black"><i>{{ trans('arab.Inviting the people of the country to reflect on the values and achievements of the past in honor of our founding fathers')}}</i></font>
  <br>
  <font color="black"><i>{{ trans('arab.Inspiring young people to imagine the aspirations of the next 50 years and supporting them with the tools to create the future.') }} .</i></font>
  <br>
  <font color="black"> <i>{{ trans('arab.The launch of the Year of Preparation for the 50th comes at a pivotal stage in the history of the UAE, which is preparing to celebrate its fiftieth anniversary in') }}
      {{ trans('arab.December of the year 2021, as the golden jubilee of the young country constitutes a milestone that calls for setting the new development model for the UAE. All') }}
      {{ trans('arab.institutional efforts in the country and all resources and capabilities will be mobilized within the various leadership and administrative cadres, in addition to investing') }}
  {{ trans('arab.in experiences, creative minds, exceptional talents and competencies to design new systems for the next fifty years, and create a collective vision around which all') }}
      {{ trans('arab.segments of society gather, so that the UAE during the next fifty years will be the most Distinguished and the best in quality of life in the world.') }}
  </i>  </font> </div>
@endif

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>{{ trans('arab.gallery') }}</h2>
          <p><b>{{ trans('arab.The most prominent pictures of the celebration of the fiftieth year of the United Arab Emirates') }}</b></p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">{{ trans('arab.All') }}</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">



          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/1.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>50</h4>
              <a href="assets/img/1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>50</h4>
              <a href="assets/img/3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/2.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>50</h4>
              <a href="assets/img/2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/4.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>50</h4>
              <a href="assets/img/4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 4"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/5.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>50</h4>
              <a href="assets/img/5.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 5"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/6.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>50</h4>
              <a href="assets/img/6.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 6"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/7.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>50</h4>
              <a href="assets/img/7.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 7"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <font color="red">{{ trans('arab.United') }}</font>
      <font color="green">{{ trans('arab.Arab') }}</font>
      <font color="white">{{ trans('arab.Emirates') }}</font>
      <font color="green">{{ trans('arab.50 years of prosperity and progress') }}</font>
      <div class="copyright">
        &copy; Copyright <strong><span>2022</span></strong>{{ trans('arab.All Rights Reserved') }}
      </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
