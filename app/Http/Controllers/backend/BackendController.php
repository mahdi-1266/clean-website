<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use App\Models\Portfolio;
use App\Models\HeroSection;
use App\Models\Projects;
use App\Models\OurTeam;
use App\Models\Story;
use Intervention\Image\Colors\Rgb\Channels\Red;
use Pest\Plugin\Manager;

class BackendController extends Controller
{

  /* ------- Hero Section Start ------- */
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
      'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
      'description' => 'required|string|max:300',
    ]);

    if($request->hasFile('image')){
      $image = $request->file('image');
      $imgName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
      $manager = new ImageManager(new Driver());
      $img = $manager->read($image);
      $img->resize(600, 400)->save(public_path('upload/hero-section/'.$imgName));
      $save_url = 'upload/hero-section/'.$imgName;

      HeroSection::create([
        'title' => $request->title,
        'button'  => $request->button,
        'link' => $request->link,
        'image' => $save_url,
        'description' => $request->description,
      ]);

      return redirect()->route('hero.section');
    }
    else {
      HeroSection::create([
        'title' => $request->title,
        'button'  => $request->button,
        'link' => $request->link,
        'description' => $request->description,
      ]);
    }

    return redirect()->route('hero.section');
  }

  public function EditHeroSection($id){
    $heroId = HeroSection::findOrFail($id);
    return view('admin.hero-section.edit', compact('heroId'));
  }

  public function UpdateHeroSection(Request $request){
    $request->validate([
      'title' => 'required|string|max:50',
      'button' => 'required|string|max:50',
      'link' => 'required|string|max:100',
      'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
      'description' => 'required|string|max:300',
    ]);

    $heroId = HeroSection::findOrFail($request->id);

    if($request->hasFile('image')){
      if($heroId->image && file_exists(public_path($heroId->image))){
        unlink(public_path($heroId->image));
      }

      $image = $request->file('image');
      $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
      $imgManager = new ImageManager(new Driver());
      $img = $imgManager->read($image);
      $img->resize(600, 400)->save(public_path('upload/hero-section/'.$imageName));
      $saveUrl = 'upload/hero-section/'.$imageName;

      $heroId->update([
        'title' => $request->title,
        'button' => $request->button,
        'link' => $request->link,
        'description' => $request->description,
        'image' => $saveUrl,
      ]);

      return redirect()->route('hero.section');
    }
    else{
      $heroId->update([
        'title' => $request->title,
        'button' => $request->button,
        'link' => $request->link,
        'description' => $request->description,
      ]);

      return redirect()->route('hero.section');
    }
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

  // All Story Section
  public function AllStory(){
    $story = Story::get()->first();
    return view('admin.backend.story.index', compact('story'));
  }
  
  public function AddStory(){
    return view('admin.backend.story.add');
  }

  public function StoreStory(Request $request){
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
        $img->resize(610, 400)->save(public_path('upload/backend/story/'.$name_gen));
        $save_url = 'upload/backend/story/'.$name_gen;

        Story::create([
            'title' => $request->title,
            'desc'  => $request->desc,
            'image' => $save_url,
        ]);
    } else {
        Story::create([
            'title' => $request->title,
            'desc'  => $request->desc,
        ]);
    }

    return redirect()->route('all.story');
  }

  public function EditStory($id){
    $story = Story::find($id);
    return view('admin.backend.story.edit', compact('story'));
  }

  public function UpdateStory(Request $request){
     $request->validate([
        'title' => 'required|string|max:255',
        'desc'  => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $story_id = $request->id;
    $story = Story::findOrFail($story_id);

    if ($request->hasFile('image')) {

        if ($story->image && file_exists(public_path($story->image))) {
            unlink(public_path($story->image));
        }

        $image = $request->file('image');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img->resize(610, 400)->save(public_path('upload/backend/story/'.$name_gen));
        $save_url = 'upload/backend/story/'.$name_gen;

        $story->update([
            'title' => $request->title,
            'desc'  => $request->desc,
            'image' => $save_url,
        ]);
    } else {
        $story->update([
            'title' => $request->title,
            'desc'  => $request->desc,
        ]);
    }

    return redirect()->route('all.story');
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

    if ($request->hasFile('image')){

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

    /* ------- Portfolio Section End ------- */





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

      return redirect()->route('admin.projects')->with('success, The hero section added successfully.');
    }
    else{
      Projects::create([
        'title' => $request->title,
        'description' => $request->description,
      ]);

      return redirect()->route('projects')->with('success, The hero section added successfully.');
    }
  }

  public function EditProject($id){
    $projectId = Projects::findOrFail($id);
    return view('admin.projects.edit', compact('projectId'));
  }

  public function UpdateProject(Request $request){
    $request->validate([
      'title' => 'required|string|max:50',
      'description' => 'required|string|max:300',
      'icon' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
      'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $data = [
      'title' => $request->title,
      'description' => $request->description
    ];

    $projectId = Projects::findOrFail($request->id);

    if($request->hasFile('icon')){
      if($projectId->icon && file_exists(public_path($projectId->icon))){
        unlink(public_path($projectId->icon));
      }

      $iconImage = $request->file('icon');
      $iconImageName = hexdec(uniqid()).'.'.$iconImage->getClientOriginalExtension();
      $iconManager = new ImageManager(new Driver());
      $iconImg = $iconManager->read($iconImage);
      $iconImg->resize(30, 30)->save(public_path('upload/project/icon/'.$iconImageName));
      $saveIconUrl = 'upload/project/icon/'.$iconImageName;

      $projectId->update([
        'title' => $request->title,
        'description' => $request->description,
        'icon' => $saveIconUrl,
        // 'image' => $saveImgUrl,
      ]);

      return redirect()->route('admin.projects')->with('success', 'The project updated successfully');
    }
    else{
      $projectId->update([
        'title' => $request->title,
        'description' => $request->description,
      ]);

      return redirect()->route('admin.projects')->with('success', 'The project updated successfully');
    }

    // Project Image
    if($request->hasFile('image')){
      if($projectId->image && file_exists(public_path($projectId->image))){
        unlink(public_path($projectId->image));
      }

      $image = $request->file('image');
      $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
      $manager = new ImageManager(new Driver());
      $img = $manager->read($image);
      $img->resize(400, 450)->save(public_path('upload/project/image/'.$imageName));
      $saveImgUrl = 'upload/project/image/'.$imageName;

      $projectId->update([
        'title' => $request->title,
        'description' => $request->description,
        // 'icon' => $saveIconUrl,
        'image' => $saveImgUrl,
      ]);
      return redirect()->route('admin.projects')->with('success', 'The project updated successfully');
    }
    else{
      $projectId->update([
        'title' => $request->title,
        'description' => $request->description,
      ]);
      return redirect()->route('admin.projects')->with('success', 'The project updated successfully');
    }
  }

  public function DeleteProject($id){
    $projectId = Projects::findOrFail($id);

    if($projectId->image && file_exists(public_path($projectId->image))){
      unlink(public_path($projectId->image));
    }
    if($projectId->icon && file_exists(public_path($projectId->icon))){
      unlink(public_path($projectId->icon));
    }

    $projectId->delete();
    return redirect()->route('admin.projects');
  }
  /* ------- Project End ------- */


  /* ------- Our Team Start ------- */
  public function OurTeam(){
    return view('admin.our-team.index');
  }

  public function CreateOurTeam(){
    return view('admin.our-team.create');
  }


  public function StoreOurTeam(Request $request){
    $request->validate([
      'name' => 'required|string|max:50',
      'role' => 'required|string|max:50',
      'facebook_link' => 'required|string|max:50',
      'instagram_link' => 'required|string|max:50',
      'twitter_link' => 'required|string|max:50',
      'linkedin_link' => 'required|string|max:50',
      'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    // Creating Image
    $image = $request->file('image');
    $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    $manager = new ImageManager(new Driver());
    $img = $manager->read($image);
    $img->resize(400, 400)->save(public_path('upload/our-team/'.$imageName));
    $saveUrl = 'upload/our-team/'.$imageName;

     OurTeam::create([
      'name' => $request->name,
      'role' => $request->role,
      'facebook_link' => $request->facebook_link,
      'instagram_link' => $request->instagram_link,
      'twitter_link' => $request->twitter_link,
      'linkedin_link' => $request->linkedin_link,
      'image' => $saveUrl,
    ]);

    return redirect()->route('our-team')->with('success, The team member added successfully.');
  }

  public function DeleteOurTeam($id){
    $teamMember = OurTeam::findOrFail($id);
    if ($teamMember->image && file_exists(public_path($teamMember->image))) {
      unlink(public_path($teamMember->image));
    }
    $teamMember->delete();
    return redirect()->route('our-team')->with('success', 'The team member deleted successfully.');
  }



  public function EditOurTeam($id){
    $teamMember = OurTeam::findOrFail($id);
    return view('admin.our-team.edit', compact('teamMember'));
  }


  public function UpdateOurTeam(Request $request){

    $request->validate([
      'name' => 'required|string|max:50',
      'role' => 'required|string|max:50',
      'facebook_link' => 'required|string|max:255',
      'instagram_link' => 'required|string|max:255',
      'twitter_link' => 'required|string|max:255',
      'linkedin_link' => 'required|string|max:255',
      'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $teamId = $request->id;
    $ourTeam = OurTeam::findOrFail($teamId);

    if ($request->hasFile('image')) {
      if ($ourTeam->image && file_exists(public_path($ourTeam->image))) {
        unlink(public_path($ourTeam->image));
      }

      $image = $request->file('image');
      $imageName = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
      $manager = new ImageManager(new Driver());
      $img = $manager->read($image);
      $img->resize(400, 400)->save(public_path('upload/our-team/'.$imageName));
      $saveUrl = 'upload/our-team/'.$imageName;

      $ourTeam->update([
        'name' => $request->name,
        'role' => $request->role,
        'facebook_link' => $request->facebook_link,
        'instagram_link' => $request->instagram_link,
        'twitter_link' => $request->twitter_link,
        'linkedin_link' => $request->linkedin_link,
        'image' => $saveUrl,
      ]);

      return redirect()->route('our-team')->with('success', 'The team member updated successfully.');
    }
    else {
      $ourTeam->update([
        'name' => $request->name,
        'role' => $request->role,
        'facebook_link' => $request->facebook_link,
        'instagram_link' => $request->instagram_link,
        'twitter_link' => $request->twitter_link,
        'linkedin_link' => $request->linkedin_link,
      ]);

      return redirect()->route('our-team')->with('success', 'The team member updated successfully.');
    }
  }
  /* ------- Our Team End ------- */

  // Admin Contact
  public function AllContact(){
    $contact = Contact::get();
    return view('admin.backend.contact.index',compact('contact'));
  }

  public function StoreContact(Request $request){
    // $request->validate([
    //     'name' => 'required|string|max:50',
    //     'lname'  => 'required|string|max:50',
    //     'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    // ]);

    Contact::create([
        'name' => $request->name,
        'lname'  => $request->lname,
        'email'  => $request->email,
        'phone'  => $request->phone,
        'message'  => $request->message,
    ]);

    return redirect()->back();
  }

  public function DeleteContact($id){
     $contact = Contact::findOrFail($id);
    
    $contact->delete();
    return redirect()->route('all.contact');
  }
}