<?php

namespace App\Controllers;

use Inertia\Inertia;

class AboutUs extends BaseController
{
    public function index(): string
    {
        return Inertia::render('AboutUs/Index', [
            'title' => 'About Us',
        ]);
    }
}
