<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSection;


class BackendController extends Controller{

  /* -------- Hero Section Start --------*/
  public function HeroSection(){
    return view('admin.hero-section.index');
  }

  public function CreateHeroSection(){
    return view('admin.hero-section.create');
  }

  public function StoreHeroSection(Request $request){
    $validated = $request->validate([
      'title' => 'required|string|max:50',
      'button' => 'required|string|max:50',
      'link' => 'required|url|max:50',
      'description' => 'required|string|max:300',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $image = $request->file('image');
    $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    $imagePath = 'upload/hero-section/'.$imageName;
    $image->move(public_path('upload/hero-section/'), $imageName);
    $saveImageUrl = $imagePath.$imageName;

    HeroSection::create([
      'title' => $validated['title'],
      'button' => $validated['button'],
      'link' => $validated['link'],
      'description' => $validated['description'],
      'image' => $saveImageUrl,
    ]);

    return redirect()->route('hero.section')->with('success', 'Hero Section added successfully.');
  }
  /* -------- Hero Section End --------*/

}
