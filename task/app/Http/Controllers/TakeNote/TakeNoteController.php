<?php

namespace App\Http\Controllers\TakeNote;

use App\Http\Controllers\Controller;
use App\Models\TakeNote;
use App\Models\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TakeNoteController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $textnote = TakeNote::all();
        return view('daskboard.HomeDashboard.TakeNote.index',compact('textnote'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daskboard.HomeDashboard.TakeNote.create');
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
            'title' => 'required',
            'description' => 'required'
        ]);
        $input = $request->all();
        $input['user_id'] = Auth::id();
        TakeNote::create($input);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TakeNote  $takeNote
     * @return \Illuminate\Http\Response
     */
    public function show(TakeNote $TakeNote )
    {
        return view('daskboard.HomeDashboard.TakeNote.show',compact('TakeNote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TakeNote  $takeNote
     * @return \Illuminate\Http\Response
     */
    public function edit(TakeNote $TakeNote)
    {
        return view('daskboard.HomeDashboard.TakeNote.edit',compact('TakeNote'));
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TakeNote  $takeNote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TakeNote $TakeNote)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();
        $TakeNote ->update($input);
        return redirect()->route('TakeNote.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TakeNote  $takeNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(TakeNote $TakeNote)
    {
        $TakeNote -> delete();
        return redirect()->back()->with('success');
    }
}
