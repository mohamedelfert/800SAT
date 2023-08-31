<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $contacts = Contact::latest()->paginate(10);
        return view('dashboard.welcome',compact('contacts'));
    }
}
