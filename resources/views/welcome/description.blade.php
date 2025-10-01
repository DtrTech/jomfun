<!DOCTYPE html>
<html lang="en-US" class="" data-skin="light">
	<head>
		<?php
		$project = DB::table('projects')->where('id', $id)->first();
		$page_seo = $project ? $project->page_seo : '';
		?>
		
		<meta charset="UTF-8">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'>
		<style>
			img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }
		</style>
		{!! $page_seo !!}
		<script type="text/javascript"></script>
		<script id="klfoo-ready">
			window.advanced_ads_ready=function(e,a){a=a||"complete";var d=function(e){return"interactive"===a?"loading"!==e:"complete"===e};d(document.readyState)?e():document.addEventListener("readystatechange",(function(a){d(a.target.readyState)&&e()}),{once:"interactive"===a})},window.advanced_ads_ready_queue=window.advanced_ads_ready_queue||[];
		</script>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Jomfun</title>
		
		<!-- Favicon -->
		<link rel="icon" href="{{ asset('image/jomfun/J.png') }}" sizes="32x32">
		<link rel="icon" href="{{ asset('image/jomfun/J.png') }}" sizes="192x192">
		<link rel="apple-touch-icon" href="{{ asset('image/jomfun/J.png') }}">
		<meta name="msapplication-TileImage" content="{{ asset('image/jomfun/J.png') }}">
		
		<!-- Essential WordPress CSS -->
		<link rel="stylesheet" href="https://klfoodie.com/wp-includes/css/dist/block-library/style.min.css?ver=6.8.2">
		<link rel="stylesheet" href="https://klfoodie.com/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.17">
		<link rel="stylesheet" href="https://klfoodie.com/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=6.8.2">
		
		<!-- Theme CSS -->
		<link rel="stylesheet" href="https://klfoodie.com/wp-content/themes/jannah/assets/css/base.min.css?ver=5.4.5">
		<link rel="stylesheet" href="https://klfoodie.com/wp-content/themes/jannah/assets/css/style.min.css?ver=5.4.5">
		<link rel="stylesheet" href="https://klfoodie.com/wp-content/themes/jannah/assets/css/widgets.min.css?ver=5.4.5">
		<link rel="stylesheet" href="https://klfoodie.com/wp-content/themes/jannah/assets/css/helpers.min.css?ver=5.4.5">
		<link rel="stylesheet" href="https://klfoodie.com/wp-content/themes/jannah/assets/css/fontawesome.css?ver=5.4.5">
		<link rel="stylesheet" href="https://klfoodie.com/wp-content/themes/jannah/assets/ilightbox/dark-skin/skin.css?ver=5.4.5">
		<link rel="stylesheet" href="https://klfoodie.com/wp-content/themes/jannah/assets/css/single.min.css?ver=5.4.5">
		<link rel="stylesheet" href="https://klfoodie.com/wp-content/themes/jannah/assets/css/print.css?ver=5.4.5" media="print">
		
		<!-- Plugin CSS -->
		<link rel="stylesheet" href="https://klfoodie.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=6.1.1">
		<link rel="stylesheet" href="https://klfoodie.com/wp-content/plugins/easy-table-of-contents/assets/css/screen.min.css?ver=2.0.76">
		<link rel="stylesheet" href="https://klfoodie.com/wp-content/plugins/jetpack/modules/likes/style.css?ver=14.9.1">
		
		<!-- Essential JavaScript -->
		<script src="https://klfoodie.com/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6"></script>
		<script src="https://klfoodie.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"></script>
		<script src="https://klfoodie.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"></script>
		
		<!-- WordPress Meta -->
		<link rel="https://api.w.org/" href="https://klfoodie.com/wp-json/">
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://klfoodie.com/xmlrpc.php?rsd">
		<meta name="generator" content="WordPress 6.8.2">
		<meta name="generator" content="Site Kit by Google 1.160.1">
		
		<!-- Facebook -->
		<meta property="fb:pages" content="112274292745476">
		
		<!-- Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109829759-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-109829759-1');
		</script>
		
		<!-- Ads -->
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({
				google_ad_client: "ca-pub-4743763503059082",
				enable_page_level_ads: true
			});
		</script>
		
		<!-- Custom Styles -->
		<style>
			/* WordPress Emoji Styles */
			img.wp-smiley, img.emoji {
				display: inline !important;
				border: none !important;
				box-shadow: none !important;
				height: 1em !important;
				width: 1em !important;
				margin: 0 0.07em !important;
				vertical-align: -0.1em !important;
				background: none !important;
				padding: 0 !important;
			}
			
			/* Table of Contents */
			div#ez-toc-container .ez-toc-title { font-size: 120%; font-weight: 500; }
			div#ez-toc-container ul li, div#ez-toc-container ul li a { font-size: 95%; font-weight: 500; }
			div#ez-toc-container nav ul ul li { font-size: 90%; }
			
			/* Facebook Likebox */
			.widget_facebook_likebox { overflow: hidden; }
			
			/* Feedzy RSS */
			.feedzy-rss-link-icon:after {
				content: url("https://klfoodie.com/wp-content/plugins/feedzy-rss-feeds/img/external-link.png");
				margin-left: 3px;
			}
			
			/* Custom Dable Widget */
			.dable-widget { display: none; }
			.single-post .dable-widget { display: block !important; }
			
			/* Responsive Ad Viewports */
			.ai-viewports { --ai: 1; }
			.ai-viewport-3 { display: none !important; }
			.ai-viewport-2 { display: none !important; }
			.ai-viewport-1 { display: inherit !important; }
			.ai-viewport-0 { display: none !important; }
			
			@media (min-width: 768px) and (max-width: 979px) {
				.ai-viewport-1 { display: none !important; }
				.ai-viewport-2 { display: inherit !important; }
			}
			
			@media (max-width: 767px) {
				.ai-viewport-1 { display: none !important; }
				.ai-viewport-3 { display: inherit !important; }
			}
			
			/* WordPress Stats */
			img#wpstats { display: none; }
		</style>
		
		<meta name="agd-partner-manual-verification">
	</head>

	<body data-rsssl=1 id="tie-body" class="wp-singular post-template-default single single-post postid-84070 single-format-standard boxed-layout is-percent-width wrapper-has-shadow block-head-2 magazine2 is-thumb-overlay-disabled is-desktop is-header-layout-1 has-header-ad has-header-below-ad sidebar-right has-sidebar post-layout-3 wide-title-narrow-media is-standard-format has-mobile-share hide_banner_below_header hide_breaking_news hide_share_post_bottom hide_post_authorbio hide_post_nav hide_back_top_button">
		<div class="background-overlay">
			<div id="tie-container" class="site tie-container">
				<div id="tie-wrapper">
					@include("welcome.navtop")
					<div class="stream-item stream-item-top-wrapper">
						<div class="stream-item-top"></div>
					</div>

					<div class="container fullwidth-entry-title-wrapper">
						<div class="container-wrapper fullwidth-entry-title">
							<header class="entry-header-outer">
								<nav id="breadcrumb">
									<a href="{{ url('/') }}">
										<i class="fa fa-home"></i> Home
									</a>
									<em class="delimiter">/</em>
									<a href="{{ url('/category/' . strtolower($project->category_name)) }}">{{ $project->category_name }}</a>
									<em class="delimiter">/</em>
									<span class="current">{{ $project->title }}</span>
								</nav>
								<div class="entry-header">
									<span class="post-cat-wrap">
										<a class="post-cat tie-cat-3" href="{{ url('/category/' . strtolower($project->category_name)) }}">{{ $project->category_name }}</a>
									</span>
									<h1 class="post-title entry-title">{{ $project->title }}</h1>
									<h2 class="entry-sub-title">{{ $project->sub_title }}</h2>
									<div id="single-post-meta" class="post-meta clearfix">
										<span class="author-meta single-author with-avatars">
											<span class="meta-item meta-author-wrapper meta-author-49">
												<span class="meta-author-avatar">
													<a href="">
														<img alt='Photo of {{ $project->author }}' src="{{ $project->author_image ? asset($project->author_image) : 'https://secure.gravatar.com/avatar/17bbc2d36ab2cd21146949c7e05e9f1d50595287eeeb4c8f37faf69d727634e1?s=140&r=g' }}" srcset="{{ $project->author_image ? asset($project->author_image) : 'https://secure.gravatar.com/avatar/17bbc2d36ab2cd21146949c7e05e9f1d50595287eeeb4c8f37faf69d727634e1?s=140&r=g' }}" class='avatar avatar-140 photo' height='140' width='140' loading='lazy' decoding='async'/>
													</a>
												</span>
												<span class="meta-author">
													<a href="" class="author-name tie-icon" title="{{ $project->author }}">{{ $project->author }}</a>
												</span>
											</span>
										</span>
										<span class="meta-item">
											<i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($project->publish_time)->format('Y-m-d') }}
										</span>
										<div class="tie-alignright">
											<span class="meta-item">
												<i class="far fa-comment"></i> 0
											</span>
											<span class="meta-item">
												<i class="far fa-bookmark"></i> 3 minutes read
											</span>
										</div>
									</div>	
								</div>
							</header>
						</div>
					</div>

					<div id="content" class="site-content container">
						<div id="main-content-row" class="tie-row main-content-row">
							<div class="main-content tie-col-md-8 tie-col-xs-12" role="main">
								<article id="the-post" class="container-wrapper post-content tie-standard">
									<div class='code-block code-block-8' style='margin: 8px 0; clear: both;'>
										<p>{!! $project->description !!}</p>
										<div class="post-bottom-meta post-bottom-tags post-tags-modern">
											<div class="post-bottom-meta-title">
												<span class="tie-icon-tags" aria-hidden="true"></span> Tags
											</div>
											<!-- <span class="tagcloud">
												<a href="https://klfoodie.com/tag/adidas/" rel="tag">adidas</a> 
												<a href="https://klfoodie.com/tag/dao/" rel="tag">dao</a> 
												<a href="https://klfoodie.com/tag/klang-valley/" rel="tag">Klang Valley</a> 
												<a href="https://klfoodie.com/tag/kuala-lumpur/" rel="tag">Kuala Lumpur</a> 
												<a href="https://klfoodie.com/tag/petaling-jaya/" rel="tag">Petaling Jaya</a> 
												<a href="https://klfoodie.com/tag/soya/" rel="tag">soya</a>
											</span> -->
										</div>
									</div>
									<div id="post-extra-info">
										<div class="theiaStickySidebar">
											<div id="single-post-meta" class="post-meta clearfix">
												<span class="author-meta single-author with-avatars">
													<span class="meta-item meta-author-wrapper meta-author-49">
														<span class="meta-author-avatar">
															<a href="">
																<img alt='Photo of {{ $project->author }}' src="{{ $project->author_image ? asset($project->author_image) : 'https://secure.gravatar.com/avatar/17bbc2d36ab2cd21146949c7e05e9f1d50595287eeeb4c8f37faf69d727634e1?s=140&r=g' }}" srcset="{{ $project->author_image ? asset($project->author_image) : 'https://secure.gravatar.com/avatar/17bbc2d36ab2cd21146949c7e05e9f1d50595287eeeb4c8f37faf69d727634e1?s=140&r=g' }}" class='avatar avatar-140 photo' height='140' width='140' loading='lazy' decoding='async'/>
															</a>
														</span>
														<span class="meta-author">
															<a href="https://klfoodie.com/author/kathleen/" class="author-name tie-icon" title="{{ $project->author }}">{{ $project->author }}</a>
														</span>
													</span>
												</span>
												<span class="far fa-clock">August 26, 2025</span>
												<div class="tie-alignright">
													<span class="meta-comment tie-icon meta-item fa-before">0</span>
													<span class="meta-reading-time meta-item">
														<span class="tie-icon-bookmark" aria-hidden="true"></span> 3 minutes read
													</span> 
												</div>
											</div>		
										</div>
									</div>
									<div class="clearfix"></div>
						
								</article>
								<div class="stream-item stream-item-below-post"></div>
								<div class="post-components">
									<div id="comments" class="comments-area">
										<div id="add-comment-block" class="container-wrapper">	
											<div id="respond" class="comment-respond">
												<h3 id="reply-title" class="comment-reply-title the-global-title">Leave a Reply 
													<small>
														<a rel="nofollow" id="cancel-comment-reply-link" href="/first-adidas-dao-you-had-us-at-dao-collaboration-now-happening-at-selected-adidas-stores/#respond" style="display:none;">Cancel reply</a>
													</small>
												</h3>
												<form action="https://klfoodie.com/wp-comments-post.php" method="post" id="commentform" class="comment-form">
													<p class="comment-notes">
														<span id="email-notes">Your email address will not be published.</span> 
														<span class="required-field-message">Required fields are marked 
															<span class="required">*</span>
														</span>
													</p>
													<p class="comment-form-comment">
														<label for="comment">Comment 
															<span class="required">*</span>
														</label> 
														<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required></textarea>
													</p>
													<p class="comment-form-author">
														<label for="author">Name 
															<span class="required">*</span>
														</label> 
														<input id="author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name" required />
													</p>
													<p class="comment-form-email">
														<label for="email">Email 
															<span class="required">*</span>
														</label> 
														<input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" autocomplete="email" required />
													</p>
													<p class="comment-form-url">
														<label for="url">Website</label> 
														<input id="url" name="url" type="url" value="" size="30" maxlength="200" autocomplete="url" />
													</p>
													<p class="comment-form-cookies-consent">
														<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /> 
														<label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
													</p>
													<p class="comment-subscription-form">
														<input type="checkbox" name="subscribe_comments" id="subscribe_comments" value="subscribe" style="width: auto; -moz-appearance: checkbox; -webkit-appearance: checkbox;" /> 
														<label class="subscribe-label" id="subscribe-label" for="subscribe_comments">Notify me of follow-up comments by email.</label>
													</p>
													<p class="comment-subscription-form">
														<input type="checkbox" name="subscribe_blog" id="subscribe_blog" value="subscribe" style="width: auto; -moz-appearance: checkbox; -webkit-appearance: checkbox;" /> 
														<label class="subscribe-label" id="subscribe-blog-label" for="subscribe_blog">Notify me of new posts by email.</label>
													</p>
													<p class="form-submit">
														<input name="submit" type="submit" id="submit" class="submit" value="Post Comment" /> 
														<input type='hidden' name='comment_post_ID' value='84070' id='comment_post_ID' />
														<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
													</p>
													<p style="display: none;">
														<input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="2954ff1ed7" />
													</p>
													<p style="display: none !important;" class="akismet-fields-container" data-prefix="ak_">
														<label>&#916;
															<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea>
														</label>
														<input type="hidden" id="ak_js_1" name="ak_js" value="126"/>
														<script>document.getElementById( "ak_js_1" ).setAttribute( "value", ( new Date() ).getTime() );</script>
													</p>
												</form>	
											</div>
										</div>
									</div>
								</div>
							</div>

							@include('welcome.sidebar')

						</div>
					</div>

					@include('welcome.footer')

				</div>
			
				@include('welcome.secondary_sidebar')

			</div>
		</div>

		<div style="display:none">
			<div class="grofile-hash-map-f737bb21769d56f12b70cbeba241d17f"></div>
		</div>
			<noscript><img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=546973548823310&ev=PageView&noscript=1&cd%5Bpost_category%5D=Food&cd%5Bpage_title%5D=FIRST+adidas+%26+d%C3%A1o+%22You+Had+Us+at+d%C3%A1o%22+Collaboration+Now+Happening+At+Selected+adidas+Stores&cd%5Bpost_type%5D=post&cd%5Bpost_id%5D=84070&cd%5Bplugin%5D=PixelYourSite&cd%5Buser_role%5D=guest&cd%5Bevent_url%5D=klfoodie.com%2Ffirst-adidas-dao-you-had-us-at-dao-collaboration-now-happening-at-selected-adidas-stores%2F" alt=""></noscript>
		<div id="jp-carousel-loading-overlay">
			<div id="jp-carousel-loading-wrapper">
				<span id="jp-carousel-library-loading">&nbsp;</span>
			</div>
		</div>

		<div class="jp-carousel-overlay" style="display: none;">
			<div class="jp-carousel-container">
				<div class="jp-carousel-wrap swiper jp-carousel-swiper-container jp-carousel-transitions" itemscope itemtype="https://schema.org/ImageGallery">
					<div class="jp-carousel swiper-wrapper"></div>
					<div class="jp-swiper-button-prev swiper-button-prev">
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask id="maskPrev" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="9" height="12">
								<path d="M16.2072 16.59L11.6496 12L16.2072 7.41L14.8041 6L8.8335 12L14.8041 18L16.2072 16.59Z" fill="white"/>
							</mask>
							<g mask="url(#maskPrev)">
								<rect x="0.579102" width="23.8823" height="24" fill="#FFFFFF"/>
							</g>
						</svg>
					</div>
					<div class="jp-swiper-button-next swiper-button-next">
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask id="maskNext" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="8" height="12">
								<path d="M8.59814 16.59L13.1557 12L8.59814 7.41L10.0012 6L15.9718 12L10.0012 18L8.59814 16.59Z" fill="white"/>
							</mask>
							<g mask="url(#maskNext)">
								<rect x="0.34375" width="23.8822" height="24" fill="#FFFFFF"/>
							</g>
						</svg>
					</div>
				</div>

				<div class="jp-carousel-close-hint">
					<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<mask id="maskClose" mask-type="alpha" maskUnits="userSpaceOnUse" x="5" y="5" width="15" height="14">
							<path d="M19.3166 6.41L17.9135 5L12.3509 10.59L6.78834 5L5.38525 6.41L10.9478 12L5.38525 17.59L6.78834 19L12.3509 13.41L17.9135 19L19.3166 17.59L13.754 12L19.3166 6.41Z" fill="white"/>
						</mask>
						<g mask="url(#maskClose)">
							<rect x="0.409668" width="23.8823" height="24" fill="#FFFFFF"/>
						</g>
					</svg>
				</div>

				<div class="jp-carousel-info">
					<div class="jp-carousel-info-footer">
						<div class="jp-carousel-pagination-container">
							<div class="jp-swiper-pagination swiper-pagination"></div>
							<div class="jp-carousel-pagination"></div>
						</div>
						<div class="jp-carousel-photo-title-container">
							<h2 class="jp-carousel-photo-caption"></h2>
						</div>
						<div class="jp-carousel-photo-icons-container">
							<a href="#" class="jp-carousel-icon-btn jp-carousel-icon-info" aria-label="Toggle photo metadata visibility">
								<span class="jp-carousel-icon">
									<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<mask id="maskInfo" mask-type="alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="21" height="20">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M12.7537 2C7.26076 2 2.80273 6.48 2.80273 12C2.80273 17.52 7.26076 22 12.7537 22C18.2466 22 22.7046 17.52 22.7046 12C22.7046 6.48 18.2466 2 12.7537 2ZM11.7586 7V9H13.7488V7H11.7586ZM11.7586 11V17H13.7488V11H11.7586ZM4.79292 12C4.79292 16.41 8.36531 20 12.7537 20C17.142 20 20.7144 16.41 20.7144 12C20.7144 7.59 17.142 4 12.7537 4C8.36531 4 4.79292 7.59 4.79292 12Z" fill="white"/>
										</mask>
										<g mask="url(#maskInfo)">
											<rect x="0.8125" width="23.8823" height="24" fill="#FFFFFF"/>
										</g>
									</svg>
								</span>
							</a>
							<a href="#" class="jp-carousel-icon-btn jp-carousel-icon-comments" aria-label="Toggle photo comments visibility">
								<span class="jp-carousel-icon">
									<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<mask id="maskComments" mask-type="alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="21" height="20">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M4.3271 2H20.2486C21.3432 2 22.2388 2.9 22.2388 4V16C22.2388 17.1 21.3432 18 20.2486 18H6.31729L2.33691 22V4C2.33691 2.9 3.2325 2 4.3271 2ZM6.31729 16H20.2486V4H4.3271V18L6.31729 16Z" fill="white"/>
										</mask>
										<g mask="url(#maskComments)">
											<rect x="0.34668" width="23.8823" height="24" fill="#FFFFFF"/>
										</g>
									</svg>

									<span class="jp-carousel-has-comments-indicator" aria-label="This image has comments."></span>
								</span>
							</a>
						</div>
					</div>
					<div class="jp-carousel-info-extra">
						<div class="jp-carousel-info-content-wrapper">
							<div class="jp-carousel-photo-title-container">
								<h2 class="jp-carousel-photo-title"></h2>
							</div>
							<div class="jp-carousel-comments-wrapper">
								<div id="jp-carousel-comments-loading">
									<span>Loading Comments...</span>
								</div>
								<div class="jp-carousel-comments"></div>
								<div id="jp-carousel-comment-form-container">
									<span id="jp-carousel-comment-form-spinner">&nbsp;</span>
									<div id="jp-carousel-comment-post-results"></div>
										<form id="jp-carousel-comment-form">
											<label for="jp-carousel-comment-form-comment-field" class="screen-reader-text">Write a Comment...</label>
											<textarea
												name="comment"
												class="jp-carousel-comment-form-field jp-carousel-comment-form-textarea"
												id="jp-carousel-comment-form-comment-field"
												placeholder="Write a Comment...">
											</textarea>
											<div id="jp-carousel-comment-form-submit-and-info-wrapper">
												<div id="jp-carousel-comment-form-commenting-as">
													<fieldset>
														<label for="jp-carousel-comment-form-email-field">Email (Required)</label>
														<input type="text" name="email" class="jp-carousel-comment-form-field jp-carousel-comment-form-text-field" id="jp-carousel-comment-form-email-field" />
													</fieldset>
													<fieldset>
														<label for="jp-carousel-comment-form-author-field">Name (Required)</label>
														<input type="text" name="author" class="jp-carousel-comment-form-field jp-carousel-comment-form-text-field" id="jp-carousel-comment-form-author-field" />
													</fieldset>
													<fieldset>
														<label for="jp-carousel-comment-form-url-field">Website</label>
														<input type="text" name="url" class="jp-carousel-comment-form-field jp-carousel-comment-form-text-field" id="jp-carousel-comment-form-url-field" />
													</fieldset>
												</div>
												<input
													type="submit"
													name="submit"
													class="jp-carousel-comment-form-button"
													id="jp-carousel-comment-form-button-submit"
													value="Post Comment" />
											</div>
										</form>
									</div>
								</div>
								<div class="jp-carousel-image-meta">
									<div class="jp-carousel-title-and-caption">
										<div class="jp-carousel-photo-info">
											<h3 class="jp-carousel-caption" itemprop="caption description"></h3>
										</div>
										<div class="jp-carousel-photo-description"></div>
									</div>
									<ul class="jp-carousel-image-exif" style="display: none;"></ul>
									<a class="jp-carousel-image-download" href="#" target="_blank" style="display: none;">
										<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="3" width="19" height="18">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M5.84615 5V19H19.7775V12H21.7677V19C21.7677 20.1 20.8721 21 19.7775 21H5.84615C4.74159 21 3.85596 20.1 3.85596 19V5C3.85596 3.9 4.74159 3 5.84615 3H12.8118V5H5.84615ZM14.802 5V3H21.7677V10H19.7775V6.41L9.99569 16.24L8.59261 14.83L18.3744 5H14.802Z" fill="white"/>
											</mask>
											<g mask="url(#mask0)">
												<rect x="0.870605" width="23.8823" height="24" fill="#FFFFFF"/>
											</g>
										</svg>
										<span class="jp-carousel-download-text"></span>
									</a>
									<div class="jp-carousel-image-map" style="display: none;"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		@include('welcome.footer_script')

	</body>
</html>