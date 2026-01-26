<?php

namespace App\Http\Controllers\Accont;

use App\Models\Account;
use App\Models\Institution;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;

class AccountController extends Controller
{
    public function index(){
        $data = Account::whereNot('role_id', 1)->get();

        return view('account.index', compact('data'));
    }

    public function create(){
        $intitution = Institution::all();
        $role = Role::whereNot('role_id', 1)->get();

        return view('account.create', compact('intitution', 'role'));
    }

    public function store(Request $request){
        $request->validate([
            'institution' => 'required',
            'email' => 'required|email',
            'role' => 'required'
        ]);

        $password = 'password';

        Account::create([
            'institution_id' => $request->institution,
            'email' => $request->email,
            'password' => $password,
            'role_id' => $request->role
        ]);

        return redirect()->route('data.account')->with('success', 'Data berhasil ditambahkan');

    }
}
