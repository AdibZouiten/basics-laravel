<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('computers.index',[
            'computers'=> Computer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computers.create');
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
            'computer_name'=> 'required',
            'computer_origin'=> 'required',
            'computer_price'=> ['required','integer'],
        ]);


        $computer = new Computer();

        $computer->name = strip_tags($request->input('computer_name')) ;
        $computer->origin = strip_tags($request->input('computer_origin'));
        $computer->price = strip_tags($request->input('computer_price'));

        $computer->save();

        return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('computers.show',[
            'computer'=> Computer::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('computers.edit', [
            'computer'=> Computer::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $computer)
    {

        $request->validate([
            'computer_name'=> 'required',
            'computer_origin'=> 'required',
            'computer_price'=> ['required','integer'],
        ]);

        
        $toUpdate = Computer::findOrFail($computer);
        $toUpdate->name = strip_tags($request->input('computer_name'));
        $toUpdate->origin = strip_tags($request->input('computer_origin'));
        $toUpdate->price = strip_tags($request->input('computer_price'));

        $toUpdate->save();


        return redirect()->route('computers.show', $computer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toDestroy = Computer::findOrFail($id);  
        $toDestroy ->delete();

        return redirect()->route('computers.index');
    }
}
