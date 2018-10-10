<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct() {
        return $this->middleware('auth');
    }

    public function index()
    {
        //
        $user = \Auth::user();
        $user_id = $user->id;
        $roleusers = \DB::table('role_users')->get();
        $authorize = null;
        foreach($roleusers as $roleuser) {
            if($roleuser->user_id == $user_id) {
                $authorize = 'yes';
            }
        }
        if(\Auth::user()->is_admin == 1 || $authorize != null) {
            return view('admin');
        }
        else {
            return redirect('/home');
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
