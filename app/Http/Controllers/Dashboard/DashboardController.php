<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Skill;
use App\Models\Service;
use App\Models\SocialLink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class DashboardController extends Controller
{
    public function index() //view dashboard main page
    {
        return view('dashboard.index');
    }

    public function showInfo() //view personal data page
    {
        $user=User::get()->first();
        return view('dashboard.personal_info.edit_personal_data',compact('user'));
    }


    public function updateInfo(Request $request) //edit personal data
    {
        $user = User::where('id',Auth::id())->get()->first();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', Password::defaults()],
            'photo' => 'required',
            'background' => 'required',
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

        if($request->hasFile('photo')){

            $path='assets/uploads'.$user->photo;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename='profile'.'.'.$extension;
            $file->move('assets/uploads',$filename);
            $user->photo=$filename;
        }

        if($request->hasFile('background')){

            $path='assets/uploads/background/'.$user->background;
            if(File::exists($path))
            {
                File::delete($path);
            }

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


        $user->update();
        return back();

    }

    public function showSkills() //view skills page
    {
        $skills=Skill::all();
        return view('dashboard.personal_info.skills.index',compact('skills'));
    }

    public function showServices() //view services page
    {
        $services=Service::all();
        return view('dashboard.personal_info.services.index',compact('services'));
    }

    public function showSocials() //view social links page
    {
        $social_links=SocialLink::all();
        return view('dashboard.personal_info.socials.index',compact('social_links'));
    }


}
