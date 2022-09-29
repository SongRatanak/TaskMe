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
        $TodolistCount = TodoList::all()->where('type','Home')->where('completed','1')->count();
        $ImportantCount = TodoList::all()->where('type','Important')->where('completed','1') ->count();
        $PersonalCount = TodoList::all()-> where('type','Personal')->where('completed_at','1')->count();
        $listcompleted = TodoList::orderBy('id','DESC')->where('type','Important')->where('completed','1')->get();


        $TodolistNotComplete = TodoList::all()->where('type','Home')->where('completed','0')->count();

        return view ('daskboard.HomeDashboard.dashboard',compact('TodolistCount','ImportantCount','PersonalCount','listcompleted','TodolistNotComplete'));

    }



}
