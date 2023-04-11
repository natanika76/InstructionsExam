<?php

namespace App\Http\Controllers;
use App\Models\Instruct;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts');
    }
}
