<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    // public function about()
    // {
    //     return view('pages.about');
    // }

    public function contact()
    {
        return view('contact');
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Pesan Anda telah dikirim!');
    }
}
