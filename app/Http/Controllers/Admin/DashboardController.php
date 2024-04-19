<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use App\Models\User;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $userCount = User::count(); // Count the total number of users
    return view("admin.index", compact('userCount'));
}
    public function user()
    {
        return view("user.index");
    }
    public function finder()
    {
        return view("finder.index");
    }
    


   
}
