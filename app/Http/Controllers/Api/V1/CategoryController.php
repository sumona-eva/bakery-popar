<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
       $categories = Category::query()
           ->whereLike(['name'], $request->input('search'))
           ->sortBy()
           -pagination();
       return categoryResource::collection($categories);
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $path ='/storage/'.$request->file('image')->store('uploads', 'public');
             $data['image'] = $path;
        }
        $category = Category::create($data);
        return categoryResource::make($category);
    }

    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return categoryResource::make($category);
    }

    public function update(CategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->validated();
        if ($request->hasFile('image')) {
            if ($category->image) {
                storage::disk('public')->delete(str_replace('/storage/','',$category->image));
            }
            $path ='/storage/'.$request->file('image')->store('uploads', 'public');
            $data['image'] = $path;
        }

       $category = $category->update($data);
        return categoryResource::make($category);
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        if ($category) {
            $image = $category->image;
                if ($image){
                    $imagePath = str_replace('/storage','public',$image);
                    Storage::delete($imagePath);
                }
                $category->delete();
                return Response::HTTP_OK;
        }
    }
}
