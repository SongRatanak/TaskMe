<?php

namespace App\Http\Controllers\TodoList;

use App\Http\Controllers\Controller;
use App\Models\TodoList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $homelist = TodoList::orderBy('id','DESC')->where('type','Home') -> where('completed_at',null)->get();
        $listcompleted = TodoList::orderBy('id','DESC')->where('type','Home')->where('completed','1')->get();
        return view('daskboard.HomeDashboard.HomeList.index',compact('homelist','listcompleted'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'task' => 'required'
        ]);
        $input = $request->all();
        $input['type'] = 'Home';
        $input['user_id'] = Auth::id();
        TodoList::create($input);
        return redirect()->back();
    }

    public function complete(TodoList $todoList)
    {
        $input['completed'] = true;
        $input['completed_at'] = Carbon::now();
        $input['user_id'] = Auth::id();
        $todoList->update($input);
        return redirect()->back();
    }
    public function uncomplete(TodoList $todoList)
    {
        $input['completed'] = false;
        $input['completed_at'] = null;
        $input['user_id'] = Auth::id();
        $todoList->update($input);
        return redirect()->back();
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

    public function update (Request $request,TodoList $Homelist)
    {
        $input = $request -> all();
        $input['user_id'] = Auth::id();
        $Homelist->update($input);

        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TodoList $Homelist)
    {
        $Homelist -> delete();
        return redirect()->back()->with('success');
    }
}
