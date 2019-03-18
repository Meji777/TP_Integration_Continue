<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Helper extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function CreateUser(Request $request){
        $contact = [];
        $contact['login'] = $request->get('login');
        $contact['mdp'] = $request->get('mdp');



        return view('Accueil');
    }
    public function LogUser(Request $request){
        $login = $request->get('login');
        $mdp = $request->get('mdp');

        return view('Accueil',['login' => $login,'mdp' => $mdp]);
    }

    public function UnLogUser(Request $request){
        $destroy = 1;

        return view('Accueil',['destroy' => $destroy]);
    }
}
