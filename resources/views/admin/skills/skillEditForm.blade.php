@extends('admin.layouts.master')

@section('body_content')
<div class="container">
    <div class="row">

        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title">Edit Skill form</h4>
                        <a href="{{ route('skills.index') }}" class="btn btn-warning">Back</a>
                    </div>
                    <form action="{{ route('skills.update', $skill->id) }}" method="post" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="skill">Skill Name</label>
                            <input type="text" name="name" value="{{ $skill->name }}" class="form-control" placeholder="skill name">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="skill" class="mt-3 me-3">Old Image</label>
                            <img src="{{ asset('uploadedImage/admin/skill/'.$skill->image) }}" alt="skill image" width="70">
                        </div>
                        <div class="form-group">
                            <label for="skill">Skill Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <button class="btn btn-info">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@if(session('error'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "{{ session('error') }}",
        });
    });
</script>
@endif