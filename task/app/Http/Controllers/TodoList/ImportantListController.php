<?php

namespace App\Http\Controllers\TodoList;

use App\Http\Controllers\Controller;
use App\Models\TodoList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImportantListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $importantList = TodoList::orderBy('id','DESC')->where('type','Important') -> where('completed_at',null)->get();
        $listcompleted = TodoList::orderBy('id','DESC')->where('type','Important')->where('completed','1')->get();
        return view('daskboard.HomeDashboard.ImportantList.index',compact('importantList','listcompleted'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required'
        ]);
        $input = $request->all();
        $input['type'] = 'Important';
        $input['user_id'] = Auth::id();
        TodoList::create($input);
        return redirect()->back();
    }

    public function importantcomplete( TodoList $importantList)
    {
        $input['completed'] = true;
        $input['completed_at'] = Carbon::now();
        $input['user_id'] = Auth::id();
        $importantList->update($input);
        return redirect()->back();
    }
    public function importantuncomplete( TodoList $importantList)
    {
        $input['completed'] = false;
        $input['completed_at'] = null;
        $input['user_id'] = Auth::id();
        $importantList->update($input);
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TodoList $ImportantList)
    {
        $input = $request -> all();
        $input['user_id'] = Auth::id();
        $ImportantList->update($input);

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TodoList $ImportantList)
    {
        $ImportantList -> delete();
        return redirect()->back();
    }
}
