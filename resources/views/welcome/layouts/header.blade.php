<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('image/jomfun/jomfun.png') }}" alt="JomFun">
                    </a>

                    <ul class="nav">
                        <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ url('aboutus') }}" class="{{ Request::is('aboutus') ? 'active' : '' }}">About</a></li>
                        <li><a href="{{ url('contactus') }}" class="{{ Request::is('contactus') ? 'active' : '' }}">Contact Us</a></li>
                    </ul>
                    
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>