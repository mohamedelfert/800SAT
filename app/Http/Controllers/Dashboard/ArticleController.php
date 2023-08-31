<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $title = trans('main.articles');
        $articles = Article::where(function ($q) use ($request) {
            return $q->when($request->search, function ($query) use ($request) {
                return $query->where('title', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('content', 'LIKE', '%' . $request->search . '%');
            });
        })->latest()->paginate(10);
        return view('dashboard.articles.index', compact('articles', 'title'));
    }

    public function create()
    {
        $title = trans('main.articles');
        return view('dashboard.articles.create', compact('title'));
    }

    public function store(StoreArticleRequest $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->user_id = auth()->user()->id;
        $article->save();

        if ($request->image){
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/articles/' . $request->image->hashName()));

            $article->image = $request->image->hashName();
            $article->save();
        }

        toastr()->success(trans('main.data_added_successfully'));
        return redirect()->route('dashboard.articles.index');
    }

    public function show($id)
    {
        $title = trans('main.articles');
        $article = Article::findOrFail($id);
        return view('dashboard.articles.show', compact('article', 'title'));
    }

    public function edit($id)
    {
        $title = trans('main.articles');
        $article = Article::findOrFail($id);
        return view('dashboard.articles.edit', compact('article','title'));
    }

    public function update(StoreArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->user_id = auth()->user()->id;
        $article->save();

        if ($request->image){
            if ($article->image) {
                Storage::disk('public_uploads')->delete('/articles/' . $article->image);
            }

            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/articles/' . $request->image->hashName()));

            $article->image = $request->image->hashName();
            $article->save();
        }

        toastr()->warning(trans('main.data_updated_successfully'));
        return redirect()->route('dashboard.articles.index');
    }

    public function destroy(Request $request)
    {
        $article = Article::findOrFail($request->id);
        if ($article->image){
            Storage::disk('public_uploads')->delete('/articles/' . $article->image);
        }
        $article->delete();

        toastr()->error(trans('main.data_deleted_successfully'));
        return back();
    }
}
