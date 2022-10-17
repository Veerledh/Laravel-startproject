<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pastry;
use Illuminate\Http\Request;

class PastriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function index(Request $request)
    {
        if ($request->has('category')){
            $pastries = Pastry::where('category_id', '=', $request->query('category'))->get();
        } else {
            $pastries = Pastry::all();
        }
        $pastryCategories = Category::all();
        Return view( 'pastries', ['pastries'=>$pastries, 'categories' => $pastryCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $pastryCategories = Category::all();
        return view('pastries.create', ['categories' => $pastryCategories]);
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
            'category_id'=>'required',
            'title'=> 'required',
            'details'=> 'required',
            'notes'=>'required',
            'image'=>'required'
        ]);
        Pastry::create($request->all());
        return redirect()->route('pastries');
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @return \Illuminate\Http\RedirectResponse
     */
    public function search(Request $request)
    {
        $pastries = Pastry::where('title', 'like', '%' . $request->other . '%')
            ->orWhere('notes', 'like', '%' . $request->other . '%')
            ->orWhere('details', 'like', '%' . $request->other . '%')
            ->get();
        $pastryCategories = Category::all();
        return view('pastries', compact('pastries'), ['categories' => $pastryCategories]);
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
        $pastryCategories = Category::all();
        return view('pastries.edit',['pastries' => Pastry:: find($id), 'categories' => $pastryCategories]);
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
            'category_id'=> 'required',
            'title'=> 'required',
            'details'=> 'required',
            'notes'=>'required',
            'image'=>'required'
        ]);
        $pastries = Pastry::find($id);
        $pastries->category_id =  $request->get('category_id');
        $pastries->title =  $request->get('title');
        $pastries->details = $request->get('details');
        $pastries->notes = $request->get('notes');
        $pastries->image = $request->get('image');
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
