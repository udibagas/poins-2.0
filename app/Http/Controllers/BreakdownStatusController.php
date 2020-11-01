<?php

namespace App\Http\Controllers;

use App\Http\Requests\BreakdownStatusRequest;
use App\Http\Resources\BreakdownStatusCollection;
use App\Models\BreakdownStatus;
use Illuminate\Http\Request;

class BreakdownStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return new BreakdownStatusCollection(
            BreakdownStatus::when($request->keyword, function ($q) use ($request) {
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
    public function store(BreakdownStatusRequest $request)
    {
        $breakdownStatus = BreakdownStatus::create($request->all());
        return ['message' => 'Data has been saved', 'data' => $breakdownStatus];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BreakdownStatus  $breakdownStatus
     * @return \Illuminate\Http\Response
     */
    public function update(BreakdownStatusRequest $request, BreakdownStatus $breakdownStatus)
    {
        $breakdownStatus->update($request->all());
        return ['message' => 'Data has been updated', 'data' => $breakdownStatus];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BreakdownStatus  $breakdownStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(BreakdownStatus $breakdownStatus)
    {
        $breakdownStatus->delete();
        return ['message' => 'Data has been deleted'];
    }
}
