<?php

namespace App\Http\Controllers;

use App\Sticker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Sticker as StickerResource;

class StickersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stickers = Sticker::all();
        return StickerResource::collection($stickers);
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
            'pack_id' => 'integer|nullable',
            'name' => 'required|string|max:50',
            'description' => 'string|nullable',
            'shared_code' => 'required|string|max:10',
            'views' => 'required|integer',
            'likes' => 'required|integer',
            'size' => 'required|string|max:20'
        ])->validate();

        $sticker = Sticker::create($request->all());
        return new StickerResource($sticker);
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sticker = Sticker::findOrFail($id);
        return new StickerResource($sticker);
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
            'pack_id' => 'integer|nullable',
            'name' => 'required|string|max:50',
            'description' => 'string|nullable',
            'shared_code' => 'required|string|max:10',
            'views' => 'required|integer',
            'likes' => 'required|integer',
            'size' => 'required|string|max:20'
        ])->validate();

        $sticker = Sticker::findOrFail($id);
        $sticker->update($request->all());

        return new StickerResource($sticker);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sticker = Sticker::findOrFail($id);
        $sticker->delete();

        return response()->json(null, 204);
    }
}
