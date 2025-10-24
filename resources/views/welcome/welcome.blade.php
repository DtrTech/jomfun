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
<section id="section-1">
    <div class="content-slider">

        @foreach($randomProjects as $index => $project)
            <input type="radio" id="banner{{ $index + 1 }}" class="sec-1-input" name="banner" @if($index == 0) checked @endif>
        @endforeach

        <div class="slider">
            @foreach($randomProjects as $index => $project)
                <div id="top-banner-{{ $index + 1 }}" 
                     class="banner banner-dimmed" 
                     style="background-image: url('{{ $project->project_image ? asset($project->project_image) : asset('default-banner.jpg') }}'); background-size: cover; background-position: center;">
                    
                    <div class="banner-inner-wrapper header-text col-lg-8 mx-auto text-center">
                        <div class="main-caption">
                            <h2>Explore JomFun:</h2>
                            <h1>{{ \Illuminate\Support\Str::words($project->title, 15, '...') }}</h1>
                            <h2>{{ \Illuminate\Support\Str::words($project->sub_title, 25, '...') }}</h2>
                            <div class="border-button">
                                <a href="{{ url('/' . $project->slug) }}">Go There</a>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="more-info">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6 col-6" style="display:flex; align-items:center; gap:10px;">
                                                <a href="">
                                                    <img alt="Photo of {{ $project->author }}" 
                                                        src="{{ $project->author_image ? asset($project->author_image) : 'https://secure.gravatar.com/avatar/17bbc2d36ab2cd21146949c7e05e9f1d50595287eeeb4c8f37faf69d727634e1?s=140&r=g' }}" 
                                                        height="50" width="50" 
                                                        style="border-radius:50%; object-fit:cover;">
                                                </a>
                                                <h4 style="margin:0;">
                                                    <span>Author:</span><br>{{ $project->author }}
                                                </h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <a href="/category/{{ strtolower($project->category_name) }}" style="text-decoration:none; color:inherit;">
                                                    <div style="display:flex; align-items:center; gap:10px;">
                                                    <i class="fa fa-folder"></i>
                                                    <h4 style="margin:0;">
                                                        <span>Category:</span><br>{{ $project->category_name }}
                                                    </h4>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <i class="fa fa-calendar"></i>
                                                <h4><span>Publish Date:</span><br>{{ $project->publish_time }}</h4>
                                            </div>
                                            <div class="col-lg-3 col-sm-6 col-6">
                                                <div class="main-button">
                                                    <a href="{{ url('/' . $project->slug) }}">Explore More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <nav>
            <div class="controls">
                @foreach($randomProjects as $index => $project)
                    <label for="banner{{ $index + 1 }}">
                        <span class="progressbar">
                            <span class="progressbar-fill"></span>
                        </span>
                        <span class="text">{{ $index + 1 }}</span>
                    </label>
                @endforeach
            </div>
        </nav>

    </div>
</section>

<div class="visit-country" style="padding-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading">
                    <h2>Visit One Of Our Trips Now</h2>
                    <p>JomFun</p>
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
                                            <ul class="info" style="list-style: none; display: flex; align-items: center; gap:5px;">
                                                <a href="">
                                                    <img alt="Photo of {{ $project->author }}" 
                                                        src="{{ $project->author_image ? asset($project->author_image) : 'https://secure.gravatar.com/avatar/17bbc2d36ab2cd21146949c7e05e9f1d50595287eeeb4c8f37faf69d727634e1?s=140&r=g' }}" 
                                                        height="25" width="25" 
                                                        style="border-radius:50%; object-fit:cover;">
                                                </a>
                                                <li style="display: flex; align-items: center;">
                                                    <i style="margin-right: 5px;"></i> {{ $project->author }}
                                                </li>
                                                <li style="display: flex; align-items: center;">
                                                    <i class="fa fa-calendar" style="margin-right: 5px;"></i> {{ $project->publish_time }}
                                                </li>
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