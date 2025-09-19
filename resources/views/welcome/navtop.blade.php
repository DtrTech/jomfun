<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<header id="theme-header" class="theme-header header-layout-1 main-nav-light main-nav-default-light main-nav-below has-stream-item top-nav-active top-nav-light top-nav-default-light top-nav-above is-stretch-header has-normal-width-logo mobile-header-default">	
	<nav id="top-nav"  class="has-date top-nav header-nav" aria-label="Secondary Navigation">
		<div class="container">
			<div class="topbar-wrapper">
				<div class="">
					<i class="far fa-clock"></i>
					{{ \Carbon\Carbon::now()->format('l , d F Y') }}
				</div>
				<div class="tie-alignleft"></div>
				<div class="tie-alignright"></div>
			</div>
		</div>
	</nav>

	<div class="main-nav-wrapper">
		<nav id="main-nav" data-skin="search-in-main-nav" class="main-nav header-nav live-search-parent" style="line-height:120px" aria-label="Primary Navigation">
		<div class="container">
			<div class="main-menu-wrapper">
				<div class="header-layout-1-logo" style="width:350px">
					<div id="logo" class="image-logo" >
						<a title="JomFun" href="{{ url('/') }}">
							<picture class="tie-logo-default tie-logo-picture">
								<source class="tie-logo-source-default tie-logo-source" srcset="https://cdn..com/2023/01/kl-foodie-1.png">
								<img class="tie-logo-img-default tie-logo-img" src="https://cdn..com/2023/01/kl-foodie-1.png" alt="JomFun" width="350" height="80" style="max-height:80px; width: auto;" />
							</picture>
							<h1 class="h1-off">JomFun</h1>			
						</a>
					</div>
				</div>
				<div id="mobile-header-components-area_2" class="mobile-header-components">
					<ul class="components">
						<li class="mobile-component_menu custom-menu-link">
							<a href="#" id="mobile-menu-icon" class="">
								<span class="tie-mobile-menu-icon nav-icon is-layout-3"></span>
								<span class="screen-reader-text">Menu</span>
							</a>
						</li>
					</ul>
				</div>

				<div id="menu-components-wrap">		
					<div id="sticky-logo" class="image-logo">
						<a title="JomFun" href="https://.com/">
							<picture class="tie-logo-default tie-logo-picture">
								<source class="tie-logo-source-default tie-logo-source" srcset="https://cdn..com/2023/01/kl-foodie-1.png">
								<img class="tie-logo-img-default tie-logo-img" src="https://cdn..com/2023/01/kl-foodie-1.png" alt="JomFun"  />
							</picture>
						</a>
					</div>

					<div class="flex-placeholder"></div>
					<div class="main-menu main-menu-wrap tie-alignleft">	             
						<div id="main-nav-menu" class="main-menu header-menu">
							<ul id="menu-primary" class="menu" role="menubar">  
								@foreach($categories as $category)  
								<li id="menu-item-304" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-304">
									<a href="{{ url('category/' . $category->category_name) }}">{{ $category->category_name }}</a>
								</li>
								@endforeach
							</ul>
						</div>					
					</div>

					<ul class="components">		
						<li class="search-compact-icon menu-item custom-menu-link">
							<a href="#" class="tie-search-trigger">
								<i class="fas fa-search"></i>
								<span class="screen-reader-text">Search for</span>
							</a>
						</li>

						<li class="social-icons-item">
							<a class="social-link telegram-social-icon" rel="external noopener nofollow" target="_blank" href="https://t.me/">
								<i class="fab fa-telegram-plane"></i>
								<span class="screen-reader-text">Telegram</span>
							</a>
						</li>

						<li class="social-icons-item">
							<a class="social-link instagram-social-icon" rel="external noopener nofollow" target="_blank" href="http://www.instagram.com/">
								<i class="fab fa-instagram"></i>
								<span class="screen-reader-text">Instagram</span>
							</a>
						</li>

						<li class="social-icons-item">
							<a class="social-link youtube-social-icon" rel="external noopener nofollow" target="_blank" href="https://www.youtube.com/">
								<i class="fab fa-youtube"></i>
								<span class="screen-reader-text">YouTube</span>
							</a>
						</li>

						<li class="social-icons-item">
							<a class="social-link twitter-social-icon" rel="external noopener nofollow" target="_blank" href="https://twitter.com/">
								<i class="fab fa-x-twitter"></i> <!-- (new FA6 name) -->
								<span class="screen-reader-text">Twitter</span>
							</a>
						</li>

						<li class="social-icons-item">
							<a class="social-link facebook-social-icon" rel="external noopener nofollow" target="_blank" href="https://www.facebook.com/">
								<i class="fab fa-facebook-f"></i>
								<span class="screen-reader-text">Facebook</span>
							</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
		</nav>
	</div>
</header>