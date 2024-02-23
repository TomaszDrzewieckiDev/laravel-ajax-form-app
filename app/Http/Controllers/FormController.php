<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    /**
     * Show the form to create a new contact form.
     */
    public function index(): View
    {
        return view('form.index');

    }

    /**
     * Store a new contact form data.
     */
    public function store()
    {
        die;print_r("fd");
        $msg = "This is a simple message.";
      return response()->json(array('msg'=> $msg), 200);
    }
}
