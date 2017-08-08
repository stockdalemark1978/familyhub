<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chore;

class ChoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = \App\User::all();
            $chores = \App\Chore::all();
            foreach ($chores as $chore) {
                $chore['action'] = '/chores/' . $chore['id'];
            }
            return view('chores.index', compact('chores', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chore = new \App\Chore;
        $chore['name'] = $request->name;
        // $grocery['user_id'] = $request->id;
        // $grocery['completed'] = $request->completed;
        $chore->save();
        return redirect('/chores');
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
        $chore = \App\Chore::find($id);
        $chore->delete();
        return redirect('/chores');
    }
}
