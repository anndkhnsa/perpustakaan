<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Flight;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $user = User::all();

        return view('user', [
            'users' => $user
        ]);
    }
    public function delete($id)
    {
        $delete = User::find($id);

        $delete->delete();

        return back();
    }
}





