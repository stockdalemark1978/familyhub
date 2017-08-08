<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grocery;
use App\User;
use Session;

class GroceryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
            $users = \App\User::all();
            $groceries = \App\Grocery::all();
            foreach ($groceries as $grocery) {
                $grocery['action'] = '/groceries/' . $grocery['id'];
            }
            return view('groceries.index', compact('groceries', 'users'));

    }

      public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('groceries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grocery = new \App\Grocery;
        $grocery['name'] = $request->name;
        // $grocery['user_id'] = $request->id;
        // $grocery['completed'] = $request->completed;
        $grocery->save();

        return redirect('/groceries');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $grocery = \App\Grocery::find($id);
        return view('groceries.show', compact('grocery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grocery = \App\Grocery::find($id);
        $grocery->delete();
        return redirect('/groceries');
    }


   
}
