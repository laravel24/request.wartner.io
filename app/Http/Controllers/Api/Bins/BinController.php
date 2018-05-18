<?php

namespace App\Http\Controllers\Api\Bins;

use App\Http\Resources\BinResource;
use App\Models\Bin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection|\Illuminate\Http\Response
     */
    public function index()
    {
        $bins = Bin::all();

        return BinResource::collection($bins);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return BinResource|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bin = Bin::create([
            'name' => $request->get('name'),
            'user_id' => $request->get('userId'),
            'is_secret' => $request->get('is_secret')
        ]);

        return BinResource::make($bin);
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
