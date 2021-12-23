<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class sessionsController extends Controller
{
    //
	public function destroy()
	{
		auth()->logout();
		
		return redirect('/')->with('success','Leaving so soon Admin?');
	}
	
	public function store()
	{
		$user = request()->validate([
		
		        'email' => 'required|exists:users,email',
				'password' => 'required'
		   ]);
		   
		   //$Admin = User::first();
		   
		 if(auth()->attempt($user))
		   {
			   //dd($Admin);
			  //cho auth()->user->id;
			   //exit();
			   $id = auth()->user()->id;
			   return redirect('/admin');  
		   }
	}
}
