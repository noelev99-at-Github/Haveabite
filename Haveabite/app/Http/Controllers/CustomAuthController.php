<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'Fname' => 'required',
            'Mname' => 'required',
            'Lname' => 'required',
            'age' => 'required',
            'number' => 'required',
            'address' => 'required'
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'Fname' => $data['Fname'],
        'Mname' => $data['Mname'],
        'Lname' => $data['Lname'],
        'age' => $data['age'],
        'number' => $data['number'],
        'address' => $data['address']
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }

        
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }



    public function profile()
    {
        if(Auth::check()){
            $users = User::where('id', auth()->id())->get();
            return view('profile', compact('users'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
  
    }

    public function profile_edit()
    {
        if(Auth::check()){
            $users = User::where('id', auth()->id())->get();
            return view('profile_edit', compact('users'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
  
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'Fname' => 'required',
            'Mname' => 'required',
            'Lname' => 'required',
            'age' => 'required',
            'number' => 'required',
            'address' => 'required'
        ]);

        $user = user::find($id);
        $user->username = $request->input('username');
        $user->password = $user->password;
        $user->email = $request->input('email');
        $user->Fname = $request->input('Fname');
        $user->Mname = $request->input('Mname');
        $user->Lname = $request->input('Lname');
        $user->age = $request->input('age');
        $user->number = $request->input('number');
        $user->address = $request->input('address');

        $user->update();
        return redirect()->back()->with('status','User Profile Updated Successfully');

    }




}