<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardProfileController extends Controller
{
  public function index()
  {
    return view('dashboard.profile.index', [
      'title'    => 'My Profile',
      'userData' => auth()->user()
    ]);
  }

  public function update(ProfileUpdateRequest $request, User $user)
  {
    $this->authorize('update', $user);

    $validate = $request->validated();

    if ($validate['oldPassword'] ?? false) {
      //check password
      if (Hash::check($validate['oldPassword'], $user->password)) {
        // password match
        $newPass = Hash::make($validate['password']);

        User::where('id', $user->id)
          ->update(['password' => $newPass]);

        return redirect('/dashboard/profile')
          ->with('success', "Your password has been updated!");
      } else {
        return redirect('/dashboard/profile')
          ->with('failed', "Your old password is invalid!");
      }
    }

    User::where('id', $user->id)
      ->update($validate);

    return redirect('/dashboard/profile')
      ->with('success', "Your profile has been updated!");
  }

  public function updateProfile(Request $request){

    // dd($request);
    $user =  User::where('id', auth()->user()->id)->first();
    // dd(auth()->user()->id);
     if ($request->get('semester')) {
            $user->semester = $request->get('semester');
            $user->save();
        }
     if ($request->get('ipk')) {
            $user->IPK = $request->get('ipk');
            $user->save();
        }

    return redirect('/dashboard/questioner')
      ->with('success', "Formulir berhasil diisi");
  }
}
