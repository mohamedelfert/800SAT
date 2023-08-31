<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Models\Article;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $title = trans('main.projects');
        $projects = Project::where(function ($q) use ($request) {
            return $q->when($request->search, function ($query) use ($request) {
                return $query->where('title', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('subtitle', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('content', 'LIKE', '%' . $request->search . '%');
            });
        })->latest()->paginate(10);
        return view('dashboard.projects.index', compact('projects', 'title'));
    }

    public function create()
    {
        $title = trans('main.projects');
        return view('dashboard.projects.create', compact('title'));
    }

    public function store(StoreProjectRequest $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->subtitle = $request->subtitle;
        $project->content = $request->content;
        $project->save();

        if ($request->image){
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/projects/' . $request->image->hashName()));

            $project->image = $request->image->hashName();
            $project->save();
        }

        toastr()->success(trans('main.data_added_successfully'));
        return redirect()->route('dashboard.projects.index');
    }

    public function show($id)
    {
        $title = trans('main.projects');
        $project = Project::findOrFail($id);
        return view('dashboard.projects.show', compact('project', 'title'));
    }

    public function edit($id)
    {
        $title = trans('main.projects');
        $project = Project::findOrFail($id);
        return view('dashboard.projects.edit', compact('project','title'));
    }

    public function update(StoreProjectRequest $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->title = $request->title;
        $project->subtitle = $request->subtitle;
        $project->content = $request->content;
        $project->save();

        if ($request->image){
            if ($project->image) {
                Storage::disk('public_uploads')->delete('/projects/' . $project->image);
            }

            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/projects/' . $request->image->hashName()));

            $project->image = $request->image->hashName();
            $project->save();
        }

        toastr()->warning(trans('main.data_updated_successfully'));
        return redirect()->route('dashboard.projects.index');
    }

    public function destroy(Request $request)
    {
        $project = Project::findOrFail($request->id);
        if ($project->image){
            Storage::disk('public_uploads')->delete('/projects/' . $project->image);
        }
        $project->delete();

        toastr()->error(trans('main.data_deleted_successfully'));
        return back();
    }
}
