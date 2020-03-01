<?php

namespace App\Http\Controllers;

use App\Sticker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Search as SearchResource;

class SearchController extends Controller
{
    /**
     * Display the specified resources.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = '%' . $request->get('search') . '%';

        $stickers = Sticker::with(['user', 'pack', 'tags', 'category'])

            // Where clausures
            ->where('name', 'like', $search)
            ->orWhere('shared_code', 'like', $search)

            // Where relationships
            ->orWhereHas('user', function ($query) use ($search) {
                $query->where('first_name', 'like', $search)
                    ->orWhere('last_name', 'like', $search);
            })
            ->orWhereHas('pack', function ($query) use ($search) {
                $query->where('name', 'like', $search)
                    ->orWhere('description', 'like', $search)
                    ->orWhere('shared_code', 'like', $search);
            })
            ->orWhereHas('tags', function ($query) use ($search) {
                $query->where('name', 'like', $search);
            })
            ->orWhereHas('category', function ($query) use ($search) {
                $query->where('name', 'like', $search);
            })

            // Order By
            ->orderBy('views', 'desc')
            ->orderBy('likes', 'desc')
            ->orderBy('created_at', 'desc')
            ->orderBy('name', 'desc')
            ->get();

        return SearchResource::collection($stickers);
    }

    /**
     * Display the specified resources.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchByTags(Request $request)
    {
        $stickers = Sticker::with(['user', 'pack', 'tags', 'category'])
            ->orWhereHas('tags', function ($query) use ($request) {
                $query->whereIn('name', $request->get('tags'));
            })
            ->orderBy('views', 'desc')
            ->orderBy('likes', 'desc')
            ->orderBy('created_at', 'desc')
            ->orderBy('name', 'desc')
            ->get();

        return SearchResource::collection($stickers);
    }

    /**
     * Display the specified resources.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchByCategory(Request $request)
    {
        $stickers = Sticker::with(['user', 'pack', 'tags', 'category'])
            ->WhereHas('category', function ($query) use ($request) {
                $query->where('name', $request->get('category'));
            })
            ->orderBy('views', 'desc')
            ->orderBy('likes', 'desc')
            ->orderBy('created_at', 'desc')
            ->orderBy('name', 'desc')
            ->get();

        return SearchResource::collection($stickers);
    }
}
