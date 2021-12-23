@extends('layout')

@section('title','Home')

@section('content')



<div class="container-fluid" style = "background-color:#006994; color:#fff;" class="jumbotron home-banner"><!-- -->
   <div class="row col-md-12 h-100 justify-content-center align-items-center" >
         <div class="col-md-7 hom-banner p-5">
              <h1 class="display-4">Welcome to Ocean's 8 All Age School</h1>
              <p class="lead">If your looking for a friend to adopt we have many kinds of interesting animals.</p>
               <hr class="my-4">
               <p>If you want to give away your pet, you can do that here as well, just register and a free account will be created for you.</p>
               <p class="lead">
                  <a class="btn btn-secondary btn-lg" href="view.php" role="button">FIND A PET</a>
				  
				  <a class="btn btn-warning btn-lg" href="register.php" role="button">GIVE AWAY YOUR PET</a>
               </p>
         </div>
		 
         <div class="col-md-5 mt-5">
		 
                  <div class = "container-fluid ">
  <div class="row ">
      
	   <div class="col-md-12 h-100 justify-content-center align-items-center">
			<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="width:23rem;">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="/images/kuanish-reymbaev-nyuWugmjXis-unsplash.jpg" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h1>Ocean Blue All Age School!</h1>
							<p>We are a family</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="/images/cdc-UqTrGSohyCs-unsplash.jpg" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h1>Comfortable classes!</h1>
							<p>We are a family</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="/images/cdc-GDokEYnOfnE-unsplash.jpg" alt="Third slide">
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
</div><br/>
         </div>
   </div>
 
 
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#006994" fill-opacity="1" d="M0,288L40,261.3C80,235,160,181,240,160C320,139,400,149,480,154.7C560,160,640,160,720,154.7C800,149,880,139,960,128C1040,117,1120,107,1200,122.7C1280,139,1360,181,1400,202.7L1440,224L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
</svg>




<section class="row home-img-below-header">
   <div class="container">
   
     
          <div class="col-md-3">

         </div>	


          <div class="col-md-6">
		  
		        <div class="card text-center p-5">			  
			  
			   <div class="">
					  
					  <img class="d-block w-100" src="/images/cdc-GDokEYnOfnE-unsplash.jpg" />
					  <div class="card-body">
						<h3 class="card-title">Enrole today</h3>
						<p class="card-text">Get a great start for your child education</p>
						<a href="view.php" class="btn btn-primary">REGISTER TODAY</a>
					  </div>
					
				</div>
			  
			  
		      </div>

         </div>		  


          <div class="col-md-3">

         </div>		  		 
		   
		  
		  
   </div>
  
</section>




@endsection