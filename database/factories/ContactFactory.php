<?php

namespace Database\Factories;

use App\Interfaces\ContactFactoriesInterface;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;


class ContactFactory implements ContactFactoriesInterface
{

    private $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @throws \Exception
     */
    public function create($name, $greeting): void
    {
        switch ($this->type) {
            case 'database':
                $this->saveToBase($name, $greeting);
                break;
            case 'email':
                $this->saveToMail($name, $greeting);
                break;
            default:
                throw new \Exception('Не верный тип объекта');
        }
    }

    public function saveToBase($name, $greeting): void
    {
        $contact = new Contact();
        $contact->name = $name;
        $contact->greeting = $greeting;
        $contact->save();
    }

    public function saveToMail($name, $greeting): void
    {
        Mail::to('recipient@example.com')->send(new ContactMail($name, $greeting));
    }
}
