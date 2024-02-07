<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Database\Factories\ContactFactory;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        $name = $request->input('name');
        $greeting = $request->input('greeting');

        $factory = new ContactFactory('database');
        $factory->create($name, $greeting);

        $factory = new ContactFactory('email');
        $factory->create($name, $greeting);
    }
}
