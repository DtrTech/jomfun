<!DOCTYPE html>
<html lang="en-US" data-skin="light">
	<head>
		<?php
		$setup = DB::table('setups')->first();
		$seo_header = $setup ? $setup->seo_header : '';
		?>
		<meta charset="UTF-8">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'>
		<style>
			img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }
		</style>
		{!! $seo_header !!}
		<script type="text/javascript"></script>
		<script id="klfoo-ready"></script>
		@include('welcome.header')
	</head>

	<body data-rsssl=1 id="tie-body" class="home wp-singular page-template-default page page-id-67755 wp-theme-jannah boxed-layout is-percent-width wrapper-has-shadow block-head-2 magazine2 is-thumb-overlay-disabled is-desktop is-header-layout-1 has-header-ad has-header-below-ad has-builder hide_banner_below_header hide_breaking_news hide_share_post_bottom hide_post_authorbio hide_post_nav hide_back_top_button aa-prefix-klfoo-">
		<div id="rfp-ODU0OjIyNjEx"><ins data-rfp-display-adspot-id="ODU0OjIyNjEx" style="display:none"></ins></div>
		<script type="text/javascript">RFP.Display.Default.run()</script>

		<div class="background-overlay">
			<div id="tie-container" class="site tie-container">
				<div id="tie-wrapper">
					@include('welcome.navtop')
					<div class="stream-item stream-item-top-wrapper">
						<div class="stream-item-top"></div>
					</div>
					<div class="stream-item stream-item-below-header">
						<div id="leaderboardSpace" style="text-align:center; padding-top: 10px; padding-bottom: 10px;">
							<div id='div-gpt-ad-1683022745852-0' style='min-width: 320px; min-height: 50px;'>
								<script>
									if(screen.width < 500 || navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i)) {
										googletag.cmd.push(function() { 
											googletag.defineSlot('/43893936/KLF_MobileLeaderboard', [320, 50], 'div-gpt-ad-1683022745852-0').addService(googletag.pubads());
											googletag.display('div-gpt-ad-1683022745852-0'); 
										});
									}
									else{
										document.getElementById('leaderboardSpace').style.visibility = 'hidden';
										document.getElementById('leaderboardSpace').style.paddingTop = '0px';
										document.getElementById('leaderboardSpace').style.paddingBottom = '0px';
										document.getElementById('leaderboardSpaceLabel').style.paddingTop = "0px";
										document.getElementById('leaderboardSpaceLabel').style.maxHeight = '0px';
										document.getElementById('div-gpt-ad-1683022745852-0').style.minWidth  = '0px';
										document.getElementById('div-gpt-ad-1683022745852-0').style.minHeight = '0px';
									}
								</script>
							</div>
						</div>
					</div>

					<div id="tiepost-67755-section-7296" class="section-wrapper container normal-width without-background">
						<div class="section-item is-first-section sidebar-right has-sidebar" style="" >
							<div class="container-normal">
								<div class="tie-row main-content-row">
									<div class="main-content tie-col-md-8 tie-col-xs-12" role="main">
										<div id="tie-block_2325" class="mag-box big-posts-box" data-current="1">
											<div class="container-wrapper">
												<div class="mag-box-title the-global-title">
													<h3>This Just In 🔥</h3>
												</div>
												<div class="mag-box-container clearfix">
													<ul class="posts-items posts-list-container">
														@foreach($projects as $project)
														<li class="{{ $project->title }}">
															<a aria-label="{{ $project->title }}" href="{{ url('/' . \Illuminate\Support\Str::slug(\Illuminate\Support\Str::words($project->title, 10))) }}" class="post-thumb">
																<span class="post-cat-wrap">
																	<span class="post-cat tie-cat-660">{{ $project->category_name }}</span>
																</span>
																<img width="390" height="220" src="{{ $project->project_image ? asset($project->project_image) : 'https://cdn.klfoodie.com/2025/08/MDEC-Hotel-Cover-3-1-390x220.png' }}" class="attachment-jannah-image-large size-jannah-image-large wp-post-image" alt="">
															</a>
															<div class="post-details">
																<div class="post-meta clearfix">
																	<span class="author-meta single-author no-avatars">
																		<span class="meta-item meta-author-wrapper meta-author-49">
																			<span class="meta-author">
																				<i class="fas fa-user"></i>
																				<a class="" title="{{ $project->author }}">{{ $project->author }}</a>
																			</span>
																		</span>
																	</span>

																	<span class="publish-time">
																		<i class="far fa-clock"></i>
																		{{ $project->publish_time }}
																	</span>
																	<div class="tie-alignright"></div>
																</div>
																<h2 class="post-title">
																	<a href="{{ url('/' . \Illuminate\Support\Str::slug(\Illuminate\Support\Str::words($project->title, 10))) }}">{{ $project->title }}</a>
																</h2>
															</div>
														</li>
														@endforeach
													</ul>
													<div class="clearfix"></div>
												</div>
												<div class="pages-nav">					
													<div class="pages-numbers pages-standard">
														@if ($projects->onFirstPage())
														<span class="first-page first-last-pages disabled">
															<!-- <span class="fas fa-arrow-left"></span> Previous -->
														</span>
														@else
														<span class="first-page first-last-pages">
															<a href="{{ $projects->previousPageUrl() }}">
																<span class="fas fa-arrow-left"></span> Previous
															</a>
														</span>
														@endif

														@if ($projects->hasMorePages())
														<span class="last-page first-last-pages">
															<a href="{{ $projects->nextPageUrl() }}">
																<span class="fas fa-arrow-right"></span> Next
															</a>
														</span>
														@else
														<span class="last-page first-last-pages disabled">
															<!-- <span class="fas fa-arrow-right"></span> Next -->
														</span>
														@endif
													</div>
												</div>
											</div>
										</div>
										<script>var js_tie_block_2325 = {"order":"latest","source":"id","exclude_posts":"74031, 74033, 74035, 74039, 74037, 84117","number":"20","pagi":"show-more","post_meta":"true","breaking_effect":"reveal","sub_style":"big","style":"default","title_length":"","excerpt_length":"","media_overlay":"","read_more_text":""};</script>
									</div>

									@include('welcome.sidebar')

								</div>
							</div>
						</div>
					</div>

					@include('welcome.footer')
			
				</div>
				
				@include('welcome.secondary_sidebar')

			</div>
		</div>
		
		<div class='ai-viewports ai-viewport-1 ai-viewport-2 ai-insert-16-19994033' data-insertion-position='append' data-selector='#div_KLF_HP_Sidebar' data-code='PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTE2JyBzdHlsZT0nbWFyZ2luOiA4cHggMDsgY2xlYXI6IGJvdGg7Jz4KPGRpdiBzdHlsZT0idGV4dC1hbGlnbjpjZW50ZXI7cGFkZGluZy10b3A6IDEwcHg7cGFkZGluZy1ib3R0b206IDEwcHg7Ij4KCTxkaXYgc3R5bGU9InBhZGRpbmctdG9wOiA1cHg7Zm9udC1zaXplOiBzbWFsbDsgY29sb3I6ICM4ODg7ICI+QWR2ZXJ0aXNlbWVudDwvZGl2PgoJPCEtLSAvNDM4OTM5MzYvS0xGX0hQX1NpZGViYXIgLS0+Cgk8ZGl2IGlkPSdkaXYtZ3B0LWFkLTE2ODMwMjI1MzQ0NTEtMCcgc3R5bGU9J21pbi13aWR0aDogMzAwcHg7IG1pbi1oZWlnaHQ6IDI1MHB4Oyc+CgkJPHNjcmlwdD4KCQkJaWYoc2NyZWVuLndpZHRoID4gNTAwKXsKCQkJCWdvb2dsZXRhZy5jbWQucHVzaChmdW5jdGlvbigpIHsKCQkJCQlnb29nbGV0YWcuZGVmaW5lU2xvdCgnLzQzODkzOTM2L0tMRl9IUF9TaWRlYmFyJywgW1szMDAsIDI1MF0sIFszMzYsIDI4MF1dLCAnZGl2LWdwdC1hZC0xNjgzMDIyNTM0NDUxLTAnKS5hZGRTZXJ2aWNlKGdvb2dsZXRhZy5wdWJhZHMoKSk7CgkJCQkJZ29vZ2xldGFnLmRpc3BsYXkoJ2Rpdi1ncHQtYWQtMTY4MzAyMjUzNDQ1MS0wJyk7IAoJCQkJfSk7CgkJCX0KCQk8L3NjcmlwdD4KCTwvZGl2Pgo8L2Rpdj48L2Rpdj4K' data-block='16'></div>

		<div id="autocomplete-suggestions" class="autocomplete-suggestions"></div>
		<div id="is-scroller-outer">
			<div id="is-scroller"></div>
		</div>
		<div id="fb-root"></div>	
		<div id="tie-popup-search-desktop" class="tie-popup tie-popup-search-wrap" style="display: none;">
			<a href="#" class="tie-btn-close remove big-btn light-btn">
				<span class="screen-reader-text">Close</span>
			</a>
			<div class="popup-search-wrap-inner">
				<div class="live-search-parent pop-up-live-search" data-skin="live-search-popup" aria-label="Search">
					<form method="get" class="tie-popup-search-form" action="">
						<input class="tie-popup-search-input is-ajax-search" inputmode="search" type="text" name="s" title="Search for" autocomplete="off" placeholder="Type and hit Enter" />
						<button class="tie-popup-search-submit" type="submit">
							<span class="tie-icon-search tie-search-icon" aria-hidden="true"></span>
							<span class="screen-reader-text">Search for</span>
						</button>
					</form>
				</div>
			</div>
		</div>

		@include('welcome.footer_script')

	</body>
</html>