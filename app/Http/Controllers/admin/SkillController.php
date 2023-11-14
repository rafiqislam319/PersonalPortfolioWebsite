<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::paginate(5);
        return view('admin.skills.index', compact('skills'));
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

        if (Skill::create($skillData)) {
            return redirect()->route('skills.index')->with('success', 'Skill Saved successfully');
        } else {
            return redirect()->route('skills.create')->with('error', 'something went wrong');
        }
    }

    public function show(Skill $skill)
    {
        return view('admin.skills.skillDetails', compact('skill'));
    }

    public function edit(Skill $skill)
    {
        return view('admin.skills.skillEditForm', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'name.required' => 'Skill name is required'
        ]);

        $skillData = $request->all();

        // Handle image upload if an image file is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageDestination = public_path('uploadedImage/admin/skill/');
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();

            // Delete the existing image if it exists
            if ($skill->image) {
                $oldImagePath = public_path('uploadedImage/admin/skill/' . $skill->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Move the uploaded image to the designated location
            $image->move($imageDestination, $imageName);

            // Update the skill data with the new image name
            $skillData['image'] = $imageName;
        }

        // Attempt to update the skill data
        if ($skill->update($skillData)) {
            return redirect()->route('skills.index')->with('success2', 'Skill updated successfully');
        } else {
            return redirect()->route('skills.edit')->with('error', 'something went wrong');
        }
    }

    public function destroy(Skill $skill)
    {
        if($skill->image){
            $imagePath = public_path('uploadedImage/admin/skill/'.$skill->image);
            if(file_exists($imagePath)){
                unlink($imagePath);
            }
        }
        // dd(1);
        if ($skill->delete()) {
            return redirect()->route('skills.index')->with('delete', 'Skill deleted successfully');
        } else {
            return redirect()->route('skills.edit')->with('error', 'something went wrong');
        }
    }
}
