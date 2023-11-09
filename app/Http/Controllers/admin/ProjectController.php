<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('admin.projects.index');
    }
    public function create(){
        return view('admin.projects.form');
    }
}
