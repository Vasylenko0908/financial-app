<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Eod;

class MainController extends Controller
{
    private $exchange_symbol;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $exchange = Eod::exchange();
        $this->exchange_symbol = $exchange->exchange_symbol_list('US')->json();
    }
    public function index()
    {
        $stock = Eod::stock();
        
        // JSON 
        

        // // Save CSV to specific path
        // $stock->realTime('AAPL.US')->save('path/to/save/csv/stock.csv');

        // For other parameters, for ex. dividend api with other params
        // $stock->dividend('AAPL.US', ['from' => '2017-01-01'])->json();
        return view('pages.home');
    }
    
    public function first(){
        dd($this->exchange_symbol);
        return view('first');
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
    public function store(Request $request)
    {
        //
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
