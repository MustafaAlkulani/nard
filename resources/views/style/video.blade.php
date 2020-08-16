@extends('style.index')
@section('content')

@section('header')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}

video {
    width: 100%;
    height: 300px;
}
.row:after {
    content: "";
    clear: both;
    display: block;
}
[class*="col-"] {
    float: left;
    padding: 15px;
    width: 100%;
}
@media only screen and (min-width: 600px) {
    .col-s-12 {width: 8.33%;}
    .col-s-2 {width: 16.66%;}
    .col-s-3 {width: 25%;}
    .col-s-4 {width: 33.33%;}
    .col-s-5 {width: 41.66%;}
    .col-s-6 {width: 50%;}
    .col-s-7 {width: 58.33%;}
    .col-s-8 {width: 66.66%;}
    .col-s-9 {width: 75%;}
    .col-s-10 {width: 83.33%;}
    .col-s-11 {width: 91.66%;}
    .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
}
html {
    font-family: "Lucida Sans", sans-serif;
}
</style>



@endsection





    
<!--         newssssssssssssssssssssssssssssss                                -->   




 <!-- End Left Blog

///////////////////////////////////////////////
video  news
///////////////////////////////////////////////


 -->




  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h3>Latest video</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->

 @foreach($video as $role)
        <!--
          <div class="col-md-4 col-sm-4 col-xs-12 about-col">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="#">
                <video width="320" height="240" controls > 
           <source src="{{Storage::url($role->path)}}" type="video/mp4"> 
         </video>
                                    </a>
              </div>
              <div class="#">
    
                <span class="date-type">
                   <i class="fa fa-calendar"></i>{{$role->created_at}} 
                                    </span>
              </div>
              <div class="blog-text">
                <h4>
               <a href="#">{{$role->title}}</a>
                                    </h4>
                <p>
                  {{str_limit($role->detail,50)}}

                </p>
              </div>
              <span>
                <a href="#" class="ready-btn">Read more</a>
                                </span>
            </div>
           
          </div>  -->
           <div class="col-6 col-s-9">

                <video width="600.
                ..03.03.
                " controls>
                <source src="{{Storage::url($role->path)}}" type="video/mp4">
              
                Your browser does not support HTML5 video.
                </video>
                <h3>{{$role->title}}</h3>
                <p>  {{str_limit($role->detail,50)}}.</p>
                </div>      <!-- End Left video--> 


            @endforeach
                        <!-- End Left Blog-->
                  <!-- End Left video--> 
           </div>
      </div>
    </div>
  </div>

















@endsection