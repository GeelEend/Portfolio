<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdmincontactController extends Controller
{
    public function index() {
        $contacts = contact::all();

        return view('admin.contact.index', [
            'contacts' => $contacts,
        ]);
    }

    public function create() {
        return view('contact');
    }

    public function store(Request $request) {
        $contact = new contact();
        $contact->email = $request->input('email');
        $contact->firstname = $request->input('firstname');
        $contact->lastname = $request->input('lastname');
        $contact->question = $request->input('question');
        $contact->save();

        return redirect()->route('contact')->with('status', 'Uw bericht is verstuurd');
    }

    public function destroy(Contact $contact) {
        $contact->delete();
        return redirect()->route('admin.contact.list')->with('status', 'U contact is verwijderd');
    }
}
