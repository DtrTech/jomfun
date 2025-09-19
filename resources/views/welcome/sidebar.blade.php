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
								<a aria-label="Malaysia’s #1 Pickleball Lifestyle Festival Fueled By Dutch Lady UHT Fresh Milk" href="{{ url('/' . $project->id) }}" class="post-thumb">
									<img width="220" height="150" src="{{ $project->project_image ? asset($project->project_image) : 'https://cdn.klfoodie.com/2025/08/MDEC-Hotel-Cover-3-1-390x220.png' }}" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image"></a>		</div><!-- post-alignleft /-->
								<div class="post-widget-body ">
									<a class="post-title the-subtitle" href="{{ url('/' . $project->id) }}">{{ \Illuminate\Support\Str::words($project->title, 10, '...') }}</a>
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
					<div id="div_KLF_HP_Sidebar"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</aside>