
@extends('layout')
@section('container')

	<section class="banner">
		<div class="banner-carousel owl-carousel">
			<div class="banner-slide">
				<div class="container">
				    
					<div class="banner-box">
						<div class="banner-text">
							<div class="banner-center">
							<span>
							 <h2 class="text-white"> {{session('msg')}}</h2>
							 </span>
	
								<h2 class="banner-headding">Quality F<span>oo</span>ds</h2>
								<p class="banner-sub-hed">Healthy Food for healthy body</p>
							</div>
						</div>
						<div class="banner-images">
							<div class="all-img-banner">
								<img src="{{ asset('admin_assets/images/banner-bg-1.png')}}" alt="banner" class="pizza-img">
								<img src="{{ asset('admin_assets/images/banner-bg-2.png')}}" alt="banner" class="pizza-it pizza-1">
								<img src="{{ asset('admin_assets/images/banner-bg-3.png')}}" alt="banner" class="pizza-it pizza-2">
								<img src="{{ asset('admin_assets/images/banner-bg-4.png')}}" alt="banner" class="pizza-it pizza-3">
								<img src="{{ asset('admin_assets/images/banner-bg-5.png')}}" alt="banner" class="pizza-it pizza-4">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-slide-2">
				<div class="container">
					<div class="banner-box">
						<div class="banner-text">
							<div class="banner-center">
								<h2 class="banner-headding">Quality F<span>oo</span>ds</h2>
								<p class="banner-sub-hed">Healthy Food for healthy body</p>
							</div>
						</div>
						<div class="banner-images">
							<div class="all-img-banner">
								<img src="{{ asset('admin_assets/images/h11.png')}}" alt="banner" class="pizza-img w-100">
								<img src="{{ asset('admin_assets/images/pizza-1.png')}}" alt="banner" class="pizza-it pizza-1">
								<img src="{{ asset('admin_assets/images/pizza-2.png')}}" alt="banner" class="pizza-it pizza-2">
								<img src="{{ asset('admin_assets/images/pizza-3.png')}}" alt="banner" class="pizza-it pizza-3">
								<img src="{{ asset('admin_assets/images/pizza-4.png')}}" alt="banner" class="pizza-it pizza-4">
								<img src="{{ asset('admin_assets/images/pizza-5.png')}}" alt="banner" class="pizza-it pizza-5">
								<img src="{{ asset('admin_assets/images/pizza-6.png')}}" alt="banner" class="pizza-it pizza-6">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-slide-3">
				<div class="container">
					<div class="banner-box">
						<div class="banner-images">
							<div class="all-img-banner">
								<img src="{{ asset('admin_assets/images/h2.png')}}" alt="banner" class="pizza-img">
								<img src="{{ asset('admin_assets/images/pizza-7.png')}}" alt="banner" class="pizza-it pizza-1">
								<img src="{{ asset('admin_assets/images/pizza-8.png')}}" alt="banner" class="pizza-it pizza-2">
								<img src="{{ asset('admin_assets/images/pizza-9.png')}}" alt="banner" class="pizza-it pizza-3">
								<img src="{{ asset('admin_assets/images/pizza-10.png')}}" alt="banner" class="pizza-it pizza-4">
								<img src="{{ asset('admin_assets/images/pizza-11.png')}}" alt="banner" class="pizza-it pizza-5">
								<img src="{{ asset('admin_assets/images/pizza-12.png')}}" alt="banner" class="pizza-it pizza-6">
							</div>
						</div>
						<div class="banner-text">
							<div class="banner-center">
								<h2 class="banner-headding">Quality F<span>oo</span>ds</h2>
								<p class="banner-sub-hed">Healthy Food for healthy body</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="order-section ptb">
		<div class="container">
			<div class="row">
				<div class="order-top"><img src="{{ asset('admin_assets/images/order-top.png')}}" alt="layer"></div>
				<div class="col-xl-4 col-lg-4 col-md-4 servose-box text-center padding-lf">
					<img src="{{ asset('admin_assets/images/dinner-table.svg')}}" alt="order" class="order-img">
					<h2 class="order-title text-uppercase">Book Your Table</h2>
					<p class="order-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 servose-box text-center padding-lf">
					<img src="{{ asset('admin_assets/images/order-3.svg')}}" alt="delivery" class="order-img">
					<h2 class="order-title text-uppercase">diffrent view for tasty food</h2>
					<p class="order-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 servose-box text-center padding-lf">
					<img src="{{ asset('admin_assets/images/order-1.svg')}}" alt="delicious" class="order-img">
					<h2 class="order-title text-uppercase">delicious receipe</h2>
					<p class="order-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
				</div>
				<div class="order-bottom"><img src="{{ asset('admin_assets/images/order-bottom.png')}}" alt="layer"></div>
			</div>
		</div>
	</section>

	<section class="speciality ptb pt-140">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="headding-part text-center pb-50">
						<p class="headding-sub">Fresh From Dlight</p>
						<h2 class="headding-title text-uppercase font-weight-bold">our speciality</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 text-center speciality-box">
					<div class="speciality-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/speciality-1.jpg')}}" alt="speciality" class="spec-image"></a></div>
					<a href="{{ url('shop-detail')}}" class="ser-title text-uppercase font-weight-bold">Mexican Green Wave</a>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 text-center speciality-box">
					<div class="speciality-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/spe1.png')}}" alt="speciality" class="spec-image"></a></div>
					<a href="{{ url('shop-detail')}}" class="ser-title text-uppercase font-weight-bold">Delicious Indian Food </a>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 text-center speciality-box">
					<div class="speciality-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/spe2.png')}}" alt="speciality" class="spec-image"></a></div>
					<a href="{{ url('shop-detail')}}" class="ser-title text-uppercase font-weight-bold">Tasty South Food</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 text-center">
					<a href="{{ url('menu-1')}}" class="com-btn">view more</a>
				</div>
			</div>
		</div>
	</section>

	<section class="special-menu ptb pt-140">
		<div class="container">
			<div class="menu-top-bg"><img src="{{ asset('admin_assets/images/menu-top-bg.png')}}" alt="meu-bg"></div>
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="headding-part text-center pb-50">
						<p  class="headding-sub">Fresh From Dlight</p>
						<h2 class="headding-title text-uppercase font-weight-bold">Our Special Food</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="special-tab text-center">
						<ul  id="tabs" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="text-uppercase font-weight-bold tab-link current" data-tab="tab-1"><a href="#tab-1" role="tab" data-toggle="tab" class="active"> all</a></li>
							<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-2"><a href="#tab-2" role="tab" data-toggle="tab"> Drinks</a></li>
							<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-3"><a href="#tab-3" role="tab" data-toggle="tab"> salads</a></li>
							<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-4"><a href="#tab-4" role="tab" data-toggle="tab"> pasta</a></li>
							<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-5"><a href="#tab-5" role="tab" data-toggle="tab"> burgers</a></li>
							<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-6"><a href="#tab-6" role="tab" data-toggle="tab"> deserts</a></li>
							<li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-7"><a href="#tab-7" role="tab" data-toggle="tab"> pizzas</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="tab-content">
				<div role="tabpanel" class="row pt-50 tab-pane fade in active show" id="tab-1">
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-1.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">margherita pizza</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-3.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">Rum With Soda</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-7.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">Ceaser Salad</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-8.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">Sea Food Pasta</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-2.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">Chocolate Cookies</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-6.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">Pepperoni Pizza</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-7.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">bismarck pizza</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-1.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">Valdostana pizza</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
				</div>
				<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-2">
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-3.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">Rum With Soda</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
				</div>
				<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-3">
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-7.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">Ceaser Salad</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
				</div>
				<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-4">
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-8.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">Sea Food Pasta</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
				</div>
				<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-5">
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-1.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">VALDOSTANA PIZZA</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-2.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">BISMARCK PIZZA</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-3.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">PEPPERONI PIZZA</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-7.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">ORIENTAL PIZZA</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-8.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">BARBECUE PIZZA</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
				</div>
				<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-6">
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-2.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">Chocolate Cookies</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-3.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">Rum With Soda</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
				</div>
				<div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-7">
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-4.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">Vegetarian</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-1.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">margheritapizza</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
						<div class="menu-img"><a href="{{ url('shop-detail')}}"><img src="{{ asset('admin_assets/images/menu-3.png')}}" alt="menu" class="menu-image"></a></div>
						<a href="{{ url('shop-detail')}}" class="menu-title text-uppercase">Four Cheese</a>
						<p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						<span class="menu-price">$20.50</span>
					</div>
				</div>
			</div>
			<div class="menu-bottom-bg"><img src="{{ asset('admin_assets/images/menu-bottom-bg.png')}}" alt="menu-bg"></div>
		</div>
	</section>

	<!-- <section class="online-booking ptb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="max-w-390">
						<div class="headding-part">
							<p  class="headding-sub">Fresh From Pizzon</p>
							<h2 class="headding-title text-uppercase font-weight-bold">BOOK ONLINE</h2>
						</div>
						<p class="online-des">Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit. Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur </p>
						<a href="#" class="online-call">+ 91 123 456 789 0</a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 text-center">
					<h2 class="book-table text-uppercase">Book a table</h2>
					<form class="online-order-form">
						<div class="form-group">
							<input type="text" class="form-control" id="name" placeholder="Name" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<select name="sources" id="sources" class="custom-select sources form-control" data-placeholder="How many persons?">
								   <option value="profile" selected>Person 5</option>
								   <option value="word">Person 4</option>
								   <option value="hashtag">Person 3</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="date" placeholder="Date" required>
						</div>
						<button type="submit" class="more-table-v">book now</button>
					</form>
				</div>
			</div>
		</div>
	</section> -->

	
	<section class="news ptb" id="table">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="headding-part pb-50 text-center">
						<p  class="headding-sub">Chose the view you want to book...</p>
						<h2 class="headding-title text-uppercase font-weight-bold">Table Views</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 news-part">
					<div class="new-box">
						<div class="news-img">
							<a href="{{ url('reservation1')}}">
								<img src="{{ asset('admin_assets/images/table-1.jpg')}}" alt="news" class="news-image">
							</a>
							<div class="text-uppercase news-date"><span>Book<br>Now</span></div>
							<span class="news-date-bg"></span>
						</div>
							<!-- <ul>
								<li>by - john doe</li>
								<li>0 comments</li>
							</ul> -->
							<a href="blog-detail.html" class="news-headline"> Inner of the restorant </a>
							<!-- <a href="blog-detail.html" class="news-more">read More</a> -->
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 news-part">
					<div class="new-box">
						<div class="news-img">
							<a href="{{ url('reservation2')}}">
								<img src="{{ asset('admin_assets/images/table-4.jpg')}}" alt="news"  class="news-image">
							</a>
							<div class="text-uppercase news-date"><span>Book <br>Now</span></div>
							<span class="news-date-bg"></span>
						</div>
							<!-- <ul>
								<li>by - john doe</li>
								<li>0 comments</li>
							</ul> -->
							<a href="blog-detail.html" class="news-headline"> Gardan side of restorant </a>
							<!-- <a href="blog-detail.html" class="news-more">read More</a> -->
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 news-part">
					<div class="new-box">
						<div class="news-img">
							<a href="{{ url('reservation3')}}">
								<img src="{{ asset('admin_assets/images/table-3.jpg')}}" alt="news"  class="news-image">
							</a>
							<div class="text-uppercase news-date"><span>Book <br>Now</span></div>
							<span class="news-date-bg"></span>
						</div>
							<!-- <ul>
								<li>by - john doe</li>
								<li>0 comments</li>
							</ul> -->
							<a href="blog-detail.html" class="news-headline">Terrace side of restorant </a>
							<!-- <a href="blog-detail.html" class="news-more">read More</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="chef ptb pt-120 pb-120">
		<div class="chef-top-bg"><img src="{{ asset('admin_assets/images/chef-top-bg.png')}}" alt="chef-bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="headding-part pb-50 text-center">
						<p  class="headding-sub">Meet our experts</p>
						<h2 class="headding-title text-uppercase font-weight-bold">Our Best Chef</h2>
					</div>
				</div>
			</div>
			<div class="chef-banner owl-carousel">
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="{{ asset('admin_assets/images/chef-1.jpg')}}" alt="chef" class="chef-img"></div>
						<p class="chef-name text-uppercase font-weight-bold">John Doe</p>
						<span class="chef-ct">Sous Chef</span>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="{{ asset('admin_assets/images/chef-2.jpg')}}" alt="chef" class="chef-img"></div>
						<p class="chef-name text-uppercase font-weight-bold">John Doe</p>
						<span class="chef-ct">Sous Chef</span>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="{{ asset('admin_assets/images/chef-3.jpg')}}" alt="chef" class="chef-img"></div>
						<p class="chef-name text-uppercase font-weight-bold">John Doe</p>
						<span class="chef-ct">Sous Chef</span>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="{{ asset('admin_assets/images/chef-4.jpg')}}" alt="chef" class="chef-img"></div>
						<p class="chef-name text-uppercase font-weight-bold">John Doe</p>
						<span class="chef-ct">Sous Chef</span>
					</div>
				</div>
				<div class="chef-outer text-center">
					<div class="chef-box">
						<div class="chef-hover"><img src="{{ asset('admin_assets/images/chef-2.jpg')}}" alt="chef" class="chef-img"></div>
						<p class="chef-name text-uppercase font-weight-bold">John Doe</p>
						<span class="chef-ct">Sous Chef</span>
					</div>
				</div>
			</div>
		</div>
		<div class="chef-bottom-bg"><img src="{{ asset('admin_assets/images/chef-bottom-bg.png')}}" alt="chef-bg"></div>
	</section>

	
	<section class="about-pizzon ptb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="max-w-390">
						<div class="headding-part">
							<p class="headding-sub">Delicious Restaurant</p>
							<h2 class="headding-title text-uppercase font-weight-bold">about Dlight</h2>
						</div>
						<p class="online-des">Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit. Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit. Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur </p>
						<a href="{{url('about')}} " class="about-more-z com-btn">view more</a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="about-pizzon-img">
						<img src="{{ asset('admin_assets/images/about-pizzon.png')}}" alt="about" class="pizzon-ab">
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection

	
	