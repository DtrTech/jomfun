<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#588800" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" href="{{ asset('image/jomfun/J.png') }}" sizes="32x32" />
<link rel="icon" href="{{ asset('image/jomfun/J.png') }}" sizes="192x192" />
<link rel="apple-touch-icon" href="{{ asset('image/jomfun/J.png') }}" />
<meta name="msapplication-TileImage" content="{{ asset('image/jomfun/J.png') }}" />

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('css/jomfun_base.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jomfun_style.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jomfun_widgets.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jomfun_helpers.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jomfun_fontawesome.css') }}">

<!-- Facebook -->
<meta property="fb:pages" content="112274292745476">

<!-- Essential JavaScript -->
<script src="{{ asset('script/jquery.min.js') }}"></script>
<script src="{{ asset('script/jquery-migrate.min.js') }}"></script>

<!-- Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109829759-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-109829759-1');
</script>

<!-- Custom Styles -->
<style>
    :root {
        --primary-color: #ffce00;
        --primary-hover: #cc140f;
        --text-color: #34495e;
        --bg-color: #ffffff;
    }
    
    .brand-title, a:hover { color: var(--primary-color); }
    .button, [type='submit'] { 
        background-color: var(--primary-color); 
        color: #ffffff; 
    }
    .button:hover, [type='submit']:hover { 
        background-color: var(--primary-hover); 
    }
    
    .dable-widget { display: none; }
    .single-post .dable-widget { display: block !important; }
</style>