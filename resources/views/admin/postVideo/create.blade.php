@extends('admin.index')
@section('header')
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/desing/adminpenel/plugins/multipleImage/h.css">
@endsection
@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{ $title  }}  </h3>

        </div>
        <div class="box-body">
            {!! Form::open(['url'=>aurl('postVideo'),'files'=>true]) !!}

                <div class="box-body">

                    <div class="form-group">
                        {!! Form::label('title','عنوان الفيديو ') !!}
                        {!! Form::text('title',old('title'),['class'=>'form-control','id'=>'exampleInputStudentMiddleName','placeholder'=>'العنوان']) !!}
                  </div>

                    <div class="form-group">
                        <label>نوع الفيديو </label>
                        <select class="form-control select2" name='type'  style="width: 100%;">
                            @foreach(typeNews() as $key => $cont)
                                <option value="{{$key}}" selected="">{{$cont}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        {!! Form::label('detail','التفاصيل ') !!}
                        {!! Form::textarea('detail',old('detail'),['class'=>'form-control controlNewsBody','id'=>'exampleInputStudentMiddleName','placeholder'=>'تفاصيل الخبر ','rows'=>'4']) !!}
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                         {!! Form::label('path','اختيار الفيديو') !!} 
                        {{-- {!! Form::file('path',['class'=>'form-control']) !!} --}} 
                        <input type="file" name="path"  >
                    </div>



                <div class="box-footer">
                    <div class="text-center">
                        {!! Form::submit('نشر',['class'=>'btn btn-primary btn-block']) !!}
                    </div>
                </div>

                    {!! Form::close() !!}
        </div>
        </form>
        </div>
    </div>





@endsection
@section('footer')
    <!------- upload multi image------>
    <script src="{{url('/')}}/desing/adminpenel/plugins/multipleImage/h.js"></script>
@endsection
