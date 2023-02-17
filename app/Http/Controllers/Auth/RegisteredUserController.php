<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'photo' => 'required',
            'background'=>'required',
            'job' => 'required',
            'birthday' => 'required',
            'website' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'degree' => 'required',
            'freelance_status' => 'required',
            'about_description' => 'required',
            'location' => 'required',
        ]);

        $user = new User();

        if($request->hasFile('photo')){
            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename='profile'.'.'.$extension;
            $file->move('assets/uploads',$filename);
            $user->photo=$filename;
        }

        if($request->hasFile('background')){
            $file=$request->file('background');
            $extension=$file->getClientOriginalExtension();
            $filename='background'.'.'.$extension;
            $file->move('assets/uploads/background',$filename);
            $user->background=$filename;
        }

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->job = $request->job;
            $user->birthday = $request->birthday;
            $user->website = $request->website;
            $user->phone = $request->phone;
            $user->city = $request->city;
            $user->degree = $request->degree;
            $user->freelance_status = $request->freelance_status==True?'Avaliable':'Not avaliable';
            $user->about_description = $request->about_description;
            $user->location = $request->location;

            $user->save();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
