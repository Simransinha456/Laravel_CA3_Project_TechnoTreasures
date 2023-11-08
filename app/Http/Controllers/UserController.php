<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    function login(){
        return view('login');
    }

    function registration(){
        return view('registration');
    }

    function loginPost(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return redirect(route('login'))->with("error","Userid and Password are not valid.");
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function registrationPost(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'',
        ]);

        $data['name'] = $req->name;  
        $data['email'] = $req->email;  
        $data['password'] = Hash::make($req->password);  

        $user = User::create($data);

        if(!$user){
            return redirect(route('registration'))->with("error","Registration failed, try again.");
        }
        return redirect(route('login'))->with("success","Registration Successful.");
    }
}
