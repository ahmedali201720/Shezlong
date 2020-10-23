<!-- navbar -->
<navbar class="navbar navbar-expand-lg navbar-light px-5">
    <a href="#header" class="navbar-brand mx-5">
        <img src={{__('logo')}} alt='No image' style="width:160px;height:62px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-1">
                <a href="#" class="nav-link">{{__('therapist_list')}}</a>
            </li>
            <li class="nav-item active px-1">
                <a href="#" class="nav-link">{{__('how_it_works')}}</a>
            </li>
            <li class="nav-item active px-1">
                <a href="#" class="nav-link">{{__('test')}}</a>
            </li>
            <li class="nav-item active px-1">
                <a href="#" class="nav-link">{{__('blog')}}</a></a>
            </li>
        </ul>
        <ul class="navbar-nav mr-5">
            <li class="nav-item active px-1">
                <a href="#" class="nav-link">{{__('sign_in')}}</a>
            </li>
            <li class="nav-item active px-1">
                <a href="#" class="nav-link">{{__('for_therapist')}}</a>
            </li>
            <li class="nav-item active px-1">
                @if (app()->getLocale()=="en")
                    <a href="/ar" class="nav-link btn-lang">{{__('nav_lang')}} <span><i class="material-icons" style='font-size:14px'>language</i><span></a>
                @else    
                    <a href="/en" class="nav-link btn-lang">{{__('nav_lang')}} <span><i class="material-icons" style='font-size:14px'>language</i><span></a>
                @endif
            </li>
        </ul>
    </div>
</navbar>
<!-- end of navbar -->