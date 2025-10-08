@extends('welcome.layouts.app')

@section('title', 'Home - JomFun')

@section('content')

<div class="second-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Get in Touch with Us</h4>
          <h2>We’d Love to Hear From You</h2>
          <p>Have questions or need assistance? Our JomFun team is here to help! Reach out to us for inquiries, collaborations, or support — we’ll get back to you as soon as possible</p>
        </div>
      </div>
    </div>
</div>

<div class="more-info reservation-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-phone"></i>
            <h4>Make a Phone Call</h4>
            <a href="#">+123 456 789 (0)</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>Contact Us via Email</h4>
            <a href="#">company@email.com</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-map-marker"></i>
            <h4>Visit Our Offices</h4>
            <a href="#">24th Street North Avenue London, UK</a>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="reservation-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          	<article id="the-post" class="container-wrapper post-content">
				<div itemprop="articleBody" class="entry-content entry clearfix">
					<h1 class="post-title entry-title">Contact Us</h1><br>
					<p>If you’d like to get in touch, drop us a message and we’ll do our best to respond within 1 day. We receive many requests daily, so if your email goes unanswered, it means we may not be able to assist at the moment.</p>
					<p>If you’d like to recommend us an event, activity, or place to feature, let us know via our <a href="">Facebook message</a>. Please note: you must have no commercial relationship with the event or business you’re recommending.</p>
					<p><strong>For general enquiries<br /></strong>
					Email: <a href="mailto:hello@jomfun.my">hello@jomfun.my</a><br />
					Telephone: <a href="tel:+60123456789">+6012-345 6789</a></p>
					<p><strong>For advertising enquiries<br /></strong>
					Email: <a href="mailto:ads@jomfun.my">ads@jomfun.my</a></p>
					<div class="padvs">
					<p><strong>Address<br /></strong>
					123, Jalan Tun Razak, 50400 Kuala Lumpur, Malaysia.</p>
					</div>
				</div>
			</article>
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
