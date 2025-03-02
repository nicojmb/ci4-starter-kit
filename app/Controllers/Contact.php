<?php

namespace App\Controllers;

use Inertia\Inertia;

class Contact extends BaseController
{
    public function index(): string
    {
        Inertia::share('user', [
            'name' => 'John Doe',
        ]);

        return Inertia::render('Contact/Index', [
            'title' => 'Contact',
            'description' => 'This is the contact page',
        ]);
    }
}
