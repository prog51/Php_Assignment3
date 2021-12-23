<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
       
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css"> 

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </head>
    <body>
      <div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
				 <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
				 <li class="nav-item">
                    <a class="nav-link" href="/academics">Academics</a>
                </li>
				<li class="nav-item">
				    <a class="nav-link" href="/student/register">Register</a>
				</li>
       
          </ul>
      <ul class="navbar-nav ml-auto">
	        @auth
			 <li class="nav-item">Welcome, {{auth()->user()->name}} </li>
             <li class="nav-item"> <a class="nav-link" href ="/admin">View dashboard</a></li>
			 <li class="nav-item"> <a class="nav-link" href ="/logout">Logout</a></li>
			 @endauth
			 
			@guest
			  <li class="nav-item"><a class="nav-link" href ="/login">Login</a></li>
			@endguest
          </ul>

    </div>
  </div>
</nav>

         

      </div>
	  
	  <div class="container-fluid">
	     
	        @yield('content')	  
	
	  </div><br/><br/><br/><br/>
	  
	  <footer class= "p-3 mb-2 mt-5 bg-dark text-white fixed-bottom">
	       
	  </footer>
    </body>
</html>



<!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">OCEAN8PETS.COM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	    <li class="nav-item">
		   <a href="about.php" class="nav-link">About</a>
		</li>
		<li class="nav-item">
		   <a href="#" class="nav-link">Contact</a>
		</li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view.php">View Pets</a>
        </li>
       
      </ul>
      <ul class="navbar-nav ml-auto">
	  
	       <//?php
		   
		      "";
			  
			  if(isset($_SESSION['ID']))
			  {
		        $log = '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
				        <li class="nav-item"><a class="nav-link" href= "profile.php" > View Profile</a></li>';
				echo $log;  
			  }
			  else
			  {
				  
				$log = '<li><a href="login.php">Login</a></li>';
				echo $log;   
			  }
		   ?>
            
			
		
       </ul>

    </div>
  </div>
</nav>-->
    
