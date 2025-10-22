@extends('welcome.layouts.app')

@section('title', 'Home - JomFun')

@section('content')
  <div class="weekly-offers">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Explore the Best JomFun Activities</h2>
            <p>Discover the passionate minds behind our success. Our dedicated team of professionals works together to create innovative solutions, deliver exceptional results, and bring every project to life with creativity and expertise.</p>
          </div>
        </div>
      </div>
    </div>

      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <div class="owl-weekly-offers owl-carousel">
                      @foreach ($randomProjects as $random)
                          <div class="item">
                            <div class="thumb">
                              <img src="{{ $random->project_image ? asset($random->project_image) : asset('default-banner.jpg') }}" alt="{{ $random->title }}">
                              <div class="text" style="max-width: 300px; margin: 0 auto;">
                                <h4>
                                  <span><i class="fa fa-user"></i> {{ $random->author }}</span><br>
                                  <span><i class="fa fa-tag"></i> {{ $random->category_name }}</span>
                                </h4><br><br>
                                <h6>{{ $random->publish_time }}<br></h6>
                                <div class="line-dec"></div>
                                <ul>
                                  <li style="white-space: normal; word-wrap: break-word;">
                                    {{ \Illuminate\Support\Str::words($random->title, 20, '...') }}
                                  </li>
                                </ul>
                                <div class="main-button">
                                  <a href="{{ url('/' . \Illuminate\Support\Str::slug(\Illuminate\Support\Str::words($random->title, 10))) }}">Explore More</a>
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
  </div>

  <div class="more-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-image">
            <img src="assets/images/malaysia-map.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Discover More About JomFun</h2>
            <p>Jomfun is a lifestyle website that brings together the best of food, travel, and adventure. Discover hidden eateries, unique destinations, and exciting experiences across Malaysia and beyond. Whether you’re looking for local flavors, weekend getaways, or thrilling outdoor activities, Jomfun guides you to explore, taste, and enjoy life to the fullest.</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
				<div class="info-item">
					<h4>150,640+</h4>
					<span>Happy Food Lovers</span>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="info-item">
					<h4>175,000+</h4>
					<span>Adventure Seekers</span>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="info-item">
					<div class="row">
						<div class="col-lg-6">
							<h4>12,560+</h4>
							<span>Travel Destinations</span>
						</div>
						<div class="col-lg-6">
							<h4>240,580+</h4>
							<span>Memorable Experiences</span>
						</div>
					</div>
				</div>
			</div>
          </div>
          <p>Jomfun isn’t just about discovering new places — it’s about creating stories worth sharing. From hidden food stalls to breathtaking destinations and adrenaline-filled adventures, we connect explorers with authentic local experiences. Our mission is to inspire everyone to step out, taste something new, and embrace the excitement of every journey. Whether you’re a foodie, traveler, or thrill-seeker, Jomfun is your gateway to unforgettable moments.</p>
          <div class="main-button">
            <a href="/">Discover More</a>
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
