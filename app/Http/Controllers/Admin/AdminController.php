<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }




  





    public function login()
    {

        
        if (Auth::check()) {
            $user = User::find(Auth::id());
            if ($user->hasRole('Admin')) {
                return redirect()->route('admin.dashboard');
            }
        }
        return view('login');
    }
    public function loginSubmit(Request $request)
    {

        // return 'hello';
        $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            $request->session()->regenerate();
            $user = User::find(Auth::id());


            if ($user->hasRole('Admin')) {
                // return "hello";
                return redirect()->route('admin.dashboard');
            }
             else {
                return redirect()->route('user.dashboard');
            }
        }
        return 'admin.dashboard';
        return redirect()->route('admin.dashboard');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('account.login');
    }

    

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
