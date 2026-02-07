<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class FrontendController extends Controller
{

  // About Page
  public function About(){
    return view('frontend.pages.about.about');
  }

    // All About Section
  public function AllAbout(){
    $about = About::get()->first();
    return view('admin.backend.about.index', compact('about'));
  }

  public function AddAbout(){
    return view('admin.backend.about.add');
  }

  public function StoreAbout(Request $request){
    $request->validate([
        'title' => 'required|string|max:255',
        'desc'  => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    if($request->hasFile('image')) {
        $image = $request->file('image');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img->resize(250, 250)->save(public_path('upload/backend/about/'.$name_gen));
        $save_url = 'upload/backend/about/'.$name_gen;

        About::create([
            'title' => $request->title,
            'desc'  => $request->desc,
            'image' => $save_url,
        ]);
    } else {
        About::create([
            'title' => $request->title,
            'desc'  => $request->desc,
        ]);
    }

    return redirect()->route('all.about');
  }

  public function EditAbout($id){
    $about = About::find($id);
    return view('admin.backend.about.edit',compact('about'));
  }

  public function UpdateAbout(Request $request){
    $request->validate([
        'title' => 'required|string|max:255',
        'desc'  => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $about_id = $request->id;
    $about = About::findOrFail($about_id);

    if ($request->hasFile('image')) {

        if ($about->image && file_exists(public_path($about->image))) {
            unlink(public_path($about->image));
        }

        $image = $request->file('image');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img->resize(500, 400)->save(public_path('upload/backend/about/'.$name_gen));
        $save_url = 'upload/backend/about/'.$name_gen;

        $about->update([
            'title' => $request->title,
            'desc'  => $request->desc,
            'image' => $save_url,
        ]);
    } else {
        $about->update([
            'title' => $request->title,
            'desc'  => $request->desc,
        ]);
    }

    return redirect()->route('all.about');
  }

  
  public function projects(){
    $projects = Projects::orderBy('created_at', 'desc')->paginate(3);
    return view('frontend.projects', compact('projects'));
  }

  // Contact Page
  public function Contact(){
    return view('frontend.pages..contact.contact');
  }


}
