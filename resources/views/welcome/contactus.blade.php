
<!DOCTYPE html>
<html lang="en-US" class="" data-skin="light">
	<head>
		@include('welcome.header')
	</head>

	<body data-rsssl=1 id="tie-body" class="boxed-layout is-percent-width wrapper-has-shadow block-head-2 magazine2 is-thumb-overlay-disabled is-desktop is-header-layout-1 has-header-ad has-header-below-ad sidebar-right has-sidebar post-layout-1 has-mobile-share hide_banner_below_header hide_breaking_news hide_share_post_bottom hide_post_authorbio hide_post_nav hide_back_top_button">
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
										<nav id="breadcrumb"><a href="{{ url('/') }}">
													<i class="fa fa-home"></i> Home
												</a><em class="delimiter">/</em><span class="current">Contact Us</span></nav>
											<h1 class="post-title entry-title">Contact Us</h1>
										</div>
									</header>
									<div itemprop="articleBody" class="entry-content entry clearfix">
										<p>If you’d like to get in touch, drop us a message and we’ll do our best to respond within 1 day. We receive many requests daily, so if your email goes unanswered, it means we may not be able to assist at the moment.</p>
										<p>If you’d like to recommend us an event, activity, or place to feature, let us know via our <a href="">Facebook message</a>. Please note: you must have no commercial relationship with the event or business you’re recommending.</p>
										<p><strong>For general enquiries<br /></strong>
										Email: <a href="mailto:hello@jomfun.my">hello@jomfun.my</a><br />
										Telephone: <a href="tel:+60123456789">+6012-345 6789</a></p>
										<p><strong>For advertising enquiries<br /></strong>
										Email: <a href="mailto:ads@jomfun.my">ads@jomfun.my</a></p>
										<div class="padvs">
										<p><strong>Address<br /></strong>
										123, Jalan Tun Razak, 50400 Kuala Lumpur, Malaysia.</p>
										</div>
										<div class="padvs">
										<p><strong>Press<br /></strong>
										<a href="">JomFun Media Team</a><br />
										Email: <a href="mailto:press@jomfun.my">press@jomfun.my</a></p>
										</div>
									</div>
								</article>
								<div class="stream-item stream-item-below-post"></div>
								<div class="post-components"></div>
							</div>

							@include('welcome.sidebar')

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