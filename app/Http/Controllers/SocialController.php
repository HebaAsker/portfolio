<?php

namespace App\Http\Controllers;

use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialController extends Controller
{

    public function show()
    {
        $social_links=SocialLink::all();
        return view('dashboard.personal_info.socials.add_social',compact('social_links'));
    }

    public function add(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'link' => ['required', 'string'],
        ]);
            $social_links = new SocialLink();

            $social_links->name = $request->name;
            $social_links->link = $request->link;

            $social_links->save();
            return back();

    }

    public function edit($id) //show edit services page
    {
        $social_links=SocialLink::find($id); //to view particular social page
        return view('dashboard.personal_info.socials.edit_social',compact('social_links'));
    }

    public function update(Request $request,$id) //update particular social link
    {
        $social_links=SocialLink::all();
        $social_link = SocialLink::find($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'link' => ['required', 'string'],
        ]);

            $social_link->name = $request->name;
            $social_link->link = $request->link;

            $social_link->update();
            return view('dashboard.personal_info.socials.index',compact('social_links'));
    }

    public function delete($id)
    {
        $social_links=SocialLink::find($id); //to view particular social page
        $social_links->delete();
        return view('dashboard.personal_info.socials.index');
    }
}
