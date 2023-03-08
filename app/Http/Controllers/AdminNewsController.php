<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;


class AdminNewsController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publication_date' => 'required|date',
            'image' => 'file|nullable',
            'text' => 'required',
        ]);

        
        $validatedData['user_id'] = auth()->id();

        if ($validatedData ['image'] && $validatedData['image']->isValid()) {
            $file = $validatedData['image'];
            $path = $file->store('images');
            $validatedData['image'] = $path;
        }
        News::create($validatedData);

        return Redirect::route('admin.mynews');

    }
    public function destroy(News $news)
    {
        $news->delete();
        Storage::delete($news->image ?? '');
        return Redirect::route('admin.mynews');
    }

    public function destroyImage(News $news)
    {
        Storage::delete($news->image ?? '');
        $news->image = null;
        $news->save();

        return Redirect::back();
    }
    public function edit_news(News $news)
    {
        return view('admin.news_edit', ['news' => $news]);
    }

    public function update(News $news, Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publication_date' => 'required|date',
            'image' => 'image',
            'text' => 'required',
        ]);

        if ($validatedData ['image'] && $validatedData['image']->isValid()) {
            Storage::delete($news->image ?? '');
            $file = $validatedData['image'];
           $path = $file->store('images');
           $validatedData['image'] = $path;
       }
        $news->fill($validatedData);
        $news->save();

        return Redirect::route('admin.mynews');
    }

}
