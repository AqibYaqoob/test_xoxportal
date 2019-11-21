<div id="header" >
    <div class="header-1 container-fluid dynamic_header_content">
        <nav class="navbar navbar-expand-lg navbar-index">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ Voyager::image( setting('site.logo') ) }}" style="width:60px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav mr-auto" style="">
                    {{ menu('main_menu', 'web.menu.dropdown.inner') }}
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://selfcare.xox.com.my/SelfCare/Login">LOGIN</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
