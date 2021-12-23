@extends('layout')



@section('content')





<div class="container emp-profile m-5">

  <h1 class="text-primary">
     Applicant : <span>Name: {{$std->fname}} </span><span>{{$std->lname}}</span>
  </h1>
           
				 
              
			  
		
                    <div class="row mx-auto">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img class ="mt-5" src="{{auth()->user()->profilePic}}" width ="300" height="300" alt=""/>
							
                           
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
					
					   <h4>Instruction:</h4>  
						
						<p>
						  This section is for the applicant management, here you can view and evaluate applicant information
						  you have the ability update Applicant status, this is based on the information presented and
						  if they meet the school standard.
						</p>
                        <div class="profile-head">
                                    
                                  
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Applicant Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Action</a>
                                </li>
                            </ul>
                        </div>
						
						
						    <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                 
                               		<div class="container">

						<div class="row">
						
							
							<h5 class="text-success">
                                  Hello Admin, View applicant details
                            </h5>
									
									<div class="ml-5">
											<span>
											  <b>Full name: </b> {{$std->fname . " " . $std->lname}}
											</span><br/>
											
											<span>
											   
											</span><br/>
											
											<span>
											  <b>Email: </b> {{$std->emailadress}}
											</span><br/>
                                     </div>	

                                     <a href="/uploads/{{$std->documents}}"><img src="/images/pdf.png" width="50" height="70"/></a>									 
						 </div>			 


     
    <div class="row">
        <form action="" id="delete-form" method="POST">

           @method('DELETE')

           @csrf
        </form>
     </div>
  </div>
							
                                       
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    
									<div class="row mt-3">
                                            <div class="col-md-12">
                                                <p></p>
                                            </div>
                                        </div>
										
										
										<form action ="" method = "POST">
											  @csrf
											  @method('PUT')
												 <input type="radio" name ="status" value="Approved"> 
												 <label for="approved">Approved</label><br/>
												 <input type="radio" name="status" value="Rejected"> 
												 <label for="rejected">Rejected</label><br/>
												
												 <input type="submit" value="UPDATE">
						  
					                    </form>
										
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    
                    <div class="col-md-8">
                     
                    </div>
                </div>
                     
        </div>
		
		
		

  

@endsection