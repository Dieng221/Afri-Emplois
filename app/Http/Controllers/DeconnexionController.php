<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeconnexionController extends Controller
{

    public function destroy()
    {
        Auth::logout();
        return redirect('/')->with('message', 'Deconnecter');
    }
}
