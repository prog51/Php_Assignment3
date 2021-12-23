<?php

namespace App\Http\Controllers;

use App\User;

use Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
	
	
	public function loginPage()
	{
		$Admin = User::first();
		
		$adminName = "admin";
		$email= "test@gmail.com";
		$password = "@dministrat0r)*";
		$profilePic = "/images/placeholder.png";
		
		if(empty($Admin))
		{
			$this->store($adminName,$email,$password,$profilePic);				
			return view('/admin');
		}
		
		return view('/login');
	}
	
	public function store($name,$email,$password,$profilePic)
	{
		$password = bcrypt($password);
		
	    $user = User::create([
	       'name' => $name,
		   'email' => $email,
		   'password' => $password,
		   'profilePic' => $profilePic
	     ]);
		 	 
	}
	
	public function updateProfilePic(Request $request)
	{
		
		if(Auth::check())	
		 {
						
			$id = auth()->user()->id;
			
			$Admin = User::find($id);
            //exit();			
		 }
		
		
		$request->validate([
   
		  'Pic' => 'required|mimes:jpg,png,jpeg',
		  
    ]);
	
	
	$newImageName = time() . '_' . "admin" . '.' . $request->Pic->extension();

    $request->Pic->move(public_path('uploads'), $newImageName);
	
	$path = "/uploads/" . $newImageName;
	$Admin->update([
	
	    'profilePic' => $path 
	]);
	
	return redirect()->back()->withSuccess('Your information was submitted success');
	}
	
	public function Dashboard(Request $requestID)
	{
		$request = $request()->validate([
			'email' => 'required|email',
			'password' => 'required'
			
		]);
		
		
	if(auth()->attempt($request))
		{
			return redirect('/admin');
		}
		
       return back()->withErrors(['email' => 'Incorrect login details'], ['password' => 'Incorrect login details']);
	}
}
