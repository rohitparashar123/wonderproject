<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use Session;
use DB;

class UserController extends Controller
{
	public function index(){
	return view('front.registration');
	}

	public function doRegister(Request $a){
	$a->validate([   
	'email'=>'required|email|unique:users',
	'password'=>' required|min:6',
	'password_confirmation'=>'required',
	]);
	$data = new User;
	// print_r($a->all());
	// die;
	$data->name=$a->name;
	$data->email=$a->email;
	$data->password=Hash::make($a->password);
	$data->save();
	if($data){
	return redirect('/');
	}
	}

	public function loginPage(){
	return view('front.login');
	}

	public function dologin(Request $b){
	$b->validate([   
	'email'=>'required|email',
	'password'=>' required|min:6',
	]);
	$data=$b->all();
	if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
	{
	return redirect('/');
	}
	else{
	return redirect()->back()->with('msg','Invalid Email and Password');
	}
	}
	
	public function myaccount(){

		return view('front.myaccount');
	}
	public function accountSettings(){

		return view('front.account-settings');
	}
	public function accountOrders(){
		return view('front.account-order');
	}
	public function accountOthers(){
		return view('front.account-others');
	}
	public function userDetails(){

		return view('front.userdetails');
	}

	
	public function changePwd(){

		return view('front.changepassword');
	}
	public function changepassword(Request $request)
    {
        $request->validate([
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        return redirect('/myaccount')->with('msg','Password changed successfully.');
    }

    public function deleteAccount($id){
	$data = User::find($id);
	$delete = $data->delete();
	if($delete){
	return redirect('/')->with('msg','Your account is Deleted');
	}
    }


}
