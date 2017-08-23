<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Auth;
use Session;
use App\Customer;
use Hash;
use Illuminate\Support\Facades\Input;
class LoginHandleController extends Controller
{
     public function login(Request $request){
    	if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])){

	    	  return redirect()->intended('/'); 
	    }
	    else{
	    	Session::flash('message', "Your email or password does not match");
	    	return redirect()->intended('signin');
	    }
    }

    public function showRegisterForm(){
   
    	       return view('customer.register');
    }

    public function register(Request $request){

    $input = Input::all();
    	 
    $rules = array(
        'name'=> 'required',                       
        'email'=> 'required|email|unique:customer',     
        'contact'=> 'required|numeric|digits:10',
        'password' => 'required',
        'password_confirm' => 'required|same:password' 
    );

    $validator = Validator::make($input, $rules);
     
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/signup')->withInput()->withErrors($validator);

    } else{
    	$customer = Customer::create(['name' =>$request->name,'email' =>$request->email,'contact' =>$request->contact,'password' =>Hash::make($request->password)]);
      	return redirect()->intended('/');
  	}

    }

}
