@extends('admin.index')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{$title}}</h3>
        </div>

        <div class="box-body">
            {!! Form::open(['url'=>aurl('setting'),'files'=>true]) !!}

            @foreach(App\Setting::all() as $setting)
                @if($setting->type == 1)
                    <div class="form-group">
                        {!! Form::label($setting->name,$setting->slug) !!}
                        {!! Form::text($setting->name,$setting->value,['class'=>'form-control']) !!}
                    </div>
                @elseif($setting->type == 2)
                    <div class="form-group">
                        {!! Form::label($setting->name,trans('admin.status')) !!}
                        {!! Form::select($setting->name,['open'=>trans('admin.open'),'close'=>trans('admin.close')],
                        setting()->status,['class'=>'form-control']) !!}
                    </div>
                @elseif($setting->type == 3)
                    <div class="form-group">
                        {!! Form::label($setting->name,trans('admin.message_maintenance')) !!}
                        {!! Form::textarea('message_maintenance',setting()->message_maintenance,['class'=>'form-control']) !!}
                    </div>

                @elseif($setting->type == 4)
                    <div class="form-group">
                        {!! Form::label('logo',trans('admin.logo')) !!}
                        {!! Form::file('logo',['class'=>'form-control']) !!}
                        @if(!empty(setting()->logo))
                            <img src="{{Storage::url(setting()->logo)}}" style="width: 50px;height: 50px">
                        @endif
                    </div>

                @endif
                    @endforeach


            {!! Form::submit(trans('admin.save'),['class'=> 'btn btn-primary']) !!}

            {!! Form::close(); !!}

        </div>

    </div>



@endsection