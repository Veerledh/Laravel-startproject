<?php

namespace App\Http\Controllers;

use App\Models\Pastry;
use Illuminate\Http\Request;

class PastriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $title = "Pastries :)";
        $pastries = Pastry::all();
        Return view( 'pastries', compact( 'title'), ['pastries'=>$pastries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pastries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //validatie
        $request->validate([
            'title'=> 'required',
            'details'=> 'required',
            'notes'=>'required',
            'image'=>'required'
        ]);
        Pastry::create($request->all());
        return redirect()->route('pastries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pastry = $id;
        return view('pastries.details', ['pastry' => pastry::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pastries = $id;
        return view('pastries.edit',['pastries' => Pastry:: find($id)]);
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
        $request->validate([
            'title'=> 'required',
            'details'=> 'required',
            'notes'=>'required',
            'image'=>'required'
        ]);
        $pastries = Pastry::find($id);
        $pastries->title =  $request->get('title');
        $pastries->details = $request->get('details');
        $pastries->notes = $request->get('notes');
        $pastries->Image = $request->get('image');
        $pastries->save();
        return redirect('pastries')->with('success', 'pastry edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Pastry $pastry)
    {
        $pastry->delete();
        return redirect('pastries')->with('message','verwijderd');
    }
}
