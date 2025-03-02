<?php

namespace App\Controllers;

use Inertia\Inertia;

class Home extends BaseController
{
    public function index(): string
    {
        return Inertia::render('Home/Index');
    }
}
