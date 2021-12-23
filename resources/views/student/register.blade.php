@extends('layout')

@section('title','Registration')

@section('content')
	

<div class="row">
   <div class="col-md-2"></div>
   <div class="col-md-8">

         <h1>Register Today</h1>

         <form action="" method="POST" enctype="multipart/form-data">
				@csrf
               <fieldset>
                  <label>First Name:</label><br/>
                  <input type="text" name = "fname" class="form-control" id="fname"><br/>

                  <label>Last Name:</label><br/>
                  <input type="text" name="lname"class="form-control" id="lname"><br/>

                  <label>Address:</label><br/>
                  <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St"><br/>

                  <label>Email:</label><br/>
                  <input type="email" name="email" class="form-control" id="email" placeholder="yourEmailName@domain.com"><br/>
				  
				  <div class = "container">
				      <div class="row">
						  <div class="col-md-2">
							<label for="age" class="form-label">Age</label><br/>
							<select id="age" name="age" class="form-select">
							  <option selected>11</option>
							  <option>12</option>
							  <option>13</option>
							  <option>14</option>
							  <option>15</option>
							  <option>16</option>
							  <option>17</option>
							</select>
						  </div>
						  <div class="col-md-2">
							<label for="gender" class="form-label">Gender</label><br/>
							<select id="gender" name="gender" class="form-select">
							  <option selected>Male</option>
							  <option>female</option>			  
							</select>
						  </div>
						  
						  <div class ="col-md-12 p-3">
						     <label> Upload Passport size photo</span></label>
						     <input type = "file" name="proPic"  class="form-control" />
						  </div>
						  <div class="col-md-12 p-2">
						    <label>Upload cerfications document <span>(*single PDF only)</span></label>
						    <input type = "file" name="pdf"  class="form-control" />
						  </div>	  
						  
						  

							<input type="hidden" name="status" value="pending"/>
			

							  <div class="col-md-12 mt-5">
								<button type="submit" class="btn btn-success btn-lg">SUBMIT</button>
							  </div>
							</div>
						</div>
               </fieldset>
          </form>
		  
		  
   </div>

   <div class="col-md-2">
   
   
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   </div>
</div>
	
	
	<div class ="row">
	  
	  <div class="col-md-12">
	    @if(session('success'))
            <h1>{{session('success')}}</h1>
        @endif
      </div>	  
	
	</div>
	

@endsection