<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function index()
    {
        return view('thanks');
    }
}
