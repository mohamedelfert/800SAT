<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $title = trans('main.faqs');
        $faqs = Faq::where(function ($q) use ($request) {
            return $q->when($request->search, function ($query) use ($request) {
                return $query->where('question', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('answer', 'LIKE', '%' . $request->search . '%');
            });
        })->latest()->paginate(10);
        return view('dashboard.faqs.index', compact('faqs', 'title'));
    }

    public function create()
    {
        $title = trans('main.faqs');
        return view('dashboard.faqs.create', compact('title'));
    }

    public function store(StoreFaqRequest $request)
    {
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->user_id = auth()->user()->id;
        $faq->save();

        toastr()->success(trans('main.data_added_successfully'));
        return redirect()->route('dashboard.faqs.index');
    }

    public function show($id)
    {
        $title = trans('main.faqs');
        $faq = Faq::findOrFail($id);
        return view('dashboard.faqs.show', compact('faq', 'title'));
    }

    public function edit($id)
    {
        $title = trans('main.faqs');
        $faq = Faq::findOrFail($id);
        return view('dashboard.faqs.edit', compact('faq', 'title'));
    }

    public function update(StoreFaqRequest $request, $id)
    {
        $faq = Faq::findOrFail($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->user_id = auth()->user()->id;
        $faq->save();

        toastr()->warning(trans('main.data_updated_successfully'));
        return redirect()->route('dashboard.faqs.index');
    }

    public function destroy(Request $request)
    {
        Faq::findOrFail($request->id)->delete();

        toastr()->error(trans('main.data_deleted_successfully'));
        return back();
    }
}
