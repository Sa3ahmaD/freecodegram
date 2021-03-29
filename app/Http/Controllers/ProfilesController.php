<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        // dd($user);
        return view('profiles.index', compact('user'));
    }
    
    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }
    
    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'profileimage' => '',
        ]);
        
        if (request('profileimage')) {
            $imagePath = request('profileimage')->store('profile', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit('1000', '1000');
            $image->save();
            $imgArray = ['profileimage' => $imagePath];
        }
        
        auth()->user()->profile->update(array_merge(
            $data,
            $imgArray ?? [],
        ));
        
        
        return redirect()->route('profile.show', $user);
    }
}
