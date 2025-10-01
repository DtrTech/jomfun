
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
										<span class="current">Privacy Policy</span>
									</nav>
									<div class="entry-header">
										<h1 class="post-title entry-title">Privacy Policy</h1>
									</div>
								</header>
								<div itemprop="articleBody" class="entry-content entry clearfix">
									<p>&nbsp;</p>
									<p>Affiliate Disclosure, click <a href=""><em>here</em></a>.</p>
									<p><b>Privacy Policy for www.jomfun.com</b></p>
									<p>If you require any more information or have any questions about our privacy policy, please feel free to contact us by email at hellojomfun@gmail.com.</p>
									<p>At www.jomfun.com, the privacy of our visitors is of extreme importance to us. This privacy policy document outlines the types of personal information is received and collected by www.jomfun.com and how it is used.</p>
									<p><b>Log Files</b><br />
									Like many other Web sites, www.jomfun.com makes use of log files. The information inside the log files includes internet protocol ( IP ) addresses, type of browser, Internet Service Provider ( ISP ), date/time stamp, referring/exit pages, and number of clicks to analyze trends, administer the site, track user’s movement around the site, and gather demographic information. IP addresses, and other such information are not linked to any information that is personally identifiable.</p>
									<p><b>Cookies and Web Beacons</b><br />
									www.jomfun.com does use cookies to store information about visitors preferences, record user-specific information on which pages the user access or visit, customize Web page content based on visitors browser type or other information that the visitor sends via their browser.</p>
									<p><b>DoubleClick DART Cookie</b><br />
									.:: Google, as a third party vendor, uses cookies to serve ads on www.jomfun.com.<br />
									.:: Google’s use of the DART cookie enables it to serve ads to users based on their visit to www.jomfun.com and other sites on the Internet.<br />
									.:: Users may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy at the following URL – http://www.google.com/privacy_ads.html</p>
									<p>Some of our advertising partners may use cookies and web beacons on our site. Our advertising partners include ….<br />
									Google Adsense</p>
									<p>These third-party ad servers or ad networks use technology to the advertisements and links that appear on www.jomfun.com send directly to your browsers. They automatically receive your IP address when this occurs. Other technologies ( such as cookies, JavaScript, or Web Beacons ) may also be used by the third-party ad networks to measure the effectiveness of their advertisements and / or to personalize the advertising content that you see.</p>
									<p>www.jomfun.com has no access to or control over these cookies that are used by third-party advertisers.</p>
									<p>You should consult the respective privacy policies of these third-party ad servers for more detailed information on their practices as well as for instructions about how to opt-out of certain practices. www.klfoodie.com’s privacy policy does not apply to, and we cannot control the activities of, such other advertisers or web sites.</p>
									<p>If you wish to disable cookies, you may do so through your individual browser options. More detailed information about cookie management with specific web browsers can be found at the browsers’ respective websites.</p>
									<p>&nbsp;</p>
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
			
			@include('welcome.footer_script')

	</body>
</html>