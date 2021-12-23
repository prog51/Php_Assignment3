@extends('layout')

@section('title', 'Admin')

@section('content')

<div class="container emp-profile m-5">

  <h1 class="text-primary">
     Welcome Admin
  </h1>
           
				 
              
			  
		
    
            <form action= "" method="post" enctype="multipart/form-data">
			   @csrf
			   @method('PUT')
                <div class="row mx-auto">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img class ="mt-5" src="{{auth()->user()->profilePic}}" width ="300" height="300" alt=""/>
							
                            <div class="file btn btn-sm btn-primary" style="width:300px;">
                                Change Photo
                                <input type="file" name="Pic"/>
								<input type="hidden" name="id" value = "{{auth()->user()->id}}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
					
					    <h4>Instruction:</h4>  
						
						<p>
						  This administration section allows you to manage the applicants registration information.
                          you can review the list of applicants, just look under <b>Action.</b> 						  
						</p>
                        <div class="profile-head">
                                 
                                  
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Admin detail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Action</a>
                                </li>
                            </ul>
                        </div>
						
						
						    <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                 
                               		<br/>					 
									<h5 class="text-success">
                                       Hello Admin, your details are blow
                                    </h5>
									
									<div class="ml-5">
											<span>
											  <b>Username:</b> {{auth()->user()->name}}
											</span><br/>
											
											<span>
											   
											</span><br/>
											
											<span>
												 <b>Email:</b> {{auth()->user()->email}} 
											</span><br/>
                                     </div>									
							
                                       
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    
									<div class="row mt-3">
                                            <div class="col-md-6">
                                                <p>
												
												    
												</p>
                                            </div>
                                        </div>
										
										<div class="row mt-3 h-100 justify-content-center align-items-center">
                                            <div class="col-md-6 text-center">
											
											  <h3 class="text-primary ">
											     View applicants
											  </h3>
                                                <p>
												     Click link below to view the applicants to the school 
												</p>
												
												<a href="/student/index" class= "btn btn-primary ">RECORDS</a>
                                            </div>
                                        </div>
										
										
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="updateImage" value="Update image"/>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-8">
                     
                    </div>
                </div>
            </form>           
        </div>
		
		
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

<a href="profileEdit.php" class="btn button-success">EDIT</a>

@endsection