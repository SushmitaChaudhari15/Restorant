
@extends('layout')
@section('container')
	<section class="page-banner" style="background: #121619 url({{ asset('admin_assets/images/blog-6.jpg')}}) no-repeat center / cover;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">

				@if (Route::has('login'))
						   @auth
						   <div class="text-center">
						   <span>
							 <h2 class="text-danger"> {{session('msg')}}</h2>
							 </span>
	

						<h2 class="text-success">  Hello ,{{ Auth::user()->name }}  book your table :)
						</h2></div>
                        @else 
						<div class="text-center" style="padding-right: 10px;">
						<h2 class="text-success">To book a table you have to login/register!</h2>
						</div>
                    @endauth
						@endif

					<div class="page-title">
						<h1 class="page-headding">reservation</h1>
						<ul>
							<li><a href="{{ url('new')}}" class="page-name">Home</a></li>
							<li>Reservation</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="online-booking reservation pt-100">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="headding-part text-center">
						<p class="headding-sub">Make Online Reservation</p>
						<h2 class="headding-title text-uppercase font-weight-bold">Book a table</h2>
					</div>
				</div>
			</div>
			<form action = "{{ url('/booksubmit1')}}" method="post">
			@csrf
				<div class="row">
					<!-- <div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<select name="sources" class="custom-select sources form-control" data-placeholder="Hour">
								   <option value="profile">Hour</option>
								   <option value="word">minute</option>
								   <option value="hashtag">second</option>
							</select>
						</div>
					</div> -->
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="email" id="email" placeholder="Email Address" required>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
						<input type="text" class="form-control" name="people" placeholder="Number of People" required>

						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<input type="date" class="form-control" name="date" placeholder="Pick a Date" required>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<select name="time" class="custom-select sources form-control" data-placeholder="select time slote">
								   <option value="9-11">9-11</option>
								   <option value="11-2">11-2</option>
								   <option value="3-5">3-5</option>
								   <option value="6-8">6-8</option>
								   <option value="8-10">8-10</option>

							</select>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" name="number" placeholder="Phone Number " required>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="form-group">
							<input type="text" class="form-control" name="coment" placeholder="Coments" required>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 text-center">
						<input type="submit" name="submit" value="Book a table" class="table-book">
					</div>
				</div>
			</form>
		</div>
	</section>

	<div class="top-scrolling">
		<a href="#header" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	</div>

	@endsection