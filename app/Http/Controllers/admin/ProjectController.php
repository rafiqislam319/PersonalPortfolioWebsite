<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $skills = Skill::all();
        return view('admin.projects.form', compact('skills'));
    }

    public function store(Request $request)
    {
        //return $request->all();
        $request->validate([
            'name' => 'required',
            'skill_id' => 'required|exists:skills,id',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ], [
            'name.required' => 'Project name is required',
            'skill_id.exists' => 'Invalid skill selected.',
        ]);

        $imageNames = [];

        if ($request->hasFile('image')) {
            $imageFiles = $request->file('image');
            $imageNames = [];

            foreach ($imageFiles as $imageFile) {
                $imagePath = public_path('uploadedImage/admin/projects/');
                $imageName = microtime(true) . "." . $imageFile->getClientOriginalExtension();
                $imageFile->move($imagePath, $imageName);
                $imageNames[] = $imageName;
            }
        }

        // Retrieve skill_id from the request
        $skillId = $request->input('skill_id');

        // Find the skill with the given ID
        $skill = Skill::findOrFail($skillId);

        $projectData = [
            'skill_id' => $skill->id,
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'technology' => $request->input('technology'),
            'github_url' => $request->input('github_url'),
            'live_url' => $request->input('live_url'),
            // 'image' => json_encode($imageNames),
            'image' => empty($imageNames) ? null : json_encode($imageNames),
        ];

        // dd($projectData);
        if (Project::create($projectData)) {
            return redirect()->route('projects.index')->with('success', 'Project Saved successfully');
        } else {
            return redirect()->route('projects.create')->with('error', 'something went wrong');
        }
    }

    public function show(Project $project)
    {
        return view('admin.projects.projectDetails', compact('project'));
    }
}
