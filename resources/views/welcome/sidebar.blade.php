<style>
	#tie-body .the-global-title, #tie-body .comment-reply-title, #tie-body .related.products > h2, #tie-body .up-sells > h2, #tie-body .cross-sells > h2, #tie-body .cart_totals > h2, #tie-body .bbp-form legend{
		color: #588800 !important;
		border-color: #588800 !important;
	}

	[type='submit'], .button, .generic-button a, .generic-button button, .theme-header .header-nav .comp-sub-menu a.button.guest-btn:hover, .theme-header .header-nav .comp-sub-menu a.checkout-button, nav.main-nav .menu > li.tie-current-menu > a, nav.main-nav .menu > li:hover > a, .main-menu .mega-links-head:after, .main-nav .mega-menu.mega-cat .cats-horizontal li a.is-active, #mobile-menu-icon:hover .nav-icon, #mobile-menu-icon:hover .nav-icon:before, #mobile-menu-icon:hover .nav-icon:after, .search-in-main-nav.autocomplete-suggestions a.button, .search-in-top-nav.autocomplete-suggestions a.button, .spinner > div, .post-cat, .pages-numbers li.current span, .multiple-post-pages > span, #tie-wrapper .mejs-container .mejs-controls, .mag-box-filter-links a:hover, .slider-arrow-nav a:not(.pagination-disabled):hover, .comment-list .reply a:hover, .commentlist .reply a:hover, #reading-position-indicator, #story-index-icon, .videos-block .playlist-title, .review-percentage .review-item span span, .tie-slick-dots li.slick-active button, .tie-slick-dots li button:hover, .digital-rating-static, .timeline-widget li a:hover .date:before, #wp-calendar #today, .posts-list-counter li.widget-post-list:before, .cat-counter a + span, .tie-slider-nav li span:hover, .fullwidth-area .widget_tag_cloud .tagcloud a:hover, .magazine2:not(.block-head-4) .dark-widgetized-area ul.tabs a:hover, .magazine2:not(.block-head-4) .dark-widgetized-area ul.tabs .active a, .magazine1 .dark-widgetized-area ul.tabs a:hover, .magazine1 .dark-widgetized-area ul.tabs .active a, .block-head-4.magazine2 .dark-widgetized-area .tabs.tabs .active a, .block-head-4.magazine2 .dark-widgetized-area .tabs > .active a:before, .block-head-4.magazine2 .dark-widgetized-area .tabs > .active a:after, .demo_store, .demo #logo:after, .demo #sticky-logo:after, .widget.tie-weather-widget, span.video-close-btn:hover, #go-to-top, .latest-tweets-widget .slider-links .button:not(:hover){
		background-color: #588800 !important;
	}
</style>

<aside class="sidebar tie-col-md-4 tie-col-xs-12 normal-side is-sticky" aria-label="Primary Sidebar">
        <div class="theiaStickySidebar">
			<div id="posts-list-widget-9" class="container-wrapper widget posts-list">
				<div class="widget-title the-global-title">
					<div class="the-subtitle">Trending
					</div>
				</div>
				<div class="widget-posts-list-container" >
					<ul class="posts-list-items widget-posts-wrapper">
					@foreach($randomProjects as $project)
						<li class="widget-single-post-item widget-post-list tie-standard">
							<div class="post-widget-thumbnail">
								<a aria-label="Malaysia’s #1 Pickleball Lifestyle Festival Fueled By Dutch Lady UHT Fresh Milk" href="{{ url('/' . \Illuminate\Support\Str::slug(\Illuminate\Support\Str::words($project->title, 10))) }}" class="post-thumb">
									<img width="220" height="150" src="{{ $project->project_image ? asset($project->project_image) : 'https://cdn.klfoodie.com/2025/08/MDEC-Hotel-Cover-3-1-390x220.png' }}" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image"></a>		</div><!-- post-alignleft /-->
								<div class="post-widget-body ">
									<a class="post-title the-subtitle" href="{{ url('/' . \Illuminate\Support\Str::slug(\Illuminate\Support\Str::words($project->title, 10))) }}">{{ \Illuminate\Support\Str::words($project->title, 10, '...') }}</a>
									<div class="post-meta">
									<span class="meta-item">
										<i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($project->publish_time)->format('Y-m-d') }}
									</span>
								</div>
							</div>
						</li>
					@endforeach
					</ul>
				</div>
					<div class="clearfix"></div>
			</div>
			<div id="stream-item-widget-6" class="container-wrapper widget stream-item-widget">
				<div class="stream-item-widget-content">
					<!-- <div id="div_KLF_HP_Sidebar"></div> -->
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</aside>