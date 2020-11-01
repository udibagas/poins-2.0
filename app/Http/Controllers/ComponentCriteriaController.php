<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComponentCriteriaRequest;
use App\Http\Resources\ComponentCriteriaCollection;
use App\Models\ComponentCriteria;
use Illuminate\Http\Request;

class ComponentCriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return new ComponentCriteriaCollection(
            ComponentCriteria::when($request->keyword, function ($q) use ($request) {
                $q->where('code', 'LIKE', "%{$request->keyword}%")
                    ->orWhere('description', 'LIKE', "%{$request->keyword}%");
            })
                ->orderBy($request->sort ?: 'code', $request->order == 'descending' ? 'desc' : 'asc')
                ->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComponentCriteriaRequest $request)
    {
        $componentCriteria = ComponentCriteria::create($request->all());
        return ['message' => 'Data has been saved', 'data' => $componentCriteria];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComponentCriteria  $componentCriteria
     * @return \Illuminate\Http\Response
     */
    public function update(ComponentCriteriaRequest $request, ComponentCriteria $componentCriteria)
    {
        $componentCriteria->update($request->all());
        return ['message' => 'Data has been updated', 'data' => $componentCriteria];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComponentCriteria  $componentCriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComponentCriteria $componentCriteria)
    {
        $componentCriteria->delete();
        return ['message' => 'Data has been deleted'];
    }
}
