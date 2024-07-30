<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\ProductRequest;
use App\Http\Resources\V1\ProductResource;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{

    public function index()
    {
        //
    }

    public function store(ProductRequest $request) :ProductResource
    {
       $data = $request -> validated();

       $data['user_id'] = Auth::id();
       $data['slug'] = Str::slug($data['title']);

       $product = Product::create($data);

       //save product images
        if ($request->hasFile('images')){
            $imageData = [];
            $images = $request->file('images');

            foreach ($images as $image){
                $imageData[] = [
                    'url' => '/storage/'.$image->store('uploads','public'),
                    'product_id' => $product->id,
                ];
            }
            if (!empty($imageData)){
                ProductImage::insert($imageData);
            }
        }

        return ProductResource::make($product);
    }

    public function show(string $id) :ProductResource
    {
        $product = Product::findOrFail($id);
        return ProductResource::make($product);
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function deleteImage(string $id)
    {
        $image = ProductImage::findOrFail($id);
        if ($image)
        {
            $imagePath = str_replace('/storage','public',$image->url);
            Storage::delete($imagePath);
            $image->delete();
        }
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        if ($product){
            $images = $product->images;
            foreach($images as $image){
                $imagePath = str_replace('/storage','public',$image->url);
                Storage::delete($imagePath);
                $image->delete();
            }
            $product->delete();
            return Response::HTTP_OK;
        }
    }
}
