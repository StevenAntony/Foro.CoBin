<?php

namespace App\Http\Controllers\CurriculumVitae;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class webController extends Controller
{
    public function Index($user){
        $exist = User::where('name',$user)->count();
        if ($exist == 1) {
            $user = User::where('name',$user)->get();
            return view('curriculum.home')->with('user',$user);
        }else{
            return 'error';
        }
    }
}
