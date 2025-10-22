@extends('welcome.layouts.app')

@section('title', 'Home - JomFun')

@push('styles')
<style>
.banner-dimmed {
    position: relative;
}

.banner-dimmed::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Adjust darkness here */
    z-index: 1;
}

.banner-dimmed .banner-inner-wrapper {
    position: relative;
    z-index: 2;
}

.custom-pagination .pagination {
    justify-content: center;
    gap: 8px;
}

.custom-pagination .page-item .page-link {
    border: none;
    color: #555;
    background-color: #f8f9fa;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.custom-pagination .page-item.active .page-link {
    background-color: #588800;
    color: #fff;
    box-shadow: 0 0 10px rgba(150, 255, 108, 0.3);
}

.custom-pagination .page-link:hover {
    background-color: #588800;
    color: #fff;
    transform: translateY(-2px);
}    
</style>
@endpush

@section('content')

<div class="visit-country" style="padding-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading">
					<strong style="font-size:28px; margin-top:10px; color:black;">
						{{ strtoupper($category_name) }}
					</strong>
				</div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="items">
                    <div class="row">

                        @foreach($projects as $project)
                        <div class="col-lg-12 mb-4">
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5">
                                        <div class="image">
                                            <a href="{{ url('/' . $project->slug) }}">
                                                <img src="{{ $project->project_image ? asset($project->project_image) : asset('default-banner.jpg') }}" 
                                                    alt="{{ $project->title }}" 
                                                    style="width:100%; height:auto; border-radius:10px;">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-sm-7">
                                        <div class="right-content">
                                            <h4>{{ $project->title }}</h4>
                                            <p>{{ $project->sub_title }}</p>
                                            <span>
												<a href="/category/{{ strtolower($project->category_name) }}" 
													style="text-decoration:none; color:#fff;">
													{{ $project->category_name }}
												</a>
											</span>

                                            <ul class="info">
                                                <li><i class="fa fa-user"></i> {{ $project->author }}</li>
                                                <li><i class="fa fa-calendar"></i> {{ $project->publish_time }}</li>
                                            </ul>
                                            <div class="main-button mb-2">
                                                <a href="{{ url('/' . $project->slug) }}">Explore More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-lg-12">
                            <div class="custom-pagination text-center mt-5">
                                {{ $projects->onEachSide(1)->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    function bannerSwitcher() {
        next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
        if (next.length) next.prop('checked', true);
        else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
        clearInterval(bannerTimer);
        bannerTimer = setInterval(bannerSwitcher, 5000)
    });
</script>
@endpush