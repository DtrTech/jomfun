
<!DOCTYPE html>
<html lang="en-US" class="" data-skin="light">
	<head>
		@include('welcome.header')
	</head>

	<body data-rsssl=1 id="tie-body" class="wp-singular page-template-default page page-id-18 boxed-layout is-percent-width wrapper-has-shadow block-head-2 magazine2 is-thumb-overlay-disabled is-desktop is-header-layout-1 has-header-ad has-header-below-ad one-column-no-sidebar post-layout-1 has-mobile-share hide_banner_below_header hide_breaking_news hide_share_post_bottom hide_post_authorbio hide_post_nav hide_back_top_button">
		<div class="background-overlay">
			<div id="tie-container" class="site tie-container">
				<div id="tie-wrapper">
					@include('welcome.navtop')
					<div class="stream-item stream-item-top-wrapper">
						<div class="stream-item-top"></div>
					</div>
					<div id="content" class="site-content container">
						<div id="main-content-row" class="tie-row main-content-row">
							<div class="main-content tie-col-md-8 tie-col-xs-12" role="main">
								<article id="the-post" class="container-wrapper post-content">
									<header class="entry-header-outer">
										<nav id="breadcrumb">
											<a href="{{ url('/') }}">
												<i class="fa fa-home"></i> Home
											</a>
											<em class="delimiter">/</em>
											<span class="current">About Us</span>
										</nav>
										<div class="entry-header">
											<h1 class="post-title entry-title">About Us</h1>
										</div>
									</header>
									<div itemprop="articleBody" class="entry-content entry clearfix">
										<p>Hello fun-seekers, welcome to JomFun.</p>
										<p>JomFun is for people who love entertainment, lifestyle, and exciting events – that’s basically everyone!</p>
										<p>Started in 2025, JomFun showcases the best events, activities, and happenings across Malaysia. From concerts and festivals to travel experiences and local fun, we aim to bring you the latest and most exciting updates. Follow us to discover more unforgettable journeys!</p>
										<h3>Key Stats:</h3>
										<ul>
											<li>Monthly Website Traffic: 500,000+</li>
											<li>Facebook Followers: 150,000+</li>
											<li>Instagram Followers: 80,000+</li>
											<li>Event Listings: 1,200+ and growing</li>
											<li>Partnered Brands & Organizers: 100+</li>
										</ul>
										<p>*Last updated Sept 2025.</p>
										<h3>We are on:</h3>
										<p>
											Facebook - <a href="">JomFun</a>
											<br/>
											Instagram - <a href="">@jom.fun</a>
										</p>
										<p>
											<em>
												<a href="">*JomFun</a> is part of 
												<a href="#">Fun Media Sdn Bhd</a> 
												(1234567-V)
											</em>
											<br />
											<strong>Fun Media</strong> company also manages:
										</p>
										<ul class="rteindent1">
											<li><a href="#">EventBuzz Malaysia</a></li>
											<li><a href="#">TravelSpot Asia</a></li>
											<li><a href="#">EatPlayLove Malaysia</a></li>
											<li><a href="#">Lifestyle Now</a></li>
										</ul>
										<h3>Contact:</h3>
										<p><b>Address: </b>123, Jalan Tun Razak, 50400 Kuala Lumpur, Malaysia</p>
										<p>	For <strong>advertising</strong> inquiries:<br/>
											Email: <a href="mailto:ads@jomfun.my">ads@jomfun.my</a><br/>
											Tel: <a href="tel:+60123456789">+6012-345 6789 (Alex)</a>
										</p>
										<p>	For <strong>collaboration or other</strong> inquiries:<br/>
											Email: <a href="mailto:hello@jomfun.my">hello@jomfun.my</a>
										</p>
										<p>	For <strong>career</strong> opportunities:<br/>
											Email: <a href="mailto:hr@jomfun.my">hr@jomfun.my</a>
										</p>
									</div>

								</article>
								<div class="stream-item stream-item-below-post"></div>
								<div class="post-components"></div>
							</div>
						</div>
					</div>

					@include('welcome.footer')
		
				</div>

				@include('welcome.secondary_sidebar')
				
			</div>
		</div>
		
		@include('welcome.footer_script')

	</body>
</html>