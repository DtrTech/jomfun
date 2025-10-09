<style>
  .dropdown-menu.show { display:block !important; }
  .dropdown > a.active { color:#007bff; }
  .dropdown-menu a:hover { color:#007bff; }
  
  /* Mobile dropdown styles */
  @media (max-width: 991px) {
    .nav .dropdown-menu {
      position: static !important;
      box-shadow: none !important;
      background: transparent !important;
      padding-left: 20px !important;
    }
    
    .nav .dropdown-menu li a {
      color: #fff !important;
      padding: 8px 0;
      display: block;
    }
  }
</style>

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

                        <li class="dropdown">
                            <a href="javascript:void(0);" 
                               class="dropdown-toggle {{ Request::is('category*') ? 'active' : '' }}" 
                               onclick="toggleDropdown(this);">
                                Category
                            </a>
                            <ul class="dropdown-menu" style="display:none; position:absolute; background:#fff; padding:10px; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.1); list-style:none;">
                                @foreach($categories as $cat)
                                    <li style="margin-bottom:5px;">
                                        <a href="{{ url('/category/' . strtolower($cat->category_name)) }}" 
                                           style="text-decoration:none; color:#333;">
                                            {{ $cat->category_name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>

<script>
  function toggleDropdown(element) {
    const dropdown = element.nextElementSibling;
    const isShowing = dropdown.classList.contains('show');
    
    // Close all dropdowns
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
      menu.classList.remove('show');
    });
    
    // Toggle current dropdown
    if (!isShowing) {
      dropdown.classList.add('show');
    }
  }

  // Close dropdown when clicking outside
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.dropdown')) {
      document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.classList.remove('show');
      });
    }
  });
  
  // Prevent dropdown from closing when clicking inside it
  document.addEventListener('click', function(e) {
    if (e.target.closest('.dropdown-menu')) {
      e.stopPropagation();
    }
  });
</script>