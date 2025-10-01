<!DOCTYPE html>
<html lang="en-US" class="" data-skin="light">
	<head>
		<?php
		$category = DB::table('categories')->where('category_name', $category_name)->first();
		$page_seo = $category ? $category->page_seo : '';
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="{{ asset('image/jomfun/J.png') }}" sizes="32x32" />
		<link rel="icon" href="{{ asset('image/jomfun/J.png') }}" sizes="192x192" />
		<link rel="apple-touch-icon" href="{{ asset('image/jomfun/J.png') }}" />
		<meta name="msapplication-TileImage" content="{{ asset('image/jomfun/J.png') }}" />
		<meta charset="UTF-8" />
		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
		<style>
			img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }
		</style>
		{!! $page_seo !!}
		<script type="text/javascript"></script>
		</script>

		<script id="klfoo-ready"></script>
		@include('welcome.header')
	</head>

	<body data-rsssl=1 id="tie-body" class="archive category category-food category-3 wp-theme-jannah boxed-layout is-percent-width wrapper-has-shadow block-head-2 magazine2 is-thumb-overlay-disabled is-desktop is-header-layout-1 has-header-ad has-header-below-ad sidebar-right has-sidebar hide_banner_below_header hide_breaking_news hide_share_post_bottom hide_post_authorbio hide_post_nav hide_back_top_button">
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
								<header class="entry-header-outer container-wrapper">
								<nav id="breadcrumb">
									<a href="{{ url('/') }}">
										<i class="fa fa-home"></i> Home
									</a>
									<em class="delimiter">/</em>
									<span class="current">{{ $category->category_name }}</span>
								</nav>
								<h1 class="page-title">{{ $category->category_name }}</h1>
								<div class="mag-box wide-post-box">
									<div class="container-wrapper">
										<div class="mag-box-container clearfix">
											<ul id="posts-container" data-layout="default" data-settings="{'uncropped_image':'jannah-image-post','category_meta':false,'post_meta':true,'excerpt':'true','excerpt_length':'20','read_more':'true','read_more_text':false,'media_overlay':false,'title_length':0,'is_full':false,'is_category':true}" class="posts-items">
												@foreach($projects as $project)
												<li class="{{ $project->title }}">
													<a aria-label="{{ $project->title }}" href="{{ url('/' . \Illuminate\Support\Str::slug(\Illuminate\Support\Str::words($project->title, 10))) }}" class="post-thumb">
														<img width="390" height="220" src="{{ $project->project_image ? asset($project->project_image) : 'https://cdn.klfoodie.com/2025/08/MDEC-Hotel-Cover-3-1-390x220.png' }}" class="attachment-jannah-image-large size-jannah-image-large wp-post-image" alt=""/>
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
														<p class="post-excerpt">{{ $project->sub_title}}</p>
														<a class="more-link button" href="{{ url('/' . \Illuminate\Support\Str::slug(\Illuminate\Support\Str::words($project->title, 10))) }}">Read More &raquo;</a>	
													</div>
												</li>
												@endforeach
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
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