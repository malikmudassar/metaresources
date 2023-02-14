<header class="header-sec">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg p-0 ">
                <a class="navbar-brand p-0 m-0" href="{{ route('home') }}">
                    <img src="public/markup/img/logo.png" alt="" class="logo ">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                    aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav  mx-auto">
                        
                        <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item {{ Route::is('meta-creator') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('meta-creator') }}">Meta Creators</a>
                        </li>
                        <li class="nav-item {{ Route::is('meta-translate') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('meta-translate') }}">Meta Translate</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" target="_blank" href="http://db.metapher.in">Meta Db</a>
                        </li>
                        <li class="nav-item {{ Route::is('blog') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item {{ Route::is('about-us') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn-primary" type="submit">Join Us</button>
                    </form>
                </div>
            </nav>
        </div>
    </header>