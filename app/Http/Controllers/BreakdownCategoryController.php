<?php

namespace App\Http\Controllers;

use App\Http\Requests\BreakdownCategoryRequest;
use App\Http\Resources\BreakdownCategoryCollection;
use App\Models\BreakdownCategory;
use Illuminate\Http\Request;

class BreakdownCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return new BreakdownCategoryCollection(
            BreakdownCategory::when($request->keyword, function ($q) use ($request) {
                $q->where('name', 'LIKE', "%{$request->keyword}%")
                    ->orWhere('description_id', 'LIKE', "%{$request->keyword}%")
                    ->orWhere('description_en', 'LIKE', "%{$request->keyword}%");
            })
                ->orderBy($request->sort ?: 'name', $request->order == 'descending' ? 'desc' : 'asc')
                ->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BreakdownCategoryRequest $request)
    {
        $breakdownCategory = BreakdownCategory::create($request->all());
        return ['message' => 'Data has been saved', 'data' => $breakdownCategory];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BreakdownCategory  $breakdownCategory
     * @return \Illuminate\Http\Response
     */
    public function update(BreakdownCategoryRequest $request, BreakdownCategory $breakdownCategory)
    {
        $breakdownCategory->delete();
        return ['message' => 'Data has been updated', 'data' => $breakdownCategory];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BreakdownCategory  $breakdownCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BreakdownCategory $breakdownCategory)
    {
        $breakdownCategory->delete();
        return ['message' => 'Data has been deleted'];
    }
}
