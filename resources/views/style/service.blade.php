@extends('style.index')
@section('content')

	<div class="services">
		<div class="container">
			<h3>خدمات المؤسسه</h3>
			<hr>
			<div class="col-md-6">
				<img src="{{url('Desing/style/')}}/images/services/11.jpg" class="img-responsive">
				<p  style="font-size: 1.5em ">
					تقديم الاغاثة للمتضررين من الحروب ولنازحين من المناطق المنكوبه وتوفير الماوى والغذاء لهم بالتعاون مع منظمات دوليه وخيرية
					مما يسهم في التكافل الاجتماعي ومساعدة الطبقة المستضعفة من المجتمع
				</p>
			</div>
			<hr>
			<div class="col-md-6">
				<div class="media">
					<ul>
						@foreach($data1 as $role)
						<li>
							<div class="media-left ">

								<img src="{{Storage::url($role->image)}}" class="img-responsivee " style="display:inline ; width: 100px" alt="Bird">

							</div>
							<br>

							<div class="media-body ">
								<h4 class="media-heading">{{$role->name}}</h4>
								<p>
								{{$role->detail}}
								</p>
							</div>
							<hr>
						</li>
          @endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>	
	
	<div class="sub-services">
		<div class="container">
			<div class="col-md-6">
				<div class="media">
					<ul>
						@foreach($data2 as $role2)
						<li>
							<div class="media-left col-lg-3 col-md-6">
								<img src="{{Storage::url($role2->image)}}" class="img-responsivee "  alt="Bird">

							</div>
							<div class="media-body">
								<h4 class="media-heading">{{$role2->name}}</h4>
								<p>
									{{$role2->detail}}
								</p>
							</div>
						</li>
@endforeach
					</ul>
				</div>
			</div>
						
			<div class="col-md-6">
				<img src="{{url('Desing/style/')}}/images/services/22.jpg" class="img-responsive">
				<p style="font-size: 1.5em ">



					 .  ,توعية المجتمع ورفع المستوى التعليمي خاصة لدى البنات وتشجيع المواطنين على دفع ابناءهم وبناتهمالى المدارس والجامعات


				 وتوعيتهم باهمية التعليم وانه يسهم في رقي وتقدم المجتمعات ويضمن لهم حياة كريمه ان شاء الله
				</p>
			</div>
		</div>
	</div>

@endsection