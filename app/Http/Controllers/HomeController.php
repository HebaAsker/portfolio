<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use App\Models\Service;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user=User::get()->first();
        $frontSkills=Skill::take(Skill::count()/2)->get();
        $backSkills=Skill::skip(Skill::count()/2)->take(Skill::count()/2)->get();
        $socialMidea=SocialLink::all();
        $services=Service::all();
        return view('home',compact('user','frontSkills','backSkills','socialMidea','services'));
    }
}
