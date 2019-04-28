@extends('base_layout._layout')
@section('body')
<!-- Main Section Start -->
<div class="main-section">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-8 col-xs-12 section-text">
				<h1>Secure online voting system</h1>
				<p>Optimize your election with blockchain-based online voting tool</p>
				<div class="row">
					<button class="btn btn-primary col-sm-6 col-md-4">CREATE VOTE</button>
					<button class="btn btn-outline-primary col-sm-6 col-md-4"><a href="#video">WATCH VIDEO</a></button>
				</div>
				<div class="feats">
					<div class="feat">
						<i class="fas fa-check"> Immutable</i>
					</div>
					<div class="feat">
						<i class="fas fa-check"> Transparent</i>
					</div>
					<div class="feat">
						<i class="fas fa-check"> Resource-saving</i>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-lg-4 col-xs-12 section-img img-responsive">
				<img src="{{asset('control/assets/images/girl.png')}}" align="section-img">
			</div>
		</div>
	</div>
</div>
<!-- Main Section End -->
<!-- Features Section Start -->
<div class="features text-center">
	<div class="container">
		<h1>Vote features</h1>
		<div class="row">
			<div class="col-sm-12 col-md-4 feature">
				<i class="fas fa-anchor fa-3x"></i>
				<h3>Immutable and anonymous</h3>
				<p>Vote is based on blockchain technology, which makes voting 100% secure and immutable. Voter anonymity is guaranteed by transparent crypto algorithms.</p>
			</div>
			<div class="col-sm-12 col-md-4 feature">
                <i class="fas fa-stopwatch fa-3x"></i>
				<h3>Easy to organize, easy to vote</h3>
				<p>With Vote, creating a vote is intuitive, easy and fast. No coding knowledge is required. Voting can be conducted on the go on a smartphone or tablet.
				</div>
			<div class="col-sm-12 col-md-4 feature">
				<i class="fab fa-codepen fa-3x"></i>
				<h3>Transparent and auditable</h3>
				<p>One of the main characteristics of blockchain technology is its transparency. The crypto algorithms that we use on top of it are merely mathematics
				</div>
		</div>
	</div>
</div>
<!-- Features Section End -->


<!-- Video start -->
<div class="container contact">
<div class="row">
	
<div class=" col-sm-12 col-md-6 ">
<div class="video">

 		<h3>(OUR)blockchain-based online voting system that’s ready for the real world</h3>
<video   poster="{{asset('control/assets/images/videostart.png')}}" controls class="video-src">
  <source id="video" src="{{asset('control/assets/images/voting.mp4')}}" type="video/mp4">
</video>

<!-- <iframe width="860" height="450" src="https://www.youtube.com/embed/0BrKt26OwW8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

</div>
</div>


		<div class=" col-sm-12 col-md-6 ">
			<div class="contact-form">
				<div class="form-group">
				<h5>Contact US</h5>
				  <label class="control-label col-sm-2" for="fname">Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Message:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</div>
	

</div>
</div>
</div>


<!-- Video End -->
@endsection