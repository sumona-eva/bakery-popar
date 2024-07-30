<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\PageRequest;
use App\Http\Resources\V1\PageResource;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::query()->where('status',1)->paginate();
        return PageResource::collection($pages);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PageRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = str::slug($data['title']);

        $page = Page::create($data);
       return PageResource::make($page);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $page = Page::find($id);
        return PageResource::make($page);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $page = Page::find($id);
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'slug' => 'nullable'
        ]);
        $data['slug'] = str::slug($data['title']);
        $page->update($data);

        return PageResource::make($page);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Page::findOrFail($id);
        if($page)
        {
            $page->delete();
            return Response::HTTP_OK;
        }
    }
}
