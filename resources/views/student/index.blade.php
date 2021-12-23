@extends('layout')

@section('title','Applicants')

@section('content')

   <div class="row">
     
	  <div class="col-md-1">
	  
	  </div>
	  
	  <div class="col-md-10">
	  
	  	<table class = "table">
						<tr>
							  <th>First Name</th>
							  <th>Last Name</th>
							  <th>Address</th>
							  <th>Ages</th>
							  <th>Status</th>
							  <th>Action</th>
						  </tr>
						
	  
	     @forelse($rds AS $rd)
			
             <!--<ul>
                 <li>
                     <span href="">{{$rd->fname}} </span>
					 <span href="">{{$rd->lname}}</span>

					 <a href="/student/{{$rd->id}}"><button>VIEW PROFILE</button></a>
                  </li>				 
              </ul>	-->





						<tr>
							  <td>{{$rd->fname}}</td>
							  <td>{{$rd->lname}}</td>
							  <td>{{$rd->emailadress}}</td>
							  <td>{{$rd->age}}</td>
							  <td>{{$rd->status}}</td>
							  <td>
							    <a href="/student/{{$rd->id}}" class="btn btn-primary">VIEW</a>
								<!--<a href="edit.php?id={{$rd->id}}" class="btn btn-warning">EDIT</a>-->
								<form action="" method ="POST" style="display:inline">
								  @csrf
								  @method('DELETE')
								   <input type="hidden" name="student" value="{{$rd->id}}"/>
								   <button type= "submit" class="btn btn-danger">DELETE</a>
								</form>
							  </td>
						  </tr>
											
			  
		 
		 @empty

		 <h1>NO RECORDS AVAILABLE</h1>
		 
		 @endforelse
	  </table>
	  </div>
	  
	  <div class="col-md-1">

	  </div>
	  
	  
	  
   
   </div>


@endsection