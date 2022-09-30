<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\TodoList;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    //
    public function Home(){
        //HomeLsit
        $TodolistCount = TodoList::all()->where('type','Home')->where('completed','1')->count();
        $TodolistNotComplete = TodoList::all()->where('type','Home')->where('completed','0')->count();
        $TodolisComplet = TodoList::orderBy('id','DESC')->where('type','Home')->where('completed','1')->get();

        //Personal
        $PersonalCount = TodoList::all()->where('type','Personal')->where('completed','1') ->count();
        $PersonalNotComplete = TodoList::all()->where('type','Personal')->where('completed','0')->count();
        $PersonalComplete = TodoList::orderBy('id','DESC')->where('type','Personal')->where('completed','1')->get();

        //Important
        $ImportantCount = TodoList::all()->where('type','Important')->where('completed','1') ->count();
        $ImportantNotComplete = TodoList::all()->where('type','Important')->where('completed','0')->count();
        $ImportantComplete = TodoList::orderBy('id','DESC')->where('type','Important')->where('completed','1')->get();

        return view ('daskboard.HomeDashboard.dashboard',compact('TodolistCount','ImportantCount','PersonalCount','ImportantComplete','TodolistNotComplete','ImportantNotComplete','PersonalNotComplete','PersonalComplete','TodolisComplet'));

    }



}
