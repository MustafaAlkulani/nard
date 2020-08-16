<?php
if (!function_exists('aurl'))
{
    function aurl($url=null){
        return url('admin/'.$url);
    }
}

function contact(){
    return [
        "1"=>"اعجاب",
        "2"=>"مشكلة",
        "3"=>"اقتراح",
        "4"=>"استفسار",
    ];
}
function service(){
    return [
        "1"=>"اغاثة",
        "2"=>"تنموية",

    ];
}

function typeNews(){
    return [
        "1"=>"اعمالنا",
        "2"=>"الانشطة",
        "3"=>"الخدمات المقدمة",
        "4"=>"المهام المستقبلية",
    ];
}
if (!function_exists('setting'))
{
    function setting(){
        return App\Setting::orderBy('id','desc')->first();
    }
}

if (!function_exists('up'))
{
    function up(){
        return new  \App\Http\Controllers\UploadController;
    }
}

if (!function_exists('admin'))
{
    function admin($url=null){
        return auth()->guard('admin');
    }
}


if (!function_exists('active_menu'))
{
    function active_menu($link,$livel=2){
        if(preg_match('/'.$link.'/i',Request::segment($livel))){
            return ['menu-open active','display:blok'];
        }else{
            return ['',''];
        }
    }
}

if (!function_exists('active_news'))
{
    function active_news($type,$link){
        if($type == $link){
            return ' active';
        }else{
            return '';
        }
    }
}
if (!function_exists('getSetting')) {
    function getSetting($settingname)
    {
        return \App\Setting::where('name', $settingname)->get()[0]->value;
    }
}
if (!function_exists('lang'))
{
    function lang(){
        if(session()->has('lang')){
            return session('lang');
        }else{
            return getSetting('main_lang');
        }
    }
}


if (!function_exists('direction'))
{
    function direction(){
        if(session()->has('lang')){
            if(session('lang')== 'ar'){
                return 'rtl';
            }else {
                return 'ltr';
            }
        }else{
            return 'rtl';
        }
    }
}

if (!function_exists('datatable_lang'))
{
    function datatable_lang()
    {
        return [
            'sEmptyTable'=>trans('admin.sEmptyTable'),
            'sInfo'=>trans('admin.sInfo'),
            'sInfoEmpty'=>trans('admin.sInfoEmpty'),
            'sInfoFiltered'=>trans('admin.sInfoFiltered'),
            'sInfoPostFix'=>trans('admin.sInfoPostFix'),
            'sLengthMenu'=>trans('admin.sLengthMenu'),
            'sInfoThousands'=>trans('admin.sInfoThousands'),
            'sLoadingRecords'=>trans('admin.sLoadingRecords'),
            'sProcessing'=>trans('admin.sProcessing'),
            'sZeroRecords'=>trans('admin.sZeroRecords'),
            'sSearch'=>trans('admin.sSearch'),
            'oPaginate'=>[
                'sNext'=>trans('admin.sNext'),
                'sPrevious'=>trans('admin.sPrevious'),
                'sFirst'=>trans('admin.sFirst'),
                'sLast'=>trans('admin.sLast'),
            ],
            'oAria'=>[
                'sSortAscending'=>trans('admin.sSortAscending'),
                'sSortDescending'=>trans('admin.sSortDescending'),
            ],
        ];

    }
    }


    /////////////////// validate Helper functio /////////
/// /////////////////////////////////

if(!function_exists('v_image')){
    function v_image($text = null){
   if($text === null){
       return 'image|mimes:jpg,png,jpeg,gif,bmp';
   }else {
       return 'image|mimes:'.$text;
   }

    }
}

function Slider(){
    return [
        "1"=>"1.jpg",
        "2"=>"2.jpg",
        "3"=>"3.jpg",
        "4"=>"4.jpg",
    ];
}