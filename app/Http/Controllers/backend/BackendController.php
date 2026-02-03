<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use App\Models\Portfolio;
use App\Models\HeroSection;
use App\Models\Projects;

class BackendController extends Controller
{

  public function HeroSection(){
    return view('admin.hero-section.index');
  }


  public function CreateHeroSection(){
    return view('admin.hero-section.create');
  }

  public function StoreHeroSection(Request $request){
    $request->validate([
      'title' => 'required|string|max:50',
      'button' => 'required|string|max:50',
      'link' => 'required|string|max:100',
      'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
      'description' => 'required|string|max:300',
    ]);

    if($request->hasFile('image')) {
      $image = $request->file('image');
      $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
      $manager = new ImageManager(new Driver());
      $img = $manager->read($image);
      $img->resize(600, 400)->save(public_path('upload/hero-section/'.$imageName));
      $save_url = 'upload/hero-section/'.$imageName;

      HeroSection::create([
      'title' => $request->title,
      'button' => $request->button,
      'link' => $request->link,
      'image' => $save_url,
      'description' => $request->description,
      ]);

      return redirect()->route('hero.section')->with('success, The hero section added successfully.');
    }
    else{
      HeroSection::create([
        'title' => $request->title,
        'button' => $request->button,
        'link' => $request->link,
        'description' => $request->description,
      ]);

      return redirect()->route('hero.section')->with('success, The hero section added successfully.');
    }
  }

    public function AllPortfolio(){
        $portfolio = Portfolio::all();
        return view('admin.backend.portfolio.portfolio', compact('portfolio'));
    }

    public function AddPortfolio(){
        return view('admin.backend.portfolio.add_portfolio');
    }

    public function StorePortfolio(Request $request){
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
        $img->resize(250, 250)->save(public_path('upload/backend/portfolio/'.$name_gen));
        $save_url = 'upload/backend/portfolio/'.$name_gen;

        Portfolio::create([
            'title' => $request->title,
            'desc'  => $request->desc,
            'image' => $save_url,
        ]);
    } else {
        Portfolio::create([
            'title' => $request->title,
            'desc'  => $request->desc,
        ]);
    }

    return redirect()->route('all.portfolio');
}


    public function EditPortfolio($id){
         $portfolio = Portfolio::find($id);
        return view('admin.backend.portfolio.edit_portfolio', compact('portfolio'));
    }

    public function UpdatePortfolio(Request $request){
    $request->validate([
        'title' => 'required|string|max:255',
        'desc'  => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $port_id = $request->id;
    $portfolio = Portfolio::findOrFail($port_id);

    if ($request->hasFile('image')) {

        if ($portfolio->image && file_exists(public_path($portfolio->image))) {
            unlink(public_path($portfolio->image));
        }

        $image = $request->file('image');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img->resize(150, 150)->save(public_path('upload/backend/portfolio/'.$name_gen));
        $save_url = 'upload/backend/portfolio/'.$name_gen;

        $portfolio->update([
            'title' => $request->title,
            'desc'  => $request->desc,
            'image' => $save_url,
        ]);
    } else {
        $portfolio->update([
            'title' => $request->title,
            'desc'  => $request->desc,
        ]);
    }

    return redirect()->route('all.portfolio');
}


    public function DeletePortfolio($id){
        $portfolio = Portfolio::findOrFail($id);
        if ($portfolio->image && file_exists(public_path($portfolio->image))) {
            unlink(public_path($portfolio->image));
        }
        Portfolio::findOrFail($id)->delete();
        return redirect()->route('all.portfolio');
    }




  /* ------- Project Start ------- */
  public function projects(){
    return view('admin.projects.index');
  }

  public function CreateProjects(){
    return view('admin.projects.create');
  }

  public function StoreProject(Request $request){
    $request->validate([
      'title' => 'required|string|max:50',
      'icon' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
      'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
      'description' => 'required|string|max:200',
    ]);

    // Project Image
    if($request->hasFile('image') && $request->hasFile('icon')){
      $image = $request->file('image');
      $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
      $manager = new ImageManager(new Driver());
      $img = $manager->read($image);
      $img->resize(800, 600)->save(public_path('upload/project/image/'.$imageName));
      $saveUrl = 'upload/project/image/'.$imageName;

      // Icon Image
      $iconImage = $request->file('icon');
      $iconImageName = hexdec(uniqid()).'.'.$iconImage->getClientOriginalExtension();
      $iconManager = new ImageManager(new Driver());
      $iconImg = $iconManager->read($iconImage);
      $iconImg->resize(200, 200)->save(public_path('upload/project/image/'.$iconImageName));
      $iconSaveUrl = 'upload/project/image/'.$iconImageName;

      Projects::create([
        'title' => $request->title,
        'icon' => $iconSaveUrl,
        'image' => $saveUrl,
        'description' => $request->description,
      ]);

      return redirect()->route('projects')->with('success, The hero section added successfully.');
    }
    else{
      Projects::create([
        'title' => $request->title,
        'description' => $request->description,
      ]);

      return redirect()->route('projects')->with('success, The hero section added successfully.');
  }

  /* ------- Project End ------- */
  }
}