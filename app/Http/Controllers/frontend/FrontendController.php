<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class FrontendController extends Controller
{
  public function projects(){
    $projects = Projects::orderBy('created_at', 'desc')->paginate(3);
    return view('frontend.projects', compact('projects'));
  }
}
