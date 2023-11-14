@extends('admin.layouts.master')

@section('body_content')
<div class="container text-center">
    <div class="row">
        <div class="col-lg-10 offset-1 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">


                    <h4 class="card-title">Skills Table</h4>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>SI.</th>
                                    <th>Skill Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($skills as $skill)
                                <tr>
                                    <td>{{ $skill->id }}</td>
                                    <td>{{ $skill->name }}</td>
                                    <td class="text-danger"><img src="{{ asset('uploadedImage/admin/skill/'.$skill->image) }}" alt="skill image"></td>
                                    <td>
                                        <a href="{{ route('skills.show', $skill->id) }}" style="text-decoration:none"><i class="ti-eye p-2 text-info"></i></a>
                                        <a href="{{ route('skills.edit', $skill->id) }}" style="text-decoration:none"><i class="ti-pencil-alt p-2 text-warning"></i></a>
                                        <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn text-danger p-0" type="submit"><i class="ti-trash xp-2"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $skills->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
        });
    });
</script>
@endif
@if(session('success2'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success2') }}",
        });
    });
</script>
@endif
@if(session('delete'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('delete') }}",
        });
    });
</script>
@endif