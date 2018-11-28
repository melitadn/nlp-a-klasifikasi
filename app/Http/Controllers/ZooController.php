<?php

namespace App\Http\Controllers;

use App\Glasses;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ZooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $client = new Client(); //GuzzleHttp\Client
        
        $result = $client->request('POST','https://zoo-type-class-classifier.herokuapp.com/input/task', [
               'form_params' =>['eggs'=>$request->eggs,
                'feathers'=>$request->feathers,
                'hair'=>$request->hair,
                'legs'=>$request->legs,
                'milk'=>$request->milk,
                'toothed'=>$request->toothed],
        ]);

        // dd($result->getStatusCode());
        // $data=$result->getBody();

        // dd($data);
        
        // $data=json_decode($data);

        // dd($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Glasses  $glasses
     * @return \Illuminate\Http\Response
     */
    public function show(Glasses $glasses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Glasses  $glasses
     * @return \Illuminate\Http\Response
     */
    public function edit(Glasses $glasses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Glasses  $glasses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Glasses $glasses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Glasses  $glasses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Glasses $glasses)
    {
        //
    }
}
