@extends('admin.index')
@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ $title  }}  </h3>

        </div>
        <div class="box-body">
        {!! Form::open(['url'=>aurl('service'),'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name','اسم الخدمة') !!}
                 {!! Form::text('name',old('name'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                <label>نوع الخدمة </label>
                <select class="form-control select2" name='type'  style="width: 100%;">
                    @foreach(service() as $key => $cont)
                        <option value="{{$key}}" selected="">{{$cont}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                {!! Form::label('detail','وصف الخدمة') !!}
                {!! Form::textarea('detail',old('detail'),['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('image','صورة الخدمة') !!}
                {!! Form::file('image',['class'=>'form-control']) !!}
            </div>



            {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>





@endsection
