<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Eod;
use App\Models\Countries;

class MainController extends Controller
{
    private $exchange_symbol;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        // $exchange = Eod::exchange();
        // $this->exchange_symbol = $exchange->exchange_symbol_list('US')->json();
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
        // dd($this->exchange_symbol);
        return view('first');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        //
        $stock = Eod::stock();
        $result = json_decode($stock->search($name, ['limit' => 7])->json());
        // $data = json_decode($this->exchange_symbol);
        
        // usort($data, function ($a, $b) use ($name) {
        //     // find the term in first entry
        //     $t1 = preg_match("/^.*?\b($name\w*)\b.*\$/i", $a->Name, $matches) ? $matches[1] : '';
           
        //     // find the term in second entry
        //     $t2 = preg_match("/^.*?\b($name\w*)\b.*\$/i", $b->Name, $matches) ? $matches[1] : '';
        //     // check if the terms were found
        //     if ($t1 == '' && $t2 != '') return 1;
        //     if ($t1 != '' && $t2 == '') return -1;
        //     // found in both - if not the same, just sort on the keyword
        //     if ($t1 != $t2) return strcmp($t1, $t2);
        //     // found the same keyword, sort on the whole title
        //     return strcmp($a->Name, $b->Name);
        // });
        // dd(count($result));
        // $result=array();
        for($i=0; $i<count($result); $i++){
            // $result[$i] = $data[$i];
            // dd($result[3]->Country);
            if($result[$i]->Country != "Unknown"){
                // dd($result[$i]->Country);
                $flag = Countries::select('filename')->where('name',$result[$i]->Country)->get();
                dd($flag);
                $result[$i]->flag = $flag;
                
            }else{
                $result[$i]->flag = '';

            }
            // dd($flag);
        }
        return response()->json([
            'result'=>$result
        ]);
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
