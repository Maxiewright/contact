<?php

namespace Maxie\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Maxie\Contact\Mail\ContactMailable;
use Maxie\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {

        Mail::to(config('contact.send_email_to'))
            ->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());

        return redirect()->back()->with('success', 'Saved');
    }
}
