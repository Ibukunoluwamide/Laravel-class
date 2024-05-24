<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //properties and methods
    // public $name = "Olamide";
    // private $school = "SQI";
    // protected $student = "Olamide Victor";
    public function index() {
        $name = 'Olamide';
        $school = 'SQI';
    
        //With Method
        return view('index')->with('name', $name);
    
        //Compact Method
        return view('index', compact($name, $school));
        
        //Direct method
        return view('index', ['name' => $name, 'school' => $school]);
        
    }
    public function register(Request $request) {
    //    return $request;
       $user = new User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password =Hash::make($request->password) ;
       
       if ($user->save()) {
         return view('index', [
            'message' => 'User saved successfully',
            'status' => true
        ]);
    }else{
        return view('index', [
            'message' => 'Error occurred. Please try again',
            'status' => false
           ]);

       }
    }

}
// $newUserController = new UserController;
// $newUserController->student;
// class inheritUser extends UserController{
//     public function echoSchool() {
//        echo $this->student;
//     }
// }