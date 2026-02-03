<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;


class BackendController extends Controller
{
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

    if ($request->hasFile('image')) {
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

}
