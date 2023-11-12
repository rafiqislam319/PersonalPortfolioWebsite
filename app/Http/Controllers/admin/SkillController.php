<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return view('admin.skills.index');
    }

    public function create()
    {
        return view('admin.skills.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'name.required' => 'Skill name is required'
        ]);

        $skillData = $request->all();

        if ($image = $request->file('image')) {
            $imageDestination = public_path('uploadedImage/admin/skill/');
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($imageDestination, $imageName);
            $skillData['image'] = $imageName;
        }

        if(Skill::create($skillData)){
        return redirect()->route('skills.index')->with('success', 'Skill Saved successfully');
        }else{
            return redirect()->route('skills.create')->with('error', 'something went wrong');
        }
    }
}
