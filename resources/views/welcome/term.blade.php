
<!DOCTYPE html>
<html lang="en-US" class="" data-skin="light">
	<head>
		@include('welcome.header')
	</head>

	<body data-rsssl=1 id="tie-body" class="wp-singular page-template-default page page-id-26 wp-theme-jannah boxed-layout is-percent-width wrapper-has-shadow block-head-2 magazine2 is-thumb-overlay-disabled is-desktop is-header-layout-1 has-header-ad has-header-below-ad sidebar-right has-sidebar post-layout-1 has-mobile-share hide_banner_below_header hide_breaking_news hide_share_post_bottom hide_post_authorbio hide_post_nav hide_back_top_button">
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
										<span class="current">Terms and Conditions</span>
									</nav>
									<div class="entry-header">
										<h1 class="post-title entry-title">Terms and Conditions</h1>
									</div>
								</header>
								<div itemprop="articleBody" class="entry-content entry clearfix">
									<p><b>Terms and Conditions of www.jomfun.com (For users and/or individuals)</b></p>
									<p>Below are the Terms and Conditions for www.jomfun.com Please read these carefully. If you need to contact us regarding any aspect of the following terms of use of our website, please contact us on the following email address – hellojomfun@gmail.com.</p>
									<p>By accessing the content of www.jomfun.com ( hereafter referred to as website ) you agree to the terms and conditions set out herein and also accept our <a href="{{ url('/privacy') }}">Privacy Policy</a>. If you do not agree to any of the terms and conditions you should not continue to use the Website and leave immediately.</p>
									<p>You agree that you shall not use the website for any illegal purposes, and that you will respect all applicable laws and regulations.</p>
									<p>You agree not to use the website in a way that may impair the performance, corrupt or manipulate the content or information available on the website or reduce the overall functionality of the website.</p>
									<p>You agree not to compromise the security of the website or attempt to gain access to secured areas of the website or attempt to access any sensitive information you may believe exist on the website or server where it is hosted.</p>
									<p>You agree to be fully responsible for any claim, expense, losses, liability, costs including legal fees incurred by us arising from any infringement of the terms and conditions in this agreement and to which you will have agreed if you continue to use the website.</p>
									<p>The reproduction, distribution in any method whether online or offline is strictly prohibited. The work on the website and the images, logos, text and other such information is the property of www.jomfun.com ( unless otherwise stated ).</p>
									<p><b>Disclaimer</b></p>
									<p>Though we strive to be completely accurate in the information that is presented on our site, and attempt to keep it as up to date as possible, in some cases, some of the information you find on the website may be slightly outdated.</p>
									<p>www.jomfun.com reserves the right to make any modifications or corrections to the information you find on the website at any time without notice.</p>
									<p><b>Terms and Conditions of JomFun (For businesses)</b></p>
									<p>Below are the terms and conditions of JomFun. By engaging the service of JomFun (a subsidiary of Good Foodie Medis Sdn Bhd), you agree to the terms and conditions set out herein.</p>
									<p><strong style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', 'Open Sans', Arial, sans-serif;">Refund policy</strong></p>
									<p>All paid service fees are non-refundable.</p>
									<p><strong>Fulfillment </strong></p>
									<p>Not applicable.</p>
									<p><b>Change to the Terms and Conditions of Use</b></p>
									<p>We reserve the right to make changes and to revise the above mentioned Terms and Conditions.</p>
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