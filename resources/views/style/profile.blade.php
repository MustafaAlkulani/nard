@extends('style.index')
@section('content')
    <section id="portfolio">	
        <div class="container">
            <div class="center">
               <p></p>
            </div>

            <ul class="portfolio-filter text-center">
              <a href="{{url('news?type=1')}}" >
                
               <li><a class="btn btn-default {{active_news($type,1)}}" 
                href="{{url('news?type=1')}}" >اعمالنا</a></li></a>

                <li><a class="btn btn-default {{active_news($type,2)}}" href="{{url('news?type=2')}}" >الانشطه</a></li>
                <li><a class="btn btn-default {{active_news($type,3)}}" href="{{url('news?type=3')}}" >الخدمات المقدمه</a></li>
                <li><a class="btn btn-default {{active_news($type,4)}}" href="{{url('news?type=4')}}" >المهام المستقبليه</a></li>
            </ul><!--/#portfolio-filter-->
		</div>
		<div class="container">
            <div class="">
                <div class="portfolio-items">
                    @foreach($news as $role)
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">

                        <div class="recent-work-wrap">
                            <a href="{{url('detailNews/'.$role->id)}}">
                            <img class="img-responsive" src="{{Storage::url(App\Image_new::where('id_new',$role->id)->first()->path)}}" alt="{{$role->title}}">
                            </a>
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h5><a href="{{url('details/'.$role->id)}}">{{str_limit($role->title,20)}}</a></h5>
                                    <h7>{{str_limit($role->detail,50)}}</h7>
                               </div>
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                    @endforeach
                 </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
@endsection