<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.contact');
    }

    public function store(ContactFormRequest $request)
    {
        $message = Message::create($request->only('name', 'email', 'message'));

        Mail::to(env('ADMIN_SUPPORT_EMAIL'))
            ->send(new ContactMessageCreated($message));

//        flashy('Merci pour votre message, nous vous repondrons dans les plus bref delais');
//        return redirect(route('home'));
        flash('Votre message a bien été envoyer');

        return redirect(route('home'));
    }
}
