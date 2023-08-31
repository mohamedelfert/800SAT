<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $projects = Project::latest()->paginate(10);
        $articles = Article::latest()->paginate(10);
        $faqs = Faq::latest()->paginate(10);
        return view('front.welcome', compact('projects','articles','faqs'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function projects()
    {
        $projects = Project::latest()->paginate(10);
        return view('front.projects', compact('projects'));
    }

    public function faqs()
    {
        $faqs = Faq::latest()->paginate(10);
        return view('front.faqs', compact('faqs'));
    }

    public function articles()
    {
        $articles = Article::latest()->paginate(10);
        return view('front.articles', compact('articles'));
    }

    public function article($id)
    {
        $article = Article::findOrFail($id);
        return view('front.article', compact('article'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function addContact(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ];

        $validate = $this->validate($request, $rules);

        try {

            Contact::create($request->all());
            toastr()->success(trans('main.data_added_successfully'));
            return redirect()->route('contact');

        } catch (Exception $e) {
            return redirect()->back()->withErrors(['errors' => $e->getMessage()]);
        }
    }
}
