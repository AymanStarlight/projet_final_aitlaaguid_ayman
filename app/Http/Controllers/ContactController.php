<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = ContactInfo::all()->first();
        return view('backend.contact.contact', compact('contact'));
    }

    public function update(Request $request)
    {

        $contact = ContactInfo::all()->first();

        $data = [
            "address_1" => $request->address_1,
            "address_2" => $request->address_2,
            "email" => $request->email,
            "phone" => $request->phone,
            "map" => $request->map,
        ];

        $contact->update($data);

        return back()->with('success', 'Contact Updated Successfuly');
    }
}