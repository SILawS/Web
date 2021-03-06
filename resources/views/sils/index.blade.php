@extends('sils.layout')
@section('content')
    <section id="intro" class="dark-bg" data-speed="4" data-type="background">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-12">
					<h1>You Deserve Only<br />The Best Defence Lawyers</h1>
					<h2>We Have <u>Award Winning</u> Employment Law Specialists</h2>
					<a href="services.html" class="btn btn-primary">Our Practice Areas</a>
				</div>
	    	</div>
	    </div>
	</section>

	<section id="features" class="intro-section">
		<div class="container">
			<div class="row no-gutter">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<figure class="featured-news left">
						<div class="content">
							<div class="caption-wrap">
								<div class="info dark-bg">
									<h4>30 years</h4>
									<h6>of professional experiances</h6>
									<a href="#header" class="readmore"><i class="fa fa-caret-right"></i> Read more</a>
								</div>
								<div class="caption-overlay">
                                </div>
                                <img src="{!!url('images/main-feature1')!!}.jpg" class="img-responsive" alt="">
                            </div>
						</div>
					</figure>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<figure class="featured-news right">
						<div class="content">
							<div class="caption-wrap">
								<div class="info dark-bg">
									<h4>$9,800,000</h4>
									<h6>recovered for our clients</h6>
									<a href="#header" class="readmore"><i class="fa fa-caret-right"></i> Read more</a>
								</div>
								<div class="caption-overlay">
								</div>
								<img src="{!!url('images/main-feature2')!!}.jpg" class="img-responsive" alt="">
                            </div>
						</div>
					</figure>
				</div>
				<div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
					<figure class="featured-news">
						<div class="content">
							<div class="desc-wrap">
								<div class="desc">
									<h5><a href="about.html">Experianced Team</a></h5>
									<h6>Lorem ipsum dolor sit amet.</h6>
								</div>
                            </div>
                            <img src="{!!url('images/team.jpg')!!}" class="img-responsive" alt="">
						</div>
					</figure>
				</div>
			</div>
		</div>
	</section>

	<section id="about" class="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<h6>Professional Legal Justice</h6>
					<h3>Welcome To Our Attorney</h3>
					<p>Voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae illo inventore veritatis et quasi sit amet, consectetur adipisicing.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore et dolore magna aliqua ad minim veniam.</p>
					<a href="about.html" class="btn btn-default outline">Read more</a>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="row features">
						<div class="col-md-6 col-sm-6">
							<div class="about-block first">
								<a href="#"><img src="{!!url('images/blog1.jpg')!!}" class="img-responsive" alt=""></a>
								<h5>Business Law</h5>
								<p>Lorem ipsum dolor sit amet, eiusmod tempor incididunt labore et dolore magna aliqua ad minim veniam nostrud.</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="about-block">
								<a href="#"><img src="{!!url('images/blog2.jpg')!!}" class="img-responsive" alt=""></a>
								<h5>Personal Law</h5>
								<p>Lorem ipsum dolor sit amet, eiusmod tempor incididunt labore et dolore magna aliqua ad minim veniam nostrud.</p>
							</div>
						</div>

						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="blockquote" class="dark-bg" data-speed="2" data-type="background">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-10 col-md-push-1">
					<blockquote>
						“Praesent posuere interdum vulputate purus mollis sed commodo dolor libero et lacus nullam arcu vitae placerat fermentum.”
					</blockquote>
					<h6>— <strong>CEO</strong> John Doe</h6>
				</div>
			</div>
		</div>
	</section>

	<section id="services">
		<div class="container-fluid text-center">
			<h6>Our Practice Areas</h6>
			<h3>OUR FEATURED SERVICES</h3>
			<div class="col-md-12">
				<div id="Carousel2" class="carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#Carousel2" data-slide-to="0" class="active"></li>
						<li data-target="#Carousel2" data-slide-to="1"></li>
						<li data-target="#Carousel2" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<div class="row">
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="service-box effect">
										<span class="fa fa-university"></span>
										<h4 class="underline">Business Law</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum dui imperdiet fermentum molestie.</p>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="service-box effect">
										<span class="fa fa-user-secret"></span>
										<h4 class="underline">Criminal  Defense</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum dui imperdiet fermentum molestie.</p>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="service-box effect">
										<span class="fa fa-users"></span>
										<h4 class="underline">Family Law</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum dui imperdiet fermentum molestie.</p>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="service-box effect">
										<span class="fa fa-balance-scale"></span>
										<h4 class="underline">Justice Policy</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum dui imperdiet fermentum molestie.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="service-box effect">
										<span class="fa fa-university"></span>
										<h4 class="underline">Business Law</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum dui imperdiet fermentum molestie.</p>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="service-box effect">
										<span class="fa fa-user-secret"></span>
										<h4 class="underline">Criminal  Defense</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum dui imperdiet fermentum molestie.</p>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="service-box effect">
										<span class="fa fa-users"></span>
										<h4 class="underline">Family Law</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum dui imperdiet fermentum molestie.</p>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="service-box effect">
										<span class="fa fa-balance-scale"></span>
										<h4 class="underline">Justice Policy</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum dui imperdiet fermentum molestie.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="service-box effect">
										<span class="fa fa-university"></span>
										<h4 class="underline">Business Law</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum dui imperdiet fermentum molestie.</p>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="service-box effect">
										<span class="fa fa-user-secret"></span>
										<h4 class="underline">Criminal  Defense</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum dui imperdiet fermentum molestie.</p>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="service-box effect">
										<span class="fa fa-users"></span>
										<h4 class="underline">Family Law</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum dui imperdiet fermentum molestie.</p>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="service-box effect">
										<span class="fa fa-balance-scale"></span>
										<h4 class="underline">Justice Policy</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum dui imperdiet fermentum molestie.</p>
									</div>
								</div>
							</div>
						</div>
						<p class="more">We have a wide range of services, <a href="#"><strong>view all</strong></a> practice areas.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="experiances" class="dark-bg" data-speed="2" data-type="background">
		<div class="container v-table">
			<div class="col-md-6 col-sm-5 v-cell">
				<h6>Why Choose Us?</h6>
				<h3>We have great results</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore et dolore magna aliqua ad minim veniam nostrud exercitation laboris inventore commodo.</p>

				<p><strong>Sed quia consequuntur magni dolores qui ratione.</strong></p>
			</div>
			<div class="col-md-6 col-sm-7 v-cell">
				<div class="row no-gutter text-center">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="counter-box">
							<h4 class="timer">4825</h4>
							<p class="lead">Successful Cases</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="counter-box">
							<h4 class="timer">4208</h4>
							<p class="lead">Trusted Clients</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="counter-box">
							<h4 class="timer">6134</h4>
							<p class="lead">Case Studies</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="counter-box">
							<h4 class="timer">1287</h4>
							<p class="lead">Registerd Case</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="testimonials">
		<div class="container text-center">
			<div class="row">
				<h6>Our Testimonials</h6>
				<h3>What clients say about us</h3>
				<div class="col-md-12">
					<div id="Carousel" class="carousel slide">
						<ol class="carousel-indicators">
							<li data-target="#Carousel" data-slide-to="0" class="active"></li>
							<li data-target="#Carousel" data-slide-to="1"></li>
							<li data-target="#Carousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<div class="col-md-4">
										<div class="testimonial-box">
											<img src="{!!url('images/client1.jpg')!!}" alt="Image" style="max-width:100%;">
											<h6 class="name">Jane Doe</h6>
											<p class="work">Enginer of Media Production</p>
											<p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum nullam imperdiet fermentum molestie.</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="testimonial-box">
											<img src="{!!url('images/client2.jpg')!!}" alt="Image" style="max-width:100%;">
											<h6 class="name">John Dolor</h6>
											<p class="work">Enginer of Media Production</p>
											<p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum nullam imperdiet fermentum molestie.</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="testimonial-box">
											<img src="{!!url('images/client3.jpg')!!}" alt="Image" style="max-width:100%;">
											<h6 class="name">Lorem Doe</h6>
											<p class="work">Enginer of Media Production</p>
											<p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum nullam imperdiet fermentum molestie.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-md-4">
										<div class="testimonial-box">
											<img src="{!!url('images/client4.jpg')!!}" alt="Image" style="max-width:100%;">
											<h6 class="name">Jane Doe</h6>
											<p class="work">Enginer of Media Production</p>
											<p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum nullam imperdiet fermentum molestie.</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="testimonial-box">
											<img src="{!!url('images/client5.jpg')!!}" alt="Image" style="max-width:100%;">
											<h6 class="name">John Dolor</h6>
											<p class="work">Enginer of Media Production</p>
											<p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum nullam imperdiet fermentum molestie.</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="testimonial-box">
											<img src="{!!url('images/client6.jpg')!!}" alt="Image" style="max-width:100%;">
											<h6 class="name">Jane Lorem</h6>
											<p class="work">Enginer of Media Production</p>
											<p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum nullam imperdiet fermentum molestie.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-md-4">
										<div class="testimonial-box">
											<img src="{!!url('images/client7.jpg')!!}" alt="Image" style="max-width:100%;">
											<h6 class="name">Jane Doe</h6>
											<p class="work">Enginer of Media Production</p>
											<p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum nullam imperdiet fermentum molestie.</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="testimonial-box">
											<img src="{!!url('images/client8.jpg')!!}" alt="Image" style="max-width:100%;">
											<h6 class="name">Jane Dolor</h6>
											<p class="work">Enginer of Media Production</p>
											<p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum nullam imperdiet fermentum molestie.</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="testimonial-box">
											<img src="{!!url('images/client9.jpg')!!}" alt="Image" style="max-width:100%;">
											<h6 class="name">John Doe</h6>
											<p class="work">Enginer of Media Production</p>
											<p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel bibendum nullam imperdiet fermentum molestie.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="contact" data-speed="2" data-type="background">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content">
						<div class="row">
							<div class="col-md-6">
								<h6>Don’t Hesitate To Ask</h6>
								<h3>Free Consultation</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit nullam aliquet nibh vulputate nisi dapibus nisl fringilla mattis a eget velit.</p>
								<br />
								<h6><span class="fa fa-phone"></span>Phone :</h6>
								<p>+368 1234 5678</p>
								<h6><span class="fa fa-envelope-o"></span>Email :</h6>
								<p>info@yourmail.com</p>
								<h6><span class="fa fa-map-marker"></span>Address :</h6>
								<p>45 Lorem Street, 360 Ipsum City</p>
							</div>
							<div class="col-md-6">
								<div class="social-links">
									<ul class="nav">
										<li><a href="#" target="_blank"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#" target="_blank"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#" target="_blank"><span class="fa fa-linkedin"></span></a></li>
										<li><a href="#" target="_blank"><span class="fa fa-instagram"></span></a></li>
										<li><a href="#" target="_blank"><span class="fa fa-vimeo"></span></a></li>
									</ul>
								</div>
								<div class="contactform form">
									<form method="post" action="contact-form.php" name="contactform" id="contactform">
										<div class="form-group">
											<input class="form-control" name="name" type="text" id="name" placeholder="Name" autocomplete="off"/>
										</div>
										<div class="form-group">
											<input class="form-control" name="email" type="text" id="email" placeholder="Email" autocomplete="off"/>
										</div>
										<div class="form-group">
											<textarea class="form-control" name="comments" cols="40" rows="3" id="comments" placeholder="Message"></textarea>
										</div>
										<div id="message"></div>
										<div>
											<input type="submit" class="btn btn-primary pull-right" id="submit" value="Send Message" />
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection