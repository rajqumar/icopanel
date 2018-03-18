<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel');
    }

    public function showChangePasswordForm(){
        return view('auth.changepassword');
    }


    public function changePassword(Request $request){
 
        $id = Auth::user()->id;
        $user = User::where(['id'=> $id])->first();
        $current_pass = $request['current-password'];
        $new_pass = $request['new-password'];
        if (!(\Hash::check($current_pass,$user->password))) {

           $response = array('status'=>'ERR','message'=>'Current password in wrong');
           return json_encode($response);
        
        }
        else{
            $data = [
                'password' => bcrypt($new_pass)
            ];
            $update = User::where(['id'=> $id])->update($data);
            if ($update) {
                 $response = array(
                        'status'=>'SUCC',
                        'message'=>'password Changed Successfully'
                    );
                    return json_encode($response);
            }else{
                 $response = array('status'=>'ERR','message'=> 'Something Went wrong');
                    return json_encode($response);
            }
        }
 
    }
}
