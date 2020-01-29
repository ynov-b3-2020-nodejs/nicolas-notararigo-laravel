<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function create()
    {
        return view('settings');
    }

    public function update()
    {
        $user = User::updated(request(['name', 'email', 'password']));

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
        ]);

        return redirect()->to('/');
    }
}
