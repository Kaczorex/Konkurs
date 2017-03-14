<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransportRequest;
use Illuminate\Support\Facades\DB;
use App\Transport;

class TransportController extends Controller
{
    public function __construct() {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        
       $transports = DB::table('transports')->leftJoin('users', 'users.id', '=', 'transports.users_id')->orderBy('transports.id', 'desc')->paginate(10);

       
        //echo view('transport.ModalAddDeparture');
        return view('transport.index',['transports' => $transports]);
        
        
    }

    /**
     *   $transports = Transport::paginate(10);
     *   return view('transport.index', compact('transports'));
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('transport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TramsportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransportRequest $request)
    {
        $adress = $request->input('adress');
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
