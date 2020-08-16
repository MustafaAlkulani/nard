@extends('admin.index')
@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ $title  }} </h3>
        </div>
        <div class="box-body">
            {!! Form::open(['url'=>aurl('postVideo/'.$data->id),'method'=>'put','files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('title','عنوان الفيديو') !!}
                {!! Form::text('title',$data->title,['class'=>'form-control','id'=>'exampleInputStudentMiddleName','placeholder'=>'العنوان']) !!}
            </div>

            <div class="form-group">
                <label>نوع الفيديو </label>
                <select class="form-control select2" name='type'  style="width: 100%;">
                    @foreach(typeNews() as $key => $cont)
                        @if($data->type == $key)
                        <option value="{{$key}}" selected="">{{$cont}}</option>
                        @else
                            <option value="{{$key}}" >{{$cont}}</option>
                            @endif
                    @endforeach
                </select>
            </div>

            <!-- textarea -->
            <div class="form-group">
                {!! Form::label('detail','تفاصيل الفيديو') !!}
                {!! Form::textarea('detail',$data->detail,['class'=>'form-control controlNewsBody','id'=>'exampleInputStudentMiddleName','placeholder'=>'تفاصيل الفيديو ','rows'=>'4']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('path','الفيديو ') !!}
                <div>
                <video width="320" height="240" controls class="-file-video-o">
                    <source src="{{Storage::url($data->path)}}" type="video/mp4">

                    Your browser does not support the video
                </video>
                </div>
                <br>

                {!! Form::file('path',['class'=>'form-control']) !!}
            </div>

            {!! Form::submit(trans('admin.edit'),['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>





@endsection


