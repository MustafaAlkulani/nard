@extends('style.index')
@section('header')

  <link href="{{url('Desing/style/')}}/details/img/favicon.png" rel="icon">
  <link href="{{url('Desing/style/')}}/details/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->


  <!-- Libraries CSS Files -->
  <link href="{{url('Desing/style/')}}/details/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="{{url('Desing/style/')}}/details/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="{{url('Desing/style/')}}/details/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="{{url('Desing/style/')}}/details/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{url('Desing/style/')}}/css/animate.min.css" rel="stylesheet">
  <!-- <link href="{{url('Desing/style/')}}/details/lib/venobox/venobox.css" rel="stylesheet"> -->

  <!-- Nivo Slider Theme -->
  <link href="{{url('Desing/style/')}}/details/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('Desing/style/')}}/details/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{url('Desing/style/')}}/details/css/responsive.css" rel="stylesheet">

@endsection
@section('content')
    <section id="main-slider" class="no-margin">
            <div class="carousel slide" >
                    <div class="carousel-inner">
                            <div class="container">
{{--         <div class="carousel slide">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url({{url('Desing/style/')}}/images/9.png)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    {{-- <h2 class="animation animated-item-1"> مرحبا  في <span>رفقاء وطن</span></h2> --}}
                                    {{-- <p class="animation animated-item-2">اهلابكم متابعينا الكرام ...</p> --}}
                                   {{-- <a class="btn-slide animation animated-item-3" href="{{url('about')}}">المزيد</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">

                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div> --}}<!--/.carousel-->
       
        <div class="col-md-12 col-sm-12 col-xs-12" >
            <!-- single-blog start -->
            <article class="blog-post-wrapper">
              <div id="home" class="slider-area">
                <div class="bend niceties preview-2">
                  <div id="ensign-nivoslider" class="slides"style="height:50%">
                    @foreach(Slider()  as $src =>$val )

                      <img src="{{url('Desing/style/')}}/images/slid/3.jpg"   alt=" slider news image " title="#slider-direction-1" height="200px" />
                    @endforeach
                  </div>

                  <!-- direction 1 -->
                  <div id="slider-direction-1" class="slider-direction slider-one">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="slider-content">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">


                              <!--
                              <h2 class="title1">The Best Business Information </h2>
                            </div>
                             layer 2
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                              <h1 class="title2">We're In The Business Of Helping You Start Your Business</h1>
                            </div>
                            <-- layer 3
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                              <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                              <a class="ready-btn page-scroll" href="#about">Learn More</a>
                            </div>
                          -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- direction 2 -->
                    <div id="slider-direction-2" class="slider-direction slider-two">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content text-center">
                              <!-- layer 1 -->
                              <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">

                              </div>
                              <!-- layer 2 -->
                              <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">

                              </div>
                              <!-- layer 3 -->

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- direction 3 -->
                  <div id="slider-direction-3" class="slider-direction slider-two">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="slider-content">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">

                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">

                            </div>
                            <!-- layer 3 -->

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </article>
          </div>

            </div>    </div>
    </section>
    <!--/#main-slider-->

    <div class="feature">
        <div class="container">
            <div class="text-center">
                <div class="col-md-3">
                    <div class="hi-icon-wrap hi-icon-effect wow fadeInDown " data-wow-duration="1000ms" data-wow-delay="300ms" >
                        <i class="fa fa-pencil"></i>
                        <h2>التعليم</h2>
                        <p>رفع المستوى التعليمي لدى المجتمع واكسابهم خبرات جديدة</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                        <i class="fa fa-male"></i>
                        <h2>التوعية الاجتماعية  </h2>
                        <p>تخفيف معاناةلنازحين ومد يد العون واغاثة المواطنين المتضررين</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
                        <i class="fa fa-users"></i>
                        <h2>  مكافحة الامراض </h2>
                        <p>توفير الخدمات المجتمعية وتحسين المعيشة </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
                        <i class="fa fa-hospital-o"></i>
                        <h2>تقديم  المساعدات </h2>
                        <p>دعم المراكز الصحية وتوفير المتطلبا ت الصحيةالى المجتمعات الريفية</p>
                    </div>
                </div>
            </div>
        </div>
    </div>








    
<!--         newssssssssssssssssssssssssssssss                                -->   


  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
            <div class="section-headline text-center">
              <h3 >Latest News</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->
          @if(!empty($news))
          @foreach($news as $role)
          <div class="col-md-4 col-sm-4 col-xs-12 about-col">
                <div class="panel panel-default">
              <div class="panel-body" style="height:500px;">
            <div class="single-blog">
              <div class="single-blog-img" style=" height:250px">
                <a href="#">
                     <img src="{{Storage::url(App\Image_new::where('id_new',$role->id)->first()->path)}}" alt="" height="200px">
                                    </a>
              </div>
              <div class="blog-meta">
                
                <span class="date-type">
                                        <i class="fa fa-calendar"></i>
                                       {{$role->created_at}} 
                                    </span>
              </div>
              <div class="blog-text">
                <h4>
                   <a href="{{url('details/'. $role->id )}}"></a>
                   {{$role->title}}
                                    </h4>
                <p>
                  {{str_limit($role->detail,50)}}

                </p>
              </div>
              <span>
                                    <a href="{{url('details/'. $role->id )}}" class="ready-btn">قراءة المزيد </a>
                                </span>
            </div>
              </div>
                </div>
          </div>

          @endforeach
          <!-- End Left Blog-->
         @endif
        </div>
      </div>
    </div>
  </div>



 <!-- End Left Blog

///////////////////////////////////////////////
video  news
///////////////////////////////////////////////


 -->















    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>شركاء النجاح </h2>
                <p> </p>
            </div>

            <div class="partners">
                {{-- <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{url('Desing/style/')}}/images/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="{{url('Desing/style/')}}/images/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="{{url('Desing/style/')}}/images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="{{url('Desing/style/')}}/images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="{{url('Desing/style/')}}/images/partners/partner5.png"></a></li>
                </ul> --}}
            </div>
        </div><!--/.container-->
    </section><!--/#partner-->




@endsection

@section('footer')
  <!-- JavaScript Libraries -->

  <script src="{{url('Desing/style/')}}/details/lib/owlcarousel/owl.carousel.min.js"></script>
  <!-- <script src="{{url('Desing/style/')}}/details/lib/venobox/venobox.min.js"></script> -->
  <!-- <script src="{{url('Desing/style/')}}/details/lib/knob/jquery.knob.js"></script> -->
  <script src="{{url('Desing/style/')}}/details/lib/wow/wow.min.js"></script>
  <!-- <script src="{{url('Desing/style/')}}/details/lib/parallax/parallax.js"></script> -->
  <!-- <script src="{{url('Desing/style/')}}/details/lib/easing/easing.min.js"></script> -->
  <script src="{{url('Desing/style/')}}/details/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <!-- <script src="{{url('Desing/style/')}}/details/lib/appear/jquery.appear.js"></script> -->
  <!-- <script src="{{url('Desing/style/')}}/details/lib/isotope/isotope.pkgd.min.js"></script> -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <!-- Contact Form JavaScript File -->
  <!-- <script src="{{url('Desing/style/')}}/contactform/contactform.js"></script> -->

  <script src="{{url('Desing/style/')}}/details/js/main.js"></script>

  @endsection