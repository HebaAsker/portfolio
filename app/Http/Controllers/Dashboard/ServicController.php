<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicController extends Controller
{
    public function show()
    {
        $services=Service::all();
        return view('dashboard.personal_info.services.add_personal_services',compact('services'));
    }

    public function add(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);
            $services = new Service();

            $services->name = $request->name;
            $services->description = $request->description;

            $services->save();
            return back();

    }

    public function edit($id) //show edit services page
    {
        $services=Service::find($id); //to view particular services page
        return view('dashboard.personal_info.services.edit_personal_services',compact('services'));
    }

    public function update(Request $request,$id) //update particular services
    {
        $services=Service::all();
        $service = Service::find($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);

            $service->name = $request->name;
            $service->description = $request->description;

            $service->update();
            return view('dashboard.personal_info.services.index',compact('services'));
    }

    public function delete($id)
    {
        $services=Service::find($id); //to view particular server page
        $services->delete();
        return view('dashboard.personal_info.services.index');
    }
}
