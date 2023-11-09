@extends('admin.layouts.master')

@section('body_content')
<div class="container">
    <div class="row">
        
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Skill form</h4>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="skill">Skill Name</label>
                                <input type="text" name="name" class="form-control" placeholder="skill name">
                            </div>
                            <div class="form-group">
                                <label for="skill">Skill Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-info">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection