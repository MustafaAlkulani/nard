@include('style.layouts.header')
@include('style.layouts.navbar')
<div class="content-wrapper">
<section class="content">
    @include('style.layouts.message')
    @yield('content')
</section>
</div>

@include('style.layouts.footer')