<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitCategoryRequest;
use App\Http\Resources\UnitCategoryCollection;
use App\Models\UnitCategory;
use Illuminate\Http\Request;

class UnitCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return new UnitCategoryCollection(
            UnitCategory::when($request->keyword, function ($q) use ($request) {
                $q->where('name', 'LIKE', "%{$request->keyword}%")
                    ->orWhere('description', 'LIKE', "%{$request->keyword}%");
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
    public function store(Request $request)
    {
        $unitCategory = UnitCategory::create($request->all());
        return ['message' => 'Data has been saved', 'data' => $unitCategory];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UnitCategory  $unitCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UnitCategoryRequest $request, UnitCategory $unitCategory)
    {
        $unitCategory->update($request->all());
        return ['message' => 'Data has been updated', 'data' => $unitCategory];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UnitCategory  $unitCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnitCategory $unitCategory)
    {
        $unitCategory->delete();
        return ['message' => 'Data has been deleted'];
    }
}
