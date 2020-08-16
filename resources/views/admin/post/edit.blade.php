@extends('admin.index')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/desing/adminpenel/plugins/multipleImage/h.css">
@endsection
@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ $title  }} </h3>
        </div>
        <div class="box-body">
            {!! Form::open(['url'=>aurl('postNews/'.$data->id),'method'=>'put','files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('title','عنوان الخبر') !!}
                {!! Form::text('title',$data->title,['class'=>'form-control','id'=>'exampleInputStudentMiddleName','placeholder'=>'العنوان']) !!}
            </div>

            <div class="form-group">
                <label>نوع الخبر </label>
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
                {!! Form::label('detail','تفاصيل الخبر') !!}
                {!! Form::textarea('detail',$data->detail,['class'=>'form-control controlNewsBody','id'=>'exampleInputStudentMiddleName','placeholder'=>'تفاصيل الخبر ','rows'=>'4']) !!}
            </div>

            <div class="form-group">

                {!! Form::label('detail','صور الخبر') !!}

                 <div id="filediv">
                     @foreach(App\Image_new::where('id_new',$data->id)->get() as $src)

                     <div id="abcd" class="abcd col-lg-3 col-sx-6">
                         <img id="previewimg" src="{{Storage::url($src->path)}}"> <img id="img" src="x.png" alt="delete">
                     </div>
                     @endforeach

                         <div class="clearfix"></div>
                         <br>
                         <hr>
                    {!! Form::file('file[]',['multiple'=>'yes','id'=>'file']) !!}
                    <span   id="add_more" class="upload btn btn_info"  > <i class="fa fa-image"></i>  </span>

                         <div class="clearfix"></div>
                         <br>
                         <hr>

                </div>


            {!! Form::submit(trans('admin.edit'),['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

</div>
@endsection

@section('footer')
    <!------- upload multi image------>
    <script src="{{url('/')}}/desing/adminpenel/plugins/multipleImage/h.js"></script>
@endsection



