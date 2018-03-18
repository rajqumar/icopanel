<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function postLogin(Request $request){
         $validator = Validator::make($request->all(), $this->rules(), $this->messages());

        if ($validator->fails()) {

            $data = $validator->getMessageBag()->toArray();

            $message = $validator->errors()->first();

             $response = array('status'=> 'ERR','message'=>$message);
             return json_encode($response);

        } else {

                $email = $request['email'];
                $password = $request['password'];
                $result = Auth::attempt(['email' => $email, 'password' => $password]);
                if ($result) {
                    $response = array('status'=>'SUCC','message'=>'User logged in');
                    return json_encode($response);
                } else {
                    $response = array('status'=> 'ERR','message'=>'Invalid email or password');
                     return json_encode($response);
                }
        }
      
    }

    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Please enter your username',
            'password.required' => 'please enter a password',
        ];
    }
}
