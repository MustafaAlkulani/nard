@extends('style.index')
@section('content')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url({{url('Desing/style/')}}/images/8.png)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    {{-- <h2 class="animation animated-item-1"> مرحبا  في <span>رفقاء وطن</span></h2> --}}
                                    {{-- <p class="animation animated-item-2">اهلابكم متابعينا الكرام ...</p> --}}
                                    <a class="btn-slide animation animated-item-3" href="{{url('about')}}">المزيد</a>
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
        </div><!--/.carousel-->
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
                        <h2>النازحين </h2>
                        <p>تخفيف معاناةلنازحين ومد يد العون واغاثة المواطنين المتضررين</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
                        <i class="fa fa-users"></i>
                        <h2>  خدمة المجتمع </h2>
                        <p>توفير الخدمات المجتمعية وتحسين المعيشة </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
                        <i class="fa fa-hospital-o"></i>
                        <h2>الخدمات الصحية </h2>
                        <p>دعم المراكز الصحية وتوفير المتطلبا ت الصحيةالى المجتمعات الريفية</p>
                    </div>
                </div>
            </div>
        </div>
    </div>








    
                           {{-- news  --}}


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
          @foreach($news as $role)
          <div class="col-md-4 col-sm-4 col-xs-12 about-col">
            <div class="single-blog">
              <div class="single-blog-img" style="">
                <a href="#">
                     <img src="{{Storage::url(App\Image_new::where('id_new',$role->id)->first()->path)}}" alt="" height="300px">
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
                  {{str_limit($role->detail,250)}}

                </p>
              </div>
              <span>
                                    <a href="{{url('details/'. $role->id )}}" class="ready-btn">Read more</a>
                                </span>
            </div>
            
          </div>

          @endforeach
          <!-- End Left Blog-->
         
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