<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;
use App\Table;
use App\resource\views\app;
use DB;


class myController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          // get all the database


      $tables = Table::all();
     // $tables = DB::table('tables')->paginate(3);
      //$result->tables;
      // $result = json_decode($tables, true);
        return view('app.index', ['tables' => $tables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tables = new Table([
          'nama'     => $request->get('nama'),
          'password' => $request->get('password'),
        ]);

        $tables->save();
        return view('app.create');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tables = Table::find($id);
        
        return view('app.edit', compact('tables','id'));
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
        $tables = Table::find($id);
        $tables->nama     = $request->get('nama');
        $tables->password = $request->get('password');
        $tables->save();
        return redirect('/app');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $tables =Table::find($id);
      $tables->delete();

      return redirect('/app');
    }

    public function logins()
    {
          // get all the database
      

     
      //  $tables = Table::pagination(3);
        return view('app.login');
    }

    public function users(){
        $users = Table::paginate(3);
        return view('app.pagination',compact('users'));
    }

    
}


