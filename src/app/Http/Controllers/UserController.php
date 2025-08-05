<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{

    public function show(string $id): View
    {
        $users = collect(["juan", "predro","maria","jose"]);
        return view('user.profile', data: [
            'user' => User::findOrFail($id),  'users' => $users 
        ]);
    }
}
