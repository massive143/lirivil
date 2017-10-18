<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;
use App\Table;
use App\resource\views\app;
use DB;
use Laravel\Scout\Searchable;


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


     // $tables = Table::all();
     // return view('app.index', ['tables' => $tables]);
      



      $tables = Table::paginate(3);
        return view('app.index',compact('tables'));
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

    public function searchas(Request $request){
        if($request->has('nama')){
            $tables = Table::search($request->nama)
                ->paginate(3);
        }else{
            $tables = Table::paginate(3);
        }
        return view('app.searchas',compact('tables'));
    }

    public function search(Request $request){
        $this->validate($request,['nama'=>'required','password'=>'required']);

        $tables = Table::create($request->all());
        return back();

    }
   

    
}


