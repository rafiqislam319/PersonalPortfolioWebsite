@extends('admin.layouts.master')

@section('body_content')
<div class="col-md-12 xoffset-1">
    <div class="card h-100">
        <div class="card-body">
            <h4 class="card-title">Add Project form</h4>
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="project">Project Name</label>
                            <input type="text" name="name" class="form-control" placeholder="project name">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="project">Project Description</label>
                            <textarea id="tinyEditor" class="form-control" name="description" id="projectTextArea"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="skill_id">Select Skill</label>
                            <select name="skill_id" class="form-control">
                                <option value="">-----Select Skill-----</option>
                                @foreach($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="technology">Project Technology</label>
                            <input type="text" name="technology" class="form-control" placeholder="technology name">
                        </div>
                        <div class="form-group">
                            <label for="github_url">Github Url</label>
                            <input type="text" name="github_url" class="form-control" placeholder="github url">
                        </div>
                        <div class="form-group">
                            <label for="live_url">Live Url</label>
                            <input type="text" name="live_url" class="form-control" placeholder="live url">
                        </div>
                        <div class="form-group">
                            <label for="live_url">Project Image</label>
                            <input type="file" name="image[]" multiple class="form-control pb-4">
                        </div>
                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-2">Save</button>
                            <button class="btn btn-info">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection