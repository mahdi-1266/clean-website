<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
  /* ------ AdminLogout Function Start  ------ */
  public function AdminLogout(Request $request){
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
  }
  /* ------ AdminLogout Function End  ------ */


  /* ------ AdminProfile Function Start  ------ */
  public function AdminProfile(){
    $id = Auth::user()->id;
    $userInfo = User::find($id);
    return view('admin.admin_profile', compact('userInfo'));
  }
  /* ------ AdminProfile Function End  ------ */


  /* ------ StoreProfile Function Start  ------ */
  public function StoreProfile(Request $request){
    $id = Auth::user()->id;
    $userData = User::find($id);

    $userData->name = $request->name;
    $userData->email = $request->email;
    $userData->phone = $request->phone;
    $userData->address = $request->address;

    $oldPhotoPath = $userData->photo;
    if($request->hasFile('photo')){
      $photo = $request->file('photo');
      $photoName = time().'.'.$photo->getClientOriginalExtension();
      $photo->move(public_path('upload/user_images/'), $photoName);
      $userData->photo = $photoName;

      if($oldPhotoPath && $oldPhotoPath !== $photoName){
        $this->deleteOldImage($oldPhotoPath);
      }
    }

    $userData->save();

    $notification = array(
      'message' => "Profile updated successfully.",
      'alert-type' => 'success',
    );

    return redirect()->back()->with($notification);
  }

  private function deleteOldImage(string $oldPhotoPath) : void {
    $photoFullPath = public_path('upload/user_images/'.$oldPhotoPath);
    if(file_exists($photoFullPath)){
      unlink($photoFullPath);
    }
  }
  /* ------ StoreProfile Function End  ------ */


  /* ------ Admin Update Password Function Start  ------ */
  public function AdminUpdatePassword(Request $request){
    $user = Auth::user();
    $request->validate([
      'current_password' => 'required',
      'new_password' => 'required|confirmed',
    ]);

    if(!Hash::check($request->current_password, $user->password)){
      $notification = array(
        'message' => 'Current password does not match.',
        'alert-type' => 'error',
      );
      return back()->with($notification);
    }

    User::whereId($user->id)->update([
      'password' => Hash::make($request->new_password),
    ]);

    Auth::logout();

    $notification = array(
      'message' => 'Password updated successfully.',
      'alert-type' => 'success',
      );
    return redirect()->route('login')->with($notification);
  }
  /* ------ Admin Update Password Function End  ------ */

}
