@extends('admin.layouts.master')

@section('body_content')
<div class="container text-center">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Projects Table</h4>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Technology</th>
                                    <th>Live Url</th>
                                    <th>Github Url</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Porfolio Project</td>
                                    <td>bootstrap, laravel</td>
                                    <td>www.github.com</td>
                                    <td>www.google.com</td>
                                    <td>
                                        <a href="#" style="text-decoration: none;"><i class="ti-eye p-2 text-info"></i></a>
                                        <a href="#" style="text-decoration: none;"><i class="ti-pencil-alt p-2 text-warning"></i></a>
                                        <a href="#" style="text-decoration: none;"><i class="ti-trash p-2 text-danger"></i></a>
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