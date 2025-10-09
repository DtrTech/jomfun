@extends('welcome.layouts.app')

@section('title', 'Home - JomFun')

@push('styles')
<style>
.post-meta i {
	color: #ffce00;
	margin-right: 6px;
}

.post-meta {
	font-size: 24px;
	color: #333;
}

.about-main-content {
    background-image: url('{{ $project->project_image ? asset($project->project_image) : asset('default-banner.jpg') }}');
}

.blur-bg{
    background-image: url('{{ $project->project_image ? asset($project->project_image) : asset('default-banner.jpg') }}');
}

#the-post img {
  max-width: 100%;
  height: auto;
  display: block;
  margin: 10px auto;
}

body, html {
  overflow-x: hidden;
}

@media (max-width: 768px) {
  #the-post p,
  #the-post span,
  #the-post li {
    font-size: 16px !important;
    line-height: 1.4;
  }
}
</style>
@endpush

@section('content')
<div class="about-main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content">
					<div class="blur-bg"></div>
					<h4>EXPLORE OUR TRIP</h4>
					<div class="line-dec"></div>
					<h2>{{ $project->title }}</h2>
					<p>{{ $project->sub_title }}</p>
				</div>
            </div>
        </div>
    </div>
</div>

<div class="weekly-offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading text-center">
                    <h2>More from {{ $project->category_name }}</h2>
                    <p>Discover more trips related to this category below.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-weekly-offers owl-carousel">
                    @foreach ($relatedProjects as $related)
                        <div class="item">
							<div class="thumb">
								<img src="{{ $related->project_image ? asset($related->project_image) : asset('default-banner.jpg') }}" alt="{{ $related->title }}">
								<div class="text" style="max-width: 300px; margin: 0 auto;">
									<h4>
										<span><i class="fa fa-user"></i> {{ $related->author }}</span>
									</h4>
                                    <br>
                                    <br>
                                    <span>
                                        <a href="/category/{{ strtolower($project->category_name) }}" 
                                            style="text-decoration:none; color:#fff; background:#588800; padding:5px;">
                                            {{ $project->category_name }}
                                        </a>
                                    </span>
                                    <br>
									<div class="line-dec"></div>
									<ul>
										<li style="white-space: normal; word-wrap: break-word;">
											{{ \Illuminate\Support\Str::words($related->title, 20, '...') }}
										</li>
									</ul>
									<div class="main-button">
										<a href="{{ url('/' . \Illuminate\Support\Str::slug(\Illuminate\Support\Str::words($related->title, 10))) }}">Explore More</a>
									</div>
								</div>
							</div>
						</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="more-about">
    <div class="container">
        <div class="row">
			<div class="col-lg-12">
				<div class="post-meta text-center mb-4">
                    <ul class="list-inline" style="display:flex; justify-content:center; flex-wrap:wrap; gap:15px; padding:0; margin:0;">
                        <li class="list-inline-item mx-3" style="display:flex; align-items:center; gap:8px;">
                        <img alt="Photo of {{ $project->author }}" 
                            src="{{ $project->author_image ? asset($project->author_image) : 'https://secure.gravatar.com/avatar/17bbc2d36ab2cd21146949c7e05e9f1d50595287eeeb4c8f37faf69d727634e1?s=140&r=g' }}" 
                            height="25" width="25" 
                            style="border-radius:50%; object-fit:cover;">
                        {{ $project->author }}
                        </li>
                        <li class="list-inline-item mx-3" style="display:flex; align-items:center; gap:6px;">
                        <i class="fa fa-folder"></i> {{ $project->category_name }}
                        </li>
                        <li class="list-inline-item mx-3" style="display:flex; align-items:center; gap:6px;">
                        <i class="fa fa-calendar"></i> {{ $project->publish_time }}
                        </li>
                    </ul>
                </div>
				<article id="the-post" class="container-wrapper post-content tie-standard">
					<div class='code-block code-block-8' style='margin: 8px 0; clear: both;'>
						<p>{!! $project->description !!}</p>
					</div>
				</article>
			</div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>
@endpush
