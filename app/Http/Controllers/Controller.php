<?php

namespace App\Http\Controllers;

use App\Models\Recruteur;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $titre = "Accueil";
        $emplois= DB::select('select * from recruteurs where id <= 4 ORDER BY created_at DESC', [1]);
        return view('user.index', compact('titre','emplois'));
    }

    public function a_propos(){
        $titre = "A propos";
        return view('user.a_propos');
    }

}
