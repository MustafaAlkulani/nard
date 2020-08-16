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
  <link href="{{url('Desing/style/')}}/details/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{url('Desing/style/')}}/details/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{url('Desing/style/')}}/details/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('Desing/style/')}}/details/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{url('Desing/style/')}}/details/css/responsive.css" rel="stylesheet">

@endsection
@section('content')
  <!-- END Header -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">

        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <article class="blog-post-wrapper">
                <div id="home" class="slider-area">
                  <div class="bend niceties preview-2">
                    <div id="ensign-nivoslider" class="slides">
                      @foreach(App\Image_new::where('id_new',$detail->id)->get() as $src)

                        <img src="{{Storage::url($src->path)}}" alt=" slider news image " title="#slider-direction-1" />
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

            <div class="post-information">
              <h2 class="">{{$detail->title}}</h2>
              <div class="entry-meta">
                <span class="author-meta"><i class="fa fa-user"></i> <a href="#">

                      @foreach(typeNews() as $type=>$value)
                      @if($type == $detail->type)
                        {{$value}}
                      @endif
                    @endforeach
                  </a></span>
                <span><i class="fa fa-clock-o"></i> {{$detail->updated_at}}</span>

              </div>
              <div class="entry-content">
                <p>

                  {{$detail->detail}}
                </p>

              </div>
            </div>
            </article>
            <div class="clear"></div>

            <!-- single-blog end -->
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
          <div class="page-head-blog">
            <div class="single-blog-page">

            </div>
            <div class="single-blog-page">
              <!-- recent start -->
              <div class=" left-blog">
                <h4>اخر الاخبار </h4>
                <div class="recent-post">
                @foreach($news as $role)
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
                        <img src="{{Storage::url(App\Image_new::where('id_new',$role->id)->first()->path)}}" alt="">
                      </a>
                    </div>
                    <div class="pst-content">
                      <h5><a href="{{url('detailNews/'.$role->id)}}">{{$role->title}}</a></h5>
                      <p>{{str_limit($role->detail,50)}}</p>
                    </div>
                  </div>
                  <!-- End single post -->
                @endforeach
                </div>
              </div>
              <!-- recent end -->
            </div>



          </div>
        </div>
        <!-- End left sidebar -->

      </div>
    </div>
  </div>
  </div>
  <!-- End Blog Area -->
  <div class="clearfix"></div>

  <!-- Start Footer bottom Area -->

@endsection

@section('footer')
  <!-- JavaScript Libraries -->

  <script src="{{url('Desing/style/')}}/details/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{url('Desing/style/')}}/details/lib/venobox/venobox.min.js"></script>
  <script src="{{url('Desing/style/')}}/details/lib/knob/jquery.knob.js"></script>
  <script src="{{url('Desing/style/')}}/details/lib/wow/wow.min.js"></script>
  <script src="{{url('Desing/style/')}}/details/lib/parallax/parallax.js"></script>
  <script src="{{url('Desing/style/')}}/details/lib/easing/easing.min.js"></script>
  <script src="{{url('Desing/style/')}}/details/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="{{url('Desing/style/')}}/details/lib/appear/jquery.appear.js"></script>
  <script src="{{url('Desing/style/')}}/details/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="{{url('Desing/style/')}}/details/js/main.js"></script>

  @endsection