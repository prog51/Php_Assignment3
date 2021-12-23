@extends('layout')

@section('title', 'Academics')


@section('content')

  <div class="container-fluid home-img-below-header" >
  <div class="row">
     <div class="col-md-12 text-white text-center">
	    <h1>
		   OUR Academics
		</h1>
	 </div>
  </div>
  
    
</div>

<div class="container-fluid bg-dark p-5">
	<div class="row" style="margin-top:0px;">
		 <div class="col-md-12 text-white text-center ">
			<h2 class="text-white">
			  Our Grades
			</h2>
		 </div>
	  </div>
 </div>
<br/>
 


<!-- Container (Services Section) -->
<div class="container-fluid text-center pb-5 pt-5">
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off"></span>
      <h4 class="text-primary">Kindergarten</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart"></span>
      <h4 class="text-primary">Primary</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock"></span>
      <h4 class="text-primary">Secondary</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf"></span>
      <h4 class="text-primary">Special Activities</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate"></span>
      <h4 class="text-primary">Clubs</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench"></span>
      <h4 class="text-primary">Nursery and Preschool</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <div class="col-md-12 text-center mt-5">
     <a href="/student/register">
	   <button type="button" class="btn btn-outline-dark btn-lg">
	      REGISTER TODAY
		</button>
	   </a>
  </div>
</div>
<div class = "container-fluid bg-dark">
  <div class="row h-100 justify-content-center align-items-center">
      
	   <div class="col-md-12">
			<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="width:75rem;">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="images/kuanish-reymbaev-nyuWugmjXis-unsplash.jpg" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h2>We make learning fun!</h2>
							<p>GROUND BREAKING NEW WAYS OF LEARNING</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/cdc-GDokEYnOfnE-unsplash.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/cdc-UqTrGSohyCs-unsplash.jpg" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
   </div>
</div>


@endsection