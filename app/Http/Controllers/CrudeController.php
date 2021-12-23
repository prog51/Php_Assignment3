<?php

namespace App\Http\Controllers;

use App\Student;

use App\User;

use Illuminate\Http\Request;


class CrudeController extends Controller
{
    //
	
	public function showAll()
	{
		$records = Student::all();
			
		return view('student.index',['rds'=>$records]);
		
	}
	
	public function create()
	{
		return view('student.register');
	}
	
	public function store(Request $request)
	{

	
		
	 $request->validate([
       
          'fname' => 'required',
          'lname' => 'required',
          'age' => 'required',
		  'address' => 'required',
		  'gender' => 'required',
		  'address' => 'required',
		  'status' => 'required',
		  'proPic' => 'required|mimes:jpg,png,jpeg',
		  'pdf' =>  'required|mimes:pdf|max:2048'
    ]);
	
//store image file

      $newImageName = time() . 'img_' . $request->email . '.' . $request->proPic->extension();

     $request->proPic->move(public_path('uploads'), $newImageName);

//store pdf file

    $newPDFName = time() . 'PDF_' . $request->email . '.' . $request->pdf->extension();

     $request->pdf->move(public_path('uploads'), $newPDFName);

	 
		$newStudent = Student::create([

			'fname' => $request->fname,
			'lname' => $request->lname,
			'age' => $request->age,
			'emailadress' => $request->email,
			'gender' => $request->gender,
			'address' => $request->address,
		    'status' => $request->status,
			'profilepic' => $newImageName,
			'documents' => $newPDFName
		]);

		return redirect()->back()->withSuccess('Your information was submitted success');
	}
	
	public function show(Student $studentID)
	{
		return view('student.single', ['std'=> $studentID]);
	}
	
	public function edit(Student $student)
	{
		//return view('student.edit', ['std'=> $studentID]);
	}
	
	public function update1(Request $request, Student $studentID)
	{
		$studentID->update([
		   
		   'status' => $request->status
		
		]);
		
		return redirect('/');
	}
	
	public function destroy(Request $request, Student $student)
	{
		
		if(isset($student))
		{
			echo "hello";
			
			
			echo $request->student;
			//exit();
		}
		
		$remove = $student::find($request->student);
		$remove->delete();
		//return redirect('/');
	}
}
