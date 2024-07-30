<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\OrderAreaRequest;
use App\Http\Resources\V1\OrderAreaResource;
use App\Models\OrderArea;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = OrderArea::query()->get();

        return OrderAreaResource::collection($areas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderAreaRequest $request)
    {
        $data = $request->validated();
        $orderArea = OrderArea::create($data);

        OrderAreaResource::make($orderArea);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orderArea = OrderArea::find($id);
        return OrderAreaResource::make ($orderArea);

    }

    /**
     * Update the specified resource in storage.
     */

    public function update(OrderAreaRequest $request, string $id)
    {
        $orderArea = OrderArea::find($id);
        $data = $request->validated();
        $orderArea->update($data);
        return OrderAreaResource::make($orderArea);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $area = OrderArea::find($id);
        if ($area) {
            $area->delete();
            return Response::HTTP_OK;
        }
    }
}
