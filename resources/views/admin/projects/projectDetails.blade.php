@extends('admin.layouts.master')

@section('body_content')
<div class="container">
    <div class="row">

        <div class="col-md-12 xoffset-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title">Project details</h4>
                        <a class="btn btn-warning" href="{{ route('projects.index') }}">Back</a>
                    </div>


                    <div class="row justify-content-between align-items-center border">
                        <div class="col-4">
                            <div class="p-3">
                                <p>Projectct Name:</p>
                            </div>
                        </div>
                        <div class="col-8 d-flex justify-content-center align-items-center">
                            <div class="p-3">
                                <p>{{ $project->name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center border">
                        <div class="col-4">
                            <div class="p-3">
                                <p>Skill Name:</p>
                            </div>
                        </div>
                        <div class="col-8 d-flex justify-content-center align-items-center">
                            <div class="p-3">
                                <p>{{ $project->skill->name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center border">
                        <div class="col-4">
                            <div class="p-3">
                                <p>Projectct Description:</p>
                            </div>
                        </div>
                        <div class="col-8 d-flex justify-content-center align-items-center">
                            <div class="p-3">
                                <p>{{ $project->description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center border">
                        <div class="col-4">
                            <div class="p-3">
                                <p>Projectct Technology:</p>
                            </div>
                        </div>
                        <div class="col-8 d-flex justify-content-center align-items-center">
                            <div class="p-3">
                                <p>{{ $project->technology }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center border">
                        <div class="col-4">
                            <div class="p-3">
                                <p>Github url:</p>
                            </div>
                        </div>
                        <div class="col-8 d-flex justify-content-center align-items-center">
                            <div class="p-3">
                                <p>{{ $project->github_url }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center border">
                        <div class="col-4">
                            <div class="p-3">
                                <p>Live url:</p>
                            </div>
                        </div>
                        <div class="col-8 d-flex justify-content-center align-items-center">
                            <div class="p-3">
                                <p>{{ $project->live_url }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center border">
                        <div class="col-4">
                            <div class="p-3">
                                <p>Image:</p>
                            </div>
                        </div>
                        <div class="col-8 d-flex justify-content-center align-items-center">
                            <div class="p-3">
                                @if ($project->image)
                                @foreach (json_decode($project->image) as $image)
                                <img src="{{ asset('uploadedImage/admin/projects/' . $image) }}" alt="Project Image" width="80">
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection