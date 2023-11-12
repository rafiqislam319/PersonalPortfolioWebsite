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
                                <tr>
                                    <td>1</td>
                                    <td>Web developer</td>
                                    <td class="text-danger"><img src="" alt="skill image"></td>
                                    <td>
                                        <a href="#"><i class="ti-eye p-2"></i></a>
                                        <a href="#"><i class="ti-pencil-alt p-2"></i></a>
                                        <a href="#"><i class="ti-trash p-2"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Web developer</td>
                                    <td class="text-danger"><img src="" alt="skill image"></td>
                                    <td>
                                        <a href="#"><i class="ti-eye p-2"></i></a>
                                        <a href="#"><i class="ti-pencil-alt p-2"></i></a>
                                        <a href="#"><i class="ti-trash p-2"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Web developer</td>
                                    <td class="text-danger"><img src="" alt="skill image"></td>
                                    <td>
                                        <a href="#"><i class="ti-eye p-2"></i></a>
                                        <a href="#"><i class="ti-pencil-alt p-2"></i></a>
                                        <a href="#"><i class="ti-trash p-2"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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