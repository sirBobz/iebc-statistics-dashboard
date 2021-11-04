<?php

namespace App\Http\Controllers\V1;

use App\DataTables\DemographicDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use App\Models\Demographic;

class DemographicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(DemographicDataTable $dataTable, Request $request)
    {
        return $dataTable->render('V1.File.index');
    }
    /**
     * Present the data from the DB
     *
     * @param
     * @return\Illuminate\Http\Response
     */
    public  function  presentation(){
        $counties = Demographic::select('county_name')->whereNotNull('county_name')->distinct()->get();

        foreach ($counties as $key => $value){
            $counties_array[] = json_decode($value)->county_name;
        }
        var_dump($counties_array);
       // return view('V1.File.presentation', compact('counties_array'));
    }

    public  function counties()
    {
        return Demographic::distinct()->whereNotNull('county_name')->get('county_name');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

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
        //
    }

}
