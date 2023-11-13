@extends('admin.layouts.master')

@section('body_content')
<div class="container">
    <div class="row">

        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title">Skill details</h4>
                        <a class="btn btn-warning" href="{{ route('skills.index') }}">Back</a>
                    </div>

                    <div class="row justify-content-between align-items-center">
                        <div class="col-4">
                            <div class="border p-3">
                                <p>{{ $skill->name }}</p>
                            </div>
                        </div>
                        <div class="col-8 d-flex justify-content-center align-items-center">
                            <div class="border p-3">
                                <img src="{{ asset('uploadedImage/admin/skill/'.$skill->image) }}" alt="skill image" width="100" height="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection