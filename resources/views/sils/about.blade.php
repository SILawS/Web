@extends('sils.layout')
@section('content')
    <section id="intro" class="sub dark-bg" data-speed="4" data-type="background">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-12">
					<h1>About us</h1>
					<h2>Meet Our Attorneys</h2>
				</div>
	    	</div>
	    </div>
	</section>

	<section id="about" class="page">
		<div class="container">
			<div class="row v-table">
				<div class="col-md-7 col-sm-12 v-cell">
					<h6>Since 1986</h6>
					<h3>Our Histroy</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore et dolore magna aliqua ad minim veniam nostrud.</p>
					<blockquote>“Odit aut fugit consequuntur magni dolores qui ratione.”</blockquote>
					<p>voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo ipsam voluptatem voluptas sit aspernatur.</p>
					<a href="#contact" class="btn btn-default outline">Free Consultation</a>
				</div>
				<div class="col-md-5 col-sm-12 v-cell">
					<div class="about-block">
						<span class="about-img"><img src="images/team-colored.jpg" class="img-responsive" alt=""></span>
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

	<section id="team">
		<div class="container text-center">
			<h6>Our Legal Team</h6>
			<h3>MEET OUR ATTORNEYS</h3>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="team-box effect">
							<img src="images/member1.jpg" class="img-responsive" alt="">
							<div class="team-content">
								<h4 class="underline">John Doe</h4>
								<p>Corporate Lawyer</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="team-box effect">
							<img src="images/member2.jpg" class="img-responsive" alt="">
							<div class="team-content">
								<h4 class="underline">Lorem Dolor</h4>
								<p>Personal Lawyer</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="team-box effect">
							<img src="images/member3.jpg" class="img-responsive" alt="">
							<div class="team-content">
								<h4 class="underline">John Lorem</h4>
								<p>Corporate Lawyer</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="team-box effect">
							<img src="images/member4.jpg" class="img-responsive" alt="">
							<div class="team-content">
								<h4 class="underline">Ipsum Doe</h4>
								<p>Personal Lawyer</p>
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