@extends('admin.index')
@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ $title  }} </h3>
        </div>
        <div class="box-body">
            {!! Form::open(['url'=>aurl('service/'.$data->id),'method'=>'put','files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name','اسم الخدمة') !!}
                {!! Form::text('name',$data->name,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <label>نوع الخدمة </label>
                <select class="form-control select2" name='type'  style="width: 100%;">
                    @foreach(service() as $key => $cont)
                        @if($data->type == $key)
                            <option value="{{$key}}" selected="">{{$cont}}</option>
                        @else
                            <option value="{{$key}}" >{{$cont}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                {!! Form::label('detail','وصف الخدمة') !!}
                {!! Form::textarea('detail',$data->detail,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('image','صورة الخدمة') !!}
                <img src="{{Storage::url($data->image)}}" class="img-responsivee" style="display:inline ; width: 150px" alt="Bird" >

                {!! Form::file('image',['class'=>'form-control']) !!}
            </div>



            {!! Form::submit(trans('admin.edit'),['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>





@endsection


