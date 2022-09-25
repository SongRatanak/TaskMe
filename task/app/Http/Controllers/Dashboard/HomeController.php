<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\TodoList;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function Home(){

        $TodolistCount = TodoList::all()->where('type','Home')->where('completed','1') ->count();
        return view ('daskboard.HomeDashboard.dashboard',compact('TodolistCount'));
    }



}
