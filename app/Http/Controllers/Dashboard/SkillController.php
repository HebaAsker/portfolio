<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    public function show() //show add skills page
    {
        return view('dashboard.personal_info.skills.add_personal_skills');
    }

    public function add(Request $request) //add new skill
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'value' => ['required', 'string'],
        ]);
            $skills = new Skill();

            $skills->name = $request->name;
            $skills->value = $request->value;

            $skills->save();
            return back();
    }

    public function edit($id) //show edit skills page
    {
        $skills=Skill::find($id); //to view particular skill page
        return view('dashboard.personal_info.skills.edit_personal_skills',compact('skills'));
    }

    public function update(Request $request,$id) //update particular skill
    {
        $skills=Skill::all();
        $skill = Skill::find($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'value' => ['required', 'string'],
        ]);

            $skill->name = $request->name;
            $skill->value = $request->value;

            $skill->update();
            return view('dashboard.personal_info.skills.index',compact('skills'));
    }

    public function delete($id) 
    {
        $skills=Skill::find($id); //to view particular skill page
        $skills->delete();
        return back();
    }
}
