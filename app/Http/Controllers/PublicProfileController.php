<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PublicProfileController extends Controller
{
    public function show(User $user)
    {
        $links = $user->links()->where('active', true)->orderBy('order')->get();
        return view('profile.public', compact('user', 'links'));
    }
}
