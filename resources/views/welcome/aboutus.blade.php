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
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-01.jpg" alt="">
                <div class="text">
                  <h4>Havana<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>$420<br><span>/person</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                    <a href="reservation.html">Make a Reservation</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-02.jpg" alt="">
                <div class="text">
                  <h4>Kingston<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>$420<br><span>/person</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                    <a href="reservation.html">Make a Reservation</a>
                  </div>
                </div>
              </div>
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
            <a href="reservation.html">Discover More</a>
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
