<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        return view('admin.skills.index');
    }
    public function create(){
        return view('admin.skills.form');
    }
}
