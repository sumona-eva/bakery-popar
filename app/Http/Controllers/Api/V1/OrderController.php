<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\OrderRequest;
use App\Http\Resources\V1\OrderResource;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::query()
                ->with(['orderDetails', 'orderDetails.product', 'user'])
                ->paginate();
        return OrderResource::collection($orders);
    }
    public function customerOrder(Request $request)
    {
        $user = User::find($request->user_id);
        $orders = $user->orders;
        return OrderResource::collection($orders);
    }
    public function showCustomerOrder($id)
    {
        $order = Order::where('id', $id)->with('customer', 'orderDetails','address')->first();
        return OrderResource::make($order);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        $data = $request->validated();
        return $data;

        $order = Order::create($data);

        $orderDetails = [];
        foreach ($data['order_items'] as $detail)
        {
          $orderDetails[] = [
            'order_id' => $order->id,
            'product_id' => $detail['product_id'],
            'quantity' => $detail['quantity']
          ];
        }
        OrderDetail::insert($orderDetails);
        return OrderResource::make($order);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        if ($order){
            $order->orderDetails()->delete();
            $order->delete();
            return Response::HTTP_OK;
        }
    }
}
