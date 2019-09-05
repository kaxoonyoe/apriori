<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function loginShow(){
        if (Auth::check()) {
            return 'no';
        }else {
            return view('userLogin');
        }
    }

    public function loginHandler(Request $req)
    {
        $user = User::where('email', $req->email)->first();
        if ($user) {
            if(Hash::check($req->password, $user->password)) {
                Auth::login($user);
                if ($user->is_admin) {
                    return redirect("/adminlist");
                }else {
                    return redirect("web.index");
                }
            }else {
                return back(); //email or password wrong;
            }
        }else {
            return back(); //email or password wrong
        }
    }
    public function registerShow(){
        return view('userRegister');
    }
    public function register(Request $req){
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->is_admin = 0;
        $user->save();
        return view('userLogin');

    }
}
