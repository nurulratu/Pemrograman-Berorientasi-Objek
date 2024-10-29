<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts',
            'phone' => 'nullable|string|max:15',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Contact created successfully!');
    }
}
