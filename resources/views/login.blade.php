@extends('layout')


@section('content')

	
	
	
	<div class="container">
	
	    <div class="row">
		
		<div class="col-md-3">
		  
		  </div>
		
		  <div class="col-md-6">
		  
				  <h2>Administrator</h2>
				  
				  <form action="" method="post">
						@csrf
						<div class="form-group">
						  <label for="email">Email:</label>
						  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						</div>
						<div class="form-group">
						  <label for="pwd">Password:</label>
						  <input type="password" class="form-control" placeholder="Enter password" name="password">
						</div>
						<button type="submit" class="btn btn-success">Submit</button>
				  </form>
		  
		  </div>
		  
		  <div class="col-md-3">
		  
		  </div>
		 
		</div>
    </div>


@endsection