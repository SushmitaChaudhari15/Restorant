
@extends('layout')
@section('container')
	<section class="page-banner" style="background: #121619 url({{ asset('admin_assets/images/blog-8.jpg')}}) no-repeat center / cover;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
				
					<div class="page-title">
					<span class="pb-4">
							 <h2  class="text-white">{{session('msg')}}</h2>
							 </span>
						<h1 class="page-headding">contact Us</h1>
						<ul>
							<li><a href="{{ url('new')}}" class="page-name">Home</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact ptb">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="headding-part text-center">
						<p class="headding-sub">Get in touch</p>
						<h2 class="headding-title text-uppercase font-weight-bold">contact us</h2>
					</div>
				</div>
			</div>
			<div class="contact-in">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-5">
						<div class="contact-detail">
							<h3 class="contact-head">Contact Details</h3>
							<p class="contact-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
							<ul>
								<li><i class="fa fa-home" aria-hidden="true"></i><a href="javascript:void(0)">55 Drumburgh Ave, Carlisle CA3 0PD, UK</a></li>
								<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:1234567890">+91 123 456 7890, +91 123 456 789</a></li>
								<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="http://themes.templatescoder.com/cdn-cgi/l/email-protection#e2919792928d9096a2928b98988d8ccc818d8f"><span class="__cf_email__" data-cfemail="84f7f1f4f4ebf6f0c4f4edfefeebeaaae7ebe9">[email&#160;protected]</span></a></li>
								<li>
									<i class="fa fa-clock-o" aria-hidden="true"></i>
									<a href="javascript:void(0)">
										<span>Monday – Friday: 9 am – 10pm</span>
										<span>Sunday: 11 am – 9pm</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-7">
						<div class="leave">
							<form action ="{{url('/contactsubmit')}} " method="post">
							@csrf
								<div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="Name" required="">
								</div>
								<div class="form-group">
									<input type="text" name="email" class="form-control" placeholder="Email" required="">
								</div>
								<div class="form-group">
									<input type="text" name="subject" class="form-control" placeholder="Subject" required="">
								</div>
								<div class="form-group">
									<textarea class="form-control" name="message" placeholder="Message"></textarea>
								</div>
								<input type="submit" name="submit" value="Send Message" class="post-com">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact-map">
		<iframe class="map-pizzon" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2293.1228588802205!2d-2.940742383978084!3d54.918316163505814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487d1a03882d54af%3A0xa4639d28db5b99d9!2s55%20Drumburgh%20Ave%2C%20Carlisle%20CA3%200PD%2C%20UK!5e0!3m2!1sen!2sin!4v1599636489278!5m2!1sen!2sin" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</section>

	<div class="top-scrolling">
		<a href="#header" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	</div>

@endsection