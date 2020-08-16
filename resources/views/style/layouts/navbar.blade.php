<header style="background-color:#20B181">
    <nav class="navbar navbar-default " role="navigation">
        <div class="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand">
                        <a href="{{url('/')}}"><h1><span>رفقاء</span>وطن</h1></a>
                    </div>
                </div>
                <div class="navbar-collapse collapse">
                    <div class="menu ">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="{{active_menu('home',1)[0]}}" role="presentation "><a href="{{url('home')}}" class="{{active_menu('home',1)[0]}}">الرئيسية</a></li>
                            <li class="{{active_menu('news',1)[0]}}" role="presentation"><a href="{{url('news ')}}" class="{{active_menu('news',1)[0]}}">اعمالنا</a></li>
                              <li class="{{active_menu('video',1)[0]}}" role="presentation"><a href="{{url('video ')}}" class="{{active_menu('video',1)[0]}}">اخبار الفديو</a></li>

                            <li class="{{active_menu('service',1)[0]}}" role="presentation">
                                <a href="{{url('service')}}" class="{{active_menu('service',1)[0]}}">خدماتنا</a></li>

                            <li class="{{active_menu('about',1)[0]}}" role="presentation"><a href="{{url('about')}}" class="{{active_menu('about',1)[0]}}">من نحن</a></li>
                            <li class="{{active_menu('contact',1)[0]}}" role="presentation"><a href="{{url('contact')}}" class="{{active_menu('contact',1)[0]}}">للتواصل معنا</a></li>

                            @if (isset(admin()->user()->id))
                                <li class="{{active_menu('admin',1)[0]}}" role="presentation"><a href="{{url('admin')}}" class="{{active_menu('admin',1)[0]}}">لوحة التحكم</a></li>


                            @endif
                        </ul>
                    </div>
                </div>
                </div>

        </div>
    </nav>
</header>
