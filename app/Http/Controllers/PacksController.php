<?php

namespace App\Http\Controllers;

use App\Pack;
use App\Sticker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Pack as PackResource;

class PacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packs = Pack::all();
        return PackResource::collection($packs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'name' => 'required|string|max:50',
            'description' => 'string|nullable',
            'shared_code' => 'required|string|max:10',
            'views' => 'required|integer',
            'likes' => 'required|integer',
            'size' => 'required|string|max:20'
        ])->validate();

        $pack = Pack::create($request->all());
        return new PackResource($pack);
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pack = Pack::findOrFail($id);
        return new PackResource($pack);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'name' => 'required|string|max:50',
            'description' => 'string|nullable',
            'shared_code' => 'required|string|max:10',
            'views' => 'required|integer',
            'likes' => 'required|integer',
            'size' => 'required|string|max:20'
        ])->validate();

        $pack = Pack::findOrFail($id);
        $pack->update($request->all());

        return new PackResource($pack);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pack = Pack::findOrFail($id);
        $pack->delete();

        return response()->json(null, 204);
    }
}
