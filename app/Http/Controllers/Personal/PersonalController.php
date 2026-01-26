<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Institution;
use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        $data = Personal::all();

        return view('personal.index', compact('data'));
    }

    public function create(){
        $intitution = Institution::all();
        return view('personal.crete', compact('intitution'));
    }   
}
