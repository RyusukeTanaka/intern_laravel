<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $users = User::all();

        return view('user.index')
            ->with(['users' => $users]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->adrress;
        $user->facebook_link = $request->facebook_link;
        $user->youtube_link = $request->youtube_link;
        $user->description = $request->description;
        $user->save();

        return redirect()
            ->route('user.index');
    }
}
