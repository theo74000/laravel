<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use DB;
use App\Quotation;

use Illuminate\Http\Request;
use App\Voyages;

class VoyagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages = Voyages::all();
        return view('admin', compact('voyages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'titre'=>'required',
            'destination'=>'required',
            'prix'=>'required'
        ]);

        $voyages = new Voyages([
            'titre' => $request->get('titre'),
            'destination' => $request->get('destination'),
            'prix' => $request->get('prix')
        ]);
        $voyages->save();
        return redirect('/admin')->with('success', 'voyage saved!');

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
        $voyages = Voyages::finf('$id');
        return view('edit', compact('voyages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request, $id)
    {
        //$request->validate([
        //    'titre'=>'required',
        //    'destination'=>'required',
        //    'prix'=>'required'
        //]);

        $voyages = Voyages::find($id);
        $voyages->titre =  $request->get('titre');
        $voyages->destination = $request->get('destination');
        $voyages->prix = $request->get('prix');
        $voyages->save();

        return redirect('/admin')->with('success', 'Voyage updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voyages = Voyages::find($id);
        $voyages->delete();

        return redirect('/admin')->with('success', 'Voyage deleted!');
    }

    public function displayTable()
    {
        $posts = DB::table('voyages')->get();
        return view('admin', ['voyages' => $posts]);
    }

    public function editvoyage($id)
    {
        $posts = DB::table('voyages')->where('id', $id)->first();
        return view('edit', ['voyages' => $posts]);
    }

}
